<?php
$query = mysql_query("select * from user where username = '$username'");

$row=mysql_fetch_array($query);
?>

<div class="accountdetails">
	<div class="myaccountheader">Personal Information</div></br>
	<div class="myaccountfont"><?=$row['fname']?> <?=$row['lname']?></br></br>
		Birthdate: <?=$row['birthdate']?></br></br>
		Gender: <?=$row['gender']?></br></br>
		Phone Number: <?=$row['phoneNumber']?></br></br>
		Email: <?=$row['email']?></br></br>
		Username: <?=$row['username']?></br></br></br>
	<div class="myaccountheader">Shipping Address</div></br>
		<?=$row['street']?>, <?=$row['brgy']?></br></br>
		<?=$row['city']?></br></br>
		<?=$row['province']?></br></br>
		<?=$row['postal']?></br></br>
	</div>
	</br>
	<button class="updatebtn" onClick="location.href='?view=update&id=<?=$row['Id']?>'">UPDATE</button>
</div>