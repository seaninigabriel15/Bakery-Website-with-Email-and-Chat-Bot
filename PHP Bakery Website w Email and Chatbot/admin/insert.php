<?php 

include('includes/conn.php');

function getExt($file){
  $extexplode=explode('.',$file);

  $extend=end($extexplode);

  $ext=strtolower($extend);

  return $ext;
}

if(isset($_POST['sub'])){

 $category=$_POST['category'];
 $cake = $_POST['cake'];
 $price = $_POST['price'];

  $ext=getExt($_FILES["fileInput"]["name"]);

  $target_dir = "../uploads/";
  $target_file =  md5($cake).".".$ext;
  if (move_uploaded_file($_FILES["fileInput"]["tmp_name"], $target_dir.$target_file)) {
 $stmt = $conn->prepare("INSERT INTO images (id, file_name, Cakename, categoryID, price, status, uploaded_on) VALUES(0,?,?,?,?,1,now())");

 $stmt->bind_param("ssss",$target_file,$cake,$category,$price);


    try 
    { 
      if($stmt->execute()){
        header('location:home.php?success');
      }

    } 
    catch(Exception $ex) 
    { 
      // echo "Error updating information&error";
      die("Failed to run query"); 
    } 

  }else {
        echo "error";

    // echo "Error updating information&error";


  }


$stmt->close();
$conn->close();


}
?>