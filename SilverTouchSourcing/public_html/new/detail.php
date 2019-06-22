

<?php

$conn=mysqli_connect("localhost","silvertouch_user","Catkin08##@","silvertouch_army") ;

$subc="";

if($conn){
//echo "Connect Successfully";

}
else{
    die("Could Not Connect:".mysqli_error());
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="robots" content="all,follow">
    <meta name="googlebot" content="index,follow,snippet,archive">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Obaju e-commerce template">
    <meta name="author" content="Ondrej Svestka | ondrejsvestka.cz">
    <meta name="keywords" content="">

    <title>
        silver touch sourcing
    </title>

    <meta name="keywords" content="">

    <link href='http://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100' rel='stylesheet' type='text/css'>

    <!-- styles -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/owl.theme.css" rel="stylesheet">

    <!-- theme stylesheet -->
    <link href="css/style.default.css" rel="stylesheet" id="theme-stylesheet">

    <!-- your stylesheet with modifications -->
    <link href="css/custom.css" rel="stylesheet">

    <script src="js/respond.min.js"></script>

    <link rel="shortcut icon" href="favicon.png">
<style>
body {
    
     background-image:  url("gray-background-soft-fifteen-shades-of-grey-smooth-background-with-the-addition-of-a-bit-of-noise_hegwbc5fe_thumbnail-full01.png");
    background-repeat: no-repeat;
      background-size: 100% 100%;
    
    
}


.preview-pic {
  -webkit-box-flex: 1;
  -webkit-flex-grow: 1;
  -ms-flex-positive: 1;
  flex-grow: 1; }
  
  
  .zoom {
 
}

.zoom:hover {
 
    transform: scale(2); 
}
  

</style>

</head>

<body>
    <!-- *** TOPBAR ***
 _____
    <!-- *** TOP BAR END *** -->

    <!-- *** NAVBAR ***
 _________________________________________________________ -->

    <div class="navbar navbar-default yamm" role="navigation" id="navbar">
        <div class="container">
            <div class="navbar-header">

                <a class="navbar-brand home" href="index.html" data-animate-hover="bounce">
                    <img src="img/stsn (1).gif" alt="Obaju logo" class="hidden-xs" style="height=60px width = 139x">
                    <img src="img/logo-small.png" alt="Obaju logo" class="visible-xs"><span class="sr-only">Obaju - go to homepage</span>
                </a>
                <div class="navbar-buttons">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                        <span class="sr-only">Toggle navigation</span>
                        <i class="fa fa-align-justify"></i>
                    </button>
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#search">
                        <span class="sr-only">Toggle search</span>
                        <i class="fa fa-search"></i>
                    </button>

                </div>
            </div>
            <!--/.navbar-header -->

            <div class="navbar-collapse collapse" id="navigation">

                <ul class="nav navbar-nav navbar-left">
                    <li  ><a href="index.html">Home</a>
                    </li>
                    <li class="dropdown yamm-fw">
                 
                        <ul class="dropdown-menu">
                            <li>
                                <div class="yamm-content">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h5>Aboout</h5>

                                        </div>
                                        <div class="col-sm-3">
                                            <h5>Contact</h5>

                                        </div>
                                        <div class="col-sm-3">
                                            <h5>Our Achivement</h5>

                                        </div>
                                        <div class="col-sm-3">
                                            <h5>Featured</h5>


                                        </div>
                                    </div>
                                </div>
                                <!-- /.yamm-content -->
                            </li>
                        </ul>
                    </li>

                



            </div>
            <!--/.nav-collapse -->

            <div class="navbar-buttons">


                <!--/.nav-collapse -->

                <div class="navbar-collapse collapse right" id="search-not-mobile">
                    <button type="button" class="btn navbar-btn btn-primary" data-toggle="collapse" data-target="#search">
                        <span class="sr-only">Toggle search</span>
                        <i class="fa fa-search"></i>
                    </button>
                </div>

            </div>

            <div class="collapse clearfix" id="search">

                <form class="navbar-form" role="search">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search">
                        <span class="input-group-btn">

			<button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>

		    </span>
                    </div>
                </form>

            </div>
            <!--/.nav-collapse -->

        </div>
        <!-- /.container -->
    </div>
    <!-- /#navbar -->

    <!-- *** NAVBAR END *** -->

    <div id="all">

        <div id="content">
            <div class="container">


                <div class="col-md-3">
                    <!-- *** MENUS AND FILTERS ***
 _________________________________________________________ -->
                    <div class="panel panel-default sidebar-menu">

                        <div class="panel-heading">
                            <h3 class="panel-title">Categories</h3>
                        </div>

                        <div class="panel-body">
                            <ul class="nav nav-pills nav-stacked category-menu">
                                <li  class="active" class="nav-header"  data-toggle="collapse" data-target="#test" >


    <a>Military Gears  <span  class="caret" class="badge pull-right" ></span></a>
                                    <ul class="nav nav-list collapse" id="test">
                                        <li><a href="category.php?catagory=Binoculers and gun sights">Binoculers and gun sights</a>
                                        </li>
                                        <li><a href="category.php?catagory=Camoflagues">Camoflagues</a>
                                        </li>
                                        <li><a href="category.php?catagory=Flight Coverall">Flight Coverall</a>
                                        </li>
                                        <li><a href="category.php?catagory=Focus Lights">Focus Lights</a>
                                        </li>
                                            <li><a href="category.php?catagory=Gas Mask">Gas Mask</a>
                                        </li>
                                            <li><a href="category.php?catagory=Glasses">Glasses</a>
                                        </li>
                                            <li><a href="category.php?catagory=Gloves">Gloves</a>
                                        </li>
                                            <li><a href="category.php?catagory=GPS">GPS</a>
                                        </li>
                                            <li><a href="category.php?catagory=Knee and Elbo Pads">Knee and Elbo Pads</a>
                                        </li>
                                            <li><a href="category.php?catagory=Night Vishion Device">Night Vishion Device</a>
                                        </li>
                                           <li><a href="category.php?catagory=Perachute">Perachute</a>
                                        </li>
                                           
                                           <li><a href="category.php?catagory=Solar Pack">Solar Pack</a>
                                        </li>
                                           <li><a href="category.php?catagory=Tactical Ligts">Tactical Ligts</a>
                                        </li>
                                           <li><a href="category.php?catagory=Water Pot">Water Pot</a>
                                        </li>

                                    </ul>
                                </li>
                                <li class="active" class="nav-header"  data-toggle="collapse" data-target="#test2" >
                                    <a >Boats  <span class="caret" class="badge pull-right"></span></a>
                                    <ul class="nav nav-list collapse" id="test2">
                                        <li><a href="category.php?catagory=ASIS">ASIS</a>
                                        </li>
                                        <li><a href="category.php?catagory=Hison">Hison</a>
                                        </li>

                                    </ul>
                                </li>

                                <li class="active" class="nav-header"  data-toggle="collapse" data-target="#test3">
                                    <a>Body Armor  <span  class="caret" class="badge pull-right"></span></a>
                                    <ul class="nav nav-list collapse" id="test3">
                                        <li><a href="category.php?catagory=Armor Express">Armor Express</a>
                                        </li>
                                        <li><a href="category.php?catagory=Armor Plates (Body Armor)">Armor Plates (Body Armor)</a>
                                        </li>
                                        <li><a href="category.php?catagory=Black Hawck">Black Hawck</a>
                                        </li>
                                        <li><a href="category.php?catagory=Eagle">Eagle</a>
                                        </li>
                                        <li><a href="category.php?catagory=Helmets">Helmets</a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="active" class="nav-header"  data-toggle="collapse" data-target="#test4">
                                    <a>Boots <span class="caret" class="badge pull-right"></span></a>
                                    <ul class="nav nav-list collapse" id="test4">
                                        <li><a href="category.php?catagory=Military 1st">Military 1st</a>
                                        </li>
                                        <li><a href="category.php?catagory=Others">Others</a>
                                        </li>

                                    </ul>
                                </li>



                                 <li class="active" class="nav-header"  data-toggle="collapse" data-target="#test5">
                                    <a>Cases And Baggess  <span  class="caret" class="badge pull-right"></span></a>
                                    <ul class="nav nav-list collapse" id="test5">
                                        <li><a href="category.php?catagory=Gun Cases And others">Gun Cases And others</a>
                                        </li>
                                        <li><a href="category.php?catagory=Kit Bag">Kit Bag</a>
                                        </li>
                                        <li><a href="category.php?catagory=Military Back Pack">Military Back Pack</a>
                                        </li>
                                        <li><a href="category.php?catagory=War Field Laptop Case">War Field Laptop Case</a>
                                        </li>

                                    </ul>
                                </li>



                                <li class="active" class="nav-header"  data-toggle="collapse" data-target="#test6">
                                    <a>Civilian <span class="caret" class="badge pull-right"></span></a>
                                    <ul class="nav nav-list collapse" id="test6">
                                        <li><a href="category.php?catagory=Back Pack">Back Pack</a>
                                        </li>
                                        <li><a href="category.php?catagory=Golf Sticks">Golf Sticks</a>
                                        </li>
                                        <li><a href="category.php?catagory=ennis Bat">Tennis Bat</a>
                                        </li>


                                    </ul>
                                </li>


                                <li class="active" class="nav-header"  data-toggle="collapse" data-target="#test7">
                                    <a>Clothing <span class="caret" class="badge pull-right"></span></a>
                                    <ul class="nav nav-list collapse" id="test7">
                                        <li><a href="category.php?catagory=Camo">Camo</a>
                                        </li>
                                        <li><a href="category.php?catagory=Pants">Pants</a>
                                        </li>
                                        <li><a href="category.php?catagory=Plain Polo">Plain Polo</a>
                                        </li>
                                        <li><a href="category.php?catagory=Polo Shirts">Polo Shirts</a>
                                        </li>
                                        <li><a href="category.php?catagory=T shirts">T shirts</a>
                                        </li>
                                         <li><a href="category.php?catagory=Uniforms">Uniforms</a>
                                        </li>


                                    </ul>
                                </li>




                                <li class="active" class="nav-header"  data-toggle="collapse" data-target="#test8">
                                    <a>Explosive <span class="caret" class="badge pull-right"></span></a>
                                    <ul class="nav nav-list collapse" id="test8">

                                    </ul>
                                </li>

                                   <li class="active" class="nav-header"  data-toggle="collapse" data-target="#test9">
                                    <a>Inert/Training <span class="caret" class="badge pull-right"></span></a>
                                    <ul class="nav nav-list collapse" id="test9">
                                        <li><a href="category.php?catagory=Airport">Airport</a>
                                        </li>
                                        <li><a href="category.php?catagory=Drug Lab">Drug Lab</a>
                                        </li>
                                        <li><a href="category.php?catagory=Paint Rounds">Paint Rounds</a>
                                        </li>
                                        <li><a href="category.php?catagory=Others">Others</a>
                                        </li>

                                    </ul>
                                </li>

                                  <li class="active" class="nav-header"  data-toggle="collapse" data-target="#test10">
                                    <a>Technlogy<span class="caret"class="badge pull-right"></span></a>
                                    <ul class="nav nav-list collapse" id="test10">

                                            <li><a href="category.php?catagory=Bore Cleaner">Bore Cleaner</a>
                                        </li>
                                           <li><a href="category.php?catagory=War field Technologies">War field Technologies</a>
                                        </li>

                                        <li><a href="category.php?catagory=NERV CENTR ENHANCED CHARGER">NERV CENTR ENHANCED CHARGER</a>
                                        </li>
                                        <li><a href="category.php?catagory=Others">Others</a>
                                        </li>


                                    </ul>
                                </li>




 <li class="active" class="nav-header"  data-toggle="collapse" data-target="#test11">
                                    <a>Food Products<span class="caret" class="badge pull-right"></span></a>
                                    <ul class="nav nav-list collapse" id="test11">

                                            <li><a href="">Comming Soon</a>



                                    </ul>
                                </li>
                                <li class="active" class="nav-header"  data-toggle="collapse" data-target="#test12">
                                    <a>Surveillance Equipment<span class="caret" class="badge pull-right"></span></a>
                                    <ul class="nav nav-list collapse" id="test12">

                                            <li><a href="">Comming Soon</a>



                                    </ul>
                                </li>
                                <li class="active" class="nav-header"  data-toggle="collapse" data-target="#test13">
                                    <a>Souvenirs<span class="caret" class="badge pull-right"></span></a>
                                    <ul class="nav nav-list collapse" id="test13">

                                            <li><a href="">Comming Soon</a>



                                    </ul>
                                </li>
                                <li class="active" class="nav-header"  data-toggle="collapse" data-target="#test14">
                                    <a>Machinery<span class="caret" class="badge pull-right"></span></a>
                                    <ul class="nav nav-list collapse" id="test14">

                                            <li><a href="">Comming Soon</a>



                                    </ul>
                                </li>
                                <li class="active" class="nav-header"  data-toggle="collapse" data-target="#test15">
                                    <a>IT and software<span class="caret" class="badge pull-right"></span></a>
                                    <ul class="nav nav-list collapse" id="test15">

                                            <li><a href="">Comming Soon</a>



                                    </ul>
                                </li>


<li class="active" class="nav-header"  data-toggle="collapse" data-target="#test16">
                                    <a>Chemicals/Materials<span class="caret" class="badge pull-right"></span></a>
                                    <ul class="nav nav-list collapse" id="test16">

                                            <li><a href="">Comming Soon</a>



                                    </ul>
                                </li>





                            </ul>

                        </div>
                    </div>






                    <!-- *** MENUS AND FILTERS END *** -->





<?php
  $pname_similar="";
  $catagory_similar="";




  $pid=$_GET['id'];


   $sql="SELECT * FROM product  where pid='". $pid."'  ";

   $result1=mysqli_query($conn,$sql);

if($row1=mysqli_fetch_array($result1))

{

  $tt1='uploads/'.$row1["path"];
$tt2='uploads/'.$row1["path2"];
$tt3='uploads/'.$row1["path3"];

$name=$row1["name"];
$descp=$row1["descp"];

$subc=$row1["sub_catagory"];
 ?>





                </div>
 
                <div class="col-md-9">

                    <div class="row" id="productMain">
                        <h2 style="padding-left: 80px"><?php  echo str_replace(".png"," ", $name) ; ?></h2>
                        
                       <div class="preview-pic"> 
                        
                        <div class="col-sm-6">
                            <div id="mainImage">
                                <img src="<?php  echo"$tt1"; ?>" alt="" class="img-responsive">
                            </div>

                            </div>
                            <!-- /.ribbon -->

                        </div>
                        <div class="col-sm-6">


                            <div class="row" id="thumbs">
                                <div class="col-xs-4">
                                    <a href="<?php  echo"$tt1"; ?>" class="thumb">
                                        <img src="<?php  echo"$tt1"; ?>" alt="" class="img-responsive">
                                    </a>
                                </div>

                                 <?php  if($tt2!="uploads/"){                  ?>



                                <div class="col-xs-4">
                                    <a href="<?php  echo"$tt2"; ?>" class="thumb">
                                        <img src="<?php  echo"$tt2"; ?>" alt="" class="img-responsive">
                                    </a>
                                </div>

 <?php  }          ?>

 <?php  if($tt3!="uploads/"){                  ?>


                                <div class="col-xs-4">
                                    <a href="<?php  echo"$tt3"; ?>" class="thumb">
                                        <img src="<?php  echo"$tt3"; ?>" alt="" class="img-responsive">
                                    </a>
                                </div>


                                 <?php  }            ?>

                            </div>
                        </div>

                    </div>

<?php } ?>

                    <div class="box" id="details">
                        <p>
                            <h4>Product details</h4>
                            <p><?php  echo $descp; ?></p>
                  
                            <div class="social">
                                <h4>Show it to your friends</h4>
                                <p>
                                    <a href="www.facebook.com" class="external facebook" data-animate-hover="pulse"><i class="fa fa-facebook"></i></a>
                                    <a href="www.gmail.com" class="external gplus" data-animate-hover="pulse"><i class="fa fa-google-plus"></i></a>
                                    <a href="www.twitter.com" class="external twitter" data-animate-hover="pulse"><i class="fa fa-twitter"></i></a>
                                    <a href="www.gmail.com" class="email" data-animate-hover="pulse"><i class="fa fa-envelope"></i></a>
                                </p>
                            </div>







                    </div>




                    <div class="row same-height-row">
                        <div class="col-md-3 col-sm-6">
                            <div class="box same-height">
                                <h2>You may also like these products</h2>
                            </div>
                        </div>

<?php





$sql="SELECT * FROM product  where sub_catagory='".$subc."' ";

   $result=mysqli_query($conn,$sql);
   $count = 0;

while($row=mysqli_fetch_array($result))

{ $tt='uploads/'.$row["path"];



    $count++; ?>

                        <div class="col-md-3 col-sm-6">
                            <div class="product same-height">
                                <div class="flip-container">
                                    <div class="flipper">
                                        <div class="front">
                                            <a href="detail.html">
                                                <img src="<?php echo $tt ?>" alt="" class="img-responsive">
                                           
                                         <center>  <h4><?php echo $row['name'] ?></h4></center> </a>
                                           
                                        </div>
                                        <div class="back">
                                            <a href="detail.php?id=<?php echo $row['pid'] ?>">
                                                <img src="<?php echo $tt ?>" alt="" class="img-responsive">
                                           <center>  <h4><?php echo $row['name'] ?></h4></center> </a>
                                        </div>
                                    </div>
                                </div>
                                <a href="detail.html" class="invisible">
                                    <img src="<?php echo $tt ?>" alt="" class="img-responsive">
                                </a>
                                <div class="text">
                                   
                                 
                                </div>
                            </div>
                         
                        </div>

 <?php if($count==7 ){break;} } ?> 
                    </div>

                    


            </div>
            <!-- /.container -->
        </div>
        <!-- /#content -->


        <!-- *** FOOTER ***
 _________________________________________________________ -->
    




        <!-- *** COPYRIGHT ***
 _________________________________________________________ -->
        <div id="copyright">
            <div class="container">
                <div class="col-md-6">
                    <p class="pull-left">Copyright © Silver Touch Sourcing 2017</p>

                </div>
           
            </div>
        </div>
        <!-- *** COPYRIGHT END *** -->



    </div>
    <!-- /#all -->




    <!-- *** SCRIPTS TO INCLUDE ***
 _________________________________________________________ -->
    <script src="js/jquery-1.11.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.cookie.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/modernizr.js"></script>
    <script src="js/bootstrap-hover-dropdown.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/front.js"></script>






</body>

</html>
