<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <title>Product Details</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="productcss/p.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">



    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style type="text/css">
      
.navbar, .dropdown-menu{
background:black;
border: none;

}

.nav>li>a, .dropdown-menu>li>a:focus, .dropdown-menu>li>a:hover, .dropdown-menu>li>a, .dropdown-menu>li{
  border-bottom: 3px solid transparent;
}
.nav>li>a:focus, .nav>li>a:hover,.nav .open>a, .nav .open>a:focus, .nav .open>a:hover, .dropdown-menu>li>a:focus, .dropdown-menu>li>a:hover{
  border-bottom: 3px solid transparent;
  background: rgba(154, 154, 154, 0.27);
}
.navbar a, .dropdown-menu>li>a, .dropdown-menu>li>a:focus, .dropdown-menu>li>a:hover, .navbar-toggle{
 color: #fff;
}
.dropdown-menu{
      -webkit-box-shadow: none;
    box-shadow:none;
}

.nav li:hover:nth-child(8n+1), .nav li.active:nth-child(8n+1){
  border-bottom: #b6f423 4px solid;
}
.nav li:hover:nth-child(8n+2), .nav li.active:nth-child(8n+2){
  border-bottom: #82e2ea 4px solid;
}
.nav li:hover:nth-child(8n+3), .nav li.active:nth-child(8n+3){
  border-bottom: #f8b42c 4px solid;
}
.nav li:hover:nth-child(8n+4), .nav li.active:nth-child(8n+4){
  border-bottom: #fd594a 4px solid;
}
.nav li:hover:nth-child(8n+5), .nav li.active:nth-child(8n+5){
  border-bottom: #e8479d 4px solid;
}
.nav li:hover:nth-child(8n+6), .nav li.active:nth-child(8n+6){
  border-bottom: #a12eeb 4px solid;
}
.nav li:hover:nth-child(8n+7), .nav li.active:nth-child(8n+7){
  border-bottom: #4785d9 4px solid;
}
.nav li:hover:nth-child(8n+8), .nav li.active:nth-child(8n+8){
  border-bottom: #2aed9a 4px solid;
}

.navbar-toggle .icon-bar{
    color: #fff;
    background: red;
}

body {
    
     background-image: url("http://wallpaper.pickywallpapers.com/1920x1080/highlighted-grey-background.jpg");
    background-repeat: no-repeat;
      background-size: 100% 100%;
    
    
}


<!-- sidenav start -->
 .preview {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -webkit-flex-direction: column;
  -ms-flex-direction: column;
  flex-direction: column; }
@media screen and (max-width: 996px) {
  .preview {
    margin-bottom: 20px; } }

.preview-pic {
  -webkit-box-flex: 1;
  -webkit-flex-grow: 1;
  -ms-flex-positive: 1;
  flex-grow: 1; }

.preview-thumbnail.nav-tabs {
  border: none;
  margin-top: 15px; }
.preview-thumbnail.nav-tabs li {
  width: 18%;
  margin-right: 2.5%; }
.preview-thumbnail.nav-tabs li img {
  max-width: 100%;
  display: block; }
.preview-thumbnail.nav-tabs li a {
  padding: 0;
  margin: 0; }
.preview-thumbnail.nav-tabs li:last-of-type {
  margin-right: 0; }

.tab-content {
  overflow: hidden; }
.tab-content img {
  width: 100%;
  -webkit-animation-name: opacity;
  animation-name: opacity;
  -webkit-animation-duration: .3s;
  animation-duration: .3s; }

.card {
  margin-top: 50px;
  background: #eee;
  padding: 3em;
  line-height: 1.5em; }

@media screen and (min-width: 997px) {
  .wrapper {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex; } }

.details {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -webkit-flex-direction: column;
  -ms-flex-direction: column;
  flex-direction: column; }

.colors {
  -webkit-box-flex: 1;
  -webkit-flex-grow: 1;
  -ms-flex-positive: 1;
  flex-grow: 1; }

.product-title, .price, .sizes, .colors {
  text-transform: UPPERCASE;
  font-weight: bold; }

.checked, .price span {
  color: #ff9f1a; }

.product-title, .rating, .product-description, .price, .vote, .sizes {
  margin-bottom: 15px; }

.product-title {
  margin-top: 0; }

.size {
  margin-right: 10px; }
.size:first-of-type {
  margin-left: 40px; }

.color {
  display: inline-block;
  vertical-align: middle;
  margin-right: 10px;
  height: 2em;
  width: 2em;
  border-radius: 2px; }
.color:first-of-type {
  margin-left: 20px; }

.add-to-cart, .like {
  background: purple;
  padding: 1.2em 1.5em;
  border: none;
  text-transform: UPPERCASE;
  font-weight: bold;
  color: #fff;
  -webkit-transition: background .3s ease;
  transition: background .3s ease; }
.add-to-cart:hover, .like:hover {
  background: #7B2A80;
  color: #fff; }

.not-available {
  text-align: center;
  line-height: 2em; }
.not-available:before {
  font-family: fontawesome;
  content: "\f00d";
  color: #fff; }

.orange {
  background: #ff9f1a; }

.green {
  background: #85ad00; }

.blue {
  background: #0076ad; }

.tooltip-inner {
  padding: 1.3em; }

@-webkit-keyframes opacity {
  0% {
    opacity: 0;
    -webkit-transform: scale(3);
    transform: scale(3); }
  100% {
    opacity: 1;
    -webkit-transform: scale(1);
    transform: scale(1); } }

@keyframes opacity {
  0% {
    opacity: 0;
    -webkit-transform: scale(3);
    transform: scale(3); }
  100% {
    opacity: 1;
    -webkit-transform: scale(1);
    transform: scale(1); } }

<!-- modalimage -->

#myImg:hover {opacity: 0.7;}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
}

/* Modal Content (image) */
.modal-content {
    margin: auto;
    display: block;
    width: 80%;
    max-width: 700px;
}

/* Caption of Modal Image */
#caption {
    margin: auto;
    display: block;
    width: 80%;
    max-width: 700px;
    text-align: center;
    color: #ccc;
    padding: 10px 0;
    height: 150px;
}

/* Add Animation */
.modal-content, #caption {    
    -webkit-animation-name: zoom;
    -webkit-animation-duration: 0.6s;
    animation-name: zoom;
    animation-duration: 0.6s;
}

@-webkit-keyframes zoom {
    from {-webkit-transform:scale(0)} 
    to {-webkit-transform:scale(1)}
}

@keyframes zoom {
    from {transform:scale(0)} 
    to {transform:scale(1)}
}

/* The Close Button */
.close {
    position: absolute;
    top: 100px;
    right: 35px;
    color: red;
    font-size: 40px;
    font-weight: bold;
    transition: 0.3s;
}

.close:hover,
.close:focus {
    color: red;
    text-decoration: none;
    cursor: pointer;
}

/* 100% Image Width on Smaller Screens */
@media only screen and (max-width: 700px){
    .modal-content {
        width: 100%;
    }
}

#myImg {
    border-radius: 5px;
    cursor: pointer;
    transition: 0.3s;
}

#myImg:hover {opacity: 0.7;}

/* FOOTER */


.bg-dark {
    background-color: #000000;
    height:100px;
}

.text-white {
    color: #fff;
}

.text-center {
    text-align: center;
}


    </style>
  </head>
  <body style="background-color: ">
   
    <div class="navbar-wrapper">
    <div class="container-fluid">
        <nav class="navbar navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="../">Silver Touch Sourcing </a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#" class="">Home</a></li>
                      
                        <li><a href="addnew.html">Add New</a></li>
                      
                     
                        
                    </ul>
                    <ul class="nav navbar-nav pull-right">
                       
                        <li class=""><a href="#">ADD</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</div>
<!-- ================ INICIA FORMULARIO DE LOGIN ============================================================== -->    


<?php //DB Connection

$conn=mysqli_connect("localhost","silvertouch_user","silvertouch12345","silvertouch_army") ;

if($conn){
//echo "Connect Successfully";

}
else{
    die("Could Not Connect:".mysqli_error());
}
?>



<?php
  $pname="";
  $catagory="";
  $Description="";
  $price="";

if(isset($_GET['id']) ){

  $pid=$_GET['id'];
 

   $sql="SELECT * FROM product INNER JOIN catagory on product.catagory=catagory.id where product.pid='".$pid."'  ";

   $result=mysqli_query($conn,$sql);
   
while($row=mysqli_fetch_array($result))

{
      $pname=$row['name'];
      $catagory=$row['catagory'];
      $Description=$row['descp'];
      $price=$row['price'];
      $tt='../uploads/'.$row["path"];

}


}
else{

   echo "wrong input";

}
?>

<div class="container" style="margin-top: 60px;">

   <div class="row">

   
   
   <div class="col-md-12" >
     
      <div class="card">
        
            <div class="wrapper row">
                <div class="preview col-md-6">

                    <div class="preview-pic tab-content">
                        <div class="tab-pane active" id="pic-1"><img id="myImg" style="" src="<?php echo $tt ; ?>" height="" alt=" No Product" /></div>
                    </div>

                </div>
                <div class="details col-md-6">
                    <div class="panel panel-default text-center">
                        <h3><div class="panel-title"><span class="glyphicon glyphicon-list-alt"></span>   Name</div></h3>
                        <hr>
                    <h4><?php echo  $pname ?></h4>
                    </div>
                    <div class="panel panel-default text-center">
                    <div class="rating">
                        <h3><div class="panel-title"><span class="glyphicon glyphicon-info-sign"></span>  Category</div></h3>
                        <hr>
                        <h4><?php echo $catagory ?></h4>
                    </div>
                    </div>
                    <div class="panel panel-default text-center">
                        <h3><div class="panel-title"><span class="glyphicon glyphicon-comment"></span>   Description</div></h3>
                        <hr>
                        <h4><?php echo $Description ?></h4>
                    </div>
               
                   
                   
            </div>
          </div>
      </div>
   </div>


</div>

</div>



   
  <div class="container">
   <div class="row">
      <div id="adv_team_4_columns_carousel" class="carousel slide four_shows_one_move team_columns_carousel_wrapper" data-ride="carousel" data-interval="2000" data-pause="hover">
         <!--========= Wrapper for slides =========-->
         <div class="carousel-inner" role="listbox">
            <!--========= 1st slide =========-->
            
            <!--========= 2nd slide =========-->
            <div class="item active">

 <?php
  $pname_similar="";
  $catagory_similar="";


if(isset($_GET['id']) ){

  $pid=$_GET['id'];
 

   $sql="SELECT * FROM product INNER JOIN catagory on product.catagory=catagory.id where catagory.catagory='". $catagory."'  ";

   $result1=mysqli_query($conn,$sql);
   
while($row1=mysqli_fetch_array($result1))

{  $tt1='../uploads/'.$row1["path"]; ?>
   







               <div class="col-xs-12 col-sm-6 col-md-3 team_columns_item_image">
                <a href="productdetails.php?id=<?php echo $row1['pid']?>">
                  <img src="<?php echo $tt1 ?>" alt="slider 02">
                  <div class="team_columns_item_caption">
                     <h4><?php echo $row1['name'] ?></h4>
                     <hr>
                     <h5><?php echo $row1['catagory']?></h5>
                  </div>
                </a>
               </div>

<?php } ?>

<?php } ?>

              
            </div>
            <!--========= 3rd slide =========-->
           
            <!--========= 4th slide =========-->
       
            <!--========= 7th Slide =========-->
           
            <!--========= 8th Slide =========-->
           
         </div>
         <!--======= Navigation Buttons =========-->
         <!--======= Left Button =========-->
        
      </div>
   </div>
</div>


  <!-- Footer -->
    <footer class="py-5 bg-dark">
     <div class="container" style="padding-top:30px;">
        <h5> <p class="text-center text-white">Copyright &copy; Silver Touch Sourcing 2017</p></h5> 
	<h5><p class="text-center text-white">Powered BY ::<a href="http://www.shieldsoftbd.com/" > Shield Soft Bangladesh</a></p></h5>
      </div>
      <!-- /.container -->
    </footer>
    
    
<div id="myModal" class="modal">
  <span class="close">&times;</span>
  <img class="modal-content" id="img01">
  
  <div id="caption"></div>
</div>
 
 



<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById('myImg');
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
 
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
    modal.style.display = "none";
}
</script>






    <script type="text/javascript" src="http://yourjavascript.com/21051171187/jquery-touchswipe-min.js"></script>
  <script type="text/javascript" src="http://yourjavascript.com/11873115711/jquery-1-12-4-min.js"></script>
  <script type="text/javascript" src="http://yourjavascript.com/71712155041/responsive-bootstrap-carousel.js"></script>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>



  </body>
</html>