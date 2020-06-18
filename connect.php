<?php
$conn_string="host=ec2-52-201-55-4.compute-1.amazonaws.com port=5432 dbname=d5b1megggjllbe user=mhllrewakqrzvy
password=678cb65a82153164dd76f7e85959043a16ef00a382192dd1ed5af1746325fdad";
$dbconn= pg_connect($conn_string);
if (isset($_POST['username'])) {
	# code...
	$username = $_POST['username'];
}

if (isset($_POST['pass'])) {
	# code...
	$pass = $_POST['pass'];
}
$sql = "SELECT * FROM Account1 WHERE _user='".$username."' AND _pass='".$pass."'";
$result =pg_query($dbconn, $sql);
$row = pg_num_rows($result);
if ($row==1)
{
	echo "Login success";
}
else
{
	echo "Login failed";
}
?>
