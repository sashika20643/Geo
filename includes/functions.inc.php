<?php
/* function emptyInputssignup($name, $email, $username, $psw, $pswrepeat){
    $result;
    if(empty($name) || empty($email) || empty($username) || empty($psw) ||empty($pswrepeat)){
        $result =true;

    }
    else{
        $result = false;
    }
    return $result;
 }
 function invalidUid($username){
    $result;
    if(!preg_match("/^[a-zA-Z0-9]*$/", $username)){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}
 function invalidEmail($email){
    $result;
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $result =true;
    }
    else{
        $result = false;
    }
    return $result;
}

 function pswMatch($psw , $pswrepeat){
    $result;
    if($psw !== $pswrepeat){
        $result =true;
    }
    else{
        $result = false;
    }
    return $result;
}
function uidExists($conn, $username, $email){
    $sql = "SELECT * FROM users WHERE usersUid = ? OR usersEmail = ?;";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("Location:../signup.php?error=stmtfailed");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "ss" , $username, $email);
    mysqli_stmt_execute($stmt);
    $resultData = mysqli_stmt_get_result($stmt);

    if($row = mysqli_fetch_assoc($resultData)){
        return $row;

    }
    else{
        return false;
    }
    mysqli_stmt_close($stmt);
}
createUser($conn, $name, $email, $username,$psw){
    $sql = "INSERT INTO users (usersName, usersEmail, usersUid, usersPsw) VALUES (?,?,?,?);";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("Location:../signup.php?error=stmtfailed");
        exit();
    }
    $hashedpsw = password_hash($psw, PASSWORD_DEFAULT);
    mysqli_stmt_bind_param($stmt, "ssss", $name, $email, $username, $hashedpsw);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("Location:../signup.php?error=none");
    exit();

}*/
function emptyInputssignup($name, $email, $username, $psw, $pswrepeat){
    $result = false;
    if(empty($name) || empty($email) || empty($username) || empty($psw) || empty($pswrepeat)){
        $result = true;
    }
    return $result;
}
function emptyInputLogin($username, $psw){
    $result = false ;
    if(empty($username) || empty($psw)){
        $result = true;
    }
    return $result;
}
function invalidUid($username){
    $result = false;
    if(!preg_match("/^[a-zA-Z0-9]*$/", $username)){
        $result = true;
    }
    return $result;
}

function invalidEmail($email){
    $result = false;
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $result = true;
    }
    return $result;
}

function pswMatch($psw , $pswrepeat){
    $result = false;
    if($psw !== $pswrepeat){
        $result = true;
    }
    return $result;
}

function uidExists($conn, $username, $email){
    $sql = "SELECT * FROM users WHERE usersUid = ? OR usersEmail = ?;";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("Location:../signup.php?error=stmtfailed");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "ss", $username, $email);
    mysqli_stmt_execute($stmt);
    $resultData = mysqli_stmt_get_result($stmt);

    if($row = mysqli_fetch_assoc($resultData)){
        return $row;
    } else {
        return false;
    }
    mysqli_stmt_close($stmt);
}

function createUser($conn, $name, $email, $username, $psw){
    $sql = "INSERT INTO users (usersName, usersEmail, usersUid, usersPsw) VALUES (?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("Location:../signup.php?error=stmtfailed");
        exit();
    }
    $hashedpsw = password_hash($psw, PASSWORD_DEFAULT);
    mysqli_stmt_bind_param($stmt, "ssss", $name, $email, $username, $hashedpsw);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("Location:../login.php?error=none");
    exit();
}
/*function loginuser($conn, $username, $psw){
    $uidExists = uidExists($conn, $username, $username);
    if($uidExists === false){
        header("Location:../signup.php?error=wronglogin002");
        exit();
    }
}
$pswHashed = $uidExists["usersPsw"];
$checkPsw = password_verify($psw, $pswHashed);
if($checkPsw ===false){
   
   echo implode ("",$uidExists);
    //header('Location:../signup.php?error=wronglogin001');
    exit();
}else if($checkPsw === true){
    session_start();
    $_SESSION["userid"] = $uidExists["usersId"];
    $_SESSION["useruid"] = $uidExists["usersUid"];
    header('Location:../index.php');
    exit();
}*/
/*function loginuser($conn, $username, $psw){
    $uidExists = uidExists($conn, $username, $username);
    if($uidExists === false){
        header("Location:../signup.php?error=wronglogin002");
        exit();
    }
    
    // Move these lines inside the if statement
    $pswHashed = $uidExists["usersPsw"];
    $checkPsw = password_verify($psw, $pswHashed);
    if ($checkPsw === false) {
        header('Location:../signup.php?error=wronglogin001');
        exit();
    } else if ($checkPsw === true) {
        session_start();
        $_SESSION["userid"] = $uidExists["usersId"];
        $_SESSION["useruid"] = $uidExists["usersUid"];
        header('Location:../index.php');
        exit();
    }
}*/
function loginuser($conn, $username, $psw){
    $uidExists = uidExists($conn, $username, $username);
    
    if ($uidExists === false){
        header('Location:../signup.php?error=wronglogin');
        exit();
    }
    
    $pswHashed = $uidExists["usersPsw"];
    $checkPsw = password_verify($psw, $pswHashed);
    
    if ($checkPsw === false) {
        header('Location:../signup.php?error=wronglogin');
        exit();
    } else {
        session_start();
        $_SESSION["role"] = $uidExists["role"];
        $_SESSION["useruid"] = $uidExists["usersUid"];
        $_SESSION["username"] = $uidExists["usersName"];
        return true; // Return true to indicate successful login
    }
}
?>