<?php
$a = 5;
if ($a > 0){
while (true){
$a = $a-1;

print_r($a)."\r";
sleep(1);
if($a==0){
break;
}
}
}


?>
