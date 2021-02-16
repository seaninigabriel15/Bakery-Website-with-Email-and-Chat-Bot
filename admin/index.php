<?php 
session_start();
// session_destroy();
if(isset($_SESSION['username'])){
  header('Location: index.php');
}
?>

<!DOCTYPE html>
<html>
<head>
  <title> KEZHA BAKES | ADMIN</title>
<link rel="icon" href="../images/KLogo.png">
   <link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<div class="index-banner" style="background-image: url('images/background.jpg');">
<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->
    <h2 class="active"> Login </h2>

    <!-- Icon -->
    <!-- Login Form -->
    <form method="post" action="signin.php">
       <input type="text" name="username"  value="<?php if (isset($_SESSION['username'])){
              echo($_SESSION['username']);
            }?>" required="" placeholder="Username">
      <input type="password" id="password" class="fadeIn third" name="pass" placeholder="Password">
      <input type="submit" class="fadeIn fourth" value="Log In" name="log">
    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
   <?php    
if(isset($_GET['loginsuccess'])){
  header("Location:home.php");
}
  ?>
<?php
if(isset($_GET['loginerror'])){
  echo "<div style='color:red;'>Username and Password not match!</div>";
}
?>  
    </div>

  </div>
</div>
<?php include'../footer.php'
?>
</body>
</html>

<style>
  

  .index-banner{
  
  
  background-repeat: no-repeat;
  background-position: center;
  background-size:cover;
  display:table;
  width: 100%;
  height:550px;
}

.wrapper {
  display: flex;
  align-items: center;
  flex-direction: column; 
  justify-content: center;
  width: 100%;
  min-height: 100%;
  padding: 20px;
}

#formContent {
  -webkit-border-radius: 10px 10px 10px 10px;
  border-radius: 10px 10px 10px 10px;
  background: #ffffff52;
  padding: 30px;
  width: 90%;
  max-width: 450px;
  position: relative;
  padding: 0px;
  -webkit-box-shadow: 0 30px 60px 0 rgba(0,0,0,0.3);
  box-shadow: 0 30px 60px 0 rgba(0,0,0,0.3);
  text-align: center;
}

#formFooter {
  background-color: #f6f6f6;
  border-top: 1px solid #dce8f1;
  padding: 25px;
  text-align: center;
  -webkit-border-radius: 0 0 10px 10px;
  border-radius: 0 0 10px 10px;
}


</style>