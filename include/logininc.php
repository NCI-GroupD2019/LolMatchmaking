<?php

session_start();

if(isset($_POST['loginsubmit'])) {

    include './connection.php';

    $username = mysqli_real_escape_string($loginlolconn, $_POST['username']);
    $password = mysqli_real_escape_string($loginlolconn, $_POST['password']);

        $sql = "SELECT * FROM login WHERE username='$username'";
        $result = mysqli_query($loginlolconn, $sql);
        $resultCheck = mysqli_num_rows($result);
        if ($resultCheck < 1) {
            header("Location: ../login.php?login=errorfound");
            exit();
        } else {
            if($row = mysqli_fetch_assoc($result)) {
                //De-hashing the password
                $hashedPwdCheck = password_verify($password, $row['upassword']);
                if($hashedPwdCheck == false) {
                    header("Location: ../home.php?login=error1111");
                    exit();
                } elseif ($hashedPwdCheck == true) {
                    //Log in the user here
                    $_SESSION['username'] = $row['username'];
                    header("Location: ../home.php?login=success");
                    exit();
                }
            }
        }
      }
    else {
    header("Location: ../home.php?login=error");
    exit();
}
