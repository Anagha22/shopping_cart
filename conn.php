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
$sql="SELECT * FROM stopnshop";
$store=mysqli_query($conn,$sql);
if(mysqli_num_rows($store)>0){
	while($row=mysqli_fetch_assoc($store)){
 echo "id: " .  $row[ 'username' ];
  }
} else {
    echo "0 results";
}
//Sending form data to sql db
$query ="INSERT INTO shop (uid,username,userpassword,email,sex)VALUES ('$uid', '$u','$p','$email','$sex')";

//insert and close.
mysqli_query($conn, $query);
mysqli_close($conn);




?>



