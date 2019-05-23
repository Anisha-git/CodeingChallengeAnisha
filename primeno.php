<?php
class PrimeNo {


function primenoMultiply(){

	for ($i = 1; $i < 12; $i++) {
  	for ($j = 1; $j < 12; $j++) {
     if ($j == 1) {
     $output = echo str_pad($i*$j, 2, " ", STR_PAD_LEFT);
     } else {
     $output =  echo str_pad($i*$j, 4, " ", STR_PAD_LEFT);
     }
  }
  
 $output = echo "\n";

 return $output;

	}
}


}

?>