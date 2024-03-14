<?php
declare(strict_types = 1);
function stdin(string $inputString)
{
    $parsedInputString = $inputString;
    $arrayOfParsedString = [];
    $strLen = lenOfStr($parsedInputString);
    $lenOfParsedString = "";
    $arrayIndex = 0;
    $arrayValue = 0;
    /* for ($i = 0; $parsedInputString[$i]; $i += 1)
     {
             $lenOfParsedString = "{$lenOfParsedString}{$parsedInputString[$i]}";
             $arrayOfParsedString[$arrayIndex][$arrayValue] = $lenOfParsedString;
             if ($parsedInputString[$i] === " "){
                 $i += 1;
                 $lenOfParsedString = "{$parsedInputString[$i]}";
                 $arrayValue += 1;
                 $arrayOfParsedString[$arrayIndex][$arrayValue] = $lenOfParsedString;

             }

     }*/

    for ($i = 0; $i < $strLen; $i++){
        $lenOfParsedString = "{$lenOfParsedString}{$parsedInputString[$i]}";
        $arrayOfParsedString[$arrayIndex][$arrayValue] = $lenOfParsedString;
        if ($parsedInputString[$i] === " " || $parsedInputString === '\0'){
            //$i += 1;
            $lenOfParsedString = "{$parsedInputString[$i]}";
            $arrayValue += 1;
            $arrayOfParsedString[$arrayIndex][$arrayValue] = $lenOfParsedString;

        }

    }

    //return $lenOfParsedString;
    return  $arrayOfParsedString;

}

function lenOfStr(string $stringToCount): int
{
    $index = 0;
    for ($i = 0; $stringToCount[$i] ?? null; $i += 1) {
        $index += 1;

    }

    return $index;
}

function trimStr(string $stringToTrim): string
{
    $resultedString = "";
    $strLen = lenOfStr($stringToTrim);

    for ($i = 0; $i < $strLen; $i++){
        $index = $i;
        $resultedString = "{$resultedString}{$stringToTrim[$index]}";
        if ($stringToTrim[$index] === " "){
            $resultedString = "";
            //$stringToTrim[$index] = $resultedString;
        }
    }
    return $resultedString;
}

$inputString = "grep 0< myfile.txt ";
//var_dump(stdin($inputString));
var_dump(lenOfStr($inputString));
//var_dump(trimStr($inputString));

//echo trim($inputString);