<?php

class SuperKibiras extends Kibiras{

    public function prideti2Akmenis() : void
    {
        $this->akmenuKiekis += 2;
        self::$akmenuKiekisVisuoseKibiruose += 2;
    }

}



