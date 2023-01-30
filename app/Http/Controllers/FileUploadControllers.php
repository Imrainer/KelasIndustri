<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileUploadControllers extends Controller
{
 public function tampilan () {
    return view ('FileUpload', [
        "title" => "File Upload"
        ]);
 }

public function upload(Request $request){
   $upload = $request->file('file_upload');
   $upload->store('storage');


return response()->json([
        'message'=>'File berhasil terkirim'
]);

}


}
