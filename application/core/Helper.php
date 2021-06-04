<?php

namespace application\core;

class Helper{
    public static function currency($price)
    {
        return number_format($price, 0, ',', '.' ) . " đ";
    }

    public static function redirect($url)
	{
		header('location: ' . $url);
		exit;
	}
}