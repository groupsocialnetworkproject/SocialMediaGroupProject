<?php

//Including Database configuration file.

include_once "database.php";
$db = new Database();
$connection = $db->open_connection("groupproject");

//Getting value of "search" variable from "script.js".

if (isset($_POST['search'])) {
  $search = $_POST['search'];
  $Query = "SELECT profile_picture, email FROM accounts WHERE email LIKE '%$search%' LIMIT 5";
  
  $ExecQuery = MySQLi_query($connection, $Query);

   //Fetching result from database.

   while ($Result = MySQLi_fetch_array($ExecQuery)) {
    echo '
        <a class="dropdown-item" href="profile_page.php?user=' . $Result['email'] . '">
          <img align="left" id="ProfilePicture" src="Assets/' . $Result['profile_picture'] . '" width=50 style="padding-right: 5px;"> ' . $Result['email'] . '</a>';

}}


?>