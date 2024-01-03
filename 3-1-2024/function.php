<?php
    function func(){   // define a function
        echo "hello";
    }
    func();            //calling a function

    function func1($name,$age){       // define function with parameters
        echo "\nName:".$name."\nAge:".$age;
    } 
    func1("Jo",20);    //calling a function with paramters

    $n=10;
    function func2($n){
        $n+=10;
        echo "\n".$n;
    }
    func2($n);
    function func3($n){
        echo "\n$n";
    }
    func3($n);

    function func4($n=10){ //define a default argument
        echo "hello";
    }
    func4(); // calling default argument in the function

    function func5($n1,$n2){     
        $n3=$n1+$n2;
        return $n3;    // declare return 
    }
    echo "Return".func5(10,30);  //calling returning value
?>