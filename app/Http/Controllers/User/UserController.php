<?php

namespace CCC\Http\Controllers\User;

use CCC\Contracts\Services\User\UserServiceInterface;
use CCC\Http\Controllers\Controller;

class UserController extends Controller
{

  private $userInterface;

  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct(UserServiceInterface $userInterface)
  {

    $this->middleware('auth');
    $this->userInterface = $userInterface;
  }

  /**
   * Show the application dashboard.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $userList = $this->userInterface->getUserList();

    return view('user.user', [
      'userList' => $userList,
    ]);
  }
}
