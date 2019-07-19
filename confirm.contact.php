<?php
    $conn = mysqli_connect("localhost", "root", "", "contactlol");

    if (!$conn){
      header('Location: ./contact.php?Error in connecting');
    }

    if(!mysqli_select_db($conn, 'contactlol'))
    {
      header('Location: ./contact.php?Database is not connected');
    }

    $name = $_POST['myname'];
    $email = $_POST['myemail'];
    $subject = $_POST['mysubject'];
    $message = $_POST['mymessage'];

    $sql = "INSERT INTO feedback (name, email, subject, message)
    VALUES ('$name', '$email', '$subject', '$message')";
    if(mysqli_query($conn, $sql))
    {
      header('Location: contact.confirm.php');
    }
?>
