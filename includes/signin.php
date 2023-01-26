<?php
ob_start();
session_start();
include('database.php');


if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $hashedPassword = password_hash($password,PASSWORD_DEFAULT);

    $sql = "SELECT * FROM users WHERE email = :email";
    $stmt = $db->prepare($sql);
    $stmt->execute(['email' => $email]);
    $user = $stmt->fetch();
    echo $user;
    if($user){
        $sql = "SELECT * FROM users WHERE email = :email";
        $stmt = $db->prepare($sql);
        $stmt->execute(
            [
                'email' => $email, 
            ]
        );
        $user = $stmt->fetch();
        $_SESSION['user']['firstname'] = $user['firstname'];
        $_SESSION['user']['email'] = $user['email'];
        $_SESSION['user']['id'] = $user['ID'];
        var_dump($_SESSION['user']['id']);
        header('Location: ../index.php');
        ob_end_flush();

    }else{
        $error = "Incorrect email or password";
    }
}

