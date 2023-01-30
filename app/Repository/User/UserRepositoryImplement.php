<?php

namespace App\Repository\User;

use App\Models\User;
use App\Http\Controllers\RegisterControllers;

class UserRepositoryImplement implements UserRepository
{
private $model;

public function __construct(User $model)
{
    $this->model = $model;
}

public function getAllUser()
{
    $data_user = User::all();
    return ResponseApi::requestSuccessData('Success', $data);
}

public static function deleteUser($id)
{
    $user = User::find($id);
    if(!$user){
        return ResponseApi::requestNotFound("Not Found!",["msg" => "user not found", "params" => "id"]);
    }

    $user->delete();
    return ResponseApi::requestSuccess('Success deleted user!');
}

public function getByUserId($id)
{
    return $this->model->where("id", $id)->get();
}

 /**
     * get data user by email
   * @param $email
   * @return mixed
*/

public function getByUserEmail($email)
{
    return $this->model->where("email", $email)->get();
}

/**
     * get data user by email
   * @param $name
   * @return mixed
*/

public function getByUserName($username)
{
    return $this->model->where("username", $username)->get();
}



}