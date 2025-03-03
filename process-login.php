<?php

$is_invalid = false;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  
    $db_connections = require __DIR__ . "/database.php";
    $mysqli1 = $db_connections['mysqli_login'];
    
    $sql = sprintf("SELECT * FROM user
                    WHERE email = '%s'",
                   $mysqli1->real_escape_string($_POST["email"]));
    
    $result = $mysqli1->query($sql);
    
    $user = $result->fetch_assoc();
    
    if ($user) {
        
        if (password_verify($_POST["pswd"], $user["password_hash"])) {
            
            session_start();
            
            session_regenerate_id();
            
            $_SESSION["user_id"] = $user["id"];
            
            header("Location: login-success.html");
            exit;
        }
    }
    
    $is_invalid = true;
    

}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    <style>
    body {
        background-image: url('homebanner.jpg');
        background-size: cover; 
        background-repeat: no-repeat;
         
    }
</style>
</head>
<body>
    
    <h1>Login</h1>
    
    <?php if ($is_invalid): ?>
        <em>Invalid login</em>
    <?php endif; ?>
    
    <form method="post">
        <label for="email">email</label>
        <input type="email" name="email" id="email"
               value="<?= htmlspecialchars($_POST["email"] ?? "") ?>">
        
        <label for="password">Password</label>
        <input type="password" name="pswd" id="password">
        
        <button>Log in</button>
    </form>
    
</body>
</html>







