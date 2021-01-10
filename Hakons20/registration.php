<?php
error_reporting(0);
?>
<html>
	<head>
    <title>Digital Covid</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    </head>
	<style>
        
	body{
    margin: 0;
	padding: 0;
	background: url(reg.jpeg) no-repeat fixed;
	background-size: cover;
	background-position:center;
	font-family: sans-serif;
    }
	h1{
	margin: 0;
    padding: 0 0 20px;
    text-align: center;
    font-size:40px;
    color: #fff;
    width: 100%;
    height:60px;    
    background-color: mediumseagreen;
    font-family: 'Alfa Slab One',cursive;
    font-weight:bold;
    position:fixed;
    top:0;
	}
	h2{
		margin: 100;
		padding: 0 0 20px;
		text-align: center;
		font-size: 40px;
		color: white;
		margin-bottom:10px;
		color:#fff;
	}
	form{
		margin: 20px auto;
		/*width: 320px;*/
		color: red;
		background: white;
		padding: 30px 20px;
		border-radius:5px;
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
	.submit{
		text-align:center;
	}
	input[type="submit"]{
		width:320px;
		/*height: 45px;*/ 
		border:2px solid red;
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
    <div class="container">
    	<form action="" method="POST" enctype="multipart/form-data">
    	<div class="row">
    		<div class="col-md-4">
                <label>Image:</label>&nbsp;
				<div id="photo">
                <input type="file" name="uploadfile" value="" required/>
				</div>
			</div>
			<div class="col-md-4">
                <label>First Name:</label><br>
                <input type="text" name="firstName" required><br>
            </div>
            <div class="col-md-4">
                <label>Last Name:</label><br>
                <input type="text" name="lastName" required><br>
           	</div>
        </div>
        <div class="row">
           	<div class="col-md-4">
                <label><b>Gender:</b></label>

                <input type="radio" name="gender" id="Male" value="m"><span id="Male">Male</span>
                 <input type="radio" name="gender"  id="Female" value="f"><span id="Female">Female</span>
                 <input type="radio" name="gender" id="Others" value="o"><span id="Others">Others</span>
            </div>
        </div>
        <div class="row">
        	<div class="col-md-4">
                <label>Local Address:</label><br>
                <input type="text" name="LAddress" required><br>
        	</div>
        	<div class="col-md-4">
                <label>Permanent Address:</label><br>
                <input type="text" name="PAddress" required><br> 
            </div>
        	<div class="col-md-4">
				<label>Symptoms:</label>
				<input type="text" name="Sym" required><br>
			</div>
        </div>
		<div class="row">
			<div class="col-md-4">
				<label>Medication:</label>
				<input type="text" name="Med" required><br>
			</div>
		</div>
		<div class="row">
        	<div class="col-md-4">
				<label><b>Travel History:</b></label>

                <input type="radio" name="zone" id="Red" value="r"><span id="Male">Red</span>
                 <input type="radio" name="zone"  id="Orange" value="o"><span id="Female">Orange</span>
                 <input type="radio" name="zone" id="Green" value="g"><span id="Others">Green</span>
            </div>
        </div>
        <div class="row">
        	<div class="col-md-4">
                <label>Mobile Number:</label><br>
                <input type="text" name="Mob" id="num" maxlength="10" required><br>
            </div>
        	<div class="col-md-4">
                <label>E-mail Address:</label><br>
                <input type="text" name="Email"><br>
            </div>
        	<div class="col-md-4">
        		<label>Aadhaar No:</label><br>
            	<input type="text" name="Aadhaar" maxlength="12" required><br>
            </div>
        </div>
        <div class="submit">
            <input type="submit" value="Submit" name="submit">
        </div>
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