<?php
$j = 1;
while($j != 5){
  for($i=1; $i<=5; $i++){
   $tri = str_repeat("*",$i);
       	echo $tri, PHP_EOL;
  } 
	$j++;
}

?>
