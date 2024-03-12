<?php
declare (strict_types = 1);

function getCustomDate(string $getDate): string
{
    $convertDate = $getDate;
    $convertDate = date('d/m/Y', (int)$convertDate);
    return $convertDate;
}

$getDate = "5324352";
var_dump(getCustomDate($getDate));