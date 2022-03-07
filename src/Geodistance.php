<?php

namespace Davidvandertuijn;

/**
 * Geodistance.
 */
class Geodistance
{
    /**
     * Distance.
     *
     * @param float $lat1
     * @param float $lon1
     * @param float $lat2
     * @param float $lon2
     * @param string $unit (M = Miles, K = Kilometers, N = Nautical Miles)
     *
     * @return float
     */
    public static function distance(float $lat1, float $lon1, float $lat2, float $lon2, string $unit): float
    {
        $theta = $lon1 - $lon2;
        $dist = sin(deg2rad($lat1)) * sin(deg2rad($lat2)) + cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($theta));
        $dist = acos($dist);
        $dist = rad2deg($dist);
        $miles = $dist * 60 * 1.1515;
        $unit = strtoupper($unit);

        switch ($unit) {
            case 'M':
                return $miles;
            case 'K':
                return $miles * 1.609344;
            case 'N':
                return $miles * 0.8684;
        }
    }
}
