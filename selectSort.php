<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 2019/5/21
 * Time: 14:50
 */

/**
 * @param array $nums
 * @return array
 * 选择排序：在没有排序好的序列中选出合适的数字
 */
function seleSort (array $nums = array()) {
    $count = count($nums);
    if ($count == 1) return $nums;

    for ($i = 0; $i < $count - 1; $i++) { // 外层都为比较次数
        $min = $i;
        // 找出最小值
        for ($j = $i + 1; $j < $count; $j++) {
            if ($nums[$min] > $nums[$j]) {
                $min = $j;
            }
        }
        // 进行交换
        if ($min != $i) {
            $temp = $nums[$min];
            $nums[$min] = $nums[$i];
            $nums[$i] = $temp;
        }
    }
    return $nums;
}

$nums = array(44, 12, 5, 66, 28, 11);
var_dump($nums);

$res = seleSort($nums);
var_dump($res);