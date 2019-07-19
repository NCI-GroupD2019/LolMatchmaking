<?php

if(isset($_POST['regsubmit'])){

    include_once 'connection.php';

    $username = mysqli_real_escape_string($loginlolconn, $_POST['username']);
    $email = mysqli_real_escape_string($loginlolconn, $_POST['email']);
    $password = mysqli_real_escape_string($loginlolconn, $_POST['password']);

                $checkname = "SELECT * FROM login WHERE username='$username'";
                $checknameresult = mysqli_query($loginlolconn, $checkname);
                $NameresultCheck = mysqli_num_rows($checknameresult);

                $checkemail = "SELECT * FROM login WHERE email='$email'";
                $checkemailresult = mysqli_query($loginlolconn, $checkemail);
                $EmailresultCheck = mysqli_num_rows($checkemailresult);

                if ($NameresultCheck > 0) {
                    $usernamealert = "Sorry that Username is already taken. Please user another Username!";
                    echo "<script type='text/javascript'>
                    alert('$usernamealert');
                    window.location = '../register.php';
                    </script>";

                }elseif ($EmailresultCheck > 0){
                    $emailalert = "Sorry that Email is already taken. Please user another Username!";
                    echo "<script type='text/javascript'>
                    alert('$emailalert');
                    window.location = '../register.php';
                    </script>";
                }
                else{
                    $encryptpw = password_hash($password, PASSWORD_DEFAULT);
                    $sql = "INSERT INTO login (username, email, upassword) VALUES ('$username', '$email', '$encryptpw' );";
                    mysqli_query($loginlolconn, $sql);
                    $regsuccessalert = "Successfully signed up!";
                    echo "<script type='text/javascript'>
                    alert('$regsuccessalert');
                    window.location = '../login.php';
                    </script>d";
                    exit();
                }

              }else{
                header("Location: ../registration.php");
                exit();
}
