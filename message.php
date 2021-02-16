<?php 
include('includes/conn.php');
if(isset($_POST['submit'])){
$name = $_POST['cname'];
$email = $_POST['email'];
$phone = $_POST['contact'];
$msg=$_POST['msg'];
 $stmt = $conn->prepare("INSERT INTO customer (customer_id,customer_name,email_address,contact) VALUES(0,?,?,?)");
$stmt->bind_param('sss',$name,$email,$phone);
	try 
    { 
     $stmt->execute();
    
      $result = $stmt->get_result();


    } 
    catch(Exception $ex) 
    { 


      die("Failed to run query"); 
    } 

		$to='xyz.123@mail.com'; // Receiver Email ID, Replace with your email ID
		$subject='Form Submission';
		$message="Name :".$name."\n"."Phone :".$phone."\n"."Wrote the following :"."\n\n".$msg;
		$headers="From: ".$email;

		if(mail($to, $subject, $message, $headers)){
			echo "<h1>Sent Successfully! Thank you"." ".$name.", We will contact you shortly!</h1>";
		}
		else{
			echo "Something went wrong!";
		}    
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Feedback Form</title>
	<!-- Favicon  -->
    <link rel="icon" href="images/KLogo.png"> 
    <link rel="stylesheet" href="css/column.css"> 
</head>
<body>
<!-- Header -->

<header>
  <?php include'header.php'
?>
</header>

<!-- End of Header -->
	 <div class="row">
         <div class="col s6">
         	<div class ="email">
	<div class="mainbox">
		<div class="info">Give Your Feedback!</div>
		<form action="css/mail_handler.php" method="post" name="form" class="form-box">
			<label for="name">Name</label><br>
			<input type="text" name="name" class="inp" placeholder="Enter Your Name" required><br>
			<label for="email">Email ID</label><br>
			<input type="email" name="email" class="inp" placeholder="Enter Your Email" required><br>
			<label for="phone">Phone</label><br>
			<input type="tel" name="phone" class="inp" placeholder="Enter Your Phone" required><br>
			<label for="message">Message</label><br>
			<textarea name="msg" class="msg-box" placeholder="Enter Your Message Here..." required></textarea><br>
			<input type="submit" name="submit" value="Send" class="sub-btn">
		</form>
	</div>
</div>
</div>
     <div class="col s6">
     	<div class="instruction">
        <img src="images/cupcake.png" >
        <center>
         <p>Lets Talk over a cup of Cake!</p>
         <p>We Bake by Heart </p>
         </center>
         </div>
</div>
    </div>     
  <?php include'footer.php'
?>

</body>
</html>



<style>
	

body{
      
      background-color:#fff;
    }

.row .email{
	margin-right:380px;
  margin-left: 80px;
	position: relative;
}

.row .instruction{
	margin-right:100px;
	margin-left: 80px;
  margin-top: 80px;
	position: relative;
}

.row .instruction p {
	margin-top: 10px;
	font-family: Hobo STD ;
	font-size: 20px;
  margin-left: -50px;
  margin-right: 20px;

}

.row .instruction img{
  margin-top:-85px; 

  position: relative;
  background: #ffff;
  margin-left: 30px;
  box-sizing: border-box;
  display: inline-block;
  width: 350px;
  height:300px;
}
    .mainbox{
      width: 620px;
      border-radius: 100px;
      margin-top: 50px;
      position: relative;
      /*border: 5px solid #dc143c;
      border-left: 40px solid #dc143c;
      box-shadow: 1px 2px 10px #555;*/
    }
    .info{
      width: 97.5%;
      background-color:#33ffff;
      padding: 7px;
      text-shadow: 1px 1px 1px #222;
      color: #fff;
      font-size: 20px;
    }
    .form-box{
      padding: 300px;
      width: 300px;
      height: 90px;
      padding-top: 10px;
      padding-left: 10px;
      background-color:#ccffe6;
      position: relative;
    }
    label{
      color: navy;
      font-size: 18px;
    }
    .inp,.msg-box{
      width: 500px;
      padding: 10px;
      margin-top: 2px;
      margin-bottom: 5px;
      border-radius: 5px;
      border: 2px solid #33ffff;
      font-weight: bold;
      color: #dc143c;
      border-right: 15px solid #33ffff;
      border-left: 15px solid #33ffff;
      resize: none;
      border
    }
    .msg-box{
      height: 80px;
    }
    .inp:focus,.msg-box:focus{
      outline: none;
      border: 2px solid navy;
      border-right: 15px solid navy;
      border-left: 15px solid navy;
    }
    .sub-btn{
      width: 580px;
      padding: 10px;
      border-radius: 5px;
      margin-top: 5px;
      border: none;
      background: linear-gradient(#33ffff, #00cccc);
      cursor: pointer;
      color: #fff;
      font-size: 20px;
      text-shadow: 1px 1px 1px #444;
    }
    .sub-btn:hover{
      background: linear-gradient(#00cccc,#33ffff);
      opacity: 0.8;
      transition: all ease-out 0.2s;
    }
    .sub-btn:focus{
      outline: none;
    }
    @media(max-width: 720px){
      .mainbox{
        width: 90%;
      }
    }

</style>