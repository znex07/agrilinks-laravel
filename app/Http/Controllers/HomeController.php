<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

        $titles = DB::table('equipment_registration')->get();
        // dd($titles);
        return view('home',['titles' => $titles]);
    }
    public function equipment_registration(){
        $machine_type = DB::table('machineries')->get();
        return view('registration',['machine_type'=> $machine_type]);
    }
}
