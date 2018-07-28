<?php

//INITIALIZE START YEAR 
$timestamp = strtotime( '1980');
$year = date( 'Y', $timestamp);


//INITIALIZE STOP YEAR 
$timestamp = strtotime('2018');
$stopYear = date( 'Y', $timestamp);

//INITIALIZE LEAP YEAR COUNTER 
$counter = 0;

//RUN A WHILE LOOP TO PRINT YEAR //
while ($year <= $stopYear){
 if (isLeapYear($year)){
                          $counter = $counter = $counter + 1; 
                          echo $year . ' Leap Year ' . '<br>';
                          }
                          else 
                          echo $year . '<br>';
                          
                          //INCREMENT YEAR 
                         $year = $year + 1;
                          }
                          
                          // ECHO TOTAL NUMBER OF LEAP YEARS 
                          echo '<br>' . 'Total number of leap years = ' . $counter;
                          
                          //FUNCTION TO DETERMINE A LEAP YEAR 
                          
                          function isLeapYear ($year) {
                          
                          $isLeapYear = false;
                          if ((($year % 4)==0 && ($year % 100)!=0)  || ($year % 400)==0)
                          $isLeapYear = true; 
                          return $isLeapYear;
                          }
?>