<!DOCTYPE html> 

<html>
<head>
    <meta charset="utf=8">
    <title>Kezha Bake| Birthday Cakes</title>
    <meta name = "viewport" content="width=device width , initial-scale=1.0">
    <!-- LOGO  -->
    <link rel="icon" href="images/KLogo.png">

</head>
<body> 
  <!-- Header -->
<header>
  <?php include'header.php'
?>
</header>

<!-- End of Header -->


<style type="text/css">
   #content{
    width: 50%;
    margin: 20px auto;
    border: 1px solid #cbcbcb;
   }
   form{
    width: 50%;
    margin: 20px auto;
   }
   form div{
    margin-top: 5px;
   }
   #img_div{
    width: 80%;
    padding: 5px;
    margin: 15px auto;
    border: 1px solid #cbcbcb;
   }
   #img_div:after{
    content: "";
    display: block;
    clear: both;
   }
  /* img{
    margin: 5px;
    width: 250px;
    height: 250px;
   }*/
   


.box{
  position: relative;
  padding-left: 20px;
  left: 100px;
  width:250px;
  height:250px;
  background: #ffff;
  margin: 10px;   
  box-sizing: border-box;
  display: inline-block;
}
 .box .imgBox {
  position: relative;
  overflow: hidden; 
}
.box .imgBox img{
  max-width: 100%;
  max-height: 50%;
  transition: transform 2s;
    margin: 5px;
    width: 250px;
    height: 250px;
}
 .box:hover .imgBox img{
  transform: scale(1,2);
  background: #ffff;
}
 .box .details{

  position: absolute;
  top:10px  ;
  left: 10px;
  bottom: 10px;
  right: 10px;
  background: rgba(0,0,0,.8);
  transform: scaleY(0);
  transition: transform .5s;

}
 .box:hover .details{

    transform: scaleY(1);
}

 .box .details .content{
  position: absolute;
  top: 50%;
  left:50%;
  transform: translate(-50%);
  text-align: center;
  padding: 10px;
  color: #fff;
}
 .box .details .content h2{
  margin: 0;
  padding-top: 10px;
  font-size:-20px;
  color: #ff0; 
  text-align: center;

}

 .box .details .content p{
  margin: 10px 0 0;
  padding:0;
  text-align: center;
}


</style>
</head>


<div class ="gallery">
   
    <?php

    if (isset($_GET['cid'])) {
      $cid = $_GET['cid'];
      $stmt = $conn->prepare("SELECT * FROM images where categoryID = $cid AND status = 1 ORDER BY categoryID");
    }
    else{
      $stmt = $conn->prepare("SELECT * FROM images WHERE status = 1 ORDER BY categoryID");
    }


    ?>
<?php
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
             ?>
                <div class="box">
                    <div class="imgBox">
                           <img src="uploads/<?php echo $row['file_name'] ?>"/>
                        <div class="details">
                    <div class="content">
                          <h2><?php echo $row['Cakename']?></h2>
                          <p><?php echo $row['price']?></p>
                  </div>
                      </div>
                </div>
              </div> 
      
          
          <?php
       } 
       ?>
    </div>

</body>
<footer>
  <?php include'footer.php'
?>
</footer>

</html>


