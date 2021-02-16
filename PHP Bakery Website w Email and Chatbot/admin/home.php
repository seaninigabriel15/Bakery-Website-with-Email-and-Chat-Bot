<?php 
include('insert.php');
?>
<!DOCTYPE html>
<html>
	<head>
    <title>Kezha Bake ADMIN| Photo Upload</title>
      <link rel="icon" href="../images/KLogo.png">

	<link href="css/style.css" type="text/css" rel="stylesheet">
	<link href="css/select.css" type="text/css" rel="stylesheet">
	<link href="css/column.css" type="text/css" rel="stylesheet">
  <link href="css/table.css" type="text/css" rel="stylesheet">

	</head>
  <div class="index-banner" style="background-image: url('images/background.jpg');">
	<body>

	<div class="dropdown">
  <button class="dropbtn" type="submit" style="border: 0; background: transparent">
 <?php 
 if (isset($_SESSION['username'])){
?>
<label style="font-size: 20px; text-transform: uppercase;"><?php echo $_SESSION['username']; ?></label>
 	<?php } ?>
  <img src="images/123.png" width="30" height="25" alt="submit"/>
  </button>
		<div class="dropdown-content">
  <a href="logout.php">Logout</a>
		</div>
	</div>


<div class="nav">
	<ul>
          <li class="active"><a href="home.php">Products</a></li>
		  <li><a href="cakes.php">Cakes</a></li>
           <li><a href="registered.php">Registered</a></li>
        </ul>
</div>
<div class="row">
<form method="post" enctype="multipart/form-data">
<div id="status">

<div class="form" style="margin: 3em;">
		<div class="title">
		<label style="font-size: 20px;">Products</label>
	</div>	
<div class="input-group col l12">

 <div class="inside col s12">
  <div class="col s8">
   <h3 class="fadeIn first" >
Category:
</h3>
  <div class="select col s8">
         <select name="category" id="category" required="" style="font-size: 15px">
          <option style="font-size: 15px">Select Category</option> 
          <?php $stmt = $conn->prepare("SELECT * FROM category");
  try 
    { 
     $stmt->execute();      
     $result = $stmt->get_result();


    } 
    catch(Exception $ex) 
    { 


      die("Failed to run query"); 
    } 
          while($row = $result->fetch_array()){
$id = $row['id'];
            ?>

              <option style="font-size: 15px" value="<?php echo $id ?>"><?php echo $row['cName'];?></option>

              <?php  } ?>

            </select>
           
          </div>
          <div class="input-group col s12">
           <h3 class="fadeIn first" >
Price:
</h3>
     <input type="number" name="price" style="height: 3em;"></input>       
          </div>
<div class="input-group col s12">
  <h3 class="fadeIn first" >
Cake Name:
</h3>
     <input type="text" name="cake" style="height: 3em;"></input>       
          </div>   
            <div class="input-group col s12">
              <br><br><br>
    <label class="control-label" for="basicinput">Upload</label>
    <div class="controls">
      <input type="file" name="fileInput" required="">
    </div>   
    <div align="right">
    <input type="submit" class="fadeIn first" value="Submit" name="sub" style="margin-top: 4em">    
    </div>
     <?php
    if(isset($_GET['success'])){
  $bg_color = "#8bc34a";
  $text = "Insert Product Successfully";
?>
          <label class="lbel col s12" style="background-color: <?php echo $bg_color?>; padding: 15px; border-radius: 1em;
           color: #2c770d;"><?php echo $text ?></label>
        <?php
        }
?>
</div> <!-- inside -->
 
</div>
</div> <!-- form -->
</div><!--  id status -->
</form>

</div> <!-- row -->



</body>

</html>

<style>
  
.header {
  position: absolute;
  top: 0;
  z-index: 1;
  display: flex;
  width: 100%;
  height: 60px;
  background-color:#3de48f85;
  background-size: 60px 100px;

}

.header p{
   font-size: 40px;
   margin-top: 10px;
   margin-left: 400px;

}


.title{
  box-shadow: 0 0 6px 0 rgba(0,0,0,-0.7);
  background: #3de48f85;
  color: #f4f4f4;
  padding: 1em!important;
  border-top-left-radius: 1em;
  border-top-right-radius: 1em;

}
.form{
  box-shadow: 0 0 3px 0 rgba(0,0,0,0.3);
  border-bottom-right-radius: 100px;
  border-bottom-left-radius: 1em;
  border-top-right-radius: 1em;
  border-top-left-radius: 1em;
}
.nav {
  position: absolute;
  margin: 60px auto auto auto;
  z-index: 1;
  display: flex;
  width: 15%;
  height: 135px;
  background-color:#2c3e50;
  background-size: 60px 100px;
}

.nav .active { 
background:#3de48f85; 
 color: #0000FF;
}
.nav ul {

  list-style: none;
  width: 100%;
  justify-content: center;
  
}

.nav ul li {

  margin: 10 50rem;
  padding: 0.5rem;
    text-align: center;
}

.nav ul li a {

    display: block;
  width: 100%;
  background-color: transparent;
  text-decoration: none;
  text-transform: uppercase;
  color: white;
  font-family: 'Arial';
  font-size:25px;
}

.nav ul li a:hover {

  margin: 0;
  padding: 0;
  background-color:#5ec52c82;
  color:  white;

}
.nav ul li a:active {
  color:red;
  
}

.dropbtn {
 
  padding: 14px;
  border: none;
  cursor: pointer;
}
.dropbtn:hover {
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
}
.dropdown {
     position: absolute;
    /* top: 8%; */
    left: 90%;
    display: block;
}

.dropdown-content {
  
  right:0;
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 150px;
  z-index: 1;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
  display: block;
}

.dropdown:hover .dropbtn {
  background-color: #3e8e41;
}



 .index-banner{
  
  
  background-repeat: no-repeat;
  background-position: center;
  background-size:cover;
  display:table;
  width: 100%;
  height:550px;
}

.row .col.l12 {
    width: 100%;
    margin-left: auto;
    left: auto;
    right: auto;
    height: 30%;
  }


</style>