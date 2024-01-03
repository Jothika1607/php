<?php
    /* Three variable scope are local, global, and static variable */
    $x=5; // global variable it can be accessed only outside the function
    function scope(){
        static $count=0;
        global $x; //this keyword is used to access the global variable inside the function
        echo "$x";
        $x=10;     //local scope it can be accessed within in the function
        echo "\n$x";
    }
    function scope1(){
        static $count=0; /*static variable will not lose its value when the function exists and will still hold that values should the function be called again*/
        $count++;
        echo "\n";
        echo $count;
    }
    scope();
   
    echo "\n$x";

    scope1(); //function calls
    scope1();
    scope1();
?>