<?php
//basic strijgn functions
echo"<h2>PHP string functions</h2>";
$str="welcome to egovernance portal";
$userInput="adminuser";
echo"length of the string:".strlen($str)."<br>";
echo"word count:".str_word_count($str)."<br>";
echo"Reverse:".strrev($str)."<br>";
//case conversions
echo"uppercase:".strtoupper($str)."<br>";
echo"lowercase:".strtolower($str)."<br>";
echo"ucfirst:".ucfirst("government")."<br>";
echo"ucwords:".ucwords("e governance portal")."<br>";
//search & replace
echo"position of 'governanace:".strpos($str,"governance")."<br>";
echo"replacement:".str_replace("portal","website",$str);
//substring&trimming
echo"substring:".substr($str,0,10)."<br>";
echo"trim:".trim($str)."<br>";
echo"ltrim:".ltrim($str)."<br>";
echo"rtrim:".rtrim($str)."<br>";
//string comparision
echo"strcmp:".strcmp("Admin","admin")."<br>";
echo"strcasecmp:".strcasecmp("Admin","admin")."<br>";
//special characters and security
$unsafe="<script>alert('hack')</script>";
echo"htmlspecialcharacters:".htmlspecialcharacters($unsafe)."<br>";
echo"addlashes:".asslashes("O'Reilly")."<br>";

?>