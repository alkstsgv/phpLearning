<?php declare(strict_types=1);

function cutString(string $original, string $needed): string
{
    $sumOfmatchesOfFirstSymbolOfSubstr = 0; // a
    $sumOfmatchesLeavedSymbolsOfSubstr = 0; // b
//    $sumOfFullMatchesOfWord = 0;  // c
    $j = 0; //j
    $result = ""; // r
    $lenOfSubstr = (int)strlen($needed);

    for ($i = 0; $i < strlen($original); $i++) {
        for ($j = 0; $j < $lenOfSubstr; $j++) {
            if ($needed[0] === $original[$i] && $j === 0) {
                $sumOfmatchesOfFirstSymbolOfSubstr++;
                $result .= $original[$i];
                break;
            }
            if ($needed[$j] === $original[$i] && $j !== 0 && $sumOfmatchesOfFirstSymbolOfSubstr !== 0) {
                $sumOfmatchesLeavedSymbolsOfSubstr++;
                $result .= $original[$i];
                if ($sumOfmatchesOfFirstSymbolOfSubstr === 1 && $sumOfmatchesLeavedSymbolsOfSubstr === $lenOfSubstr - 1){
                    $sumOfmatchesOfFirstSymbolOfSubstr = 0;
                    $sumOfmatchesLeavedSymbolsOfSubstr = 0;
                     break;
                } else {
//                    $sumOfFullMatchesOfWord++;
                }
                break;
            }


        }
    }
    return $result;
}
var_dump(cutString("123Wowoowoow", "woo"));

//function checkCases(callable $func, array $cases): void
//{
//    foreach ($cases as $index => [$args, $expectedResult]) {
//        if (is_array($args)) {
//            $r = $func(...$args);
//        } else {
//            $r = $func($args);
//        }
//        if ($r !== $expectedResult) {
//            var_dump($r);
//            $index++;
//            throw new \Exception("failed: $index");
//        }
//        echo "Success\n";
//    }
//
//}
//
//checkCases(fn($n) => cutString($n), [
//    [["f", "f"], []],
////    ["grep myfile.txt", []],
////    ["grep myfile.txt 0<", []],
//
//]);

