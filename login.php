<?php
require("connection.php");
$email=$_REQUEST['email'];
$pass=$_REQUEST['pass'];
$res=$con->query("select * from `login` where `email`='$email' AND `pass`='$pass'");
$count=$res->num_rows;
if($count>0){
    echo("<script>location.href='home.php';</script>");
}
else{
    echo("<script>alert('UnAuthorized: invalid username and password!');
    location.href = 'index.php'</script>");
}
?>