<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contributor extends Model
{
    protected $fillable = ['name', 'website_url', 'picture_url'];

    public function projects()
    {
        return $this->hasMany('App\Project');
    }

    public function getFirstname()
    {
        return explode(" ", $this->name)[0];
    }

    public function getLastname()
    {
        return explode(" ", $this->name)[1];
    }
}
