<?php

include "/~akushwaha/extend_php/add_db.php";

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Split Expenses</title>
        <link rel="stylesheet" type="text/css" href="../style.css">
        <meta name = "viewport" content = "widht=device-width, initial-scale=1">
        
    </head>

    <body>
        <script src="../scripts.js"></script>

        
        <div class="header">
            <img src="../img/45851.jpg" style = "float:left" width="160" height=""/>
            <div display="inline-block"><h1>Split Expenses</h1></div>
        </div>
        <div id="navbar">
            <ul>
		<li><a href="../index.php" class="button2">Home</a></li>
                <li><a href="../statics/members.php" class="button2">Members</a></li>
                <li><a onclick="activity()" class="button2">Activity</a></li>
                <li><a href="search.php" class="button2">Search</a></li>
                <li><a href="../imprint.html" class="button2">Imprint</a></li>
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
                <p>Input search item:</p>
                <form method="POST" action="">
                <input type="search" name="search" placeholder="Search here..." required=""/>
                <br><br><input type="submit" name="submit" value=" Search ">
		<br><br>
                </form>
                <?php

                    if(isset($_POST['submit'])){
                    try{
                    $conn = new PDO("mysql:host=localhost; dbname=group11", "group11","rLcgJ1");

                    }catch(PDOException $exc){
                    echo $exc->getMessage();
                        exit();
                    }
                    $query1 = "select * from Groups where GName LIKE '%".$_POST['search']."%'";
                    $query2 = "select * from Members where MName LIKE '%".$_POST['search']."%'";
                    $query3 = "select * from Expenses where EName LIKE '%".$_POST['search']."%'";
                    $query4 = "select * from Expenses where EAmt LIKE '%".$_POST['search']."%'";
                    $prepare1 = $conn->prepare($query1);
                    $prepare1->execute();
                    $result1 = $prepare1->fetchAll(PDO::FETCH_NUM);

                    $prepare2 = $conn->prepare($query2);
                    $prepare2->execute();
                    $result2 = $prepare2->fetchAll(PDO::FETCH_NUM);

                    $prepare3 = $conn->prepare($query3);
                    $prepare3->execute();
                    $result3 = $prepare3->fetchAll(PDO::FETCH_NUM);

                    $prepare4 = $conn->prepare($query4);
                    $prepare4->execute();
                    $result4 = $prepare4->fetchAll(PDO::FETCH_NUM);


                    if($result1){
                        echo "<script type='text/javascript'>alert('This keyword exists in Groups table.');</script>";
                        foreach($result1 as $row){
                        echo $row[0].'|'. $row[1].'|'.$row[2]. '<br>';
                        }
                    }
                    elseif($result2){
                        echo "<script type='text/javascript'>alert('This keyword exists in Members table.');</script>";
                        foreach($result2 as $row){
                        echo $row[0].'|'. $row[1].'|'.$row[2].'|'.$row[3].'|'.$row[4].'|'.$row[5].'<br>';
                        }
                    }
                    elseif($result3){
                        echo "<script type='text/javascript'>alert('This keyword exists in Expenses table.');</script>";
                        foreach($result3 as $row){
                        echo $row[0].'|'. $row[1].'|'.$row[2].'|'.$row[3].'|'.$row[4].'<br>';
                        }
                    }
                    elseif($result4){
                        echo "<script type='text/javascript'>alert('This keyword exists in Expenses table.');</script>";
                        foreach($result4 as $row){
                        echo $row[0].'|'. $row[1].'|'.$row[2].'|'.$row[3].'|'.$row[4].'|'.$row[5].'<br>';
                        }
                    }
                    else{echo "<script type='text/javascript'>alert('Invalid Search!');</script>";}
                }
                ?>
		</div>
            </div> 
        </div>
        <div class = "footer">
            <button class="button3" onclick="alert('This website is student lab work and does not necessarily reflect Jacobs University Bremen opinions. Jacobs University Bremen does not endorse this site, nor is it checked by Jacobs University Bremen regularly, nor is it part of the official Jacobs University Bremen web presence. For each external link existing on this website, we initially have checked that the target page does not contain contents which is illegal wrt. German jurisdiction. However, as we have no influence on such contents, this may change without our notice. Therefore we deny any responsibility for the websites referenced through our external links from here. No information conflicting with GDPR is stored in the server.')"> Disclaimer </button>
        </div>  
    </body>
</html>
