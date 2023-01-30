<?php


namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\RegisterControllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Http\Middleware\RegisterLoginMiddleware;
use App\Repository\User\UserRepository;
use Illuminate\Support\Facades\URL;


class RegisterControllers extends Controller
{
  protected $userRepository;

public function __construct(UserRepository $userRepository)
{
  $this->UserRepository = $userRepository;

}

   /**
     * get data user by id
   * @param $id
   * @return mixed
*/

/**
     * get data user by email
   * @param $email
   * @return mixed
*/

public function finduserid ($id) 
{
  $result = $this->UserRepository->getByUserId($id);
  return response()->json([
    "success" => true,
    "code" => 200,
    "data" => $result
  ]);
}

public function findbyemail ($email) 
{
  $result = $this->UserRepository->getByUserEmail($email);
  return response()->json([
    "success" => true,
    "code" => 200,
    "data" => $result
  ]);
}

public function findbyname($name) 
{
  $result = $this->UserRepository>getByUserName($username);
  return response()->json([
    "success" => true,
    "code" => 200,
    "data" => $result
  ]);
}

 function index () {
    $data_user = User::all();  
    return view('tampildata/index',['data_user'=>$data_user, "title" => "Tampil Data"]);

}


// <!----LOGIN----!>
function login () {
  return view ('login', [
  "title" => "Login"
  ]);
}

function logged (Request $request)
{

  // Session::Flash('email',$request->email);
$credentials = $request->validate([
'email'=>'required|email',
'password'=>'required', 
], [
  'email.required' => 'Email harus diisi',
  'password.required' => 'Password harus diisi',
]);
  

if(Auth::attempt($credentials) ){
  return redirect('/login/tabel')->with('Berhasil Login');
} else {
return redirect('/login')->withErrors('Email dan Password Invalid');
}
}


// <!----REGISTER----!>

function register () {
  return view ('register', [
  "title" => "Register"
]);
}

 function create (Request $request ) {
 

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

// $infodata = [
//   'username'=>$request->username,
// 'email'=>$request->email,
// 'password' => $request->password
// ];

return redirect ('login');
   }



// <!----EDIT---!>

function edit ($id) {
  $data = User::find($id);
 
  return view ('EditData', compact(['data']));
}


function update ($id, Request $request ) {

  $data = User::find($id);
  $data->update($request->except(['_token','submit']));

return redirect ('login/tabel');


}

// <!----DELETE----!>
function delete ($id ) {

$data = User::find($id);
$data->delete();

return redirect ('login/tabel');
}
// <!----LOGOUT----!>



}