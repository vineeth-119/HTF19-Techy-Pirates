<?php
include "connection.php";
 if($_SERVER["REQUEST_METHOD"] == "POST") {
 $str=$_POST['faq'];
 $sql = "INSERT INTO faqdb(faq) VALUES ('$str')";

if ($conn->query($sql) == TRUE) {
    echo "query asked";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
 }

$conn->close();
?>