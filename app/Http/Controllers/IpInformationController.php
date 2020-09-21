<?php

namespace App\Http\Controllers;

//use Ip2location\IP2LocationLaravel\IP2LocationLaravel as IP2LocationLaravelService;
use IP2LocationLaravel;

class IpInformationController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Lookup.
     *
     * @return void
     */
    public function lookup()
    {
        $records = IP2LocationLaravel::get('59.120.148.120', 'ws');
        echo '國家代碼：' . $records['country_code'] . PHP_EOL;
        echo '花費點數：' . $records['credits_consumed'] . PHP_EOL;
    }
}
