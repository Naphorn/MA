<?php
 
namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class StatusairController extends Controller
{
    function __construct()
    {
        
    }

    public function getStatusair()
    {
        $statusairs = DB::table('statusair')->get();

        return view('layouts.showtable', ['statusair' => $statusairs]);
        // return $statusairs;
    }
}

