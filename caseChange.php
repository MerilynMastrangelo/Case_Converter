<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $string = $_POST['string'];
        revString($string);
        uppercase($string);
        lowercase($string);
        captalizecase($string);
        altcaseLow($string);
        altcaseUpper($string);
        countNumLet($string);
        wordCount($string);
        lineCount($string);
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
function countNumLet($string){
    //preg_replace is used to perform a regular expression for search and replace the content
    //function: (pattern, replace, string to search)
    if(isset($_POST['count'])){
        $newString = preg_replace("/[^A-Za-z0-9]/","", $string);
        echo strlen($newString);
    }
}
function wordCount($string){
    if(isset($_POST['countWrd'])){
        echo str_word_count($string);
    }
}
function lineCount($string){
    //pre_slip() -- is used to convert the given string into an array
    //($patern, string to search, limit (0 or 1) indicates no limit, true or false flags)
    if(isset($_POST['countLine'])){
        $string = preg_split("/\n|\r/", $string);
        $numString = count($string);
        echo $numString;
    }
}