<?php
$host="localhost";
$user="root";
$pd="";
$db="bestcop";

$con=mysqli_connect($host,$user,$pd,$db);
if($con) {


}
else {
 echo '<h1>Server Stopped Due To Pendding Charges..</h1>';
}

?>