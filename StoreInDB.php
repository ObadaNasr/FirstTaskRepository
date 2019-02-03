<?php
include 'db_connection.php';
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
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
           echo "This Email is exist";
           echo "<a href='Sign_Up.php'>SignUp</a>";
       }
 }else{
     $res=mysqli_query($conn,$sql);
     header("Location: Sign_In.php");
}

/*if (mysqli_query($conn, $sql)) {
    header("Location: Sign_In.php");
} else {
    header("Location: Sign_Up.php");
}*/

mysqli_close($conn);

?>