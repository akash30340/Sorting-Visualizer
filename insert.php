<?php
$server="localhost";
$username="root";
$password="";
$dbname="log";

$conn=mysqli_connect($server, $username,$password, $dbname);

//if(isset($_POST['submit'] )){
    //if(!empty($_POST['username']) && !empty($_POST['email']) && !empty($_POST['password'])){

     $username=$_POST['username'];
     $email=$_POST['email'];
     $password=$_POST['password'];
 
       $query= "INSERT INTO `logtable`(`username`, `email`, `password`) VALUES ('$username','$email','$password')";
       $run=mysqli_query($conn,$query) or die(mysqli_error($conn)); 
       echo $run;

       if($run){
        echo "<script>alert('Your message is recorded!');</script>";
        echo "<script>location.href = 'index.php';</script>";
//       }  
//       else{
//        echo "form not submitted";
//       }
 //   }
 //else{
 //       echo "data submitted successfully";
 //   }
}

?>