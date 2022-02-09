<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class TeamApplication extends Model
{

    public $fillable = ['name', 'email', 'phone', 'role', 'nationality', 'resident_country', 'resume', 'about'];


}
