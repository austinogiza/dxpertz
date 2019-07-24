		<div class="menu">
			<li class="item">
				
				<a href="staffprofile.php" class="btn"> <i class="fas fa-user-alt"></i> &nbsp Profile</a>
<div class="smenu"><a href="staffprofile.php">View Profile</a></div>
<div class="smenu">	<a href="">Course</a></div>
			</li>
				<li class="item">
				
				<a href="" class="btn"> <i class="fas fa-user-alt"></i>Course</a>
<div class="smenu"><a href="profile.php">Check Courses</a></div>
<div class="smenu">	<?php if( isset($_SESSION['is_staff_admin']) && $_SESSION['is_staff_admin']==1)
{
?>	<a href="">Add Courses</a></div>
			</li><?php
}
?>
				<li class="item">
				
				<a href="" class="btn"> <i class="fas fa-user-alt"></i> &nbsp Staffs</a>
<div class="smenu"><a href="profile.php">Check Staffs</a></div>

<div class="smenu"><?php if( isset($_SESSION['is_staff_admin']) && $_SESSION['is_staff_admin']==1)
{
?>		<a href="addstaff.php">Add Staffs</a></div><?php
}
?>
			</li>
				<li class="item">
				
				<a href="" class="btn"> <i class="fas fa-user-alt"></i> &nbsp Students</a>
<div class="smenu"><a href="profile.php">Check Students</a></div>
<div class="smenu">	<?php if( isset($_SESSION['is_staff_admin']) && $_SESSION['is_staff_admin']==1)
{
?>	<a href="addstudent.php">Add Students</a><?php
}
?></div>
			</li>
<li class="item">
				<?php if( isset($_SESSION['is_staff_admin']) && $_SESSION['is_staff_admin']==1)
{
?>	
				<a href="" class="btn"><i class="fas fa-envelope"></i>&nbspMessages</a>
				<div class="smenu"><a href="">New</a>
	<a href="">Sent</a></div>
			</li><?php
}
?>

<li class="item">
				
				<a href="" class="btn"><i class="fas fa-cog"></i>&nbspSetting</a>
				<div class="smenu"><a href="">Password</a></div>
	<div class="smenu"><a href="">Setting</a></div>
			</li>


<li class="item">
				
				<a href="processes/adminlogoutprocess.php" class="btn"> <i class="fas fa-sign-out-alt"></i> &nbspLogout</a>
			</li>


		</div>


	