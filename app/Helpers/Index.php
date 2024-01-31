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


/**
 * Get price sale of product
 *
 * @param $product
 * @return string
 * @throws Exception
 */
if (!function_exists("getPriceSale")){
    function getPriceSale($product)
    {
        $dateTimeNow = new \DateTime();
        foreach ($product->sales as $sale){
            $timeStart = new \DateTime($sale->time_start);
            $timeEnd = new \DateTime($sale->time_end);
            if ($sale->is_show && $dateTimeNow > $timeStart && $dateTimeNow < $timeEnd){
                return $product->price * ((100 - $sale->percent) / 100);
            }
        }
        return $product->discount_price;
    }
}


/**
 * Check product is sale
 *
 * @param $product
 * @return bool
 * @throws Exception
 */

if (!function_exists("isSaleProduct")){
    function isSaleProduct($product)
    {
        $dateTimeNow = new \DateTime();
        foreach ($product->sales as $sale){
            $timeStart = new \DateTime($sale->time_start);
            $timeEnd = new \DateTime($sale->time_end);

            if ($sale->is_show && $dateTimeNow > $timeStart && $dateTimeNow < $timeEnd){
                return true;
            }
        }
        return $product->discount_price > 0;
    }
}

if (!function_exists("getTotalCart")){
    function getTotalCart()
    {
        $total = 0;
        foreach (session('cart') as $id => $details){
            if(isSaleProduct($details->product)){
                $total += getPriceSale($details->product) * $details['qty'];
            }else{
                $total += $details->product->price * $details['qty'];
            }
        }
        return $total;
    }
}
