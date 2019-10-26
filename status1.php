<?php
 include "connection.php";
 if($_SERVER["REQUEST_METHOD"] == "POST") {
 
 $str1=$_POST['uname'];
  $str2=$_POST['rollno'];
   $str3=$_POST['appno'];
 $str4=$_POST['phno'];  
 $str5=$_POST['email'];
 $str6=$_POST['aadhar'];
 $str7=$_POST['address'];
 $str8=$_POST['course'];
 $str9=$_POST['dob'];
 $str10=$_POST['year1'];
 $str11=$_POST['studpwd'];
   
 $sql = "INSERT INTO student(studentname,rollno,appno,phno,email,adaarno,address,course,DOB,`academic year`,password)
 VALUES ('$str1',$str2,$str3,'$str4','$str5','$str6','$str7','$str8',$str9,'$str10','$str11')";

if ($conn->query($sql) == TRUE) {
    echo " Hence Registered and go to login page, that is start from again";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
 }

$conn->close();
?>