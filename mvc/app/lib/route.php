<?php

/**
* 
*/
class Route
{

    public static function get($controller, $method = '', $data = [])
    {   
        $url = DOMAIN  . $controller . '/' . $method;
        if (!empty($data)) {
            foreach ($data as $key => $param) {
                $url = $url . '/' . $key;
            }
        }
        return $url;
    }

    public static function post($controller, $method = '', $data = [])
    {
        $url = DOMAIN  . $controller . '/' . $method;
        if (!empty($data)) {
            foreach ($data as $key => $param) {
                $url = $url . '/' . $param;
            }
        }
        return $url;
    }
}
