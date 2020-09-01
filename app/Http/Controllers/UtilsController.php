<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Cateogry;
use App\Http\Resources\sitemap\servicesResource;

class UtilsController extends Controller
{
    public function siteMap()
    {
        $services = Cateogry::all();
        return response()->json([
            'services' => servicesResource::collection($services)
        ]);
    }
}
