<?php

namespace App\Services\User;

use LaravelEasyRepository\BaseService;

interface UserService extends BaseService{

 /**
     * get data user by email
   * @param $email
   * @return mixed
*/
public function getByUserEmail($email);
}
