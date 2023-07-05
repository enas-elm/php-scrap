<?php

declare(strict_types=1);
namespace EnNa\OssTd;

class Api
{
    public function getRandomNumber(): int
    {
        return rand(0, 100);
    }
}


?>