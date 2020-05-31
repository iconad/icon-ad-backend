<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Project extends Model
{

    public function categories () {
        return $this->belongsToMany(Category::class);
    }

    public static function nextProject ($id) {
        return static::where('id', '>', $id)->where('status', 'PUBLISHED')->orderBy('order','asc')->first();
    }

    public static function PrevProject ($id) {
        return static::where('id', '<', $id)->where('status', 'PUBLISHED')->orderBy('order','asc')->first();
    }

    public function client () {
        return $this->belongsTo(Client::class);
    }

    public function campaigns () {
        return $this->hasMany(Campaign::class);
    }

}
