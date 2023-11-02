<?php

use App\Models\Configuration;

function getConfigValue($key)
{
    $isExist = Configuration::where('key', $key)->first();
    if ($isExist) {
        return Configuration::where('key', $key)->first()->value;
    } else {
        'no data found';
    }
}
