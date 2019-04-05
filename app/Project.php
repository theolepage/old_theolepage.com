<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Michelf\Markdown;

class Project extends Model
{

    protected $fillable = [
        'name', 'title', 'description',
        'status', 'progress', 'large', 'published',
        'color', 'technologies', 'version',
        'category_id', 'creation_date', 'about',
        'website_url',
        'screenshot_url', 'youtube_video_id',
        'downloads_url', 'report_url',
        'github_repo_username', 'github_repo_name'
    ];

    protected $dates = ['creation_date'];

    public function contributors()
    {
        return $this->belongsToMany('App\Contributor');
    }

    public function category()
    {
        return $this->belongsTo('App\Category');
    }



    public function getId()
    {
        return sprintf("%03d", $this->id);
    }

    public function getLetter()
    {
        return strtoupper($this->name[0]);
    }

    public function getTitle()
    {
        if (!empty($this->title))
        {
            return $this->title;
        }
        return $this->name;
    }

    public function getCreationDate()
    {
        $phpdate = strtotime($this->creation_date);
        return date('F Y', $phpdate);
    }

    public function getColor()
    {
        return strtoupper($this->color);
    }

    public function getAbout()
    {
        return Markdown::defaultTransform($this->about);
    }
}
