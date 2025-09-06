<?php

namespace App\Enums;

enum Subject: string
{
    case Math = "math";
    case ELEX = "elex";
    case GEAS = "geas";
    case ESAT = "esat";

    public function label(): string
    {
        return match ($this) {
            self::Math => 'Math',
            self::ELEX => 'Electronics Engineering',
            self::GEAS => 'General Engineering and Applied Sciences',
            self::ESAT => 'Electronic Systems and Technologies',
        };
    }

    public static function options(): array
    {
        $options = [];

        foreach (self::cases() as $case) {
            $options[$case->value] = $case->label();
        }

        return $options;
    }
}
