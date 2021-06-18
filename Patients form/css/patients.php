<?php
$firstname =$_POST['firstName'];
$lastname =$_POST['lastName'];
$idNumber =$_POST['id'];
$dateOfBirth =$_POST['dateOfBirth'];
$Gender=$_POST['Gender'];
$phonenumber =$_POST['tel'];
$Email=$_POST['email'];
$province =$_POST['Province'];
$Town =$_POST['Town'];
$Address =$_POST['Address'];

$host="localhost";
$dbUsername="root";
$dbPassword="";
$dbname="coronavirus"; 
//create connection
$coo=new mysqli($host,$dbUsername,$dbPassword,$dbname);
if(mysqli_connect_error()){
	die('connection eror('. mysqli_connect_errno().')'. mysqli_connect_error());

} 
   else{
   	 
   	$INSERT="INSERT Into patients(firstname,lastname,id,dateOfBirth,Gender,tel,email,Province,Town,Address)VALUES(?,?,?,?,?,?,?,?,?,?) ";
   	//statement
   	$stmt=$conn->prepare($SELECT);
   	$stmt->store_result();
   $rnum= $stmt->num_rows;
   	$stmt->close();
   	$stmt =$conn->prepare($INSERT);
   	$STMT->bindparam("ssssssssss",$firstname,$lastname,$id,$dateOfBirth,$Gender,$tel,$Email,$Province,$Town,$Address  );
   	$stmt->execute();
   	echo "NEW PATIENT ADDED";

   }
   $stmt->close();
   $conn->close();


   }

?>
  