<?php
require("connection.php");
$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$subject = $_REQUEST['subject'];
$message = $_REQUEST['message'];
$res = $con->query("insert into `contact` (`name`,`email`,`subject`,`message`) values ('$name','$email','$subject','$message')");
$count = mysqli_affected_rows($con);
if ($res) {
    echo ("<script>location.href='contact.html'</script>");
}