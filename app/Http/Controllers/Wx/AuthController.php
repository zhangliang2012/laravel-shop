<?php
/**
 * Created by PhpStorm.
 * User: zhang liang
 * Date: 2020/11/3
 * Time: 15:57
 */

namespace App\Http\Controllers\Wx;

use App\Http\Controllers\Controller;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function register(Request $request, User $user)
    {
        //获取参数
        $params = $request->only(['username', 'password', 'mobile', 'code']);
        // 验证参数是否为空
        $rule = [
            'username' => 'required',
            'password' => 'required',
            'mobile' => 'required',
            'mobile' => 'regex:/^1[345789][0-9]{9}$/',
            'code' => 'required',
        ];
        $validator = Validator::make($params, $rule);
        if ($validator->fails()) return ["errno" => 401, "errmsg" => $validator->errors()];
        //TODO 验证码是否正确

        //TODO 写入用户表
        $user->username = $params['username'];
        $user->mobile = $params['mobile'];
        $user->password = Hash::make($params['password']);
        $user->avatar = 'imageurl';
        $user->nickname = $params['username'];
        $user->last_login_time = Carbon::now()->toDateTimeString();
        $user->last_login_ip = $request->getClientIp();
//        dump($user);exit;
        $user->save();
        //TODO 新用户优惠券

        //TODO 返回用户的信息和token
        return ['errno'=>0, 'errmsg'=>'成功', 'data'=>['token'=>'', 'userInfo'=>['nickName'=>$user->nickname, 'avatarUrl'=> $user->avatar]]];
    }
}