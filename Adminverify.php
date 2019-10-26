
<?php
    include "connection.php";
    if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      //$myusername = mysqli_real_escape_string($dbname,$_POST['adminid']);
      //$mypassword = mysqli_real_escape_string($dbname,$_POST['adminpwd']); 
       $myusername = $_POST['adminid'];
	   $mypassword = $_POST['adminpwd'];
      $sql = "SELECT * FROM adminlog WHERE adminname = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($conn,$sql);
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         echo " <html>
                 <head></head>
                <body align='center'>
				<h2><a href='Adminmain.html' >click here to open main page</a></h2> <br>
				<img src='giphy.gif' width='500' height='300' alt='relax and click'/> 
                				
				</body>
	          </html>";
	  }
	  else
	  {
		  echo "
		   <html>
                 <head></head>
                <body align='center' bgcolor='skyblue'>
				<img src='invalid.jpg' width='500' height='500' alt='error'/></br>
				<h2><a href='Adminhome.html'  >click here to return home page</a></h2>  
				</body>
	          </html>";
	       
      }
}
	  
	  ?>
	 