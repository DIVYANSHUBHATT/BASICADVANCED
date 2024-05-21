
<?php
session_start();
if(!isset($_SESSION['userdata'])){
    header("location:../");
}
$userdata=$_SESSION['userdata'];
$groupsdata=$_SESSION['groupsdata'];
