<?php

$week= array("1"=>"Sunday" , "2"=>"Monday" ,"3"=>"Tuesday" , "4"=>"Wednesday" ,"5"=>"Thursday" , "6"=>"Friday" , "7" => "Saturday" );

print_r($week);
echo "<hr>";
foreach($week as $w => $w_value){
    echo "Key = ". $w . "  |  Value = ".$w_value;
    echo "<br>";
    }

?>