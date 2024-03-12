<?php
declare(strict_types = 1);/*
function sumOfSeries($start, $finish): string
{
    $sum = 0;
    for ($i = $start; $i < $finish; $i++) {
        $sum += $i;
    }

    return (string)$sum;
}
var_dump(sumOfSeries("3","5"));*/

function isPalindrome(string $isPalindrome): bool
{
    $symOfPalindrome = $isPalindrome;
    $normalPalindrom = "";
    $invertPalindrom = "";
    $lenOfPalindrome = mb_strlen($isPalindrome);


    for ($i = 0; $i <= $lenOfPalindrome; $i += 1) {
        $index = $i;
        $startOfPalindrome = mb_substr($symOfPalindrome, $index, 1, "UTF-8");
        $normalPalindrom = "{$normalPalindrom}{$startOfPalindrome}";
        $invertPalindrom = "{$startOfPalindrome}{$invertPalindrom}";
    }
   if ($normalPalindrom === $invertPalindrom){
        return true;
    }
    return false;

}

$palindrome = "maam";
var_dump(isPalindrome($palindrome));
/*
$palindrome = "absba";
print_r($startOfPalindrome = mb_substr($palindrome, 0, 0, "UTF-8"));*/