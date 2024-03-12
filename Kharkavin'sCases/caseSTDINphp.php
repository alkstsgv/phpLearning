<?php
declare(strict_types = 1);
function stdin(string $inputString): array
{
    $parsedInputString = $inputString;
    $arrayOfParsedString = [];
    $lenOfParsedString = "";
    $arrayIndex = 0;
    $arrayValue = 0;

    for ($i = 0; $parsedInputString[$i]; $i += 1)
    {
            $lenOfParsedString = "{$lenOfParsedString}{$parsedInputString[$i]}";
            $arrayOfParsedString[$arrayIndex][$arrayValue] = $lenOfParsedString;
            if ($parsedInputString[$i] === " "){
                $i += 1;
                $lenOfParsedString = "{$parsedInputString[$i]}";
                $arrayValue += 1;
                $arrayOfParsedString[$arrayIndex][$arrayValue] = $lenOfParsedString;

        }
    }
    return  $arrayOfParsedString;
}
var_dump(stdin("grep 1< myfile.txt"));