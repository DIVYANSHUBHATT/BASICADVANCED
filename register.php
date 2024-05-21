<?php
include("stock.php");
$name=$_POST['name'];
$mobile=$_POST['phone'];
$email=$_POST['email'];
if($password==$cpassword){
$insert=mysqli_query($connect,"INSERT INTO user (name,mobile,email,role) VALUES('$name','$mobile','$email',$role)");
if($insert){
echo '
<script>
alert("Registeration Successful!");
window.location="../";
</script>
';
}
else{
echo '
<script>
alert("Some error occured!");
window.location="../routes/register.html";
</script>
';
}
}
else{
echo '
<script>
alert("Password and Confirm Password does not match!");
window.location="../routes/register.html";
</script>
';
}
?>