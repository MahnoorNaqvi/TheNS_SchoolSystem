 <?php

session_start();


$con = mysqli_connect('localhost','root');
if($con) {
    echo "connection successful"; 
}
else{
  echo "no connection";
}

mysqli_select_db($con, 'form');

  $name = $_POST['name'];
  $fname = $_POST['faname'];
 $rel = $_POST['reli'];
 $adm = $_POST['admcls'];
 $add = $_POST['adrs'];
  $phno = $_POST['phn'];
 $coun = $_POST['cntry'];

$q = "select * from student where Name ='$name' && FName ='$fname' && Religion ='$rel' && Admission Class ='$adm' 

&& Address ='$add' && PhoneNo = '$phno' && Country = '$coun' ";


$result = mysqli_query($con, $q);

$num = mysqli_num_rows($result);

if($num == 1)
{
   $_SESSION['username'] = $name;
    header('location:verify.php');
}
else
{
      header('location:verify.php');
  } 

  ?>