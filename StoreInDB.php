<?php
include 'db_connection.php';
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
   if (session_status() == PHP_SESSION_NONE) {
                 session_start();
                 
             }else{
                 
             }

$conn = OpenCon();

$fName=  test_input($_POST['firstName']);
$lName=  test_input($_POST['lastName']);
$password= test_input($_POST['SignUpPassword']);
$Email= test_input($_POST['SignUpEmail']);

if(!$conn){
     die("Connection failed: " . mysqli_connect_error());
}
$sql = "INSERT INTO mydata (fName,lName,email,myPassword) VALUES ('$fName','$lName','$Email','$password')";

$Sql2="select * from mydata where (email='$Email');";
$res=mysqli_query($conn,$Sql2);
if (mysqli_num_rows($res) > 0) {
       // output data of each row
    $row = mysqli_fetch_assoc($res);
      if($Email == $row['email'])
      {
          
          $_SESSION['firstNameBack']=$fName;
          $_SESSION['lastNameBack']=$lName;
          $_SESSION['EmailBack']=$Email;
          header("Location: Sign_Up.php");
         // echo $_SESSION['firstNameBack']."   ".$_SESSION['lastNameBack']."<br>". $_SESSION['EmailBack'];
          
      }
}else{
    $res=mysqli_query($conn,$sql);
    header("Location: Sign_In.php");
    
}
               
session_destroy();
mysqli_close($conn);

?>