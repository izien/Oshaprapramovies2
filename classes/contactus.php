<?php
class contactus 
{ 

public static function process(sparam) {

date_default_timezone_set("Africa/Lagos"); 
// OPEN OR CREATE contact.csv IF NOT EXISTING 
$file = fopen("contact.csv", "a");

//CREATE CSV COLUMNS (RUN THIS ONCE)
fputcsv($file, array("Name", "Email", "Message", "Date",));

// APPEND CONTACT DETAILS TO CSV FILE 
fputcsv($file, array($param["name"], $param["email"], $param["message"], date("Y-m-d h:i:sa")));

//CLOSE FILE STREAM 
fclose($file);

//PREPARE EMAIL MESSAGE AND SEND TO USER 
$message = "Hello" ".$param["name"].",\n\nThank you for reaching out.\n\nRegards.";
$headers .= "Return-Path: Movie Admin <rental@oshaprapra.com>\r\n";
$headers .= "From: Movie Admin <rental@oshaprapra.com>\r\n";

//SEND EMAIL
mail($param["email"],subject:"Movie Rental", $message, $headers);

/* 
 ___________________________________
|  READ INFORMATION FROM CSV FILE
|____________________________________
*/
$csv = array_map('str_getcsv', file('contact.csv'));
echo $csv[sizeof($csv)-1][0] . '<br>';
echo $csv[sizeof($csv)-1][1] . '<br>';
echo $csv[sizeof($csv)-1][2] . '<br>';
echo $csv[sizeof($csv)-1][3] . '<br>';
}

}

?>
