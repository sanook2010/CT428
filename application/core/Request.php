<?php

namespace application\core;


class Request
{
    public function get($data)
    {
        return $data;
    }

    public function post($data)
    {
        return $_POST[$data];
    }
}
