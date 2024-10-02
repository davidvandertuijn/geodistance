<?php

namespace Davidvandertuijn;

/**
 * Geodistance.
 */
class Geodistance
{
    /**
     * Distance.
     */
    public static function distance(float $lat1, float $lon1, float $lat2, float $lon2, string $unit): float
    {
        $theta = $lon1 - $lon2;
        $dist = sin(deg2rad($lat1)) * sin(deg2rad($lat2)) + cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($theta));
        $dist = acos($dist);
        $dist = rad2deg($dist);
        $miles = $dist * 60 * 1.1515;
        $unit = strtoupper($unit);

        return match ($unit) {
            'M' => $miles,
            'K' => $miles * 1.609344,
            'N' => $miles * 0.8684,
            default => 0,
        };
    }
}
