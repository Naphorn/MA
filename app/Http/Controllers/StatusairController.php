<?php
 
namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Statusair;

class StatusairController extends Controller
{
    function __construct()
    {
        
    }

    public function getStatusair()
    {
        header('content-type:text/html; charset=utf-8');
        $statusairs = Statusair::all();
        $statusairs = Statusair::take(1)->latest()->get();
        foreach ($statusairs as $statusair) 
        {
            echo $statusair->IP;
            echo $statusair->TempCool;
            echo $statusair->Humidity;
            echo $statusair->TempRoom;
            echo $statusair->VoltCool;
            echo $statusair->CurrentCool;
            echo $statusair->CurrentHot;
            echo $statusair->WindSpeed;
            echo $statusair->Performance;
            echo $statusair->PowerStatus;
        }
        
        return view('home');

        // return view('layouts.showtable',[
        //     $statusairs = Statusair::take(1)->latest()->get()
        // ]);

        // $statusairs = Statusair::take(1)->latest()->get();

        // $statusairs ? 'Model statusair Connect Yes!' : 'Error! Model statusair Connect False!!!';
        // $statusairs = Statusair::where('id','1')->get();
        // $statusairs = Statusair::where('id','1')->first();
    }
}

