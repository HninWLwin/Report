<?php

namespace CCC\Dao\User;

use CCC\Contracts\Dao\User\UserDaoInterface;
use CCC\Models\User;

class UserDao implements UserDaoInterface
{
  /**
   * Get Operator List
   * @param Object
   * @return $operatorList
   */
  public function getUserList()
  {
    return User::get();
  }
}
