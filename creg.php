<?php
$servername = "localhost";
$username = "root";
$password = "aparna";
$dbname = "E-shopping";
$uid = $_POST['uid'];
$u= $_POST['username'];
$p = $_POST['userpassword'];
$email = $_POST['email'];
$sex = $_POST['sex'];
echo "working";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "connected successfully";
mysql_select_db($E-shopping)
	or die("Unable to select database: " .mysql_error());
//Sending form data to sql db
$query ="INSERT INTO stopnshop (uid,username,userpassword,email,sex)VALUES ('$uid', '$u','$p','$email','$sex')"; 
$result= mysql_query($query);
if($result){
header('Location: ../thankyou.php');
}
else {
echo "ERROR";
}
mysqli_query($conn,$query);
mysqli_close($conn);

?>
