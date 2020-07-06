<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dashboardController extends Controller
{
    public function dashboard()
    {
        $title = 'Dashboard Page';
        $file = file_get_contents(resource_path('../public/geojson/kota.geojson'));
        $data = json_decode($file);
        return view('dashboard.dashboard', compact('title', 'data'));
    }
}
