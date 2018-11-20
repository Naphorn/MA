<?php
 
namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Statusair;
use App\Users;

class StatusairController extends Controller
{
    function __construct()
    {
        
    }

    public function getStatusair()
    {
        $Status = Users::all()->toArray();
        return view('layouts.level3',compact('Status'));
    }

        // return view('layouts.showtable',[
        //     $statusairs = Statusair::take(1)->latest()->get()
        // ]);

        // $statusairs = Statusair::take(1)->latest()->get();

        // $statusairs ? 'Model statusair Connect Yes!' : 'Error! Model statusair Connect False!!!';
        // $statusairs = Statusair::where('id','1')->get();
        // $statusairs = Statusair::where('id','1')->first();
    }
}

