<?php
/*if (isset($_POST["submit"])){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $username = $_POST["uid"];
    $psw = $_POST["psw"];
    $pswrepeat= $_POST["pswrepeat"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    $emptyInput = emptyInputssignup($name, $email, $username, $psw, $pswrepeat);
    $invalidUid = invalidUid($username);
    $invalidEmail = invalidEmail($email);
    $pswMatch = pswMatch($psw , $pswrepeat);
    $uidExists = uidExists($conn, $username, $email);

    if ($emptyInput !== false){
        header("Location:../signup.php?error=emptyinput");
        exit();
    }
    
    if ($invalidUid !== false){
        header("Location:../signup.php?error=invalidUid");
        exit();
    }
    
    if ($invalidEmail !== false){
        header("Location:../signup.php?error=invalidEmail");
        exit();
    }
    
    if ($pswMatch !== false){
        header("Location:../signup.php?error=passworddonotMatch");
        exit();
    }
    
    if ($uidExists !== false){
        header("Location:../signup.php?error=Usernametaken");
        exit();
    }
      else{createuser($conn, $name, $email, $username,$psw);
    }

else{
    header("location:../login.php?=error=none");
    exit();
}

}*/
if (isset($_POST["submit"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $username = $_POST["uid"];
    $psw = $_POST["psw"];
    $pswrepeat = $_POST["pswrepeat"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    $emptyInput = emptyInputssignup($name, $email, $username, $psw, $pswrepeat);
    $invalidUid = invalidUid($username);
    $invalidEmail = invalidEmail($email);
    $pswMatch = pswMatch($psw, $pswrepeat);
    $uidExists = uidExists($conn, $username, $email);

    if ($emptyInput !== false) {
        header("Location:../signup.php?error=emptyinput");
        exit();
    }

    if ($invalidUid !== false) {
        header("Location:../signup.php?error=invalidUid");
        exit();
    }

    if ($invalidEmail !== false) {
        header("Location:../signup.php?error=invalidEmail");
        exit();
    }

    if ($pswMatch !== false) {
        header("Location:../signup.php?error=passworddonotMatch");
        exit();
    }

    if ($uidExists !== false) {
        header("Location:../signup.php?error=Usernametaken");
        exit();
    } else {
        createUser($conn, $name, $email, $username, $psw);
    }
} else {
    header("Location:../login.php?error=none");
    exit();
}
?>