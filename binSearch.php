function binSearch (array $arr, $search) {
  $height = count($arr) - 1;
  $low = 0;
  while ($low <= $height) {
    $mid = floor(($low + $height)/2)
    if ($arr[$mid] == $search) {
      return $mid;
    } elseif ($arr[$mid] < $search) {
      $height = $mid - 1;
    } else {
      $low = $mid + 1;
    }
  }
  return '查找失败';
}
