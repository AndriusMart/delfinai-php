<?php

class Abc extends C
{

    use A;

    public $kas1 = 789;

    public function read()
    {
        return '-ABC-';
    }
}
