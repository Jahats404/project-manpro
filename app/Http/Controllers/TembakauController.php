<?php

namespace App\Http\Controllers;

use App\Models\Tembakau;
use function Ramsey\Uuid\v1;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class TembakauController extends Controller
{

    public function mbako(){
        $tembakau = Tembakau::all();
        return view('tembakau', compact(['tembakau']));        
    }

    public function create(){
        return view('create-tembakau');
    }

    public function store(Request $request){        
        DB::table('tembakau')->insert([
            ['kode' => $request->kode1,
             'rasa' => $request->rasa1
            ],
            ['kode' => $request->kode2,
             'rasa' => $request->rasa2
            ],
        ]);
        // Tembakau::create($request->except(['_token','submit']));
        return redirect('/tembakau');
    }

    public function edit($kode){
        $tembakau = Tembakau::find($kode);
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
            $tembakau = Tembakau::where('rasa','LIKE','%'.$request->search.'%')->get();
        }
        else{
            $tembakau = Tembakau::all();
        }

        return view('tembakau', ['tembakau' => $tembakau]);
    }
}
