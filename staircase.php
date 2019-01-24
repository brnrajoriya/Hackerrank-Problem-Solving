function staircase($n) {
    $result = "";
    for($i=0; $i<$n;$i++) {
        for($j=0;$j<$n;$j++) {
            if($i+$j < ($n-1)) {
                $result .= " ";
            } else {
                $result .= "#";
            }
        }
        $result .= "\n";
    }
    return $result;
}