<?php

namespace App\Services\User;

use LaravelEasyRepository\Service;
use App\Repositories\User\UserRepository;
use App\Models\User;

class UserServiceImplement extends Service implements UserService{

     /**
     * don't change $this->mainRepository variable name
     * because used in extends service class
     */
     protected $mainRepository;

    public function __construct(UserRepository $mainRepository)
    {
      $this->mainRepository = $mainRepository;
    }


 /**
     * get data user by email
   * @param $email
   * @return mixed
*/


   public function getByEmail($email)
   {

    try {
        return $this->mainRepository->getByEmail($email);
    } catch (Exception $exception) {
        Log::debug[$exception->getMessage()];
        return[];
    }
   }
}
