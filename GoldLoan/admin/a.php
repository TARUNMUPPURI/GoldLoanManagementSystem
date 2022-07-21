<?php
 $conn = mysqli_connect("localhost","root","","goldloan");
 $sql = "CALL `active_customers`();";

 $result = mysqli_query($conn, $sql);  
?>


<!DOCTYPE html>
<html>
<head>
	<title>Active Loans Database - Gold Loan Management System</title>
	<style type="text/css">
		*{
			margin: 0;
			padding: 0;
		}
		.main{
			width: 100%;
		}
		.sub{
			width: 90%;
			margin: 0 auto;
		}
		.hr{
			background-color: #E8E8E8;
			border: 1px solid #E8E8E8;
		}
		#head{
			background-color: #b30000;
			height: 50px;
			text-align: center;
			color: white;
			line-height: 50px;
			font-size:  25px;
		}
		.mr{
			text-align: center;
		}
	</style>
</head>
<body>
	<div class="main hr">
		<div class="sub">
			<div id="head">
				Active Loans
			</div>
		</div>
	</div>
	<div class="main hr">
		<div class="sub mr">
			<table width="1380" border="1" cellpadding="5" cellspacing="1">
				<tr style="color: black; font-size: 20px;">
					<th>customer Id</th>
					<th>firstname</th>
					<th>mobile</th>
					<th>remening_loan</th>
				</tr>

				<?php

				while ($user = mysqli_fetch_assoc($result)) {

					echo "<tr>";

						echo "<td>".$user['id']."</td>";

						echo "<td>".$user['firstname']."</td>";

                        echo "<td>".$user['mobile']."</td>";


						echo "<td>".$user['remening_loan']."</td>";

					echo "<tr>";

				}
				?>
			</table>
		</div>
	</div>
	
</body>
</html>