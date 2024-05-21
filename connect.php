<?php
$stock=mysqli_query("localhost","root","","stockexchange") or die("connection failed!");
if($connect)
{
    echo "Connected!";
}
else{
    echo "Not connected!";
}
?>