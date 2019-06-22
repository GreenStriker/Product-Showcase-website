<?php



$con=mysqli_connect("localhost","silvertouch_user","Catkin08##@","silvertouch_army") ;
  if($con == null)
  {
    die('error connecting database');
  }






if(isset($_POST['submit']))
{



 $file = $_FILES['file']['tmp_name'];

 $handle = fopen($file,"r");

 while(($fileop = fgetcsv($handle,1000,",")) !==false)

 {

  $name = $fileop[0];
  $descp = $fileop[1];
  $catagory = $fileop[2];
  $sub = $fileop[3];
  $p1 = $fileop[4];
  $p2 = $fileop[5];
  $p3 = $fileop[6];
  





  $sql = "INSERT INTO product (name,descp,catagory,sub_catagory,path,path2,path3) VALUES ('$name','$descp','$catagory','$sub','$p1','$p2','$p3')";


   $con->query($sql);


}


   echo 'successfully updated!!!';
}

?>
<!DOCTYPE html>
<html>
<head>

<title>Import a CSV File with PHP & MySQL</title>



</head>
<body>



<form method="post" action="" enctype="multipart/form-data">
  <input type="file" name="file" />
  <br />
  <input type="submit" name="submit" value="Submit" />
</form>



</body>

</html>
