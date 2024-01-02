<?php

    echo "1.For loop";
    for($i=0;$i<=5;$i++){   // for syntax
        echo "\n$i";
    }

    echo "\n2.While Loop";
    $i=0;
    while($i<=5){    //while syntax
        echo $i;
        $i++;
        echo "\n";
    }

    echo "\n3.DoWhile Loop";
    $i=0;
    do{
        echo"\n$i";
        $i++;
    }while($i<=5);


    echo "\n4. For each loop";
    $arr=array(20,10,30);
    foreach($arr as $values){   //foreach syntax
        echo "\n$values";
    }

    echo "\n5.Break Statement";
    $i=0;
    while($i<=5){    //while syntax
        echo $i;
        $i++;
        echo "\n";
        if($i==3)
            break;
    }



    echo "\n6.Continue Statement";
    $array = array( 1, 2, 3, 4, 5);
    foreach( $array as $value ) {
        if( $value == 3 )continue;
        echo "\n $value";
    }
?>