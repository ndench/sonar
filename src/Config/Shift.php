<?php

declare(strict_types=1);

namespace App\Config;

final class Shift
{
    /** @var string */
    private $type;

    /** @var float */
    private $hours;

    public function __construct(string $type, float $hours)
    {
        $this->type  = $type;
        $this->hours = $hours;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function getHours(): float
    {
        return $this->hours;
    }
}
