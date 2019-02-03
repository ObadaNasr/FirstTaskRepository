<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
    <body>
        <div class="header"></div>
        <div class="container">
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
                 $Sql="Select * From mydata where (email='$myEmail' and myPassword='$myPass');";
                 $result = $conn->query($Sql);
                 if (mysqli_num_rows($result) <= 0) {
                        header("Location: Sign_In.php");
                 }
               /*if(!$conn){
                  die("Connection failed: " . mysqli_connect_error());
               }
              */
                
              $result = $conn->query($Sql);
              if (mysqli_num_rows($result) > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                        echo "id: " . $row["ID"]. " | Name: " . $row["fName"]. " " . $row["lName"]. "<br>";
                    }
               } else {
                    echo "0 results";
               }
               mysqli_close($conn);
            ?>     
        </div> 
         <div class="footer"></div>
    </body>
</html>