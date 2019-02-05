<?php

class Fizzbuzz
{
    public function convert(int $param)
    {
        if($param <= 0 || $param >= 101){
            throw new InvalidArgumentException($param." isn't a valid number");
        }

        if($param%15 == 0){
            return 'FizzBuzz';
        }

        if($param%3 == 0){
            return 'Fizz';
        }

        if($param%5 == 0){
            return 'Buzz';
        }

        return $param;
    }
}
