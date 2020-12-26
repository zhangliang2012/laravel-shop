<?php

namespace App\Http\Controllers;

use App\A;
use App\Exceptions\BusinessException;
use App\Facades\PostTest;
use App\Models\Test;
use Carbon\Carbon;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function dbTest()
    {
        throw new BusinessException("nihaoFS", 200);
        DB::select("select * from user");
    }

    public function testredis()
    {
        Cache::put();
        $data = [
            ['id' => 1, 'name' => 'zl'],
            ['id' => 2, 'name' => 'zbn']
        ];
        $result = array_column($data, 'id');
        var_dump($request);
        exit;
        dd(Carbon::now()->toDatetimeString());
//        debug_print_backtrace();
//        dump(debug_backtrace());
        PostTest::getId(19123);
//        $result = Cache::put('key', 'value');
//        dd($result);
    }

    public function test(Request $request)
    {
        $params = $this->V(Test::$validate, $_GET);
        dd($params);
    }

    public function V($rule, $params)
    {
        //递归调用
        foreach ($rule as $k => $value) {
            $tmpRule = $value;

            $value = is_array($value) ? "array": $value;
            switch ($value) {
                case "int":
                    $params[$k] = (int)$params[$k];
                    break;
                case "string":
                    $params[$k] = (string)$params[$k];
                    break;
                case "array":
//                    $params[$k] = $this->V($tmpRule, $params[$k]);
                    break;
            }
        }
        return $params;
    }
}
