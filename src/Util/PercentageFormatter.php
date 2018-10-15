<?php

namespace App\Util;

class PercentageFormatter
{
    public static function format(float $percentage): string
    {
        return \sprintf('%s%%', \number_format($percentage * 100, 2));
    }
}