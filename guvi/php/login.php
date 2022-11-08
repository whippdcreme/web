<?php
try{
	$con=new PDO("mysql:host=localhost;dbname=vk","root","");

}catch(PDOExection $e){
	echo $e->getMessage();
}
$username=$_POST['username'];
$password=$_POST['password'];
$sql="select * from data where username='$usename' and pwd='$password'";
$stmt=$con->prepare($sql);
$stmt->execute();
if($stmt){
echo 'success';
}
?>