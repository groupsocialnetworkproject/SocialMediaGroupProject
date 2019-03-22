<?php

//Including Database configuration file.

include_once "database.php";
$db = new Database();
$connection = $db->open_connection("groupproject");

//Getting value of "search" variable from "script.js".

if (isset($_POST['search'])) {
  $search = $_POST['search'];
  $Query = "SELECT email FROM accounts WHERE email LIKE '%$search%' LIMIT 5";
  
  $ExecQuery = MySQLi_query($connection, $Query);

  echo '
  <a class="dropdown-item">';

   //Fetching result from database.

   while ($Result = MySQLi_fetch_array($ExecQuery)) {

       ?>

   <!-- Assigning searched result in "Search box" in "search.php" file. -->

       <?php echo $Result['email']; ?>

   <!-- Below php code is just for closing parenthesis. Don't be confused. -->

   <?php

}}


?>

</a>