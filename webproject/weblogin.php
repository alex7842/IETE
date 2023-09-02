<?php
$servername="localhost";
$username="root";
$password="";
$database_name="webprg";


$conn=mysqli_connect($servername,$username,$password,$database_name);
if(!$conn)
{
	die("connection failed:".mysqli_connect_error());
}
if(isset($_POST['submit']))
{
	if (isset($_POST['name'])) {
	$name=$_POST['name'];
}
    else{
    	$name="";
    }
	if (isset($_POST['email'])) {
	$email=$_POST['email'];
}
    else{
    	$email="";
    }
    if (isset($_POST['password'])) {
	$password=$_POST['password'];
   $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
}
    else{
    	$password="";
      $hashedPassword="";
    }
    /*if (isset($_POST['confirmpassword'])) {
	$confirmpassword=$_POST['confirmpassword'];
}
    else{
    	$confirmpassword="";
    }
	
*/
    
	$sql_query = "INSERT INTO webbase (name,email,password) VALUES ('$name','$email','$hashedPassword')";

	//if($password == $confirmpassword){
      $query = "INSERT INTO webbase VALUES('$name','$email','$password')";
      mysqli_query($conn, $query);
      echo
      "<script> alert('Registration Successful'); </script>";
      session_start();
      $_SESSION["name"]=$name;
     

     header("Location:alert.html");

    //}
   /* else{
      echo
      "<script> alert('Password Does Not Match'); </script>";
    }*/
    
//}



}
?>