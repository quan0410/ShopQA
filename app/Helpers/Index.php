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

/**
 * Get array params request
 *
 * @param array $params
 * @return array
 */
if (!function_exists("getParamsArray")) {
    function getParamsArray($params = [])
    {
        $paramsArr = request()->all();
        if ($params) {
            foreach ($params as $key => $param){
                $paramsArr[$key] = $param;
            }
        }
        return $paramsArr;
    }
}
