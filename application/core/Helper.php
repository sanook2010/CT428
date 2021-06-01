<?php

namespace application\core;

class Helper{
    public static function currency($price)
    {
        return number_format($price, 0, ',', '.' ) . " đ";
    }
}