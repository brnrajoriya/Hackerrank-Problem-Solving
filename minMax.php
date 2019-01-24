$max=0;
$index = 0;

for($i=0; $i<$len; $i++) {
    if($max < $data[$i]) {
        $max = $data[$i];
        $index = $i;
    }
}
$min=$max;
for($i=0; $i<$index; $i++) {
    if($min > $data[$i]) {
        $min = $data[$i];
    }
}

return $max-$min;