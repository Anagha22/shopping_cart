<?php

$user_name = "root";
$password = "aparna";
$database = "E-shopping";


mysql_connect("$user_name","$password");

mysql_select_db("$E-shopping");


$order = "INSERT INTO Trial

        (username,email )

        VALUES

        ('$username',

        '$email')";


$result = mysql_query($order);

if($result){

    echo("<br>Input data is succeed");

} else{

    echo("<br>Input data is fail");

}
?>




