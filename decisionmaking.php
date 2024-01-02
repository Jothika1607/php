<?php
    echo "\n1.If Condition";
    $n1=20;
    $n2=10;
    if($n1>$n2){      // if syntax
        echo "\nCondition True";
    }


    echo "\n2.If Else Condition";
    $n1=20;
    $n2=10;
    if($n1>$n2){      // if else syntax
        echo "\nCondition True";
    }
    else{
        echo "\nCondition False";
    }


    echo "\n3.Elseif Condition";
    $n1=20;
    $n2=10;
    if($n1>$n2){      // else if syntax
        echo "\nCondition True";
    }
    elseif($n1<$n2){
        echo "\nCondition False";
    }
    else{
        echo "\nInvalid";
    }

    echo "\n4. Switch Condition";
    $n=3;
    switch($n){       // switch syntax
        case 1:
            echo "\nCase 1 true";
            break;
        case 2:
            echo "\nCase 2 true";
            break;
        case 3:
            echo "\nCase 3 true";
            break;
        default:
            echo "\nInvalid";
            break;
    }
?>