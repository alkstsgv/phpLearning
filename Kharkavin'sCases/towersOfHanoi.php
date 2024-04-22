<?php
declare(strict_types=1);

function towersOfHanoi(string $userInput = null): string
{
    $prompt = "Приветствую вас здесь, сэр. Вы попали в игру 'Ханойские башни'" . "\n\n";
    $nothingInput = "Вы ничего не ввели, до встречи!";
    readline_callback_handler_install($prompt, 'towersOfHanoi');
    readline_callback_read_char();
    $line = readline($userInput);
    return $line ? $line : $nothingInput;
}

function setArrays(): void
{
    $initalArrayWithDetails = array_reverse([
        "0" => 0,
        "1" => 1,
        "2" => 2,
        "3" => 3,
    ]);
    $arrayWithoutDetailsNumOne = ["0", "1", "2", "0"];
    $arrayWithoutDetailsNumTwo = [];

    

}

function setMovingRules (array $defaultPyramid, array $pyramidNum1, array $pyramidNum2): void
{
    foreach ($defaultPyramid as $v) {

        print_r("|" . $v . "|" . " " . " ");
        if (!$pyramidNum1) {
            print_r("|" . " " . "|" . " " . " ");
        }
        if (!$pyramidNum2) {
            print_r("|" . " " . "|" . " " . PHP_EOL);
        }

    }

    foreach ($defaultPyramid as $v) {
        $lastValueOfArrayPyramidNum1 = $pyramidNum1[count($pyramidNum1) - 1];
        if (count($pyramidNum1) === 1){
            continue;
        }
        if (count($pyramidNum1) > 1) {
            if ($lastValueOfArrayWithoutDetailsNumOne <= $pyramidNum1[0]){
                print_r("капец");
            }
        }
    }
}

var_dump(setArrays());
//var_dump(towersOfHanoi());



