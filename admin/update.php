<?php 

include('includes/conn.php');

function getExt($file){
  $extexplode=explode('.',$file);

  $extend=end($extexplode);

  $ext=strtolower($extend);

  return $ext;
}

if(isset($_POST['confirm'])){

 $category=$_POST['cakename'];
 $cake = $_POST['cat'];
 $price = $_POST['price'];

  $ext=getExt($_FILES["fileInput"]["name"]);

  $target_dir = "../uploads/";
  $target_file =  md5($cake).".".$ext;
  if (move_uploaded_file($_FILES["fileInput"]["tmp_name"], $target_dir.$target_file)) {
 $stmt = $conn->prepare("UPDATE images SET file_name = ?, Cakename=?, categoryID = ?, price = ?, file_name=? WHERE id = ?");
 $stmt->bind_param("sssss",$target_file,$category,$cake,$price,$cid);


    try 
    { 
      if($stmt->execute()){
        header('location:cakes.php?success');
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


$conn->close();


}
?>