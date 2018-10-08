<?php
/*
   Project: login-system, Version: 1.0
   Module: db.php, Version: 1.0
   Programmer: Branden Manibusan, Date: 10/07/2018

   Database connection settings
*/
$host = 'localhost';
$user = 'root';
$pass = '#bmanibusan';
$db = 'accounts';
$mysqli = new mysqli($host,$user,$pass,$db) or die($mysqli->error);
