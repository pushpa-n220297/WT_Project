<?php
   echo"<h2>PHP variables & Scope</h2>";
   $var_string="E-governance portal";
   $var_int=2025;
   $var_float=77.7;
   $var_bool=true;
   $var_Array=array("G2G","G2B","G2C","G2E");
   echo"<h3>Data types</h3>";
   echo"name of the portal:{$var_string}<br>";
   echo"year of the establishment:{$var_int}<br>";
   echo"success rate:{$var_float}<br>";
   echo"24/7 services:".($var_bool ? "true" : "false")."<br>";
   echo"services provided:";
   print_r($var_Array);
   echo"<br><br>";

   //functions to show scope of the variables
   function service1(){
        $state_services="100+";
        echo"our website provides {$state_services} over all states<br>";
   }
   service1();
   function service2(){
        global $var_string;
        echo"our website {$var_string} is wide over all states in india<br>";
   }
   service2();
   function func3(){
        static $count=0;
        $count++;
        echo"$count <br>";
   }
   echo"users:";
   func3();
   func3();
   func3();
   
?>