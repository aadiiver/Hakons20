<!DOCTYPE html>
<html>
<head>
<title>Digital Covid</title>
    <header>
        <h1><marquee>Digital Covid</marquee></h1>
    </header>
<style>
body{
	margin: 0;
	padding: 0;
	background: url(reg.jpeg) no-repeat fixed;
	background-size: cover;
	background-position: center;
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
    background-color: mediumseagreen;
    font-family: 'Alfa Slab One',cursive;
}
p{
    text-align: center;
    color: white;
    font-size: 40px;
    padding: 30px;
    margin-right: -75px;
}
table{
    background-color:azure; 
    /*border-spacing: 6px;*/
    /*width: 75%;*/
    font-size:18px;
    text-align:center;
}
</style>
</head>
<body>
    <p><b>Travellers Details</b></p>
<table border="1">
<tr>
<th>S.No</th>
<th>First Name</th>
<th>Last Name</th>  
<th>Photo</th>  
<th>Gender</th>
<th>Local Address</th>
<th>Permanent Address</th>
<th>Symptoms</th>
<th>Medication</th>
<th>Zone</th>
<th>Mobile</th>
<th>Email</th>    
<th>Aadhaar</th>        
</tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "registration");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM regis";
$Data = mysqli_query($conn, $sql);
$total = mysqli_num_rows($Data);
if ($total != 0) {
// output data of each row
while($result = mysqli_fetch_assoc($Data)) {
echo 
    "<tr>
        <td>".$result['S.No.']."</td>
        <td>".$result['firstName']."</td>
        <td>".$result['lastName']."</td>
		<td><img src='".$result['picsource']."' height='100' width='100'/></td>
        <td>".$result['gender']."</td>
        <td>".$result['LAddress']."</td>
        <td>".$result['PAddress']."</td>
		<td>".$result['Sym']."</td>
		<td>".$result['Med']."</td>
		<td>".$result['zone']."</td>
        <td>".$result['Mob']."</td>
		<td>".$result['Email']."</td>
		<td>".$result['Aadhaar']."</td>
    </tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
</body>
</html>