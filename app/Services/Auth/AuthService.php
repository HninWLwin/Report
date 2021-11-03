<?php

namespace CCC\Services\Auth;

use CCC\Contracts\Dao\Auth\AuthDaoInterface;
use CCC\Contracts\Services\Auth\AuthServiceInterface;

class AuthService implements AuthServiceInterface
{
  private $authDao;

  /**
   * Class Constructor
   * @param AuthDaoInterface
   * @return
   */
  public function __construct(AuthDaoInterface $authDao)
  {
    $this->authDao = $authDao;
  }
}
