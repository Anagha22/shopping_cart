<?php

// DATABASE CONNECTION

$servername="localhost";
$username="root";
$password="aparna";
$dbname="E-shopping";
$tbl_name="stopnshop";

//create connection
$conn= new mysqli($servername, $username, $password, $dbname);

//check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "connected successfully";

$name = $_POST['username'];
$mail = $_POST['email'];
$pword = $_POST['userpassword'];

// REGISTRATION

// username and password sent from form 
$myusername=$_POST['myusername']; 
$mypassword=$_POST['mypassword']; 

// To protect MySQL injection (more detail about MySQL injection)
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysql_real_escape_string($myusername);
$mypassword = mysql_real_escape_string($mypassword);

$sql="SELECT * FROM $tbl_name WHERE username='$myusername' and userpassword='$mypassword'";
$result=mysql_query($sql);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1){

// Register $myusername, $mypassword and redirect to file "login_success.php"
session_register("myusername");
session_register("mypassword"); 
header("location:pro.html");
}
else {
echo "Wrong Username or Password";
}

$sql1 = "INSERT INTO `E-shopping`.`stopnshop` (`username`, `userpassword`, `email`) VALUES ('$myusername', '$mypassword', '$mymail')";

if ($conn->query($sql1) === TRUE) { 
echo "New record created successfully";
 } 
else
 { 
echo "Error: " . $sql1 . "<br>" . $conn->error; 
} 

//$selection="SELECT * FROM stopnshop";
//$store=mysqli_query($conn,$selection);
//if(mysqli_num_rows($store)>0){
//	while($row=mysqli_fetch_assoc($store)){
 //echo "id: " .  $row[ 'username' ];
// }
//} else {
  //  echo "0 results";
//}
//Sending form data to sql db
//$query ="INSERT INTO stopnshop (uid,username,userpassword,email,sex)VALUES ('$uid', '$name','$pword','$mail','$sex')";

//insert and close.
//mysqli_query($conn, $query);
//mysqli_close($conn);
//}
//$conn->close(); 
?>
