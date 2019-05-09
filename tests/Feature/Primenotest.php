<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class Primenotest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testprimeno()
    {
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

            $this->visit('/')
             ->see($primeno);
    }
}
