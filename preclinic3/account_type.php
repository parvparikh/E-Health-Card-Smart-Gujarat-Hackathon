<!DOCTYPE html>
<html>
<head>
	<title>Account_type</title>
	<style>
		.type
		{
			color:#00ccff;
		}
		.dr
		{
			width:150px;

		}
		.account
		{
			border:2px solid #00ccff;
			width:200px;
			border-radius:10%;
			float:left;
			padding:30px;
			margin-right:170px;
			margin-bottom:50px;
		}
		.category
		{
				margin-left:400px;
		}
	
	</style>
</head>
<body>
	<center><h1 class="type">User Login</h1></center>
	<div class="category">
			<div class="account">
				<center>
					<a style="text-decoration:none" href="dr_login.php"><img class="dr" src="img/dr.png" width="227px" height="150px"></a>
					<a style="text-decoration:none"  href="dr_login.php"><h2>Doctor</h2></a>	
				</center>
			</div>
			<div class="account">
				<center>
					<a href="patient_login.php"><img class="dr" src="img/patient.png" width="227px" height="150px"></a>
					<a style="text-decoration:none" href="patient_login.php"><h2>Patient</h2></a>
				</center>
			</div>
	</div>

<div class="category">
			<div class="account">
				<center>
					<a href="lab_login.php"><img class="dr" src="img/lab.png" width="227px" height="150px"></a>
					<a style="text-decoration:none" href="lab_login.php"><h2>Laboratory</h2></a>
				</center>
			</div>
			<div class="account">
				<center>
						<a href="medical_store_login.php"><img class="dr" src="img/pharmacist.png" width="227px" height="150px"></a>
					    <a style="text-decoration:none" href="medical_store_login.php"><h2>Pharmacist</h2></a>	
				</center>
			</div>
	</div>
</body>
</html>