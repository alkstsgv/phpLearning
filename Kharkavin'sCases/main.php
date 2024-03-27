<?php declare(strict_types=1);


function cutString(string $original, string $needed): string
{
    $i = 0;
    $index = 0;
    $a = 0;
    $r = "";
    while($i !== strlen($original)) {
        if ($needed[$index] === $original[$i]) {
            print_r($needed[$index] . PHP_EOL);
            //print_r($original[$i] . PHP_EOL);
            $index++;
            $i++;

            continue;

        } elseif($needed[$index] !== $original[$i]) {
            $i++;
            $index = 0;

        }
        //print_r($needed[$index] . PHP_EOL  . $original[$i]);
    }


    return $r;
}




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

var_dump(cutString("Wowoowow", "woo"));