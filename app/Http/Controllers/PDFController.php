<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use PDF;
class PDFController extends Controller
{
    public function generatePDF()
    {
        $data = [
            'title' => 'Welcome to ItSolutionStuff.com',
            'date' => date('m/d/Y')
        ];
        $machine_type = DB::table('machineries')->get();
        // return view('registration',['machine_type'=> $machine_type]);

        $pdf = PDF::loadView('myPDF', $data);
        return $pdf->stream();
        // return $pdf->download(Auth::user()->name .'-equipment-registration.pdf');
    }
}
