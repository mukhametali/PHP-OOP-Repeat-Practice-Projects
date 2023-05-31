<?php

namespace aliCore\traits;

trait TColor
{
    private $color;

    public function getColor()
    {
        return $this->color;
    }

    public function setColor($color): void
    {
        $this->color = $color;
    }
}