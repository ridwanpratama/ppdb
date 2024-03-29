<?php

namespace App\Http\Controllers;

use PDF;
use App\Ppdb;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PrintController extends Controller
{
    public function print()
    {
        try{
            $data = Ppdb::where('user_id', '=', Auth::user()->id)->get();
            $pdf = PDF::loadview('ppdb.print', compact('data'))->setPaper('A4','portrait');
            return $pdf->stream();
         } catch (\Exception $e) {
            dd("Error: data tidak dapat diperoleh. {$e->getMessage()}");
            \Log::error($e);
            return "Something went wrong";
         }

    }
}
