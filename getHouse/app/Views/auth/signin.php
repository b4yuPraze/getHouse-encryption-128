<div class="container vh-100">
	<div class="row h-100 align-items-center">
		<div class="col-md-4 offset-md-4 col-sm-12">
			<div class="card">
				<div class="card-header">
					<h4 class="text-center">Please Sign In</h4>
					<?php if(session()->get("failedLogin") != null){ ?>
						<p class="alert alert-danger mt-3 text-center"><?= session()->get("failedLogin") ?></p>
					<?php } ?>
				</div>
				<div class="card-body">
					<form action="<?= base_url('auth/login') ?>" method="post">
						<label for="username">Username</label>
						<input type="text" placeholder="Username" class="form-control" name="username" value="<?= (isset($dataInput)) ? $dataInput['username'] : "" ?>">
						<?php if (isset($validation) && $validation->hasError('username')){ ?>
	                        <p class="alert alert-danger mt-3"><?php echo $validation->getError('username'); ?></p>
	                    <?php } ?>

						<br>

						<label for="password">Password</label>
						<input type="password" placeholder="password" class="form-control" name="password" value="<?= (isset($dataInput)) ? $dataInput['password'] : "" ?>">
						<?php if (isset($validation) && $validation->hasError('password')){ ?>
	                        <p class="alert alert-danger mt-3"><?php echo $validation->getError('password'); ?></p>
	                    <?php } ?>

						<br>

						<button class="btn btn-primary w-100">Sign in <i class="fa fa-sign-in"></i></button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>