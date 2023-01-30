<?php


namespace App\Http\Controllers;

use App\Models\TabelMasukan;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\TabelMasukanControllers;
use App\Http\Middleware\TabelMasukanMiddleware;

class TabelMasukanControllers extends Controller
{
  
public  function index () {
    $masukan = Masukan::all();
    return view('masukan.add',compact(['masukan']));
}

public function add () {
  return view ('TabelMasukan');
}

public function store (Request $request ) {
 

  $validator = Validator::make(Request::all(), [
  'email'=>'required|max:255',
  'masukan'=>'required', 
  ]);
    
  if ($validator->fails()) {
    return redirect('/tabel/masukan')
            ->withErrors($validator)
            ->withInput();
}
  
  // TabelMasukan::create($request->all());
  table('tabel_masukans')->insert([
    'email'=>$request->email,
    'masukan'=>$request->masukan
  ]);

  return redirect ('/tabel')->with('status', 'Masukan diterima!');

}
}
