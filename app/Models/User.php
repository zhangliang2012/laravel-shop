<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

/**
 * Class User
 * @package App\Models
 * @property string username 用户名
 * @property string password 密码
 */
class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * 指定表名
     */
    protected $table = 'user';

//    public $timestamps = false;
    const CREATED_AT = 'add_time';
    const UPDATED_AT = 'update_time';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username',
        'mobile',
        'password',
        'avatar',
        'nickname',
        'last_login_time',
        'last_login_ip',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
    ];
}
