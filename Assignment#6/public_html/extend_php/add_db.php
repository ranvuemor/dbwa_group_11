<?php

$hostname='localhost';
$username='group11';
$password='rLcgJ1';

//addGroup

if(isset($_POST["submit"])){

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
catch(PDOException $e){
echo $e->getMessage();
}

//addMembers

if(isset($_POST["submitMem"])){

    try {
    $dbh = new PDO("mysql:host=$hostname;dbname=group11",$username,$password);
    
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $gidMem = "";
    
    $searchquery = "select GID from Groups where GName = "'".$_POST["gnameMem"]."'";
    $result = $dbh->query($searchgid);
    if($dbh->query($searchgid)){
        foreach($result as $row){
        $gidMem = $row['GID'];
        }
    }
    else{
        echo "<script type= 'text/javascript'>alert('Group does not exist!!!');</script>";
    }

    $sql = "insert into Members(MName, GID, Contact) values ('".$_POST["mname"]."', '".$gidMem."', '".$_POST["contact"]."')"

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