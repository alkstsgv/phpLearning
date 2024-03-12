<?php
declare(strict_types = 1);
function stdin(string $string) {

    $str = $string;
    $arrayOfPregs = [];
    $str = preg_match_all("/[^0<]+/", $str, $arrayOfPregs);
        foreach ($arrayOfPregs as $index => $value) {
            foreach ($value as $index => $item) {
                return $value;
            }
        }

}





var_dump(stdin("grep 0< myfile.txt"));