<div class="navcontainer">
<nav class="fixed-nav-bar">
    <ul class="mcd-menu">
      <li>
          <div class="header-brand">
          <a href="index.php">
            
            <img src="images/minilogo.png" >
          </a>
        </div>
        </li>
      <li>
        <a href="index.php">
          <i class="fa fa-home"></i>
          <strong>Home</strong>
          <small>Love Bakes</small>
        </a>
      </li>
       <li>
        <a href="cakesbirthday.php">
          <i class="fa fa-comments-o"></i>
          <strong>Cakes</strong>
          <small>Bakes w/ Love</small>
        </a>
        <ul>
            <?php 
            include('includes/conn.php');
             $stmt = $conn->prepare("SELECT * FROM category");
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
          <li><a href="cakesbirthday.php?cid=<?php echo $row['id'] ?>"><i class="fa fa-globe"></i><?php echo $row['cName'] ?></a></li>
        <?php } ?>
        </ul>
      </li>
    
      <li>
        <a href="AboutUs.php">
          <i class="fa fa-gift"></i>
          <strong>About Us</strong>
          <small>Home Sweet Store</small>
        </a>
      </li>
      <li>
        <a href="message.php">
          <i class="fa fa-globe"></i>
          <strong>Message Us</strong>
          <small>Touch Of Sweet</small>
        </a>
      </li>
     
      <li>
        <a href="Chat.php">
          <i class="fa fa-picture-o"></i>
          <strong>Talk/Chat with Us</strong>
          <small>Over Cupcakes</small>
        </a>
      </li>
      
      
    </ul>
  </nav>
</div>







<style>

.header-brand {
  position: relative;
  font-family: Arial;
  font-size:30px;
  font-weight: 900;

  color: #111;
  text-transform:uppercase;
  display: block;
  margin:3px 0;
  text-align: left;
  line-height:8px;
  padding: 0px 10px 0px 40px;
 /* border-right: 3px solid #111;*/
  float: left;
}
 
.header-brand img {
  width: 150px;
  height: 50px;
  margin-bottom:10px;
 /* margin-top: 10px;*/

}

.clearfix:before,
.clearfix:after {
    content: " ";
    display: table;
}

.clearfix:after {
    clear: both;
}
.clearfix {
    *zoom: 1;
}
.fixed-nav-bar {
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
    z-index: 9999;

}
.navcontainer {
  position: relative;
  padding-top: 10px;
  padding-bottom: 30px;
  width: 1000px;
  height: 50px;
  margin-right: 50px;
 
}
@media only screen and (min-width: 1200px) {
    .navcontainer {
        width: 1210px;
    }
}

@media only screen and (min-width: 960px) and (max-width: 1199px) {
    .navcontainer {
        width: 1030px;
    }
}

@media only screen and (min-width: 768px) and (max-width: 959px) {
    .navcontainer {
        width: 682px;
    }
}

@media only screen and (min-width: 480px) and (max-width: 767px) {
    .navcontainer {
        width: 428px;
        margin: 0 auto;
    }
}

@media only screen and (max-width: 479px) {
    .navcontainer {
        width: 320px;
        margin: 0 auto;
    }
}


.mcd-menu {
  list-style: none;
  position: relative;
  padding: -15px;
  margin: 0;
  background:  #ff80aa;
  height: 100px;
  width: 1280px;
  border-radius: 2px;
  -moz-border-radius: 2px;
  -webkit-border-radius: 2px;
}
.mcd-menu li {
  float: left;
  position: relative;
  padding-top: 10px;
}
.mcd-menu li a {
  display: block;
  text-decoration: none;
  padding: 10px 25px;
  text-align: center;
  color: #fff;
  border-right: 1px solid #E7E7E7;
}
.mcd-menu li a i {
  display: block;
  font-size: 30px;
  margin-bottom: 10px;
}
.mcd-menu li a strong {
  display: block;
  text-transform: uppercase;
  font-family: Hobo std;
  font-size: 20px;
}
.mcd-menu li a small {
  display: block;
  font-size: 10px;
  font-family: Arial;
}

.mcd-menu li a i, .mcd-menu li a strong, .mcd-menu li a small {
  position: relative;
  
  transition: all 300ms linear;
  -o-transition: all 300ms linear;
  -ms-transition: all 300ms linear;
  -moz-transition: all 300ms linear;
  -webkit-transition: all 300ms linear;
}
.mcd-menu li:hover > a i {
    opacity: 1;
    -webkit-animation: moveFromTop 300ms ease-in-out;
    -moz-animation: moveFromTop 300ms ease-in-out;
    -ms-animation: moveFromTop 300ms ease-in-out;
    -o-animation: moveFromTop 300ms ease-in-out;
    animation: moveFromTop 300ms ease-in-out;
}
.mcd-menu li:hover a strong {
    opacity: 1;
    -webkit-animation: moveFromLeft 300ms ease-in-out;
    -moz-animation: moveFromLeft 300ms ease-in-out;
    -ms-animation: moveFromLeft 300ms ease-in-out;
    -o-animation: moveFromLeft 300ms ease-in-out;
    animation: moveFromLeft 300ms ease-in-out;
}
.mcd-menu li:hover a small {
    opacity: 1;
    -webkit-animation: moveFromRight 300ms ease-in-out;
    -moz-animation: moveFromRight 300ms ease-in-out;
    -ms-animation: moveFromRight 300ms ease-in-out;
    -o-animation: moveFromRight 300ms ease-in-out;
    animation: moveFromRight 300ms ease-in-out;
}

.mcd-menu li:hover > a {
  color: #524141;
}
.mcd-menu li a.active {
  position: relative;
  color: #e67e22;
  border:0;
  border-top: 4px solid #e67e22;
  border-bottom: 4px solid #e67e22;
  margin-top: -4px;
  box-shadow: 0 0 5px #DDD;
  -moz-box-shadow: 0 0 5px #DDD;
  -webkit-box-shadow: 0 0 5px #DDD;
}
.mcd-menu li a.active:before {
  content: "";
  position: absolute;
  top: 0;
  left: 45%;
  border-top: 5px solid #e67e22;
  border-left: 5px solid transparent;
  border-right: 5px solid transparent;
}

@-webkit-keyframes moveFromTop {
    from {
        opacity: 0;
        -webkit-transform: translateY(200%);
        -moz-transform: translateY(200%);
        -ms-transform: translateY(200%);
        -o-transform: translateY(200%);
        transform: translateY(200%);
    }
    to {
        opacity: 1;
        -webkit-transform: translateY(0%);
        -moz-transform: translateY(0%);
        -ms-transform: translateY(0%);
        -o-transform: translateY(0%);
        transform: translateY(0%);
    }
}
@-webkit-keyframes moveFromLeft {
    from {
        opacity: 0;
        -webkit-transform: translateX(200%);
        -moz-transform: translateX(200%);
        -ms-transform: translateX(200%);
        -o-transform: translateX(200%);
        transform: translateX(200%);
    }
    to {
        opacity: 1;
        -webkit-transform: translateX(0%);
        -moz-transform: translateX(0%);
        -ms-transform: translateX(0%);
        -o-transform: translateX(0%);
        transform: translateX(0%);
    }
}
@-webkit-keyframes moveFromRight {
    from {
        opacity: 0;
        -webkit-transform: translateX(-200%);
        -moz-transform: translateX(-200%);
        -ms-transform: translateX(-200%);
        -o-transform: translateX(-200%);
        transform: translateX(-200%);
    }
    to {
        opacity: 1;
        -webkit-transform: translateX(0%);
        -moz-transform: translateX(0%);
        -ms-transform: translateX(0%);
        -o-transform: translateX(0%);
        transform: translateX(0%);
    }
}



.mcd-menu li ul,
.mcd-menu li ul li ul {
  position: absolute;
  height: auto;
  min-width: 200px;
  padding: 0;
  margin: 0;
  background:  #ff80aa;
  border-top: 4px solid #e67e22;
  opacity: 0;
  visibility: hidden;
  transition: all 300ms linear;
  -o-transition: all 300ms linear;
  -ms-transition: all 300ms linear;
  -moz-transition: all 300ms linear;
  -webkit-transition: all 300ms linear;
  top: 130px;
  z-index: 1000;
}
.mcd-menu li ul:before {
  content: "";
  position: absolute;
  top: -8px;
  left: 23%;
  border-bottom: 5px solid #e67e22;
  border-left: 5px solid transparent;
  border-right: 5px solid transparent;
}
.mcd-menu li:hover > ul,
.mcd-menu li ul li:hover > ul {
  display: block;
  opacity: 1;
  visibility: visible;
  top: 100px;
}
.mcd-menu li ul li {
  float: none;
}
.mcd-menu li ul li a {
  padding: 10px;
  text-align: left;
  border: 0;
  border-bottom: 1px solid #EEE;
}
.mcd-menu li ul li a i {
  font-size: 16px;
  display: inline-block;
  margin: 0 10px 0 0;
}
.mcd-menu li ul li ul {
  left: 230px;
  top: 0;
  border: 0;
  border-left: 4px solid #e67e22;
}  
.mcd-menu li ul li ul:before {
  content: "";
  position: absolute;
  top: 15px;
  left: -14px;
  border-right: 5px solid #e67e22;
  border-bottom: 5px solid transparent;
  border-top: 5px solid transparent;
}
.mcd-menu li ul li:hover > ul {
  top: 0px;
  left: 200px;
}



.mcd-menu li.float {
  float: right;
}
.mcd-menu li a.search {
  padding: 29px 20px 30px 10px;
}
.mcd-menu li a.search i {
  margin: 0;
  display: inline-block;
  font-size: 18px;
}
.mcd-menu li a.search input {
  border: 1px solid #EEE;
  padding: 10px;
  background: #FFF;
  outline: none;
  color: #777;
}
.mcd-menu li a.search button {
  border: 1px solid #e67e22;
  padding: 10px;
  background: #e67e22;
  outline: none;
  color: #FFF;
  margin-left: -4px;
}
.mcd-menu li a.search input:focus {
  border: 1px solid #e67e22;
}


.search-mobile { 
  display:none !important;
  background:#e67e22;
  border-left:1px solid #e67e22;
  border-radius:0 3px 3px 0;
}
.search-mobile i { 
  color:#FFF; 
  margin:0 !important;
}


@media only screen and (min-width: 960px) and (max-width: 1199px) {
    .mcd-menu li a.search input {
    width:100px;
  }
}

@media only screen and (min-width: 768px) and (max-width: 959px) {
    .mcd-menu {
    height: 85px;
  }
  .mcd-menu li a {
    padding: 12px;
  }
  .mcd-menu li a i {
    font-size: 22px;
  }
  .mcd-menu li a strong {
    font-size: 12px;
  }
  .mcd-menu li a small {
    font-size: 10px;
  }
  .mcd-menu li a.search {
    display:none;
  }
  .search-mobile { 
    display:block !important;
    margin: 20px;
    border-radius:3px;
    -moz-border-radius:3px;
    -webkit-border-radius:3px;
  }
  .mcd-menu li:hover > ul {
    top:85px;
    min-width:180px;
  }
  .mcd-menu li ul li > ul {
    min-width:150px;
    left:200px;
    top:0;
  }
  .mcd-menu li ul li:hover > ul {
    min-width:150px;
    left:180px;
    top:0;
  }
  .mcd-menu li ul li ul li ul {
    min-width:150px;
    left:25px !important;
    top:54px;
    border:0;
    border-top:3px solid #e67e22;
  }
  .mcd-menu li ul li ul li:hover ul {
    top:35px;
  }
  .mcd-menu li ul li ul li ul:before {
    border:0;
    border-bottom:5px solid #e67e22;
    border-left:5px solid transparent;
    border-right:5px solid transparent;
    left:10%;
    top:-8px;
  }
  .mcd-menu li:hover ul a {
    font-size:12px;
  }
  .mcd-menu li:hover ul a i {
    font-size:14px;
  }
}

@media only screen and (min-width: 480px) and (max-width: 767px) {
    .mcd-menu {
      height: 42px;
      position: relative;
    }
  .mcd-menu li a {
    padding: 12px 17.7px;
  }
    .mcd-menu li a strong, .mcd-menu li a small, .mcd-menu li a.search {
      display: none;
    }
    .mcd-menu li a i {
      margin: 0;
      font-size: 18px;
    }
    .mcd-menu li {
      position: static;
    }
    .mcd-menu li ul {
      min-width: 100%;
      left: 0;
      top: 50px;
    }
    .mcd-menu li:hover > ul {
      top: 42px;
    }
    .mcd-menu li > ul:before {
      border:0;
    }
    .mcd-menu li ul > li {
      position: relative;
    }
    .mcd-menu li ul li:hover > ul {
    left:34px;
    }
  .mcd-menu li a {
    position: relative;
    font-size:12px;
  }
  .mcd-menu li a:hover strong,.mcd-menu li a.active strong {
    display:block;
    font-size:10px;
    padding:3px 0;
    position:absolute;
    top:-20px;
    left:0;
    background:#e67e22;
    color:#FFF;
    min-width:100%;
    text-transform:lowercase;
    font-weight:normal;
  }
  .mcd-menu li a.active:before{
    left: 40%;
  }
  .search-mobile { 
    display:block !important;
  }
  
  .mcd-menu li ul li > ul {
    min-width:200px;
    left:200px;
  }
  .mcd-menu li ul li:hover ul {
    left:180px;
  }
  .mcd-menu li ul li ul:before {
    left:-9px;
  }
  .mcd-menu li ul li ul li ul {
    min-width:200px;
    border:0;
    border-top:3px solid #e67e22;
    left:25px !important;
    top: 45px;
  }
  .mcd-menu li ul li ul li:hover ul {
    top:40px;
  }
  .mcd-menu li ul li ul li ul:before {
    border:0;
    border-bottom:5px solid #e67e22;
    border-left:5px solid transparent;
    border-right:5px solid transparent;
    left:10%;
    top:-8px;
  }
}

@media only screen and (max-width: 479px) {
    .mcd-menu {
      height: 42px;
      position: relative;
    }
    .mcd-menu li a strong, .mcd-menu li a small, .mcd-menu li a.search {
      display: none;
    }
    .mcd-menu li a {
      padding: 12px 13.8px;
    font-size:12px;
    }
    .mcd-menu li a i {
      margin: 0;
      font-size: 18px;
    }
    .mcd-menu li {
      position: static;
    }
    .mcd-menu li ul {
      min-width: 100%;
      left: 0;
      top: 50px;
    }
    .mcd-menu li:hover > ul {
      top: 42px;
    }
    .mcd-menu li > ul:before {
      border:0;
    }
    .mcd-menu li ul > li {
      position: relative;
    }
    .mcd-menu li ul li:hover > ul {
    left:34px;
    }
  .mcd-menu li a {
    position: relative;
  }
  .mcd-menu li a:hover strong,.mcd-menu li a.active strong {
    display:block;
    font-size:10px;
    padding:3px 0;
    position:absolute;
    top:-20px;
    left:0;
    background:#e67e22;
    color:#FFF;
    min-width:100%;
    text-transform:lowercase;
    font-weight:normal;
  }
  .mcd-menu li a.active:before{
    left: 40%;
  }
  
  .mcd-menu li ul li > ul {
    min-width:150px;
    left:160px;
  }
  .mcd-menu li ul li:hover ul {
    left:120px;
  }
  .mcd-menu li ul li ul:before {
    left:-9px;
  }
  .mcd-menu li ul li ul li ul {
    min-width:160px;
    left:25px !important;
    top:39px;
    border:0;
    border-top:3px solid #e67e22;
  }
  .mcd-menu li ul li ul li:hover ul {
    top:39px;
  }
  .mcd-menu li ul li ul li ul:before {
    border:0;
    border-bottom:5px solid #e67e22;
    border-left:5px solid transparent;
    border-right:5px solid transparent;
    left:10%;
    top:-8px;
  }
    
}



</style>