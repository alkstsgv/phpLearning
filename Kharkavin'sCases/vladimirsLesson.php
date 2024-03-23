<?php

declare(strict_types = 1);


/**
$x = 5 //int;
$x = "2342342342dfsdfgsdfg";//string
$x = [1, 2, 3];
$x = [1, "1"];
$x = [1, 1];

foreach ($x as $n) {
echo $n;
}

$y = [
"name" => "John",
"age" => 21,
];
foreach ($y as $k => $v) {
echo $k . " " . $v;
}
$arr = [
[1, 2],
[3, 4],
];
foreach ($arr as [$a, $b]) {
echo $a + $b;
}




Знак
/      \
Смысл------Значение

"Пушкин"
"Человек, который написал роман в стихах 'Евгений Онегин'"

$x = 1;
$y = &$x;


function foo(int $x): int
{
return $x + 1;
}
foo(1);
$foo = function (int $x): int {
return $x + 1;
};
$foo(1);
$bar = fn(int $x) => $x + 1;
$bar(1);






 */

function trimSpaces(string $str): string
{
    if ($str === "") {
        return "";
    }
    $slice = [];
    for ($i = 0; $i < strlen($str); $i++) {
        if ($str[$i] !== " ") {
            $slice[] = $i;
            break;
        }
    }
    for ($i = strlen($str) - 1; $i >= 0; $i--) {
        if ($str[$i] !== " ") {
            $slice[] = $i;
            break;
        }
    }
    if ($slice === []) {
        return "";
    }
    $r = "";
    for ($i = 0; $i < strlen($str); $i++) {
        if ($i >= $slice[0] && $i <= $slice[1]) {
            $r .= $str[$i];
        }
    }

    return $r;
}

// checkCases(trimSpaces(...), [
//            ["", ""],
//            [" ", ""],
//            ["    ", ""],
//            ["  werwer", "werwer"],
//            ["qwerw   ", "qwerw"],
//            ["   werwer  ", "werwer"],
//            ["   werwer werwer   ", "werwer werwer"],
// ]);

function splitBySpace(string $str): array
{
    $str = trimSpaces($str);
    $arr = [];
    $word = "";
    for ($i = 0; $i < strlen($str); $i++) {
        if ($str[$i] !== " ") {
            $word .= $str[$i];
        }
        if ($str[$i] === " " || $i === strlen($str) - 1) {
            if ($word !== "") {
                $arr[] = $word;
            }
            $word = "";
        }
    }

    return $arr;
}

/* checkCases(splitBySpace(...), [
            ["", []],
            [" ", []],
            ["  ", []],
            ["   ", []],
            [" qweqwe qweqwe", ["qweqwe", "qweqwe"]],
            ["qwer    qwer", ["qwer", "qwer"]],
            ["qer", ["qer"]],
            ["q w e r", ["q", "w", "e", "r"]],
 ]);*/

function is_valid(array $words, string $descriptor = "0<"): bool
{
    $words = implode($words);
    $words = splitBySpace($words);
    $index = 0;

    foreach ($words as $k => $v) {
        if ($k === $k && $v === $descriptor) {
            if ($k > 0 && $k < count($words) - 1) {
                $index++;
            } else {
                return false;
            }
        }
    }
    if ($index === 1) {
       return true;
    } elseif($index > 1) {
        return false;
    }
    return false;
}




function parse(string $input): array
{
    $arrWithWords = splitBySpace($input);
    $valid = is_valid($arrWithWords);
    var_dump(is_valid($arrWithWords));
//    foreach ($arrWithWords as $k => $v) {
//        if (is_valid($arrWithWords) === true) {
//            return $arrWithWords;
//            var_dump(is_valid($arrWithWords));
//        } else {
//            return [];
//        }
//    }
    return [];
}

function checkCases(callable $func, array $cases): void
{
    foreach ($cases as $index => [$args, $expectedResult]) {
        if (is_array($args)) {
            $r = $func(...$args);
        } else {
            $r = $func($args);
        }
        if ($r !== $expectedResult) {
            var_dump($r);
            $index++;
            throw new \Exception("failed: $index");
        }
        echo "Success\n";
    }

}


//function checkCases(callable $func, array $cases): void
//{
//    $numOfCase = 0;
//    foreach ($cases as $index => [$args, $expectedResult]) {
//        $numOfCase++;
//        $r = $func(...$args);
//        if ($r !== $expectedResult) {
//            echo "Failed! Test $numOfCase\n, expected {$expectedResult} != {$r}";
//            $index++;
//            // throw new \Exception("failed: $index");
//        }
//        echo "Success: Test $numOfCase\n";
//    }
//}




//checkCases(fn($n) => parse($n), [
//    ["", []],
//    ["grep myfile.txt", []],
//    ["grep myfile.txt 0<", []],
//    ["7", []],
//    ["0<", []],
//    ["grep 0< myfile.txt", ["grep", "myfile.txt"]],
//    ["grep 0< ./home/alex/myfile.txt", ["grep", "./home/alex/myfile.txt"]],
//    ["grep 0< 0ome/alex/myfile.txt", ["grep", "0ome/alex/myfile.txt"]],
//    ["0< grep 0< 0ome/alex/myfile.txt", []],
//    ["grep 0< //.home/alex/myfile.txt 0<", []],
//    ["grep 0< 0ome/alex/myfile.txt 0< myfile.txt", []]
//]);





/*checkCases(fn($n) => is_valid($n), [
    [[[""]], false],
    [[["grep myfile.txt"]], false],
    [[["grep myfile.txt 0<"]], false],
    [[["7"]], false],
    [[["0<"]], false],
    [[["grep 0< myfile.txt"]], true],
    [[["grep 0< ./home/alex/myfile.txt"]], true],
    [[["grep 0< 0ome/alex/myfile.txt"]], true],
    [[["0< grep 0< 0ome/alex/myfile.txt"]], false],
    [[["grep 0< //.home/alex/myfile.txt 0<"]], false],
    [[["grep 0< 0ome/alex/myfile.txt 0< myfile.txt"]], false]
]);*/
//


$inputString = "grep 0< myfile.txt";
var_dump(parse($inputString));

$inputArr = ["grep 0< myfile.txt"];
var_dump(is_valid($inputArr));