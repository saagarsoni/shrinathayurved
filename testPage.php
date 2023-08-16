<?php
 
$data = "123@String";    
$whatIWant = substr($data, strpos($data, "@") + 1);    
echo $whatIWant;

?>
