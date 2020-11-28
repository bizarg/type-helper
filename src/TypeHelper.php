<?php

namespace Bizarg\TypeHelper;

use Carbon\Carbon;

/**
 * Class StringCase
 * @package Bizarg\TypeHelper
 */
class TypeHelper
{
    /**
     * @param $int
     * @return int|null
     */
    public static function int($int): ?int
    {
        if (is_numeric($int)) {
            return (int)$int;
        }

        return null;
    }

    /**
     * @param string|Carbon|null $date
     * @param string $format
     * @return Carbon|null
     */
    public static function carbon($date, $format = 'Y-m-d'): ?Carbon
    {
        if ($date instanceof Carbon) {
            return $date;
        }

        if (!empty($date)) {
            try {
                return Carbon::createFromFormat($format, $date);
            } catch (\Exception $exception) {
                return null;
            }
        }

        return null;
    }

    /**
     * @param $float
     * @param int $decimal
     * @return float|null
     */
    public static function float($float, $decimal = 2): ?float
    {
        if (is_numeric($float)) {
            return round($float, $decimal);
        }

        return null;
    }

    /**
     * @param mixed $bool
     * @return bool|null
     */
    public static function bool($bool): ?bool
    {
        return is_null($bool) ? null : boolval(($bool === 'false' ? false : $bool));
    }
}
