
<!DOCTYPE html>
<html>
<head>
	<title>Sign up</title>
</head>
<center>
<body background="white.jpg">
	<h1>WELCOME TO OPPORTUNITY MANAGEMENT SYSTEM</h1>
	<h2>Register Here</h2>

	<FORM ACTION=index.php METHOD=POST>

	<table border="1" width="300" height="150">

	 <tr> 
		<td>Name: </td>
	   <td><INPUT TYPE=TEXT NAME="Username" required/></td>
	</tr>

	<tr>
	   	<td>Email:</td>
	   	<td><input type="text" name="Email" required/></td>
	</tr>



	<tr>
	   <td>Password: </td>
	   	<td><INPUT TYPE=PASSWORD NAME="Password" required/></td>
	</tr>

	<tr>
	   <td> Confirm password: </td>
	   	<td><INPUT TYPE=PASSWORD NAME="CPassword" required/></td>
	</tr>


	 
	 <tr>
	  	<td colspan="5" align="center"><INPUT TYPE=SUBMIT VALUE="signup" name="signup"></td>
	 </tr>

	 <tr>
	  	<td colspan="5" align="center"> <a href="login.php"> <INPUT TYPE=button VALUE="login" name="login"></td>
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
if (isset($_POST['signup'])) 

{
	//create variables for each data that will be entered b user.

	 $name = $_POST['Username'];
	 $pass = $_POST['Password'];
	 $password = $_POST['CPassword'];
	 $email = $_POST['Email'];


	

	 	
	 


	 //query to insert data into the database
	 	
	
	$sql="INSERT INTO users (Username, Password, Email) VALUES ('$name','$pass','$email')";

	if (mysqli_query($conn, $sql)) {
		
		//echo "Registeration successful";
	}
	else
		{
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
	  	
	 }
mysqli_close($conn);



	
?>


