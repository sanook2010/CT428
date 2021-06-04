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
        return $this->defined_map($_POST[$data], (string)" ");
    }

    function defined_map($value, $default) {
        return (!isset($value) || is_null($value)) ? $default : $value;
        // or return $value ? $default : $value;
    }
}
