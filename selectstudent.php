<html>
<head></head>
<?php
include "connection.php";
$sql = "SELECT * FROM student";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
	
	echo "<html><head><style>
	html {
  background: url(card.jpg) no-repeat center fixed;
  background-size: cover;
}
	</style></head><body><h2 align='center'><u>Students eligibile for Scholarship</u></h2><table border='1' cell padding='5px' bgcolor='lightgrey' align='center'> <tr><td> STUDENT NAME</td><td>ROLL NUMBER </td><td> APPLICATION NUMBER</td><td> PHONE NUMBER</td><td> EMAIL-ID </td><td> AADHAR NUMBER</td><td> ADDRESS</td><td> COURSE</td><td> DOB </td><td> ACADEMIC YEAR</td><td> STATUS </td><td> AMOUNT </td><td> PASSWORD </td></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["studentname"]. "</td><td>" . $row["rollno"]. "</td><td>" . $row["appno"]. "</td><td>" . $row["phno"]. "</td><td>" . $row["email"]. "</td><td>" . $row["adaarno"]. "</td><td>" . $row["address"]. "</td><td>" . $row["course"]. "</td><td>" . $row["DOB"]. "</td><td>" . $row["academic year"]. "</td><td>" . $row["status"]. "</td><td>" . $row["amount"]. "</td><td>" . $row["password"]. "</td></tr>";
    }
	echo "</table></body></html>";
} else {
    echo "0 results";
}
$conn->close();
?>
</html>