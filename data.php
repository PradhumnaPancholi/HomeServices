<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>LIST</title>
</head>

<body>

<?php 
$fname=$_POST['FirstName'];
$lname=$_POST['LastName'];
$cphone=$_POST['CellPhone'];
$email=$_POST['EmailAddress'];
$aow =$_POST['AddressWork'];
$worker=$_POST['services'];
$brief=$_POST['Brief'];
$Appointment=$_POST['date'];
$time=$_POST['time'];


$dbc = mysqli_connect('localhost', 'root','','maplehurst') or die ('Error connecting to MySQL');
$formdo=true;
if(empty($fname)){
    $formdo=false;
    echo "<center><p>Please enter the first name</p></center>";
}
if(empty($lname)){
    $formdo=false;
    echo "<center><p>Please enter the last name</p></center>";
}
if(empty($cphone)){
    $formdo=false;
    echo "<center><p>Please enter the CELL Phone</p></center>";
}
if(empty($email)){
    $formdo=false;
    echo "<center><p>Please enter the email</p></center>";
}
if(empty($aow)){
    $formdo=false;
    echo "<center><p>Please enter the address of the work</p></center>";
}
if(empty($worker)){
    $formdo=false;
    echo "<center><p>Please select the worker</p></center>";
}
if(empty($brief)){
    $formdo=false;
    echo "<center><p>Please write what you need to be done</p></center>";
}
if(empty($Appointment)){
    $formdo=false;
    echo "<center><p>Please select the date of appointment</p></center>";
}
if(empty($time)){
    $formdo=false;
    echo "<center><p>Please select the time</p></center>";
}
if($formdo==true){
    
//Create a variable  

$query = "INSERT INTO services (firstname,lastname,cellphone,email,addressofwork,worker,brief,dateofapp,timeofspp)" . "VALUES ('$fname','$lname','$cphone','$email','$aow','$worker','$brief','$Appointment','$time')";
 //run
$result = mysqli_query($dbc, $query)  or die ("ERROR");
echo '<center><h1 align="center">THANKS FOR SUBMITTING THE DETAILS </h1></center>';
}
//close
else {
     echo '<h1 align="center">ERROR - SOMETHING WENT WRONG</h1>';
    mysqli_close($dbc);
}
 ?>


</body>
</html> 