<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 2019/5/21
 * Time: 15:00
 */
function insertionSort(array $numbers = array())
{
    $count = count($numbers);
    if ($count <= 1) return $numbers;

    for ($i = 1; $i < $count; $i++) {
        $temp = $numbers[$i]; //得到要跟 排序好序列 进行比较的数字

        for ($j = $i - 1; $j >= 0 && $numbers[$j] > $temp; $j--) {  // 将上面得到数字 依次跟已排序序列进行比较
            $numbers[$j + 1] = $numbers[$j]; //进行交换？？
        }
        $numbers[$j + 1] = $temp;
    }
    return $numbers;
}

$nums = array(44, 12, 5, 66, 28, 11);
var_dump($nums);

$res = insertionSort($nums);
var_dump($res);