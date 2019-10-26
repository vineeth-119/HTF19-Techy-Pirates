<html>
<head></head>
<?php
include "connection.php";
$uname=$_POST['uname'];
$pwd =$_POST['studpwd'];
$sql = "SELECT * FROM student where studentname='$uname' and password='$pwd'";
$result = $conn->query($sql);


if ($result->num_rows ==1) {
    // output data of each row
	echo "<html><body bgcolor='skyblue'><h3 align='left'> Live Status</h3><table border='1' bgcolor='lightgreen' cellpadding='10px' bgcolor='lightgreen'> <tr><td> student name </td><td>roll no </td><td> appno</td><td> course</td><td> academicyear </td><td> status </td><td> amount </td></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["studentname"]. "</td><td>" . $row["rollno"]. "</td><td>" . $row["appno"]. "</td><td>" . $row["course"]. "</td><td>" . $row["academic year"]. "</td><td>" . $row["status"]. "</td><td>" . $row["amount"]. "</td></tr>";
    }
	echo "<table></body></html>";
	echo" <html>
                 <head></head>
                <body align='center'>
				<a href='notice.php' target='_blank'>click here to open circulars</a><br>
				<a href='faq.php' target='_blank' >click here to open FAQ</a> <br> 
				<a href='askfaq.html' target='_blank'>click here to ask question</a>
				</body>
	          </html>";
	
} else {
    echo "invalid user
	      <html>
                 <head></head>
                <body align='center'>
				<a href='studentlogin.html' >click here to return Login page</a>  
				</body>
	          </html>
		  ";
}
$conn->close();
?>
</html>