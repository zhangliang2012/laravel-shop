<?php
/**
 * Created by PhpStorm.
 * User: zhang liang
 * Date: 2020/11/2
 * Time: 22:25
 */

namespace App\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Class PostTest
 * @package App\Facades
 */
class PostTest extends Facade
{
    /**
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'abc';
    }
}