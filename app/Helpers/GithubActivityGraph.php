<?php

namespace App\Helpers;

use Cache\Adapter\Filesystem\FilesystemCachePool;
use DateTime;
use Github\Client;
use League\Flysystem\Adapter\Local;
use League\Flysystem\Filesystem;

class GithubActivityGraph
{
    /**
     * @var Client
     */
    private $client;

    /**
     * @var FilesystemCachePool
     */
    private $pool;

    /**
     * @var string
     */
    private $user;

    /**
     * @var string
     */
    private $repo;

    /**
     * @var int[]
     */
    public $data;

    /**
     * @var string[]
     */
    public $labels;

    public function __construct(string $user, string $repo)
    {
        $this->client = new Client();
        $this->user = $user;
        $this->repo = $repo;

        $filesystemAdapter = new Local('../tmp/githubapi');
        $filesystem = new Filesystem($filesystemAdapter);
        $this->pool = new FilesystemCachePool($filesystem);
    }

    /**
     * Returns an array of the number of commits for each week of the year for a specific repo.
     * @throws \Exception
     */
    public function create()
    {
        // Request
        $this->client->addCache($this->pool);
        $weeks = [];
        $try = 0;
        while ($try < 3 && $weeks == [])
        {
            try {
                $weeks = $this->client->api('repo')->activity($this->user, $this->repo);
            } catch (\Exception $e) {
                return;
            }
            $try++;
        }
        $this->client->removeCache();

        // Generate data
        $this->data = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];
        foreach ($weeks as $week) {
            $month = DateTime::createFromFormat('U', $week['week'])->format('n') - 1;
            $this->data[$month] += $week['total'];
        }
        $this->data = array_values($this->data);

        // Generate labels
        $this->labels = [];
        $date = new DateTime();
        $month = $date->format('n');
        $year = $date->format('Y');
        for ($i = 1; $i < 13; $i++) {
            $monthName = DateTime::createFromFormat('n', $i)->format('F');
            if ($i < $month) {
                $this->labels[] = $monthName . ' ' . $year;
            } else {
                $this->labels[] = $monthName . ' ' . ($year - 1);
            }
        }
    }
}
