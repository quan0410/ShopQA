<?php
/**
 * @param $price
 * @param $discountPirce
 * @return int
 */
if (!function_exists('percentDiscountPrice')) {
    function percentDiscountPrice($price, $discountPirce) {
        $percent = (($price - $discountPirce) / $price ) * 100;

        return (int)$percent;
    }
}
