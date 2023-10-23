<!DOCTYPE html>
<html>
    <head>
        <title>Split Expenses</title>
        <link rel="stylesheet" type="text/css" href="../style.css">
        <meta name = "viewport" content = "widht=device-width, initial-scale=1">
        
    </head>

    <body>
        <script src="scripts.js"></script>

        
        <div class="header">
            <img src="../img/45851.jpg" style = "float:left" width="160" height=""/>
            <div display="inline-block"><h1>Split Expenses</h1></div>
        </div>
        <div id="navbar">
            <ul>
                <li><a onclick="home()" class="button2">Home</a></li>
                <li><a href="members.php" class="button2">Members</a></li>
                <li><a onclick="activity()" class="button2">Activity</a></li>
                <li><a href="search.php" class="button2">Search</a></li>
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
                    <div class="search-menu">
                        <ul>
                            <li><a href="search0.php">Search for all owings</a></li>
                            <li><a href="search1.php">Search for all payments</a></li>
                            <li><a href="search2.php">Search for all settlements</a></li>
                            <li><a href="search3.php">Search for all members</a></li>
                        </ul>
                    </div>
		        <div class="tbl-header">
			<table cellpadding= "0" cellspacing="0" border="0">
			<thead>
			<tr>
                    <th>MName</th>
                    <th>paid</th>
                    <th>for</th>
                    <th>on</th>
                    <th>in</th>
                    </tr></thead></table>
		 <?php
                    $conn = new PDO('mysql:host=localhost;dbname=group11', 'group11', 'rLcgJ1');
		    $sql = "select Members.MName, Expenses.EAmt paid, Expenses.EName `for`, 
            Transactions.Date `on`, Groups.GName `in` 
            from Members, Expenses, Transactions, Groups 
            where 
                Expenses.MID_paidby = Members.MID and 
                Expenses.TID = Transactions.TID and 
                Transactions.GID = Groups.GID 
            group by Expenses.EName 
            order by Transactions.Date";
		
                    $query = $conn->prepare($sql);
                    $query->execute();
		    $members = $query->fetchAll(PDO::FETCH_NUM);
			echo '<div class="tbl-content"><table cellpadding="0" cellspacing="0" border="0">';
			foreach($members as $row){
			echo '<tbody><tr>';
			echo '<td>'.$row[0].'</td>';
			echo '<td>'.$row[1].'</td>';
			echo '<td>'.$row[2].'</td>';
			echo '<td>'.$row[3].'</td>';
			echo '<td>'.$row[4].'</td>';
			echo '</tr></tbody>';
			}
			echo '</table></div>';
		?>
            </div>
            </div> 
        </div>
        <div class = "footer">
            <button class="button3" onclick="alert('This website is student lab work and does not necessarily reflect Jacobs University Bremen opinions. Jacobs University Bremen does not endorse this site, nor is it checked by Jacobs University Bremen regularly, nor is it part of the official Jacobs University Bremen web presence. For each external link existing on this website, we initially have checked that the target page does not contain contents which is illegal wrt. German jurisdiction. However, as we have no influence on such contents, this may change without our notice. Therefore we deny any responsibility for the websites referenced through our external links from here. No information conflicting with GDPR is stored in the server.')"> Disclaimer </button>
        </div>  
    </body>
</html>
