<?php declare(strict_types=1);


function cutString(string $original, string $needed): string
{
    $i = 0;
    $index = 0;
    $a = 0;
    $r = "";
    $lenOfSubstr = (int)strlen($needed);

    for($i = 0; $i < strlen($original); $i++) {
        if (($needed[$index] === $original[$i])) {
            //print_r($needed[$index] . PHP_EOL);
            print_r($original[$i] . PHP_EOL);
            $index++;
            //$i++;

            //continue;



        } else {
            //print_r($needed[$index] . PHP_EOL);
            //print_r($original[$i] . PHP_EOL);
            $r = $original[$i];
            $i++;
            $index = 0;




        }
        if($index === $lenOfSubstr){
            $index = 0;
        }

        //print_r($needed[$index] . PHP_EOL  . $original[$i]);
    }


    return $r;
}

//function cutString(string $original, string $needed): string
//{
//    $i = 0;
//    $index = 0;
//    $a = 0;
//    $r = "";
//    $lenOfSubstr = (int)strlen($needed);
//
//    for($i = 0;$i < strlen($original); $i++) {
//        if (($needed[$index] === $original[$i])) {
////            for ($y = 0; $y < strlen($needed); $y++) {
////                //print_r($needed[$index] . PHP_EOL);
//                print_r($original[$i] . PHP_EOL);
//                $index++;
//                $i++;
////            }
//            if ($index === $lenOfSubstr) {
//                $index = 0;
//            }
//            if (($needed[$index] !== $original[$i])) {
//                $index = 0;
//                continue;
//            }
//        } else {
//                //print_r($needed[$index] . PHP_EOL);
//                //print_r($original[$i] . PHP_EOL);
//                $index = 0;
//                $r = $original[$i];
//                //$i++;
//
//                continue;
//            }
//            //print_r($needed[$index] . PHP_EOL  . $original[$i]);
//        }
//
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

var_dump(cutString("woo6yhreewyjujkwotwoo7", "woo"));