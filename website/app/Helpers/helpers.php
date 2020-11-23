<?php
/**
 * Link asset of admin base
 */
if(!function_exists('admin_asset')) {
    function admin_asset($path)
    {
        return asset('admin_assets/'. $path);
    }
}
/**
 * Function to handling price
 */
if (!function_exists('show_price')) {
    function show_price($price)
    {
        return number_format($price);
    }
}
?>
