<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 2019/5/21
 * Time: 14:31
 */

/**
 * @param array $nums
 * @return array
 */
function quickSort (array $nums = array()) {
    $count = count($nums);
    if ($count == 0) return $nums;
    $left = $right = array();
    $midValue = $nums[0];


    for ($i = 0; $i < $count; $i++) {
        if ($nums[$i] < $midValue) {
            $left[] = $nums[$i];
        } else {
            $right[] = $nums[$i];
        }
    }

    return array_merge(quickSort($left), (array)$midValue, quickSort($right));
}


$nums = array(44, 12, 5, 66, 28, 11);
var_dump($nums);

$res = quickSort($nums);
var_dump($res);


