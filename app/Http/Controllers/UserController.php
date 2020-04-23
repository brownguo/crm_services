<?php
/**
 * Created by PhpStorm.
 * User: guoyexuan
 * Date: 2020/4/23
 * Time: 下午4:55
 */

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class UserController extends BaseController
{
    protected $table = 't_crm_account';

    public function home()
    {
        echo "<pre>";
//        print_r(get_included_files());
        var_dump($this->table);
    }

    public function show($id)
    {
        return view('user.profile', ['user' => UserController::findOrFail($id)]);
    }
}
