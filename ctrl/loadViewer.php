<?php
$ip = gethostbyname("www.google.com");  
$sql = "select * from visitors where ip = '$ip'";
$result = $dbOFF->query($sql);
if($result->num_rows <=0){
    $sql = "insert into visitors values ('','$ip',1)";
    mysqli_query($dbOFF, $sql);
} else{
    $sql = "update visitors set view = view + 1 where ip = '$ip'";
    mysqli_query($dbOFF, $sql);
}
$sql = "select sum(view) from visitors limit 1";
$result = $dbOFF->query($sql);
$row=$result -> fetch_row();
$_SESSION['views'] = $row[0]; //Get views
$sql = "SELECT COUNT(username) FROM `authme`";
$result = $dbON->query($sql);
$row=$result -> fetch_row();
$_SESSION['members'] = $row[0]; //Get members
$sql = "SELECT (total_star/count_rate) FROM rates";
$result = $dbOFF->query($sql);
$row=$result -> fetch_row();
$_SESSION['avgstars'] = round($row[0], 1); //Get avgstars
?> 