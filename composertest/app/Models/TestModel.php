<?php

namespace App\Models;

class TestModel
{
    private $text = 'Hello World';

    public function getHello()
    {
        return $this->text;
    }
}
