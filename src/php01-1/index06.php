<?php

for ($i = 1; $i <= 5; $i++){
    for ($j = 1; $j <= 5; $j++){
        echo "●";
    }
    echo "<br>";
}



// $i = 1;

// while($i <= 50){
//     if($i % 15 === 0){
//         echo "FizzBuzz" . "<br>";
//         $i++;
//     }elseif($i % 5 === 0){
//         echo "Buzz" . "<br>";
//         $i++;
//     }elseif($i % 3 === 0){
//         echo "Fizz" . "<br>";
//         $i++;
//     }else{
//         echo $i . "<br>";
//         $i++;
//     }
// }


// do{
//     echo "num = " . $num . "<br>";
//     $num++;
// }while ($num < 3);

// while ($i < 100){
//     if ($i % 3 == 0){
//         $i++;
//         continue;
//     }elseif($i == 20){
//         break;
//     }
//     echo $i . "<br>";
//     $i++;
// }