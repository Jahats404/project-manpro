<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Tembakau;

class TembakauController extends Controller
{

    

    public function daftar(){
        $tembakau = Tembakau::all();
        return view('daftar', compact('tembakau'));
    }
}
