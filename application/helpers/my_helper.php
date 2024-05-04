<?php 

if (!function_exists('format')) {
    function format($money) {
        return number_format($money, 2, ',', ' ');
    }
}

?>