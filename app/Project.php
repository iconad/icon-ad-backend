<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Project extends Model
{

    public function categories () {
        return $this->belongsToMany(Category::class);
    }

    public static function nextProject ($id) {
        return static::where('order', '>', $id)->where('status', 'PUBLISHED')->orderBy('order','asc')->first();
    }

    public static function PrevProject ($id) {
        return static::where('order', '<', $id)->where('status', 'PUBLISHED')->orderBy('order','desc')->first();
    }

    public function client () {
        return $this->belongsTo(Client::class);
    }

    public function campaigns () {
        return $this->hasMany(Campaign::class);
    }

    public function assets () {
        return $this->hasMany(Asset::class);
    }

}
