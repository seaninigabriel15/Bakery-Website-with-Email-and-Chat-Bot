<?php include('includes/conn.php');
if (isset($_GET['delete_id'])) {
  $delete_id = (int) $_GET['delete_id'];
  $stmt = "DELETE FROM images WHERE id =".$delete_id;
  if ($conn->query($stmt) === TRUE) {
    header('location:cakes.php?deleted');
} else {
    echo "Error deleting record: " . $conn->error;
}
}

?>
<!DOCTYPE html>
<html>
  <head>
    <title>Kezha Bake ADMIN | Cakes </title>
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
  <a href="index.php">Logout</a>
    </div>
  </div>


<div class="nav">
  <ul>
          <li><a href="home.php">Products</a></li>
		  <li class="active"><a href="cakes.php">Cakes</a></li>
           <li><a href="registered.php">Registered</a></li>
        </ul>
</div>
<div class="row">
<form method="post">
<div id="status">

<div class="form" style="margin: 3em;">
    <div class="title">
    <label style="font-size: 20px;">Cakes</label>
  </div>  
<div class="input-group col l12 ">
 <div class="inside col s12">
<div align="right" class="sear col s6" style="margin-top: 3em;">
  <label>Search:</label>

   <?php
   if(isset($_POST['search'])){
    $sub = $_POST['txtsearch'];
     $sql = "SELECT a.id, a.file_name, a.Cakename, a.price, b.cName FROM images a INNER JOIN category b on a.categoryID=b.id WHERE a.Cakename like '%$sub%' OR b.cName like '%$sub%'";
        $result = $conn->query($sql);
    if ($_POST['txtsearch'] == "") {
         $sql = "SELECT a.id, a.file_name, a.Cakename, a.price, b.cName FROM images a INNER JOIN category b on a.categoryID=b.id";
          $result = $conn->query($sql);
    }
   }else{
         $sql = "SELECT a.id, a.file_name, a.Cakename, a.price, b.cName FROM images a INNER JOIN category b on a.categoryID=b.id";
         $result = $conn->query($sql);
       }  
?>
      <input type="text" class="search" placeholder="Search(Cake Name | Categoy)" name="txtsearch" style="height: 3em;"></input>
    </div>  
    <input type="submit" class="fadeIn first" value="Search" name="search" style="margin-top: 4em">
      </div>
    </div>
   <div class="input-group col s12">
    <table>
  <thead>
    <tr>

<?php
if ($result->num_rows > 0) {
     echo "<table><tr>
    <th>ID</th>
    <th>File Name</th>
    <th>Cake Name</th>
    <th>Price</th>
    <th>Category</th>
    <th>Edit</th>
<th>Delete</th>
    </tr>";
    // output data of each row
    while($row = $result->fetch_array()) {
?>
    </tr>
  </thead>
  <tbody>
 
            <tr>
           <td><?php echo $row["id"]?></td>
          <td><?php echo $row["file_name"]?></td>
           <td><?php echo $row["Cakename"]?></td>
           <td><?php echo $row["price"]?></td>
           <td><?php echo $row["cName"]?></td>
           <td>  <center>
           <a href='edit-cake.php?cid=<?php echo $row['id'];?>' class='pen' style="padding: 1px">&#9998</a>
           <input type="text" name="cust_id" value=<?php echo $row["id"] ?> style="display:none;">
           
           </td>
			<td><center><a href='?delete_id=<?php echo $row['id'];?>'
<button type='submit' name='del' class='pen' style='border:none; background:transparent;'onclick="return confirm('Do you want to remove this contact?')" >&#10006</button>
		</a>	</td>
           </tr>
            <?php
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
 ?>
  </tbody>
</table>

    </div>
     <?php    if(isset($_GET['deleted'])){
  $bg_color = "#8bc34a";
  $text = "Deleted Successfully";
?>
<center>
          <label class="lbel col s12" style="background-color: <?php echo $bg_color?>; padding: 15px; border-radius: 1em;
           color: #2c770d;"><?php echo $text ?></label></center>
        <?php
        }
?>
              </div> <!-- col s12 -->

  </div>
</div> <!-- form -->
</div><!--  id status -->
</form>
</div> <!-- row -->
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
  position: relative;
}

.title{
  box-shadow: 0 0 6px 0 rgba(0,0,0,-0.7);
  background:#3de48f85;
  color: #f4f4f4;
  padding: 1em!important;
  border-top-left-radius: 1em;
  border-top-right-radius: 1em;

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
  color:#ffffff;
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
table { 
  width: 100%; 
  border-collapse: collapse; 
  margin:0px auto;
  }

/* Zebra striping */
tr:nth-of-type(odd) { 
  background: #bde2dcde; 
  }

th { 
  background: #3dd2e4; 
  color: white;
  text-align: center!important; 
  }

td, th { 
  padding: 10px; 
  border: 1px solid #ccc; 
  text-align: left; 
  font-size: 18px;
  }
.pen{
  cursor: pointer;
}
/* 
Max width before this PARTICULAR table gets nasty
This query will take effect for any screen smaller than 760px
and also iPads specifically.
*/
@media 
only screen and (max-width: 760px),
(min-device-width: 768px) and (max-device-width: 1024px)  {

  table { 
      width: 100%; 
  }

  /* Force table to not be like tables anymore */
  table, thead, tbody, th, td, tr { 
    display: block; 
  }
  
  /* Hide table headers (but not display: none;, for accessibility) */
  thead tr { 
    position: absolute;
    top: -9999px;
    left: -9999px;
  }
  
  tr { border: 1px solid #ccc; }
  
  td { 
    /* Behave  like a "row" */
    border: none;
    border-bottom: 1px solid #eee; 
    position: relative;
    padding-left: 50%; 
  }

  td:before { 
    /* Now like a table header */
    position: absolute;
    /* Top/left values mimic padding */
    top: 6px;
    left: 6px;
    width: 45%; 
    padding-right: 10px; 
    white-space: nowrap;
    /* Label the data */
    content: attr(data-column);

    color: #000;
    font-weight: bold;
  }

}

</style>