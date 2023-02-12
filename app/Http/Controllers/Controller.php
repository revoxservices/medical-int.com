<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\DB;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    function generate_number($table)
    {
        do {
            $exist = DB::table($table)->first();
        } while ($exist);

        return $exist + 1;
    }


    function generate_slack($table)
    {
        do {
            $slack = str_random(25);
            $exist = DB::table($table)->where("slack", $slack)->first();
        } while ($exist);
        return $slack;
    }


}
