<?php
require('connex.php');
$email=$_POST['email-address'];
$sql="SELECT * FROM student WHERE Email='$email';";
$result=mysql_query($sql,$conn);
if(mysql_num_rows($result)>0){

echo "Email address exists for another account!";

}
else{

echo "email is valid- not registered yet!";

}
?>