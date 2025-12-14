<?php


$email  = $_POST['email'];
$password = $_POST['password'];
$conformPassword = $_POST['conformPassword'];




if ( !empty($email) || !empty($password) || !empty($conformPassword) )
{

$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "wearmart";



// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

if (mysqli_connect_error()){
  die('Connect Error ('. mysqli_connect_errno() .') '
    . mysqli_connect_error());
}
else{
  $SELECT = "SELECT email From register Where email = ? Limit 1";
  $INSERT = "INSERT Into register ( email , password , conformPassword )values(?,?,?)";

//Prepare statement
     $stmt = $conn->prepare($SELECT);
     $stmt->bind_param("s", $email);
     $stmt->execute();
     $stmt->bind_result($email);
     $stmt->store_result();
     $rnum = $stmt->num_rows;

     //checking username
      if ($rnum==0) {
      $stmt->close();
      $stmt = $conn->prepare($INSERT);
      $stmt->bind_param("sss", $email,$password,$conformPassword);
      $stmt->execute();
      $message[] = 'new record enterd!';
      
     } else {
      $message[] = 'Someone already register using this email!';
     
     }
     $stmt->close();
     $conn->close();
    }
} else {
 echo "All field are required";
 die();
}
?>