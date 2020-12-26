<?php
/**
 * Created by PhpStorm.
 * User: zhang liang
 * Date: 2020/11/3
 * Time: 16:22
 */

namespace App\Services;


use App\Models\User;
use Illuminate\Support\Facades\DB;

class UserServices
{
    public function queryByUserName(User $user, $username)
    {
        $user->where('username', $username)->where('deleted', false)->first();
    }
}