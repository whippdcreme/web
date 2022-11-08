<?php
sleep(3);
try{
	$con=new PDO("mysql:host=localhost;dbname=vk","root","");
	$name=$_POST['name'];
	$username=$_POST['username'];
	$age=$_POST['age'];
	$dob=$_POST['DOB'];
	$mobile=$_POST['mobile'];
	$gender=$_POST['gender'];
	$password=$_POST['password'];
	$sql="insert into user(name,username,mobile,pwd) values('$name','$username','$mobile','$password')";
	$stmt=$con->prepare($sql);
	$stmt->execute();
	$con = null;

}catch(PDOExection $e){
	echo $e->getMessage();
}
$m= new MongoClient();
$db= $m->mydb;
$col=$db->mycol;
$name=$_POST['name'];
$username=$_POST['username'];
$age=$_POST['age'];
$dob=$_POST['DOB'];
$mobile=$_POST['mobile'];
$gender=$_POST['gender'];
$password=$_POST['password'];



$document=array{
	'name'=> $name,
	'username'=> $username,
	'age'=> $age,
	'DOB'=> $dob,
	'mobile'=> $mobile,
	'gender'=> $gender
}
$col->insert($document);


?>