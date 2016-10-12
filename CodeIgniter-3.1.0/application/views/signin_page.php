<div class="form">
	
		<div class="col-md-6 col-md-offset-3">
	<div class="inst"><h2 class="text-center">Please Sign In</h2></div>

	<?php echo validation_errors();?>
	<section class="errors_here"></section>
	</div>
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<section class="text-center">
				
	<?php
	echo form_open('signin/validation');
	echo "<div class='col-sm-4'>Username : </div>" .  "<div class='col-sm-8'>" . "<div class='norm'>" .  form_input('username', set_value('username', '')) . "<div id='check'>" . "</div></div>" ."</div><br><br>";
	echo "<div class='col-sm-4'>Password : </div>" .  "<div class='col-sm-8'>" . "<div class='norm'>" .  form_input('password', set_value('password', '')) . "</div></div>" . "<br><br>";
	echo "<div class='submit'>" . form_submit('submit', 'signup') . "</div>";
	echo form_close();
	?>
	
			</section>
		</div><!--Ends Column MD 6 Offset 3 Div-->
</div><!--Ends Row Div-->

</div><!--Ends Sign Div-->