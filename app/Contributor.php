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
}
