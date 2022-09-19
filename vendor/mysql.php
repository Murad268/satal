<?php
   $connect = mysqli_connect("localhost", "root", "", "satal");
   if(!$connect) {
      die("Error connect to db");
   }

   $dbh = new PDO('mysql:host=localhost; dbname=satal', "root", "");