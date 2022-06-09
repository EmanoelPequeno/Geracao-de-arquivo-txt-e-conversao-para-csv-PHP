<?php

    $convertedFile = file('C:\xampp\htdocs\unconvertedFile.txt');
    $convertedFile = rename('C:\xampp\htdocs\unconvertedFile.txt', 'C:\xampp\htdocs\convertedFile.csv');
    
    header('location: screen.php');

?>