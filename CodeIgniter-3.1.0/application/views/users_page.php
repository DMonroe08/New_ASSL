

<div class="form">
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
	<div class="inst"><h2>Welcome  <?php echo $_SESSION['username'];?> </h2>
	<p>You can navigate to different genres or change your personal information</p></div>
	
</div><!--Ends 6 MD Offset 3 Column-->
</div><!--Ends Row Div-->

<div class="row">
	<div class="col-md-6">
		<h3>Change</h3>
	</div><!--Ends MD 6 Column-->
	<div class="col-md-6">
		<h3>Delete Account</h3>
		<fieldset>
			<?php
			echo form_open('signin/delete_account');
			echo "<div class='col-sm-4'>Username: " . form_input('username', '') . "</div";
			echo "<div class='col-sm-4'>Password: " . form_input('password', '') . "</div";
			echo "<div class='submit'>" . form_submit('submit', 'Delete Account') . "</div>";
			echo form_close();
			?>
		</fieldset>
	</div><!--Ends MD 6 Column-->
</div><!--Ends Row Div-->
</div><!--Ends Form Div-->