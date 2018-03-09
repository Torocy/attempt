

<!DOCTYPE html>
<html>
<head>
	<title>Sign up</title>
</head>
<center>
<body background="white.jpg">
	<h1>WELCOME TO OPPORTUNITY MANAGEMENT SYSTEM</h1>
	<h2>Login Here</h2>

	<FORM ACTION=login.php METHOD=POST>

	<table border="1" width="300" height="150">

	 <tr> 
		<td>Name: </td>
	   <td><INPUT TYPE=TEXT NAME="Username"></td>
	</tr>


	<tr>
	   <td>Password: </td>
	   	<td><INPUT TYPE=PASSWORD NAME="Password"></td>
	</tr>


	 <tr>
	  	<td colspan="5" align="center"> <a href="home.php"><INPUT TYPE=SUBMIT VALUE="login" name="login"></td>
	 </tr>

	 <tr>
	  	<td colspan="5" align="center"> <a href="index.php"> <INPUT TYPE=button VALUE="Back" name="Back"></td>
	 </tr>
	  </table>
	</FORM>

</body>
</center>
</html>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "register";


//connect to the database'


$conn = new mysqli($servername, $username, $password, $dbname);

//check connection

if (!$conn) {

    die("Connection failed: " . mysqli_connect_error());

}
//echo "Connected successfully";





//whether button is clicked
if (isset($_POST['login'])) 

{
	//create variables for each data that will be entered b user.

	 $name = $_POST['Username'];
	 $pass = $_POST['Password'];
	
	

	 	
	 


	 //query to retrieve data from  the database
	 	
	
	$sql="select* from users  where Username='$name' and Password ='$pass'";

	if (mysqli_query($conn, $sql)) {
		
		//echo "logged in";
	}
	else
		{
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
	  	
	 }
mysqli_close($conn);



	
?>


