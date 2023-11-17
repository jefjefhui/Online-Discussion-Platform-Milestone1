<div class="container">
      <div class="col-4 offset-4">
			<?php echo form_open(base_url().'login/check_login'); ?>
				<h2 class="text-center">Welcome to AskItNow, Please Login!</h2>       
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Username" required="required" name="username">
					</div>
					<div class="form-group">
						<input type="password" class="form-control" placeholder="Password" required="required" name="password">
					</div>
					<div class="form-group">
					<?php echo $error; ?>
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-primary btn-block">Log in</button>
					</div>
					<div class="clearfix">
						<label class="float-left form-check-label"><input type="checkbox"> Remember me</label>
						<a href="https://infs3202-9451aeed.uqcloud.net/discussionPlatform/ForgotPWEmailEntry" class="float-right">Forgot Password?</a>
					</div>   
					<div class="clearfix">
                    <a href="https://infs3202-9451aeed.uqcloud.net/discussionPlatform/createAC" class="float-right">Create Account?</a>
                    </div> 
			<?php echo form_close(); ?>
	</div>
</div>