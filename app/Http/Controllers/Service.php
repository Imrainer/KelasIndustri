<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\RegisterControllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Http\Middleware\RegisterLoginMiddleware;
use App\Repository\User\UserRepository;
use Illuminate\Support\Facades\URL;


class Service extends Controller
{
    protected $userService;

public function __construct(UserService $userService)
{
  $this->UserService = $userService;

}
 /**
     * get data user by email
   * @param $email
   * @return mixed
*/

public function finduseremail ($email) 
{
  $result = $this->UserService->getByUserEmail($email);
  return response()->json([
    "success" => true,
    "code" => 200,
    "data" => $result
  ]);
}
}
