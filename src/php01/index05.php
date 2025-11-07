<?php
$people = "Satoko";

switch($people){
    case "Taro":
        echo "太郎です";
        break;
    case "Jiro":
        echo "次郎です";
        break;
    case "Saburo":
        echo "三郎です";
        break;
    default:
    echo "誰とも一致しません";
    break;
}

$a = 7;

$result = ($a > 5)? "true" : "False";
echo $result;
