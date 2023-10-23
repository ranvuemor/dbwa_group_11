<?php
include "/~akushwaha/extend_php/search.php";
    if($_POST["keyword"]){
    try{
        $conn = new PDO("mysql:host=localhost; dbname=group11", "group11","rLcgJ1");

    }catch(PDOException $exc){
    echo $exc->getMessage();
        exit();
    }
    $query1 = "select * from Groups where GName LIKE '%".$_POST["keyword"]."%'";
    $query2 = "select * from Members where MName LIKE '%".$_POST["keyword"]."%'";
    $query3 = "select * from Expenses where EName LIKE '%".$_POST["keyword"]."%'";
    $query4 = "select * from Expenses where EAmt LIKE '%".$_POST["keyword"]."%'";
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
        ?>
        <ul id="suggestion">
        <?php
        foreach($result1 as $list) {
        ?>
        <li onClick="autoComplete('<?php echo $list[1]; ?>');"><?php echo $list[1]; ?></li>
        <?php } ?>
        </ul>
        <?php
    }

    elseif($result2){
        ?>
        <ul id="suggestion">
        <?php
        foreach($result2 as $list) {
        ?>
        <li onClick="autoComplete('<?php echo $list[1]; ?>');"><?php echo $list[1]; ?></li>
        <?php } ?>
        </ul>
        <?php
    }

    elseif($result3){
        ?>
        <ul id="suggestion">
        <?php
        foreach($result3 as $list) {
        ?>
        <li onClick="autoComplete('<?php echo $list[1]; ?>');"><?php echo $list[1]; ?></li>
        <?php } ?>
        </ul>
        <?php
    }

    elseif($result4){
        ?>
        <ul id="suggestion">
        <?php
        foreach($result4 as $list) {
        ?>
        <li onClick="autoComplete('<?php echo $list[2]; ?>');"><?php echo $list[2]; ?></li>
        <?php } ?>
        </ul>
        <?php
    }
} ?>
