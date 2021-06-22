<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MemStatus;
use App\User;//この行を上に追加
use Auth;//この行を上に追加
use Validator;//この行を上に追加


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user_memstatus_id = Auth::user()->memstatus_id;
        $status_name = MemStatus::find($user_memstatus_id)->status_name;
        // dd($status_name);
        
        return view('search',[
            'status_name'=>$status_name
            ]);
    }
}
