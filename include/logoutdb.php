<?php
  session_start();
  if(!isset($_SESSION['username'])){
    header("Location: ../login.php?login_is_required");
  }
  $dbServername = "localhost";
  $dbUsername = "root";
  $dbPassword = "";
  $dbName = "loginlol";

  $connectdb = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

  if(!$connectdb){
    die("Failed connection: ".mysqli_connection_error());
  }
  if(isset($_SESSION['username'])){
    echo '<form action="logout.php" method="POST">
    <button type="submit" name="submit">Logout</button>
    </form>';
    }
?>
