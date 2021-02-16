  <?php 

  include('includes/conn.php');

?>
  <!DOCTYPE html>
  <html>
  <head>
    <title>ADMIN | PORTAL</title>
    <link rel="stylesheet" type="text/css" href="css/column.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/select.css">
    
  </head>
  <body>
   <div class="row">
<div class="section">
<form method="post">
  <div class="lahat col s4">
      <div class="title col s12 l12">
    <label style="font-size: 20px;">Edit Customer</label>
  </div>
<div class="form col s12 l12">
<?php
 $cid = $_GET['cid'];
$stmt = $conn->prepare("SELECT * FROM customer WHERE customer_id =".$cid);
  
    try 
    { 
     $stmt->execute();
     // $log->execute();
      $result = $stmt->get_result();


    } 
    catch(Exception $ex) 
    { 


      die("Failed to run query"); 
    } 
 while($row = $result->fetch_array()){
   ?>  
<div class="input-group col s12" style="margin-bottom: 3em;">

<h3 class="fadeIn first" >
Customer Name:
<input type="text" class="search" name="customer" value="<?php echo $row['customer_name'] ?>" style="height: 3em;"></input>
</h3>
<h3 class="fadeIn first">
Email:
<input type="text" class="search" name="email" value="<?php echo $row['email_address'] ?>" style="height: 3em;"></input>
</h3>
<h3 class="fadeIn first">
Contact:
<input type="text" class="search" name="contact" value="<?php echo $row['contact'] ?>" style="height: 3em;"></input>
</h3>
<h3 class="fadeIn first">
Country:
<input type="text" class="search" name="country" value="<?php echo $row['country'] ?>" style="height: 3em;"></input>
</h3>

</div>
<?php } ?>
  <div style="text-align: right; cursor: pointer;">
    <?php 
if(isset($_POST['confirm'])){

 $cust=$_POST['customer'];

 $email=$_POST['email'];

 $cont=$_POST['contact'];

 $count=$_POST['country'];

 $cid = $_GET['cid'];
   
 $stmt = $conn->prepare("UPDATE customer SET customer_name = ?, email_address = ?, contact = ?, country = ? WHERE customer_id = ?");
 $stmt->bind_param("sssss",$cust,$email,$cont,$count,$cid);
    try 
    { 
      if($stmt->execute()){
        header("Location: ".'registered.php?success');
      }

    } 
    catch(Exception $ex) 
    { 
      // echo "Error updating information&error";
      die("Failed to run query"); 
    } 

    // echo "Error updating information&error";
  }

     ?>		<input type="button" class="fadeIn second" value="Back" name="Back" onclick="javascript:history.back()">
          <input type="submit" class="fadeIn second" value="Confirm" name="confirm">  
  </div>
</div> <!-- lahat --> 

</div>
</form>
</div> <!-- row -->
</div> <!-- section -->
  </body>
  </html>



