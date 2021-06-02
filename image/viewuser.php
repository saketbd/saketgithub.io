<?php
session_start();
?>
<?php
include("connect.php");
$r=mysql_query("select * from reg");
echo("<table><tr><th>Id</th><th>First_Name</th><th>Last_Name</th><th>email_id</th><th>password</th><th>confirm_password</th><th>gender</th><th>dob</th><th>address</th><th>city</th><th>state</th><th>ph_no</th><th>pincode</th><th>image</th></tr>");
while($s=mysql_fetch_array($r))
{
	echo"<tr><th>".$s['id']."</th><th>".$s['First_Name']."</th><th>".$s['Last_Name']."</th><th>".$s['Email_id']."</th><th>".$s['password']."</th><th>"
	.$s['confiem_password']."</th><th>".$s['gender']."</th><th>".$s['dob']."</th><th>".$s['address']."</th><th>".$s['city']."</th><th>".$s['state']."</th><th>"
	.$s['ph_no']."</th><th>".$s['pincode']."</th><th>".$s['image']."</th></tr>";
}
echo"</table>";
?>