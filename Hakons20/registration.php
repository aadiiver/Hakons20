<?php
error_reporting(0);
?>
<html>
<head>
    <title>Digital Covid</title>
    </head>
	<style>
        
	body{
    margin: 0;
	padding: 0;
	background: url(reg.jpeg);

	background-size: cover;
	background-position: centre;
	font-family: sans-serif;
    }
	h1{
		margin: 0;
		padding: 0 0 20px;
		text-align: center;
		font-size:50px;
		color: #fff;
		width: 100%;
		height:50px;    
		background-color:mediumseagreen;
		font-family: 'Alfa Slab One',cursive;
	}
	h2{
		margin: 100;
		padding: 0 0 20px;
		text-align: centre;
		font-size: 40px;
		color: white;
		margin-left: 570px;
		margin-bottom:10px;
	}
	form{
		margin: 20px auto;
		width: 320px;
		color: red;
		background: white;
		padding: 20px;
	}
	input{
		padding: 10px;
		font-size: inherit;
	}
	input[type="text"]{
		display: block;
		margin-bottom: 25px;
		width: 100%;
		border:2px solid steelblue;
		background: #FAF6D9;
	}
	input[type="number"]{
		display: block;
		margin-bottom: 25px;
		width: 100%;
		border:2px solid steelblue;
		background: #FAF6D9;
	}

	input[type="text"]{
		display: block;
		margin-bottom: 25px;
		width: 100%;
		border:2px solid steelblue;
		background: #FAF6D9;
	}
	input[type="radio"]{
		margin: 0 8px 25px 18px;
	}
	input[type="radio"]{
		margin-left: 0;
	}
	input[type="radio"]{
		margin-left: 0;
	}
	input[type="submit"]{
		width:320px;
		height: 45px;
		border: solid red;
		background: steelblue;
		color: white;
	}
	input:focus{
		background: white;
	}
	input[input="radio"]:checked + label{
		font-weight: bold;
		font-size: 18px;
	}
	</style>
    <header>
        <h1><marquee>Digital Covid</marquee></h1>
    </header>
<body>
    <h2>Traveller Reg. Form</h2>
        <form action="" method="POST" enctype="multipart/form-data">
                <label>Image:</label>&nbsp;
				<div id="photo">
                <input type="file" name="uploadfile" value="" required/>
				</div>
                <label>First Name:</label><br>
                <input type="text" name="firstName" required><br>
                <label>Last Name:</label><br>
                <input type="text" name="lastName" required><br>
                <div>
                <label><b>Gender:</b></label>

                <input type="radio" name="gender" id="Male" value="m"><span id="Male">Male</span>
                 <input type="radio" name="gender"  id="Female" value="f"><span id="Female">Female</span>
                 <input type="radio" name="gender" id="Others" value="o"><span id="Others">Others</span>
                </div>
                <label>Local Address:</label><br>
                <input type="text" name="LAddress" required><br>
                <label>Permanent Address:</label><br>
                <input type="text" name="PAddress" required><br> 
				<label>Symptoms</label>
				<input type="text" name="Sym" required><br>
				<label>Medication</label>
				<input type="text" name="Med" required><br>
				<div>
				<label><b>Travel History:</b></label>

                <input type="radio" name="zone" id="Red" value="r"><span id="Male">Red</span>
                 <input type="radio" name="zone"  id="Orange" value="o"><span id="Female">Orange</span>
                 <input type="radio" name="zone" id="Green" value="g"><span id="Others">Green</span>
                </div>
                <label>Mobile Number:</label><br>
                <input type="text" name="Mob" id="num" maxlength="10" required><br>
                <label>E-mail Address:</label><br>
                <input type="text" name="Email"><br>
                <label>Aadhaar No:</label><br>
                <input type="text" name="Aadhaar" maxlength="12" required><br>
                
            <input type="submit" value="Submit" name="submit">
        </form>
<?php
	$servername='localhost';
$username='root';
$password='';
$dbname = "registration";
$conn=new mysqli($servername,$username,$password,"$dbname");
if($conn->connect_error)
{
die('Could not Connect My Sql:' .$conn->connect_error);
}
else
{
	print('connection success');
}	if($_POST['submit'])
{
	 $firstName = mysqli_real_escape_string($conn, $_POST['firstName']);
	 $lastName = mysqli_real_escape_string($conn, $_POST['lastName']);
	 $gender = mysqli_real_escape_string($conn, $_POST['gender']);
	 $LAddress = mysqli_real_escape_string($conn,$_POST['LAddress']);
	 $PAddress = mysqli_real_escape_string($conn,$_POST['PAddress']);
	 $Sym = mysqli_real_escape_string($conn, $_POST['Sym']);
	 $Med = mysqli_real_escape_string($conn, $_POST['Med']);
	 $zone = mysqli_real_escape_string($conn, $_POST['zone']);
	 $Mob = mysqli_real_escape_string($conn, $_POST['Mob']);
	 $Email = mysqli_real_escape_string($conn, $_POST['Email']);
	 $Aadhaar = mysqli_real_escape_string($conn, $_POST['Aadhaar']);
	 $filename = $_FILES["uploadfile"]["name"];
		$tempname = $_FILES["uploadfile"]["tmp_name"];
		$folder = "travel/".$filename;
		move_uploaded_file($tempname,$folder);
	
	 $sql = "INSERT INTO regis (picsource,firstName,lastName,gender,LAddress,PAddress,Sym,Med,zone,Mob,Email,Aadhaar) VALUES ('$folder','$firstName','$lastName','$gender','$LAddress','$PAddress','$Sym','$Med','$zone','$Mob','$Email','$Aadhaar')";
		if ($conn->query($sql)== TRUE) 
		{
		echo "New record created successfully !";
		} 
		else 
		{
		echo "Error: " . $sql . "</br>" . $conn->error;
 	 	}
		$conn->close();
}
?>		
    </body>
</html>