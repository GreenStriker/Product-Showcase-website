



<?php



$conn=mysqli_connect("localhost","silvertouch_user","Catkin08##@","silvertouch_army") ;


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



</head>
<style>
.pagination {
    display: inline-block;
}

.pagination a {
    color: black;
    float: left;
    padding: 8px 16px;
    text-decoration: none;
    transition: background-color .3s;
    border: 1px solid #ddd;
    font-size: 22px;
}

.pagination a.active {
    background-color: #4CAF50;
    color: white;
    border: 1px solid #4CAF50;
}

.pagination a:hover:not(.active) {background-color: #ddd;}


body {
    
     background-image:  url("116701-black-background-images-1920x1200-pictures.jpg");
    background-repeat: no-repeat;
      background-size: 100% 100%;
    
    
}




</style>

<body>



    <!-- *** NAVBAR ***
 _________________________________________________________ -->

    <div class="navbar navbar-default yamm" role="navigation" id="navbar">
        <div class="container">
            <div class="navbar-header">

                <a class="navbar-brand home" href="../" data-animate-hover="bounce">
                    <img src="img/stsn (1).gif" alt="Obaju logo" class="hidden-xs" style="width:150px;height:60px;">
                    <img src="img/stsn (1).gif"  alt="Obaju logo" class="visible-xs"><span class="sr-only">Obaju - go to homepage</span>
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
                    <li class="active"><a href="../">Home</a>
                    </li>

                        </ul>




            </div>

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
<li><a href="category.php?catagory=">Explosive</a>
                                        </li>
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

                    <div class="banner">
                        <a href="#">
                            <img src="xxx.png" alt="Bangldesh" class="img-responsive" style="width:300px;height:150px";>
                        </a>
                    </div>
                </div>

                <div class="col-md-9">
                    <div class="box">
                        <h1>Silver Touch Sourcing</h1>
                        <p>We offer wide selection of the best products we have found and carefully selected worldwide.</p>
                    </div>



                    <div class="row products">


   <?php

//$catagory_rcv=00888;
 $catagory_rcv=$_GET["catagory"];


//$page=$_GET['page'];


if (!isset($_GET['page'])) {
  $page = 1;
} else {
  $page = $_GET['page'];
}

$p=$page;

$results_per_page =9;
if($catagory_rcv==1 ||$catagory_rcv==2 || $catagory_rcv==3 || $catagory_rcv==4 || $catagory_rcv==5 || $catagory_rcv==6 || $catagory_rcv==7 || $catagory_rcv==8 || $catagory_rcv==9 || $catagory_rcv==10 || $catagory_rcv==11 || $catagory_rcv==12 || $catagory_rcv==13 || $catagory_rcv==14 || $catagory_rcv==15 || $catagory_rcv==16  ){
    
   
     
     $sql=" SELECT * FROM product inner join catagory on product.catagory=catagory.id where product.catagory='".$catagory_rcv."'  ORDER BY sub_catagory ";
    
}

else{
   $sql=" SELECT * FROM product  where sub_catagory='".$catagory_rcv."'";
}

$result = mysqli_query($conn, $sql);
$number_of_results = mysqli_num_rows($result);


$number_of_pages = ceil($number_of_results/$results_per_page);



$this_page_first_result = ($page-1)* $results_per_page;


if($catagory_rcv==1 ||$catagory_rcv==2 || $catagory_rcv==3 || $catagory_rcv==4 || $catagory_rcv==5 || $catagory_rcv==6 || $catagory_rcv==7 || $catagory_rcv==8 || $catagory_rcv==9 || $catagory_rcv==10 || $catagory_rcv==11 || $catagory_rcv==12 || $catagory_rcv==13 || $catagory_rcv==14 || $catagory_rcv==15 || $catagory_rcv==16 ){
    
    $sql=" SELECT * FROM product inner join catagory on product.catagory=catagory.id where product.catagory ='".$catagory_rcv."'  ORDER BY sub_catagory LIMIT ".$this_page_first_result.", ". $results_per_page."  ";
    
}else{

  $sql=" SELECT * FROM product  where sub_catagory='".$catagory_rcv."'  LIMIT ".$this_page_first_result.", ". $results_per_page."  ";

}
   $result2=mysqli_query($conn,$sql);
   $count = 0;

while($row=mysqli_fetch_array($result2))

{ 
    $tt='uploads/'.$row["path"];
  ?>



                        <div class="col-md-4 col-sm-6">
                            <div class="product">
                                <div class="flip-container">
                                    <div class="flipper">
                                        <div class="front">
                                            <a href="detail.php?id=<?php echo $row['pid'] ?>">
                                                <img  src="<?php echo $tt ?>" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                        
                              
                                        <div class="back">
                                            <a href="detail.php?id=<?php echo $row['pid'] ?>">
                                                <img  src="<?php echo $tt ?>" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <a href="detail.php?id=<?php echo $row['pid'] ?>" class="invisible">
                                    <img  src="<?php echo $tt ?>" alt="" class="img-responsive">
                                </a>
                                <div class="text">
                                     <h3><a href="detail.php?id=<?php echo $row['pid'] ?>"><?php echo $row['sub_catagory'] ?></a></h3>
                                    <h3><a href="detail.php?id=<?php echo $row['pid'] ?>"><?php echo $row['name'] ?></a></h3>

                                    <p class="buttons">
                                        <a href="detail.php?id=<?php echo $row['pid'] ?>" class="btn btn-default">View detail</a>

                                    </p>
                                </div>
                                <!-- /.text -->


                                <!-- /.ribbon -->

                                <div class="ribbon new">
                                    
                                </div>
                                <!-- /.ribbon -->


                                <!-- /.ribbon -->
                            </div>
                            <!-- /.product      <li><a href="#">&raquo;</a>
                            </li>-->
                        </div>




          <?php  } ?>




                   



                        
                    </div>
                  


               
     


                    <div class="pages">


                    <ul class="pagination">

                     

                                <?php 
                              
                        

                    

             echo '<li class="page-item"> <a href="category.php?page=' .( $p-1) .'& catagory='. $catagory_rcv.' "> &laquo; </a>   </li>';


                for ($page=1;$page<=$number_of_pages; $page++) {
                 echo '<li class="page-item"> <a href="category.php?page=' . $page .'& catagory='. $catagory_rcv.' ">' . $page . '</a>   </li>';


                     

                  } 

                  

                   echo '<li class="page-item"> <a href="category.php?page=' . ($p+1) .'& catagory='. $catagory_rcv.' "> &raquo;</a>  </li>'; ?>
                         
                          
                          
                            
                       
                        </ul>
                    </div>


                </div>
                <!-- /.col-md-9 -->
            </div>
            <!-- /.container -->
        </div>
        <!-- /#content -->


        <!-- *** FOOTER ***
 _________________________________________________________ -->
     
            <!-- /.container -->
        </div>
        <!-- /#footer -->

        <!-- *** FOOTER END *** -->




        <!-- *** COPYRIGHT ***
 _________________________________________________________ -->
        <div id="copyright">
            <div class="container">
                <div class="col-md-6">
                    <p class="pull-left">Copyright © Silver Touch Sourcing 2017</p>

                </div>
          
            </div>
        </div>
        
    </div>
   
 
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