<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    //
    public function dbTest(){
       $res =  DB::select('select * from users');
       return $res;
    }
}
