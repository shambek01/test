<?php
    //task1
    for($i=0;$i<10;$i++){
        if($i<4){
            echo 'a';
            echo "<br>";
        }
        if($i>=4&&$i<=7){
            echo 'b';
            echo "<br>";
        }
        if($i>7){
            echo 'c';
            echo "<br>";
        }
    }
    //task2
    $name = "Bekezhan";
    $surname = "Shamshikenov";
    echo $name." ".$surname." ";
    echo strlen($name." ".$surname);
    //task3
    for($i=0;$i<=100;$i++){
        if($i%10==0){
            echo $i;
        }
    }
?>

   