<?php

namespace App\Http\Controllers;

//use Ip2location\IP2LocationLaravel\IP2LocationLaravel as IP2LocationLaravelService;
use Illuminate\Support\Str;
use IP2LocationLaravel;

class IpInformationController extends Controller
{
    /**
     * Create a new controller instance.
     */
    public function __construct()
    {
    }

    /**
     * Lookup.
     */
    public function lookup()
    {
        $information = IP2LocationLaravel::get('61.227.253.148', 'ws');
        $information['country_name'] = Str::replace(' (Province of China)', '', $information['country_name']);
        return view('visitor', compact('information'));
    }
}
