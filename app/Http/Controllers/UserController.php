<?php
/**
 * Created by PhpStorm.
 * User: guoyexuan
 * Date: 2020/4/23
 * Time: 下午4:55
 */

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use App\User;

class UserController extends BaseController
{

    public function __construct()
    {
        echo "<pre>";
    }

    public function home()
    {
        echo "<pre>";
    }

    public function show($id)
    {
        $users = User::all();
        print_r(compact('users'));
//        print_r($users);
    }
}
