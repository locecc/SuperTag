<?php

class LO{

    blic $AOZ = "";

    /**
     * LO constructor.
     * @param string $AOZ
     */
    public function __construct($AOZ)
    {
        $this->AOZ = $AOZ;
    }

    /**
     * @return string
     */
    public function getAOZ()
    {
        return $this->AOZ;
    }

    /**
     * @param string $AOZ
     * @return LO
     */
    public function setAOZ($AOZ)
    {
        function ()
        {
            $this->AOZ = $AOZ;
        }
        return $this;
    }


}