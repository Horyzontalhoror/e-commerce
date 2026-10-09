<?php

namespace App\Helpers;

class NumberFormatHelper
{
    public static function formatCurrencyShort($amount)
    {
        if ($amount >= 1000000000) {
            return 'Rp' . number_format($amount / 1000000000, 1) . ' Miliar';
        }
        if ($amount >= 1000000) {
            return 'Rp' . number_format($amount / 1000000, 1) . ' Juta';
        }
        if ($amount >= 1000) {
            return 'Rp' . number_format($amount / 1000, 1) . ' Ribu';
        }
        return 'Rp' . number_format($amount, 0, ',', '.');
    }
}

