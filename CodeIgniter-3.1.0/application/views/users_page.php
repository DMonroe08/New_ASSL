


<div class="form">
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
	<div class="inst"><h2>Welcome  <?php echo $_SESSION['username'];?> </h2>
	<p>You can navigate to different genres or change your personal information</p></div>
	
</div><!--Ends 6 MD Offset 3 Column-->
</div><!--Ends Row Div-->

<div class="row">
	<div class="col-md-4">
		<h3>Your Information:</h3>
		<p>First Name: <?php echo $_SESSION['firstname'];?></p> 
		<p>Last Name: <?php echo $_SESSION['lastname'];?></p> 
			
	</div><!--Ends MD 4 Column-->
	<div class="col-md-4">
		<section class="text-center">
		<h3>Change Account Info</h3>
		
		<?php
		echo form_open('signin/update_account');
		echo "<div class='row'><div class='col-sm-4'>First Name: " .  "</div><div class='col-sm-8'>" . "<div class='norm'>" .  form_input('firstname', '') . "</div></div></div><br><br>";
		echo "<div class='row'><div class='col-sm-4'>Last Name: " .  "</div><div class='col-sm-8'>" . "<div class='norm'>" . form_input('lastname', '') . "</div></div></div><br><br>";
		echo "<div class='row'><div class='submit'>" . form_submit('submit', 'Update') . "</div></div>";
		echo form_close();
		?>
	
		</section>
	</div><!--Ends MD 4 Column-->
	<div class="col-md-4">
		<section class="text-center">
			<h3>Delete Account</h3>
			
			<?php
			$attributes = array('name' => 'delform');
			echo form_open('signin/delete_account', $attributes);
			echo "<div class='row'><div class='col-sm-4'>First Name: " .  "</div><div class='col-sm-8'>" . "<div class='norm' id='check'>" .  form_input('username', '') . "</div></div></div><br><br>";
			echo "<div class='row'><div class='col-sm-4'>Password: " .  "</div><div class='col-sm-8'>" . "<div class='norm' id='password1'>" .  form_input('password', '') . "</div></div></div><br><br>";
			echo "<div class='row'><div class='col-sm-4'>Password: " .  "</div><div class='col-sm-8'>" . "<div class='norm' id='password2'>" .  form_input('password', '') . "</div></div></div><br><br>";
			echo "<div class='row'><div class='submit'>" . form_submit('submit', 'Delete') . "</div>";
			echo form_close();
			?>
		<section class="text-center">
	</div><!--Ends MD 4 Column-->
</div><!--Ends Row Div-->
</div><!--Ends Form Div-->


