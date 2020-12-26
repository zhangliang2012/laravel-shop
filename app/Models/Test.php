<?php
/**
 * Created by PhpStorm.
 * User: zhang liang
 * Date: 2020/12/15
 * Time: 22:45
 */

namespace App\Models;

class Test
{
    public static $validate = [
        "name" => "int",
        "version" => [
            0 => [
                "aaa" => "string",
                "bbb" => "int"
            ]
        ],
    ];
}

