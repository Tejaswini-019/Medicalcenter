<?php
require("connection.php");
$email=$_REQUEST['email'];
$pass=$_REQUEST['pass'];
$res=$con->query("insert into `login` (`email`,`pass`) values ('$email','$pass')");
$count = mysqli_affected_rows($con);
if($count>0){
    echo("<script>location.href='register.php'</script>");
}
?>