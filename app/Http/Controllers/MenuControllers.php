<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MenuControllers extends Controller
{
 public function create(Request $request) 
 {

  request()->validate([
    'kategori'=>'required',
      'nama'=>'required',
      'deskripsi'=>'required', 
      'harga'=>'required', 
      'gambar'=>'required'
  ]);
  
Menu::create([

       'kategori'=>$request->kategori,
         'nama'=>$request->nama,
         'deskripsi' =>$request->deskripsi,
         'harga'=>$request->harga,
        'gambar'=>$request->gambar
]);


      // $validator = Validator::make($request->all(), [
      //   'kategori'=>'required',
      //   'nama'=>'required',
      //   'deskripsi'=>'required', 
      //   'harga'=>'required', 
      //   'gambar'=>'required'
      //   ]);
          
      //   if ($validator->fails()) {
      //     return redirect('/')
      //             ->withErrors($validator)
      //             ->withInput();
      // }
      
      // $data = [
      //    'kategori'=>$request->kategori,
      //    'nama'=>$request->nama,
      //    'deskripsi' =>$request->deskripsi,
      //    'harga'=>$request->harga,
      //   'gambar'=>$request->gambar
      // ];
      
      // Menu::create($data);
      
      // $infodata = [
      //   'kategori' =>$request->kategori,
      //   'nama'=>$request->nama,
      //   'deskripsi' =>$request->deskripsi,
      //   'harga'=>$request->harga,
      //  'gambar'=>$request->gambar
      // ];
      
      return response()->json($data);
//     // return "Menu";

}

}
