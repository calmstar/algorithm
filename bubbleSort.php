<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 2019/5/21
 * Time: 14:01
 */

/**
 * @param array $nums
 * @return array
 */
function bubbleSort (array $nums = array()) {
    $count = count($nums);
    if ($count == 0) return $nums;

    for ($i = 0; $i < $count-1; $i++) {
        $flag = true;
        for ($j = 0; $j < $count-1-$i; $j++) {
            if ($nums[$j] > $nums[$j + 1]) {
                $temp = $nums[$j];
                $nums[$j] = $nums[$j + 1];
                $nums[$j + 1] = $temp;
                $flag = false;
            }
        }
        if ($flag) break;  // flag为真，代表没有可排序了
    }
    return $nums;
}

$nums = array(44, 12, 5, 66, 28, 11);
var_dump($nums);

$res = bubbleSort($nums);
var_dump($res);
