<?php

$mark = isset($_POST["num"])?$_POST["num"] : NULL;

    if($mark <0 || $mark >100){
        echo "this is invalid number";
    }elseif($mark >=80){
        echo "Apni A+ paisen";
    }elseif($mark >=70){
        echo "Apni A paisen";
    }elseif($mark >=60){
        echo "Apni A- paisen";
    }elseif($mark >=50){
        echo "Apni B paisen";
    }elseif($mark >=40){
        echo "Apni c paisen";
    }elseif($mark >=33){
        echo "Apni D paisen";
    }else{
        echo "apni Fail korsen";
    }




