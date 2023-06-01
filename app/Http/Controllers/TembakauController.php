<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Tembakau;

use function Ramsey\Uuid\v1;

class TembakauController extends Controller
{

    public function mbako(){
        $tembakau = Tembakau::all();
        return view('tembakau', compact('tembakau'));        
    }

    public function create(){
        return view('create-tembakau');
    }

    public function store(Request $request){        
        Tembakau::create($request->except(['_token','submit']));
        return redirect('/tembakau');
    }

    public function edit($id){
        $tembakau = Tembakau::find($id);
        dd($tembakau);
    }
}
