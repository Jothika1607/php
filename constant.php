<?php
    //define() constants
    define("NAME","Jothika"); // define constant using define() function
    echo NAME;    // display the constant value
    echo "\n";
    echo defined("NAME"); // check the constant value is defined or not and display in boolen value like 0 or 1
    echo "\n";
    const age=23; // define constant using const keyword
    echo age;
    echo "\n";
    $id=1020;
    define("ID".$id,$id); //it will make the already defined values as constant
    echo "ID";
    echo "\n";
    
    //Magical Constant
    echo PHP_VERSION;
    echo "\n";
    echo __LINE__; // current line number of the file
    echo "\n";
    echo __FILE__; // path of the file
    echo "\n";
    echo __FUNCTION__;
?>