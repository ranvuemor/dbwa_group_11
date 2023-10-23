<?php
if(isset($_POST["submitMem"]){
$hostname='localhost';
$username='group11';
$password='rLcgJ1';

try{
$dbh = new PDO("mysql::host=$hostname;dbname=group11",$username,$password);
//$gnameMem = $_POST['gnameMem'];
$search = $dbh->prepare("select GID from `Groups` where GName = '".$_POST["gnameMem"]"');
$search->execute();
while($row = $query->fetch()){
$gidMem = $row['GID'];
}
$dbh = null;
$dbh = new PDO("mysql::host=$hostname;dbname=group11",$username,$password);
$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "insert into Members(MName, GID, Contact) values ('".$_POST["mname"]."', '$gidMem', '>
if ($dbh->query($sql)) {
echo "<script type= 'text/javascript'>alert('New Member Inserted Successfully');</script>";
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
