<?php
/**
 * Created by PhpStorm.
 * User: zhang liang
 * Date: 2020/11/22
 * Time: 10:54
 */
$arr = [1, 2, 3, 4, 5];
function nihao (int ...$arr) {
    var_dump($arr);
}
nihao($arr);
