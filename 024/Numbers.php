<?php
abstract class Numbers {

    abstract public function number() : int;

    public function show()
    {
        echo '<h1>' . $this->number() . '</h1>';
    }
}