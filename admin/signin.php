<?php
    include('includes/conn.php');
if (isset($_POST['log'])) 
{

$user=$_POST["username"];

$pass=$_POST['pass'];



$stmt = $conn->prepare("SELECT * FROM admin WHERE username=? and password=?");

$stmt->bind_param('ss', $user,md5($pass));
    try 
    { 
     $stmt->execute();
      $result = $stmt->get_result();


    } 
    catch(Exception $ex) 
    { 


      die("Failed to run query"); 
    } 
    $row = $result->fetch_array();
if($row) {
   $_SESSION["username"] = $user;

      header("Location:index.php?loginsuccess");
      

    }else{
      header("Location:index.php?loginerror");
    }

    $stmt->close();
    $conn->close();



}
?>