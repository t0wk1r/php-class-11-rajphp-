<?php

$mark = 740;

switch ($mark){
    case ($mark < 0 || $mark >100):
        echo "This is invalid Number";
    break;
    case ($mark >= 80):
        echo "Apni A+ paisen";
    break;
    case ($mark >= 70):
        echo "Apni A paisen";
    break;
    
    default:
        echo "this is nothing";
    break;
}
