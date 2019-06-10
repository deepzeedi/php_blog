<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    $website_title = 'Регистрация';
    require 'blocks/head.php'; 
    ?>
</head>
<body>

    <?php require 'blocks/header.php'; ?>
    <div class="container">
        <h1>Регистрация на сайте</h1>
        <form action="reg/reg.php" method="post"></form>
            <label for="username">Name</label>
            <input type="text" name="username" id="username" class="form-control"> 

            <label for="email">email</label>
            <input type="text" name="email" id="email" class="form-control"> 

            <label for="login">login</label>
            <input type="login" name="login" id="login" class="form-control"> 

            <label for="pass">Password</label>
            <input type="password" name="pass" id="pass" class="form-control"> 
            
            <button type="submit" class="btn btn-success mt-5 mb-5">Register me</button>
    </div>

    
    <?php require 'blocks/footer.php'; ?>
</body>
</html>