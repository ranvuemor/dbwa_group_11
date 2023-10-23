
<?php

if(isset($_POST["submit"])){
$hostname='localhost';
$username='group11';
$password='rLcgJ1';

try {
$dbh = new PDO("mysql:host=$hostname;dbname=group11",$username,$password);

$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$sql = "insert into Groups (GName) values ('".$_POST["gname"]."')";
if ($dbh->query($sql)) {
echo "<script type= 'text/javascript'>alert('New Group Inserted Successfully');</script>";
}
else{
echo "<script type= 'text/javascript'>alert('Data not successfully Inserted.');</script>";
}

$dbh = null;
}
catch(PDOException $e)
{
echo $e->getMessage();
}

}
?>
