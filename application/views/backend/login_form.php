<div class="col-md-12" style="padding: 15px;">
	<h1 style="color: #d74871;font-size: 27px;font-family: FF DIN Bold;margin-top: 10px;background-color: white;display: inline;padding: 10px;border-radius: 5px 5px 0px 0px;box-shadow: 10px 10px 10px -10px rgba(0,0,0,0.75);">SIGN IN</h1>
	<div class="col-md-12" style="background-color: white;border-radius: 0px 5px 5px 5px;padding: 15px;box-shadow: 10px 10px 10px -10px rgba(0,0,0,0.75);">
		<div class="col-md-12" style="padding: 15px 25%;">
		<?php $att = array('class' => 'form-signin');?>
		<?php echo form_open('login/validate_credentials', $att); ?>
		<h1 class="form-signin-heading text-muted" style="font-size: 20px;text-align: left;font-family: FF DIN Bold;">SIGN IN</h1>
		<input type="text" class="form-control" name="username" placeholder="Username" required="" autofocus="" style="border: 1px solid gainsboro;margin-bottom: 5px;border-radius: 5px;font-size: 15px;">
		<input type="password" class="form-control" name="password" placeholder="Password" required="" style="border: 1px solid gainsboro;margin-bottom: 5px;border-radius: 5px;font-size: 15px;">
		<p style="color: #FF6060;"><?php echo $error ?></p>
		<button class="btn" type="submit" style="box-shadow: none;background-color: #d74871;border-radius: 50px;color: white;font-family: FF DIN Bold;padding: 6px 30px;">
			SIGN IN
		</button>
		</div>
	</div>
</div>