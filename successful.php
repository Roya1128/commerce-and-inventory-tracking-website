<?php

include("template.php");
  menu('');
echo "<h1>購買成功!";

$email=$_SESSION['email'];
$username=$_REQUEST['username'];
$phone=$_REQUEST['phone'];
$address=$_REQUEST['address'];
include("dbutil.php");
include("connect.php");
$sql = "SELECT name,qty-num as qty FROM car,inv WHERE car.name=inv.ProdName ";
         
$result =$connect->query($sql);
while ($row = $result->fetch_assoc()) {
    $name=$row['name'];
    $qty=$row['qty'];
    $sql="UPDATE `inv` SET qty=$qty WHERE prodname='$name'";
     execute_sql($sql);
}

$sql="DELETE FROM car WHERE email='$email'";
execute_sql($sql);


?>





