<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $string = $_POST['string'];
        reverseString($string);
        uppercase($string);
        lowercase($string);
        captalizecase($string);
    }else{
        header("Location: ../index.php");
        exit();
    }
    
    function reverseString($string){
        if(isset($_POST['reverseString-submit'])){
            $newString = strrev($string);
            echo $newString;
        }
    }
    function uppercase($string){
        if(isset($_POST['uppercase-submit'])){
           echo strtoupper($string);
        }           
    }
    function lowercase($string){
        if(isset($_POST['lowercase-submit'])){
            echo strtolower($string);
        }
    }
    function captalizecase($string){
        if(isset($_POST['captalizecase-submit'])){
            echo ucfirst($string);
        }
    }