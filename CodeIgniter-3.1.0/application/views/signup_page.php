					
<div class="sign">
<div class="row">
	<div class="col-md-6 col-md-offset-3">
<h2 class="text-center">Create an account with us</h2>

<?php echo validation_errors();?>
<section class="errors_here"></section>
</div>
</div><!--Ends Row div-->
<div class="row">
	<div class="col-md-6 col-md-offset-3">
<section class="text-center" id="forms">
	<?php if (isset($retry)){echo $retry;}?>
	<?php
	echo form_open('signup/check');
	
	echo "<div class='col-sm-4'>First Name : </div>" . "<div class='col-sm-8'>" . form_input('firstname', set_value('firstname', '')) . "</div>" . "<br><br>";
	echo "<div class='col-sm-4'>Last Name : </div> " . "<div class='col-sm-8'>" .  form_input('lastname', set_value('lastname', '')) . "</div>" . "<br><br>";
	echo "<div class='col-sm-4'>Email : </div>" .  "<div class='col-sm-8'>" . form_input('email', set_value('email', '')) . "</div>" . "<br><br>";
	echo "<div class='col-sm-4'>Username : </div>" .  "<div class='col-sm-8'>" . form_input('username', set_value('username', '')) . "<div id='check'>" . "</div>" ."</div><br><br>";
	echo "<div class='col-sm-4'>Password : </div>" .  "<div class='col-sm-8'>" . form_input('password', set_value('password', '')) . "</div>" . "<br><br>";
	echo "<div class='submit'>" . form_submit('submit', 'signup') . "</div>";
	echo form_close();
	?>
</section>
	</div><!--Ends Column MD 6 Div-->
</div><!--Ends Row Div-->
</div><!--Ends Sign Div-->