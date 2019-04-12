<?php


class FizzBuzz
{
    public $status;
    public function __construct($number)
    {
        $isBuzz = $number % 5 == 0 ;
        $isFizz = $number % 3 == 0 ;
        if($isBuzz && $isFizz ) {
            $this->status =  "FizzBuzz";
        } elseif ($isFizz) {
            $this->status = "Fizz";
        } elseif ($isBuzz) {
            $this->status = "Buzz";
        } else {
            $this->status =  $number."";
        }
    }
    public function __toString()
    {
        return $this->status;
    }
}