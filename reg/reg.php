<?php
    $username = trim(filter_var($_POST['username'], FILTER_SANITIZE_STRING));
    $email = trim(filter_var($_POST['email'], FILTER_SANITIZE_EMAIL));
    $login = trim(filter_var($_POST['login'], FILTER_SANITIZE_STRING));
    $pass = trim(filter_var($_POST['pass'], FILTER_SANITIZE_STRING));

    if(strlen($username) <= 3)
        exit();
    else if(strlen($email) <= 3)
        exit();
    else if(strlen($login) <= 3)
        exit();
    else if(strlen($pass) <= 3)
        echo 'минимальная длинна пароля 3 символа!'
        exit();

    $hash = "123adsfdi7dfw8rz8xcqqw5";
    $pass = md5($pass . $hash);

    $user = 'root';
    $password = 'root';
    $db = 'test';
    $host = 'localhost';

    $dsn = 'mysql:host='.$host.';dbname='.$db;
    $pdo = new PDO($dsn, $user, $password);
    $sql = 'INSTRT INTO users(name, email, login, pass) VALUES(?, ?, ?, ?)';
    $query = $pdo->prepare($sql);
    $query->execute([$username, $email, $login, $pass]);

?>