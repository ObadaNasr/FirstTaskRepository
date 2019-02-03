<?php
     include 'db_connection.php';
    $conn = OpenCon();
    if(!$conn){
       die("Connection failed: " . mysqli_connect_error());
    }
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
     }

    $myEmail=test_input($_POST['Email']);
    $myPass=test_input($_POST['Password']);
    $Sql="Select email,myPassword From mydata where (email='$myEmail' and myPassword='$myPass');";
    $result = $conn->query($Sql);
    echo mysqli_num_rows($result)."<br>";
    if (mysqli_num_rows($result) > 0) {
         while($row = mysqli_fetch_assoc($result)) {
                if(test_input($row['email']) == $myEmail){
                    header("Location: index.php");
                }else{
                   header("Location: Sign_In.php");
                }
         }
    }
    else{
           header("Location: Sign_In.php");
    }
              
?>
