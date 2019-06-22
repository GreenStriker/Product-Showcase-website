<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <title>Product Details</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

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




<!-- sidenav start -->

  body,html{
    height: 100%;
  }

  /* remove outer padding */
  .main .row{
    padding: 0px;
    margin: 0px;
  }

  /*Remove rounded coners*/

  nav.sidebar.navbar {
    border-radius: 0px;
  }

  nav.sidebar, .main{
    -webkit-transition: margin 200ms ease-out;
      -moz-transition: margin 200ms ease-out;
      -o-transition: margin 200ms ease-out;
      transition: margin 200ms ease-out;
  }

  /* Add gap to nav and right windows.*/
  .main{
    padding: 10px 10px 0 10px;
  }

  /* .....NavBar: Icon only with coloring/layout.....*/

  /*small/medium side display*/
  @media (min-width: 768px) {

    /*Allow main to be next to Nav*/
    .main{
      position: absolute;
      width: calc(100% - 40px); /*keeps 100% minus nav size*/
      margin-left: 40px;
      float: right;
    }

    /*lets nav bar to be showed on mouseover*/
    nav.sidebar:hover + .main{
      margin-left: 200px;
    }

    /*Center Brand*/
    nav.sidebar.navbar.sidebar>.container .navbar-brand, .navbar>.container-fluid .navbar-brand {
      margin-left: 0px;
    }
    /*Center Brand*/
    nav.sidebar .navbar-brand, nav.sidebar .navbar-header{
      text-align: center;
      width: 100%;
      margin-left: 0px;
    }

    /*Center Icons*/
    nav.sidebar a{
      padding-right: 13px;
    }

    /*adds border top to first nav box */
    nav.sidebar .navbar-nav > li:first-child{
      border-top: 1px #e5e5e5 solid;
    }

    /*adds border to bottom nav boxes*/
    nav.sidebar .navbar-nav > li{
      border-bottom: 1px #e5e5e5 solid;
    }

    /* Colors/style dropdown box*/
    nav.sidebar .navbar-nav .open .dropdown-menu {
      position: static;
      float: none;
      width: auto;
      margin-top: 0;
      background-color: transparent;
      border: 0;
      -webkit-box-shadow: none;
      box-shadow: none;
    }

    /*allows nav box to use 100% width*/
    nav.sidebar .navbar-collapse, nav.sidebar .container-fluid{
      padding: 0 0px 0 0px;
    }

    /*colors dropdown box text */
    .navbar-inverse .navbar-nav .open .dropdown-menu>li>a {
      color: #777;
    }

    /*gives sidebar width/height*/
    nav.sidebar{
      width: 200px;
      height: 100%;
      margin-left: -160px;
      float: left;
      
      margin-bottom: 0px;
    }

    /*give sidebar 100% width;*/
    nav.sidebar li {
      width: 100%;
    }

    /* Move nav to full on mouse over*/
    nav.sidebar:hover{
      margin-left: 0px;
    }
    /*for hiden things when navbar hidden*/
    .forAnimate{
      opacity: 0;
    }
  }

  /* .....NavBar: Fully showing nav bar..... */

  @media (min-width: 1330px) {

    /*Allow main to be next to Nav*/
    .main{
      width: calc(100% - 200px); /*keeps 100% minus nav size*/
      margin-left: 200px;
    }

    /*Show all nav*/
    nav.sidebar{
      margin-left: 0px;
      float: left;
    }
    /*Show hidden items on nav*/
    nav.sidebar .forAnimate{
      opacity: 1;
    }
  }

  nav.sidebar .navbar-nav .open .dropdown-menu>li>a:hover, nav.sidebar .navbar-nav .open .dropdown-menu>li>a:focus {
    color: #CCC;
    background-color: transparent;
  }

  nav:hover .forAnimate{
    opacity: 1;
  }
  section{
    padding-left: 15px;
  }


  <!-- product card css -->

  .services{
    margin: 20px auto;
    }
figure.snip1174 {
  color: #fff;
  position: relative;
  float: left;
  overflow: hidden;
  background-color: #1a1a1a;
  color: #ffffff;
  text-align: left;
  margin: 10px;
  width: 100%;
  border-radius: 0px;
 


  
}
figure.snip1174 * {
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  -webkit-transition: all 0.35s ease;
  
  transition: all 0.35s ease;
}
figure.snip1174 img {
  max-width: 100%;
  -webkit-transform: scale(1.1);
  transform: scale(1.1);
  vertical-align: top;
  opacity: 0.7;
}
figure.snip1174 figcaption {
  position: absolute;
  padding: 40px 25px;
  top: 0;
  left: 0;
}
figure.snip1174 h2,
figure.snip1174 p {
  margin: 0;
  padding: 0;
}
figure.snip1174 h2 {
  margin-bottom: 10px;
  display: inline-block;
  font-weight: 100;
  font-size: 1.8em;
}
figure.snip1174 p {
  font-weight: 300;
  margin-bottom: 20px;
  line-height: 1.4em;
}
figure.snip1174 a {
  display: inline-block;
  padding: 10px 20px;
  border: 1px solid #ffffff;
  text-decoration: none;
  color: #ffffff;
  letter-spacing: 2px;
  text-transform: uppercase;
  font-size: 0.8em;
  -webkit-transform: translateY(50%);
  transform: translateY(50%);
  opacity: 0;
}
figure.snip1174 a:hover {
  background-color: rgba(0, 0, 0, 0.2);
}
figure.snip1174.blue {
  background-color: #20638f;
}
figure.snip1174.yellow {
  background-color: #c87f0a;
}
figure.snip1174.green {
  background-color: #1e8449;
}
figure.snip1174.navy {
  background-color: #222f3d;
}
figure.snip1174.red {
  background-color: #962d22;
}
figure.snip1174:hover img,
figure.snip1174.hover img {
  opacity: 0;
  -webkit-transform: scale(1);
  transform: scale(1);
}
figure.snip1174:hover a,
figure.snip1174.hover a {
  -webkit-transform: translateY(0);
  transform: translateY(0);
  opacity: 1;
}

body {
    
     background-image: url("http://wallpaper.pickywallpapers.com/1920x1080/highlighted-grey-background.jpg");
    background-repeat: no-repeat;
      background-size: 100% 100%;
    
    
}

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
  <body>
   
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
                 
                     <a  style="" class="navbar-brand" href="../index.html">Silver Touch Sourcing</a>
                        
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#" class="">Home</a></li>
                       
                        <li><a href="addnew.html">Add New</a></li>
                         <li><a href="addnew.html">Add New</a></li>
                          <li><a href="addnew.html">Add New</a></li>
                           <li><a href="addnew.html">Add New</a></li>
                    
                    </ul>
                    <ul class="nav navbar-nav pull-right">
                    
                        <li class=""><a href="#">ADD</a></li>
                          <li class=""><a href="#">ADD</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</div>
<!-- ================  ============================================================== -->    
<div class="container" style="margin-top: 60px;">

   <div class="row">

   <div class="col-md-3" style="float:none;">
     
     <nav class="navbar navbar-inverse sidebar" role="navigation" style="">
    
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-sidebar-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Catagory</a>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1" >
      <ul class="nav navbar-nav" >
        <li class="active"><a href="product.php?catagory=1 ">Military Gears<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-home"></span></a></li>
        
        <li ><a href="product.php?catagory=6 ">Surveillance Equipmen<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-user"></span></a></li>
        
        <li ><a href="product.php?catagory=2">Footware<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-envelope"></span></a></li>

        <li><a href="product.php?catagory=4 ">Body armor/Ballistics<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-home"></span></a></li>
        
        <li ><a href="product.php?catagory=5 ">Boats<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-user"></span></a></li>
        
        <li ><a href="product.php?catagory=7 ">Souvenirs<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-envelope"></span></a></li>
        
          <li class="active"><a href="product.php?catagory=8">Machinary<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-home"></span></a></li>
        
        <li ><a href="product.php?catagory=9 ">Clothing<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-user"></span></a></li>
        
        <li ><a href="product.php?catagory=10 ">IT and software<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-envelope"></span></a></li>

        <li><a href="product.php?catagory=11 ">Inert/Training<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-home"></span></a></li>
        
        <li ><a href="product.php?catagory=12">Cases/Bags <span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-user"></span></a></li>
        
        <li ><a href="product.php?catagory=13">Chemicals/Materials<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-envelope"></span></a></li>
        
       <li ><a href="product.php?catagory=3 ">Food Products<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-envelope"></span></a></li>
       
          <li ><a href="product.php?catagory=14 ">Technology<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-envelope"></span></a></li>
       
      </ul>
    </div>

</nav>
   </div>
   
   <?php //DB Connection

$conn=mysqli_connect("localhost","silvertouch_user","silvertouch12345","silvertouch_army") ;

if($conn){
//echo "Connect Successfully";

}
else{
    die("Could Not Connect:".mysqli_error());
}
?>

   
   <div class="col-md-9"></div>
   <?php


 $catagory_rcv=$_GET["catagory"];
 // echo $catagory_rcv;


 $sql=" SELECT * FROM product inner join catagory on product.catagory=catagory.id where product.catagory='".$catagory_rcv."' ";


   $result=mysqli_query($conn,$sql);
   
while($row=mysqli_fetch_array($result))

{ $tt='../uploads/'.$row["path"];?>
<div class="services">
<div class="col-md-3 col-sm-6 col-xs-12">
    <figure class="snip1174 navy col-md-3 ">
      <img style="object-fit: cover;  height:300px; max-height:300px;"  src="<?php echo $tt ?>" alt="sq-sample33" />
      <figcaption>
        <h2><?php echo $row['name'] ?></h2>
        <p>
         <?php echo $row['catagory'] ?>
        </p>
        <a href="productdetails.php?id=<?php echo $row['pid'] ?> ">Details</a>
      </figcaption>
    </figure>
</div>
</div>

<?php  } ?>



   </div>
    

</div>  


    <!-- Footer -->
    <div style="padding-top:10px;">
    <footer class="py-5 bg-dark" >
     <div class="container" style="padding-top:30px;">
        <h5> <p class="text-center text-white">Copyright &copy; Silver Touch Sourcing 2017</p></h5> 
	<h5><p class="text-center text-white">Powered BY ::<a href="http://www.shieldsoftbd.com/" > Shield Soft Bangladesh</a></p></h5>
      </div>
      <!-- /.container -->
    </footer>
</div>







    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>