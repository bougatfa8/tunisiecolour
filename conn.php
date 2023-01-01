


<?php
$con = mysqli_connect('localhost','root','','RD');
//mysqli_connect_db($con,'adminpanel');

if($con){
	echo "connected";
}
else{
	echo "no connection found, please check conn.php";
}



?>