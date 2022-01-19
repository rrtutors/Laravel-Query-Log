<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


//import database class
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    //
    function index()

    {

         DB::enableQueryLog(); // to enable query log

        $query = DB::select("SELECT * FROM  users");
         $bb = DB::getQueryLog(); // get query logs from cache
        
       $a= dd($bb);
 

        return $query;
         
    }
}
