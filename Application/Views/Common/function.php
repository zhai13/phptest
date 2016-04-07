<?php
/**
 * Created by PhpStorm.
 * User: zhaoguoqiang
 * Date: 4/7/16
 * Time: 10:53 下午
 */
function getAge($year) {
    $now = date('Y');
    if($year > $now) {
        return '数据错误';
    }
    return $now-$year;
}