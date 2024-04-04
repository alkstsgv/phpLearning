<?php declare(strict_types=1);

//function cutString(string $original, string $needed): string
//{
//    $j = 0;
//    for ($i = 0; $i < strlen($original);$i++){
//        //print_r($original[$i]);
//        if (($i <= (strlen($original) - strlen($needed))) && ($j < strlen($needed)) && ($original[$i + $j] === $needed[$j] )) {
//            $j++;
//
//        } elseif ($i <= (strlen($original) - strlen($needed)) && ($j < strlen($needed))){
//            //print_r($original[$i]);
//            $i++;
//            $j = 0;
//        }
//    }
//    return "";
//}

function cutString(string $original, string $needed): string
{
    $a = 0;
    $b = 0;
    $j = 0;
    $r = "";
    $lenOfSubstr = (int)strlen($needed);

    for ($i = 0; $i < strlen($original); $i++) {
        for ($j = 0; $j < $lenOfSubstr; $j++) {
            if ($needed[0] === $original[$i] && $j === 0) {

                $a++;
                $r .= $original[$i];
//                print_r($original[$i] . " " . $i . " " . $needed[$j] . " " . $j . PHP_EOL);
                if ($a === $lenOfSubstr - 1){
//                    print_r("yes" . "{$a}");
                }
            }
            if ($needed[$j] === $original[$i] && $j !== 0 && $a !== 0) {
                $b++;
                $r .= $original[$i];
//                if ($b === $lenOfSubstr - 1){
////                    print_r("yes" . "{$a}");
//                }
//                print_r($original[$i] . " " . $i . " " . $needed[$j] . " " . $j . PHP_EOL);
                break;
            }
            if ($j === $lenOfSubstr - 1){
                print_r($original[$i] . " " . $i . " " . $needed[$j] . " " . $j . PHP_EOL);

            }

        }
    }
    return $r;
}
var_dump(cutString("Wowoowoowoow", "woo"));

//function cutString(string $original, string $needed): string
//{
//    //$i = 0;
//    $index = 0;
//    $a = 0;
//    $r = "";
//    $lenOfSubstr = (int)strlen($needed);
//
//    for ($i = 0; $i < strlen($original); $i++) {
//        if (($needed[$index] === $original[$i])) {
//            //print_r($needed[$index] . " " . $i . " "  . PHP_EOL);
//            print_r($original[$i] . " " . $i  . PHP_EOL);
//            $a++;
//            //print_r($a . " ");
//            //print_r($original[$i] . PHP_EOL);
//            if ($index < $lenOfSubstr){
//                //print_r($original[$i] . " " . $i . PHP_EOL);
//                $index++;
//                //$i++;
//                //continue;
//
//            } /*elseif ($index < $lenOfSubstr){
//                //print_r($original[$i] . " " . $i . PHP_EOL);
//                $index++;
//                //$i++;
//                continue;
//            } */else {
//                //print_r($original[$i] . " " . $i . PHP_EOL);
//                $index = 0;
//                $i = $a;
//                //continue;
//            }
//        } elseif ($needed[$index] !== $original[$i]) {
//            //print_r($needed[$index] . " " . $i . " "  . PHP_EOL);
//            //print_r($original[$i] . " " . $i . PHP_EOL);
//            $a++;
//            //print_r($a . PHP_EOL);
//            $index = 0;
//            $i = $a;
//        }
//
//        //print_r($a);
//    }
//
//
//    return $r;
//}




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

