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
    foreach ($arrayOfParsedString as $key => $value){

        foreach ($value as $item) {
            if ($value[$indexOfParsedArray] === "0<") {
                //print_r($value[$indexOfParsedArray]);
                unset($arrayOfParsedString[$key][$indexOfParsedArray]);
            }
            $indexOfParsedArray += 1;
        }
    }
    return $arrayOfParsedString;

}
function checkCases( $func, array $cases): void
{

    //print_r($func);

    foreach ($cases as [$args, $expectedResult]) {
        //print_r($args) . PHP_EOL;
        //print_r($expectedResult) . PHP_EOL;
        //print_r($func(...$args));
        $r = $func($args);
        //print_r($r[0][2]) . PHP_EOL;
        //print_r($expectedResult) . PHP_EOL;

        if ($r !== $expectedResult){
            throw new \Exception("failed!");
        }
    }

}

$inputString = "grep 0< myfile.txt";

//var_dump(stdin($inputString));
checkCases(fn($n) => stdin($inputString),
    ["myfile.txt", ["grep1", "myfile.txt"]]
);


//var_dump(checkCases());
//var_dump((cases("grep")));
//var_dump((cases("0<")));
//var_dump((cases("myfile.txt")));
