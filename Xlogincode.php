<?php
include('security.php');

$connection = mysqli_connect("localhost","root","Guille0197","adminpanelacba")or die ("No se ha podido conectar al servidor de Base de datos");

if (isset($_POST['login_btn'])) {
    $username_login = $_POST['username'];
    $password_login = $_POST['password'];

    $query = "SELECT * FROM registeruser WHERE username='$username_login' AND password='password_login' ";
    $query_run = mysqli_query($connection, $query);
    $usertype = mysqli_fetch_array($query_run);

        if ($usertype['usertype'] == "admin") {

            $_SESSION['username'] = $username_login;
            header('Location: index.php');

        }else if($usertype['usertype'] == "user"){
            $_SESSION['username'] = $username_login;
            header('Location: 404.html');
        }
        else {
             $_SESSION['status'] = "El Usuario / Contraseña son invalidos";
            header('Location: login.php');
        }
    
    }



?>

