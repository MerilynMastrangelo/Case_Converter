<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $string = $_POST['string'];
        revString($string);
        uppercase($string);
        lowercase($string);
        captalizecase($string);
        altcaseLow($string);
        altcaseUpper($string);
    }else{
        header("Location: ../index.php");
        exit();
    }
function revString($string){
    if(isset($_POST['revString'])){
        $newString = strrev($string);
        echo $newString;
    }
}

function uppercase($string){
    if(isset($_POST['uppercase'])){
        $newString = strtoupper($string);
        echo $newString;
    }
}

function lowercase($string){
    if(isset($_POST['lowercase'])){
        $newString = strtolower($string);
        echo $newString;
    }
}
function captalizecase($string){
    if(isset($_POST['capitalize'])){
        echo ucfirst($string);
    }
}
function altcaseLow($string){
    if(isset($_POST['altcaselow'])){
        $string = strtoupper($string);
        $length = strlen($string);
        for($i=0; $i <=$length-1; $i++){
            if($i % 2 == 0){
                $string[$i] = strtolower($string[$i]);
            }
            echo $string[$i];
        }
    }
}
function altcaseUpper($string){
    if(isset($_POST['altcaseupper'])){
        $string = strtolower($string);
        $length = strlen($string);
        for($i=0; $i <=$length-1; $i++){
            if($i % 2 == 0){
                $string[$i] = strtoupper($string[$i]);
            }
            echo $string[$i];
        }
    }    
}