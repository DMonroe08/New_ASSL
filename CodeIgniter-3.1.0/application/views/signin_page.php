	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<section class="text-center">
				<h4><?php if (isset($message));?></h4>
	<?php
	echo form_open('signin/validation');
	echo "Username: " . form_input('username', '') . "<br><br>";
	echo "Password: " . form_password('password', '', '') . "<br><br>";
	echo "<div class='black'>" . form_submit('submit', 'signin') . "</div>";
	echo form_close();
	?>
	
			</section>
		</div><!--Ends Column MD 6 Offset 3 Div-->
</div><!--Ends Row Div-->