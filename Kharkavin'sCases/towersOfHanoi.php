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

function moveDetails(): void
{
    $initalArrayWithDetails = array_reverse([
        "0" => 0,
        "1" => 1,
        "2" => 2,
        "3" => 3,
    ]);
    $arrayWithoutDetailsNumOne = ["0", "1", "2", "0"];
    $arrayWithoutDetailsNumTwo = [];

    foreach ($initalArrayWithDetails as $v) {

        print_r("|" . $v . "|" . " " . " ");
        if (!$arrayWithoutDetailsNumOne) {
            print_r("|" . " " . "|" . " " . " ");
        }
        if (!$arrayWithoutDetailsNumTwo) {
            print_r("|" . " " . "|" . " " . PHP_EOL);
        }

    }

    foreach ($arrayWithoutDetailsNumOne as $v) {
        $lastValueOfArrayWithoutDetailsNumOne = $arrayWithoutDetailsNumOne[count($arrayWithoutDetailsNumOne) - 1];
        if (count($arrayWithoutDetailsNumOne) === 1){
            continue;
        }
        if (count($arrayWithoutDetailsNumOne) > 1) {
            if ($lastValueOfArrayWithoutDetailsNumOne <= $arrayWithoutDetailsNumOne[0]){
                print_r("капец");
            }
        }
    }


}

var_dump(moveDetails());
//var_dump(towersOfHanoi());



