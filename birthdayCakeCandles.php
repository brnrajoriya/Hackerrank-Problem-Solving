function birthdayCakeCandles($ar) {
    $len = sizeof($ar);
    $max = 0;
    $maxCount = 0;
    for($i = 0; $i < $len; $i++) {
        if($ar[$i] > $max) {
            $maxCount = 0;
            $max = $ar[$i];
        }
        if($max == $ar[$i]) {
            $maxCount++;
        }
    }
    return $maxCount;
}