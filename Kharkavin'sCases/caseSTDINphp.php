<?php
declare(strict_types = 1);
function stdin(string $inputString): array
{
    $parsedInputString = $inputString;
    $arrayOfParsedString = [];
    $strLen = mb_strlen($parsedInputString);
    $lenOfParsedString = "";
    $arrayIndex = 0;
    $arrayValue = 0;
    $indexOfParsedArray = 0;

    for ($i = 0; $i < $strLen; $i++){
        $lenOfParsedString = "{$lenOfParsedString}{$parsedInputString[$i]}";
        $arrayOfParsedString[$arrayIndex][$arrayValue] = trim($lenOfParsedString);

        if ($parsedInputString[$i] === " "){
            $lenOfParsedString = "";
            $arrayValue += 1;
        }

    }

    foreach ($arrayOfParsedString as $index => $value){
        foreach ($value as $item) {
            if ($value[$indexOfParsedArray] === "0<") {
                //print_r($value[$indexOfParsedArray]);
                unset($arrayOfParsedString[$index][$indexOfParsedArray]);
            }
            $indexOfParsedArray += 1;
        }
    }

    return $arrayOfParsedString;

}


$inputString = "grep 0< myfile.txt 0< 0<";
var_dump(stdin($inputString));


