<?
    $n1=10;
    $n2=5;
    echo "Operators";


    echo "\n1.Arithmetic Operator";
    $add=$n1+$n2;               // + operator
    echo "\nAddition: $add";
    $sub=$n1-$n2;               // - operator
    echo "\nSubtraction: $sub";
    $mul=$n1*$n2;               // * operator
    echo "\nMultiplication: $mul";
    $div=$n1/$n2;               // / operator
    echo "\nDivision: $div";
    $mod=$n1%$n2;               // % operator
    echo "\nModulus: $mod";
    $exp=$n1**$n2;              // ** operator
    echo "\nExponentation: $exp";


    echo "\n2.Increment and decrement Operator";
    $n3=4;
    $preinc=++$n3;        //pre-increment
    echo "\nPre-increment: $preinc";
    $n3=4;
    $postinc=$n3++;     //post-increment
    echo "\nPost-increment: $postinc";
    $n3=4;
    $predec=++$n3;      //pre-decrement
    echo "\nPre-decrement: $predec";    
    $n3=4;
    $postdec=$n3++;     //post-decrement
    echo "\nPost-increment: $postdec";

    echo "\n3.Comparison Operator";
    $n1=25;
    $n2=30;
    if($n1==$n2){   // equal to operator
        echo "\nBoth are equal";
    }
    else{
        echo "\nNot equal";
    }
    if($n1!=$n2){   // not equal to operator
        echo "\nBoth are not equal";
    }
    else{
        echo "\nInvalid";
    }
    if($n1<$n2){   // less than operator
        echo "\nn1 is less than n2";
    }
    else{
        echo "\nn1 is not less than n2";
    }
    if($n1<=$n2){   // less than or equal to operator
        echo "\nn1 is less than or equal to n2";
    }
    else{
        echo "\nn1 is not less than or equal to n2";
    }
    if($n1>$n2){   // greater than operator
        echo "\nn1 is greater than n2";
    }
    else{
        echo "\nn1 is not greater than n2";
    }
    if($n1>=$n2){   // greater than or equal to operator
        echo "\nn1 is greater than or equal to n2";
    }
    else{
        echo "\nn1 is not greater than or equal to n2";
    }


    echo "\n3.Logical Operator";
    $a=10;
    $b=23.455;
    if($a<$b && $a==$b)  //and  or && operator
    {
        echo "\nCondition true";
    }
    else{
        echo "\nCondition false";
    }
    if($a<$b || $a==$b)  //or or || operator
    {
        echo "\nCondition true";
    }
    else{
        echo "\nCondition false";
    }
    if(!$a){            // ! or not operator
        echo "\nCondition true";
    }
    else{
        echo "\nCondition false";
    }


    echo "\n4.Assignment Operator";
    $n1=10;
    $n2=20;
    $n1+=$n2;               // += operator
    echo "\nAddition: $n1";
    $n1=30;
    $n2=20;
    $n1-=$n2;               // -= operator
    echo "\nSubtraction: $n1";
    $n1=10;
    $n2=20;
    $n1*=$n2;               // *= operator
    echo "\nMultiplication: $n1";
    $n1=10;
    $n2=20;
    $n1/=$n2;               // /= operator
    echo "\nDivision: $n1";
    $n1=10;
    $n2=20; 
    $n1%=$n2;              // %= operator
    echo "\nModulus: $n1";
    

    echo "\n5.Conditional Operator";  
    $n1=20;
    $n2=10;
    $n=($n1>$n2)?$n1:$n2;   // ?: operator
    echo "\nCondition : $n";


    echo "\n6.Precedence of php Operator"; 
    $n=100+20*10;
    echo "Precedence of php operators: $n"
?>