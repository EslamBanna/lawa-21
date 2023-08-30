<?php

namespace App\Http\Controllers;

use App\Models\Officer;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;


use App\Exports\UsersExport;
// use Maatwebsite\Excel\Facades\Excel;
use Excel;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function functions()
    {
        return view('Functions');
    }

    public function test(){
        $officers = Officer::get();
        return view('officers-pdf')->with(['officers' => $officers]);
    }
}
