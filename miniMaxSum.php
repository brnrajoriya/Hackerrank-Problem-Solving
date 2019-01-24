function miniMaxSum($arr) {
    $len = sizeof($arr);
    $min = $arr[0];
    $max = $arr[0];
    $result = 0;
    for($i=0; $i<$len; $i++) {
        if($arr[$i] > $max) {
           $max = $arr[$i];
        }
        if($arr[$i] < $min) {
           $min = $arr[$i];
        }
        $result = $result + $arr[$i];
    }
    
    return ($result-$max)." ".($result-$min);
}