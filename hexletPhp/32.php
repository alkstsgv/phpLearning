<?php

function invertCase($string){

    mb_internal_encoding ("utf-8");
    setlocale(LC_ALL, 'ru_RU');

    $str = $string;
    $result = "";

    for ($i = 0; $i < mb_strlen($str); $i += 1){

        $index = $i;
        $strFromSubstr = $str;
        $strFromSubstr = mb_substr($strFromSubstr, $index, 1, "UTF-8");

     if ($strFromSubstr === mb_strtoupper($strFromSubstr)){
            $strFromSubstr = (mb_strtolower($strFromSubstr));
            $result = "{$result}{$strFromSubstr}";
        } elseif ($strFromSubstr === mb_strtolower($strFromSubstr)) {
            $strFromSubstr = (mb_strtoupper($strFromSubstr));
         $result = "{$result}{$strFromSubstr}";
     }
    }
    return $result;
}


$string = 'ПрИвЕт!';
var_dump(invertCase($string));
