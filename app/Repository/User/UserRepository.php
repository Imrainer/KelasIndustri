<?php

namespace App\Repository\User;

interface UserRepository
{
   /**
     * get all user 
   * @param 
   * @return mixed
*/
public function getAllUser();

    /**
     * get data user by id
   * @param $id
   * @return mixed
*/
    public function getByUserId($id);

 /**
     * get data user by email
   * @param $email
   * @return mixed
*/
public function getByUserEmail($email);

 /**
     * get data user by name
   * @param $email
   * @return mixed
*/
public function getByUserName($username);

}