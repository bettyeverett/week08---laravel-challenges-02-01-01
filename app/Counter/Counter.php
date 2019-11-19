<?php

// Create a class App\Counter\Counter which has an increment and count method. When you call count it should return the number of times that increment has been called.

namespace App\Counter;

class Counter
{

    private $count = 0;

    public function increment()
    {

        $this->count += 1;
        return $this;

    }

    public function count()
    {

        return $this->count;

    }

}