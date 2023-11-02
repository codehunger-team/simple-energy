<?php

use App\Models\Configuration;

function getConfigValue($key)
{
   return Configuration::where('key',$key)->first()->value;
}