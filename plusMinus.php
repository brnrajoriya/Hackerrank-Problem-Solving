function plusMinus($arr) {
    $len = sizeof($arr);
    $plusCount = 0;
    $minusCount = 0;
    $zeroCount = 0;
    for($i=0; $i<$len;$i++) {
        if($arr[$i] < 0) {
            $minusCount++;
        } elseif($arr[$i] > 0) {
            $plusCount++;
        } else {
            $zeroCount++;
        }
    }
    $result = number_format((float)($plusCount/$len), 6, '.', '');
    $result .= "\n".number_format((float)($minusCount/$len), 6, '.', '');
    $result .= "\n".number_format((float)($zeroCount/$len), 6, '.', '');
    return $result; // $plusCount." ".$minusCount." ".$zeroCount;
}