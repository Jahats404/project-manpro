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
        return view('stok', compact(['tembakau']));        
    }

    public function create(){
        return view('inputMbako');
    }

    public function store(Request $request){        
        Tembakau::create($request->except(['_token','submit']));
        return redirect('/tembakau');
    }

    public function edit($id){
        $tembakau = Tembakau::find($id);
        return view('edit-tembakau',compact(['tembakau']));
    }

    public function update($id, Request $request){
        $tembakau = Tembakau::find($id);
        $tembakau->update($request->except(['_token','submit']));
        return redirect('/tembakau');
    }

    public function destroy($id){
        $tembakau = Tembakau::find($id);
        $tembakau -> delete();
        return redirect('/tembakau');
    }

    public function search(Request $request){
        if($request->has('search')){
            $tembakau = Tembakau::where('nama_tembakau','LIKE','%'.$request->search.'%')->get();
        }
        else{
            $tembakau = Tembakau::all();
        }

        return view('tembakau', ['tembakau' => $tembakau]);
    }
}
