function diagonalDifference($arr) {
    $sum1 = 0;
    $sum2 = 0;
    $len = sizeof($arr);
    for($i=0; $i<$len;$i++) {
        $sum1 = $sum1+$arr[$i][($len-1)-$i];
        $sum2 = $sum2+$arr[$i][$i];
    }
    return abs($sum1 - $sum2);
}