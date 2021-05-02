<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Devninja\University\University;
use Dinushchathurya\Council\Council;

class HomeController extends Controller
{
    public function index()
    {
        $provinces = Council::getProvinces();
        return view('welcome')->with([
            'provinces' => $provinces
        ]);
    }

    public function getDistricts($name)
    {
        $district = Council::getDistricts($name);
        return response()->json($district);
    }

    public function getAuthority($name)
    {
        $authority = Council::getAuthorities($name);
        return response()->json($authority);
    }

    public function documentation()
    {
        return view('pages.documentation');
    }

}
