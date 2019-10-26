<?php
    include "connection.php";
	if($_SERVER["REQUEST_METHOD"] == "POST") {      
       $myusername = $_POST['uname'];
	   $mypassword = $_POST['studpwd'];
      $sql = "SELECT appno,studentname,course,rollno,status,amount FROM student WHERE studentname = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($conn,$sql);
      $count = mysqli_num_rows($result);
	  if($count==1)
	  {
	     $row=mysqli_fetch_row($result);
  echo "<table border='2px' cellspacing='1px' cellpadding='30px' align='center' bgcolor='snow' >
	<form>
<tr><br>
    <th>Application Number</th>
    <th>Student Name</th>
	<th>Course/Course year</th>
	<th>Roll Number</th>
	<th>Status/</th>
	<th>Amount Released (RTF/MTF) </th>
  </tr>
  <th>".$row["appno"]."<br><br><br><br></th>
  <th>".$row["studentname"]."<br></th>
  <th>".$row["course"]."<br></th>
  <th>".$row["rollno"]." </th>
  <th>".$row["status"]." </th>
  <th>".$row["amount"]." </th>
  <tr>
  </form>
  </table>
  </center>
  <center><br>
  <br>
 ";}
  else
  {
  echo "invalid user";
  }
	}
  ?>
  