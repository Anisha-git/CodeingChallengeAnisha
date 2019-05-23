<?php

require_once('primeno_test.php');

class Primeno_test extends PHPUnit_Framework_TestCase
{
  

  public function testConnectionIsValid()
  {
    // test to ensure that the object from an fsockopen is valid
    $connObj = new PrimeNo();
     for ($i = 1; $i < 12; $i++) {
    for ($j = 1; $j < 12; $j++) {
     if ($j == 1) {
       echo str_pad($i*$j, 2, " ", STR_PAD_LEFT);
     } else {
       echo str_pad($i*$j, 4, " ", STR_PAD_LEFT);
     }
    }
   $primeno =  echo "\n";
    }
    $this->assertTrue($primeno !== false);
  }
}


?>