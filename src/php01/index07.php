<?php
function Triangle($teihen,$height)
{
    return $teihen * $height / 2;
}
function Sikaku($tate, $yoko)
{
    $sikaku = $tate * $yoko;
    return $sikaku;    
}
function Daikei($hen1, $hen2, $takasa)
{
    $daikei = ($hen1 + $hen2) * $takasa / 2;
    return $daikei;
}
echo Triangle(10,5) . "\n";
echo Sikaku(10,5). "<br>";
echo Daikei(5,10,5). "\n";
