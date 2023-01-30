<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class MahasiswaControllers extends Controller
{
   public function add() {
      Mahasiswa::create([
'nama'=>'Zach Lee',
'nim'=>'027 ',
'alamat'=>'Jl.Avenue No.31',
'program_studi'=>'Seni',
'semester'=>'2',

      ]);
return 'Data berhasil Disimpan';
  }

public function edit() {

  Mahasiswa::find(3)->update([
    'nama'=>'Bruce Lee'
  ]);
  return 'Data berhasil Diperbarui';

 
}

public function delete() {
  Mahasiswa::findorfail(2)->delete();
  return 'Data berhasil Dihapus';
}
}
