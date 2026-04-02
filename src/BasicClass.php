<?php

declare(strict_types=1);

namespace App;

final class BasicClass
{
    function greet(string $name): string
    {
        return 'Hello ' . $name;
    }
}
