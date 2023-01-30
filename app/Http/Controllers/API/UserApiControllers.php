<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Users;
use App\Helpers\UserApi;

class UserApiControllers extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     $data = User::all();

     if($data){
            return UserApi::createApi(200, 'success', $data);
     }else{
        return UserApi::createApi(400, 'failed');

     }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $validator = Validator::make($request->all(), [
            'username'=>'required|max:255',
            'email'=>'required|email',
            'password'=>'required', 
            ], [
              'username.required' => 'Username harus diisi',
              'email.required' => 'email harus diisi',
              'password.required' => 'password harus diisi',
            ]);
              
            if ($validator->fails()) {
              return redirect('/register')
                      ->withErrors($validator)
                      ->withInput();
          }
          
          $data = [
             'username' =>$request->username,
             'email'=>$request->email,
             'password'=>Hash::make($request->password)
          ];
          
          User::create($data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        function edit ($id) {
            $data = User::find($id);
           
            return view ('EditData', compact(['data']));
          }
          
          
          function update ($id, Request $request ) {
          
            $data = User::find($id);
            $data->update($request->except(['_token','submit']));
          
          return redirect ('login/tabel');
    }
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        function delete ($id ) {

            $data = User::find($id);
            $data->delete();
            
            return redirect ('login/tabel');
            }
    }


}
