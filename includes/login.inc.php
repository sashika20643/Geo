<?php
/*if (isset($_POST["submit"])){
    $username = $_POST["uid"];
    $psw = $_POST["psw"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    $emptyInputs = emptyInputLogin($username, $psw);

    
    if ($emptyInputs !== false){
        header("Location:../signup.php?error=emptyinput");
        exit();
    }

    $lognUser = loginuser($conn, $username, $psw);

}
else{
    header('location:../login.php');
    exit();
}*/
if (isset($_POST["submit"])){
    $username = $_POST["uid"];
    $psw = $_POST["psw"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';
    $emptyInputs = emptyInputLogin($username, $psw);

    if ($emptyInputs !== false){
        header("Location:../signup.php?error=emptyinput");
        exit();
    }

    $loginResult = loginuser($conn, $username, $psw);

    if ($loginResult === true) {
    
        if($_SESSION["role"]==1){
            header('Location: ../admin/dashboard.php');
            exit();
        }
        else{
            header('Location: ../index.php');
            exit();
        }
      
    } else {
        header("Location: ../signup.php?error=loginResult");
        exit();
    }
}
else {
    header('location:../login.php');
    exit();
}

if (isset($_SESSION["username"])) {

    header('Location: ' . $_SERVER['HTTP_REFERER']);
        exit();
}


?>