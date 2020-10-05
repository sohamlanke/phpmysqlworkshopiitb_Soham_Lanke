
<?php 
$a1 = Array('0' => Array('0' => 10,'1' => 20),'1' => Array('0' => 4,'1' => 5));

echo "<pre/>";print_r($a1);
$a2 = Array('0' => Array('0' => 1,'1' => 2),'1' => Array('0' => 40,'1' => 50));

echo "<pre/>";print_r($a2);

$result = array();
for($i=0; $i<=1; $i++) {
    for($j=0; $j<=1; $j++) {
        $result[$i][$j] = $a1[$i][$j] + $a2[$i][$j];
    }
}
echo "<hr>";
echo "<h1>Answer is</h1>";print_r($result);
?>