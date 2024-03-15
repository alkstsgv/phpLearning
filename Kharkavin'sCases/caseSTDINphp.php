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

function checkCases($func, array $cases): void
{

    print_r($func);
    print_r($cases);
    foreach ($cases as [$args, $expectedResult]){
        print_r($args);
        $r = $func(...$args);
        print_r($r);
        //print_r($expectedResult);
       /* if ($r !== $expectedResult){
            throw new \Exception("failed!!!");
        }*/
    }
}


/*function cases(): array
{
    $arr = [
        ["grep1"],
        ["myfile.txt1"]
    ];
    
    return $arr;
git
}*/
$inputString = "grep 0< myfile.txt";


checkCases(fn($n) => stdin($inputString),
   [ ["grep1 0< myfile.txt"], ["grep"], ["myfile.txt"]]
);

//var_dump(checkCases());


//var_dump((cases("grep")));
//var_dump((cases("0<")));
//var_dump((cases("myfile.txt")));
//var_dump(stdin($inputString));


