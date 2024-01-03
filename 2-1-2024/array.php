<?php

    echo "1.Numberic or indexed array";
    $arr=array(10,"Jo",20); //array declaration
    var_dump($arr);     //variable type
    echo "\n$arr[2]";      //display the particular items using indexed
    $arr[1]=30;       //change the value
    echo "\n$arr[1]\n"; 
    echo count($arr);  //using count() function
    array_push($arr,40);  // add extra values into the array
    echo "Value".$arr[2];


    echo "\n 2.Associative array";
    $arr=array("Name"=>"Jo", "Id"=>12045, "age"=>23);  // first method to create associative array
    var_dump($arr);

    $arr["Name"]="Jo";  // second method to create array
    $arr["Id"]=12453;
    $arr["Age"]=23;
    echo $arr["Name"];   // access the array
    $arr["Age"]=10;      //change value of array
    echo $arr["Age"];
    foreach($arr as $x=>$y){ // loop through the items
        echo "$x=>$y";
    }


    echo "\nMultidimensional array";
    $arr=array(                                 // mulidimensional array declaration
        "Jo"=>array("id"=>1230,"age"=>23),
        "Karthi"=>array("id"=>234,"age"=>20),
        "Anu"=>array("id"=>455,"age"=>40)
    );
    echo "\n";
    echo $arr["Karthi"]["age"];         // accessing the array


    echo "\nSorting the array\n";
    $arr=array(45,3,7,85,23);  
    sort($arr);               // sort the array in ascending 
    $len=count($arr);
    for($i=0;$i<$len;$i++){
        echo "\t".$arr[$i];
    } 
    echo "\n";

    $arr=array(45,3,7,85,23);  
    rsort($arr);               // sort the array in descending 
    $len=count($arr);
    for($i=0;$i<$len;$i++){
        echo "\t".$arr[$i];
    } 
    echo "\n";

    $arr=array("J0"=>20,"kar"=>12,"anu"=>78);
    asort($arr);               //sort the associative array in ascending according to the values
    foreach($arr as $x=>$y ){
        echo "\t$x=>$y";
    }
    echo "\n";

    $arr=array("J0"=>20,"kar"=>12,"anu"=>78);
    arsort($arr);               //sort the associative array in descending according to the values
    foreach($arr as $x=>$y ){
        echo "\t$x=>$y";
    }
    echo "\n";


    $arr=array("J0"=>20,"kar"=>12,"anu"=>78);
    ksort($arr);               //sort the associative array in ascending according to the keys
    foreach($arr as $x=>$y ){
        echo "\t$x=>$y";
    }
    echo "\n";
?>