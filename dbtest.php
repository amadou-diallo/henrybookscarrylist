<?php
   error_reporting(E_ALL);
   ini_set('display_errors', 'On');
   $dbc = mysqli_connect("localhost", "root", "sesame");
   if (!$dbc) {
       echo "<p>Unable to connect to MySQL</p>";
    } else if (!mysqli_select_db($dbc,"henrybooks")) {
       echo "<p>Inside MySQL: no HenryBooks</p>";
   } else {
       echo "<p>Connected to HenryBooks!</p>";
   }
?>
