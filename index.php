<?php 
    include 'script.php';
?>
<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div align="center" class="box-index">
            <img src="cformLogo.gif" alt="" srcset="">
            <h1>Login Page</h1>
        
            <form method="post" autocomplete="off">
                <label for="username">Surname:</label>
                <input type="text" name="name" required><br><br>
                <label for="username">Matric Number:</label>
                <input type="number" name="matric_no" required><br><br>
                <input type="submit" class="submit" name="login" value="Login">
            </form><br>
        </div>
        
        <div align='center'>
            <?php if(isset($_POST["login"])){ echo $error; }?>
        </div>
    </body>
    </html>