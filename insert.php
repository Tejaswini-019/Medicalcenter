<?php
require("connection.php");
$fullname = $_REQUEST['fullname'];
$phone = $_REQUEST['phone'];
$age = $_REQUEST['age'];
$date = $_REQUEST['date'];
$department = $_REQUEST['department'];
$doctor = $_REQUEST['doctor'];
$res = $con->query("insert into `appointment` (`fullname`,`phone`,`age`,`date`,`department`,`doctor`) values ('$fullname','$phone','$age','$date','$department','$doctor')");
$count = mysqli_affected_rows($con);
if ($res) {
    echo ("<script>location.href='home.php'</script>");
}