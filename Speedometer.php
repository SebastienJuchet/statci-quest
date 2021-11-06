<?php

class Speedometer {
    public static function convertKmToMiles(int $km): float
    {
        return round($km / 1.61, 2);
    }

    public static function convertMilesToKms(int $mile): float
    {
        return round($mile * 1.61, 2);
    }
}