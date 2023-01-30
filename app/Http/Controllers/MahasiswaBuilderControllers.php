<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class MahasiswaBuilderControllers extends Controller
{
    public function add()
    {
    
    DB::table('mahasiswa')->insert([
        'nama'=>'Jhon Doe',
        'nim'=>'026 ',
        'alamat'=>'Jl.Avenue No.31',
        'program_studi'=>'Kedokteran',
        'semester'=>'4',
    ]);
    return 'mahasiswa berhasil disimpan';
    }
    
    public function edit(){
        DB::table('mahasiswa')->where('id',4)->update([
            'nama'=> 'Billy Batson'
        ]);

        return 'mahasiswa berhasil diedit';
    }
    
    public function delete(){
        DB::table('mahasiswa')->where('id',4)->delete([

        ]);

        return 'mahasiswa berhasil dihapus';
    }
    
}
