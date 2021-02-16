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
    <label style="font-size: 20px;">Edit Cake</label>
  </div>
<div class="form col s12 l12">
<?php
 $cid = $_GET['cid'];
$stmt = $conn->prepare("SELECT * FROM `images` WHERE id =".$cid);
  
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
Cake Name:
<input type="text" class="search" name="cakename" value="<?php echo $row['Cakename'] ?>" style="height: 3em;"></input>
</h3>
<h3 class="fadeIn first">
Category:<br>
1 - Birthday Cakes<br>
2 - Wedding Cakes<br>
3 - Cupcakes<br>
4 - Specialty<br>
<br>
<input type="number" class="search" name="cat" value="<?php echo $row['categoryID']?>" style="height: 3em;"></input>
</h3>
<h3 class="fadeIn first">
Price:<br>
<input type="number" class="search" name="price" value="<?php echo $row['price'] ?>" style="height: 3em;"></input>
</h3>
<h3 class="fadeIn first">

</h3>

</div>
<?php } ?>
  <div style="text-align: right; cursor: pointer;">
    <?php 


if(isset($_POST['confirm'])){

 $caken=$_POST['cakename'];

 $catc=$_POST['cat'];
$pricec=$_POST['price'];


 $cid = $_GET['cid'];
   
 $stmt = $conn->prepare("UPDATE images SET Cakename = ?, categoryID = ?, price = ? WHERE id = ?");
 $stmt->bind_param("ssss",$caken,$catc,$pricec,$cid);
    try 
    { 
      if($stmt->execute()){
        header("Location: ".'cakes.php?success');
      }

    } 
    catch(Exception $ex) 
    { 
      // echo "Error updating information&error";
      die("Failed to run query"); 
    } 

    // echo "Error updating information&error";
  }

     ?>	
	 <input type="button" class="fadeIn second" value="Back" name="Back" onclick="javascript:history.back()">
          <input type="submit" class="fadeIn second" value="Confirm" name="confirm">  
  </div>
</div> <!-- lahat --> 

</div>
</form>
</div> <!-- row -->
</div> <!-- section -->
  </body>
  </html>



