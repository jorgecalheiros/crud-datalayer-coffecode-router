<?php

namespace Jorge\Products\Utils;


class DateFormat
{

    function dateFormat(string $data, string $format = "d/m/Y")
    {
        $data = date_create($data);
        echo $data->format($format);
    }
}
