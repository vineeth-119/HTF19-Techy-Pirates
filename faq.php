<?php
include "connection.php";
$sql = "SELECT * FROM faqdb";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
	echo "<head><style>
	html {
  background: url(card.jpg) no-repeat center fixed;
  background-size: cover;
}
	</style></head><h2 align='center'>Mostly Asked Questions</h2><table border='1' align ='center' cellpadding='15px' cellspacing='5px' bgcolor='cyan'>";
    while($row = $result->fetch_assoc()) {
        echo "
		<tr>
		<th> QUERIES </th>
		<th> ".$row["faq"]." </th>
	    </tr>
	    <tr>
		<th> ANSWER</th>
		<th>".$row["ans"]."</th>
		</tr>";
		
}
echo "</table>";
 
}
$conn->close();
?>