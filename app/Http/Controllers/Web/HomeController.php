<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Web\CommonController;

class HomeController extends CommonController
{
    //
    public function index()  {
        // return view('app');
        return redirect('/square');
    }

    // public function login()  {
    //     return view('welcome');
    // }
}
