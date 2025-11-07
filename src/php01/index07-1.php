<?php

function sankaku($teihen, $takasa){
    $sankaku = $teihen * $takasa /2;
    return $sankaku;
}
function sikaku($tate, $yoko){
    $sikaku = $tate * $yoko;
    return $sikaku;
}
function daikei($joutei, $katei, $takasa2){
    $daikei = ($joutei + $katei) * $takasa2 /2;
    return $daikei;
}

echo sankaku(10,20) . "<br>";
echo sikaku(10,20) . "<br>";
echo daikei(10,20,10) . "<br>";


// function hantei($score1, $score2, $score3){
//     $total = $score1 + $score2 + $score3;
//     if ($total > 210){
//         echo "合計点は" . $total . "なので合格です";
//     }else{
//         echo "合計点は" . $total . "なので不合格です";
//     }
// }

// echo hantei(60,80,71);


// function number($a,$b){
//     $number = $a * $b;
//     return $number;
// }
// echo number(1,5);


// function text($number1, $number2){
//     $value = $number1 + $number2;
//     return $value;
// }

// echo text(2,3);


// function outputHello(){
//     echo "Hello world";
// }

// outputHello();


// function outputNumber($a){
//     echo "引数の値は" . $a . "です";
//     return;
// }

// outputNumber(5);
