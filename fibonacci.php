<?php
function fibonacci($n){
    if($n < 2){
	return $n;
	}else{
	return fibonacci($n - 1) + fibonacci($n - 2);	
	}

}


for ( $i = 1; $i <= 10 ; $i++) { 
   echo fibonacci($i) . " ",PHP_EOL;
}


?>
