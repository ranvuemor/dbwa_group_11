



<?php

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'group11');
define('DB_PASSWORD', 'rLcgJ1');
define('DB_NAME', 'group11');

$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

if(isset($_POST["submit"])){

$username = trim($_POST["username"]);
$password = trim($_POST["password"]);

$sql = "SELECT ID, user_name, password FROM Users WHERE user_name = ?";

if($stmt = mysqli_prepare($link, $sql)){

    mysqli_stmt_bind_param($stmt, "s", $param_username);

    $param_username = $username;
    $param_pass = $password;

    if(mysqli_stmt_execute($stmt)){
        mysqli_stmt_store_result($stmt);
        
        if(mysqli_stmt_num_rows($stmt) == 1){
            
            mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
            if(mysqli_stmt_fetch($stmt)){
                if($password == $hashed_password)
                {
                    echo "<script type= 'text/javascript'>alert('Login successfull');document.location = '/~akushwaha/index.php';</script>";
                }
                else echo "<script type= 'text/javascript'>alert('Login unsuccessfull');</script>";
            }


        }
        else echo "<script type= 'text/javascript'>alert('Login unsuccessfull');</script>";


    }

}


}


?>

<!DOCTYPE html>
<html>
    <head>
        <title>Split Expenses</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <meta name = "viewport" content = "widht=device-width, initial-scale=1">
        
    </head>

    <body>

       

        <script src="scripts.js"></script>

        
        <div class="header">
            <img src="img/45851.jpg" style = "float:left" width="160" height=""/>
            <div display="inline-block"><h1>Split Expenses</h1></div>
        </div>

        

        <div class = "row">

            <div class = "column full" style = "width:100%; background-color: #bbb;">

            <div class="login_form" style="text-align:center; padding-top:25px;">

                <form method="post">

                    <label for="username"><b>Username</b></label>
                    <input type="text" placeholder="Enter Username" name="username" required>
                    <br>

                    <label for="password"><b>Password</b></label>
                    <input type="password" placeholder="Enter Password" name="password" required>
                    <br>
                        
                    <button type="submit" name="submit">Login</button>

                
                
                </form>
            </div>

           
            </div> 
        </div>
        <div class = "footer">
            <button class="button3" onclick="alert('This website is student lab work and does not necessarily reflect Jacobs University Bremen opinions. Jacobs University Bremen does not endorse this site, nor is it checked by Jacobs University Bremen regularly, nor is it part of the official Jacobs University Bremen web presence. For each external link existing on this website, we initially have checked that the target page does not contain contents which is illegal wrt. German jurisdiction. However, as we have no influence on such contents, this may change without our notice. Therefore we deny any responsibility for the websites referenced through our external links from here. No information conflicting with GDPR is stored in the server.')"> Disclaimer </button>
        </div>  
    </body>
</html>

