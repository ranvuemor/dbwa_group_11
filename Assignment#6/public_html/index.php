<?php

include "/~schaurasia/extend_php/add_db.php";

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
        <div id="navbar">
            <ul>
                <li><a onclick="home()" class="button2">Home</a></li>
                <li><a onclick="groups()" class="button2">Groups</a></li>
                <li><a onclick="activity()" class="button2">Activity</a></li>
                <li><a onclick="account()" class="button2">Account</a></li>
                <li><a href="imprint.html" class="button2">Imprint</a></li>
            </ul>
        </div>

        

        <div class = "row">
            <div class = "column left" style = "background-color:#aaa;">
                <div id="menu">
                    <ul>
                        <li class="support1"><a onclick="addExpenses()" class="button1">Add Expenses</a></li>
                        <li class="support1"><a onclick="settle()" class="button1">Settle</a></li>
                        <li class="support1"><a onclick="checkBalance()" class="button1">Check Balance</a></li>
                    </ul>
                </div>
            </div>
            <div class = "column right" style = "background-color: #bbb;">
                <div class = "container">
		<p>Add a new group:</p>
                <form method="POST" action="/~schaurasia/extend_php/add_db.php" enctype="multipart/form-data>
                    <label for="gname">Group Name: </label>
                    <input type="text" id="gname" name="gname"><br>
                    <label for="mname">Your Name: </label>
                    <input type="text" id="mname" name="mname"><br>
                    <label for="contact">Please enter the email address:  </label>
                    <input type="text" id="contact" name="contact"><br>
                    <!-- <label for="ename"> The expenses was made on: </label>
                    <input type="text" id="ename" name="ename"><br>
                    <label for="date">Today's date: </label>
                    <input type="text" id="date" name="date"><br> -->

			<br>
                    <input type="submit" name="submit" value=" Submit ">
                </form>
		</div
            </div> 
        </div>
        <div class = "footer">
            <button class="button3" onclick="alert('This website is student lab work and does not necessarily reflect Jacobs University Bremen opinions. Jacobs University Bremen does not endorse this site, nor is it checked by Jacobs University Bremen regularly, nor is it part of the official Jacobs University Bremen web presence. For each external link existing on this website, we initially have checked that the target page does not contain contents which is illegal wrt. German jurisdiction. However, as we have no influence on such contents, this may change without our notice. Therefore we deny any responsibility for the websites referenced through our external links from here. No information conflicting with GDPR is stored in the server.')"> Disclaimer </button>
        </div>  
    </body>
</html>

