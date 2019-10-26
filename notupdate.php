<?php
include "connection.php";
 if($_SERVER["REQUEST_METHOD"] == "POST") {
 $str1=$_POST['title'];
  $str2=$_POST['cont'];
   $str3=$_POST['ld'];
 $sql = "INSERT INTO myadmin (title,content,last_date) VALUES ('$str1','$str2','$str3')";

if ($conn->query($sql) == TRUE) {
    echo "Notices Updated
	<html>
				<head></head>
				<style>
	html {
  background: url(back.jpg) no-repeat center fixed;
  background-size: cover;
}
	</style>
                <body align='center'><br><br>
				 <img src='tick.jpg' width='300' height='200' alt='done' align='center'/></br><br><br>
				<h2><a href='Adminmain.html' >click here to return Login page</a> </h2>
                  				
				</body>
	          </html>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
 }

$conn->close();
?>