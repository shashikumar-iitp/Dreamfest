<?php
include 'connect.php';
if(isset($_POST['SignUp'])){
   $Username=$_POST['Username'];
   $Email=$_POST['Email'];
   $Password=$_POST['Password'];
   $Password=md5($Password);

    $checkEmail="SELECT * From users where Email='$Email' ";
    $result=$conn->query($checkEmail);
    if($result->num_rows>0){
        echo "Email Address Already Exists! ";

    }
    else{
        $insertQuery="INSERT INTO users(Username,Email,Password)
                       VALUES ('$Username','$Email','$Password')";
            if($conn->query($insertQuery)==TRUE){
                header("location: log.php");
        
            } 
            else{
                echo "Error:".$conn->error;

            }
        
    }
}

?>