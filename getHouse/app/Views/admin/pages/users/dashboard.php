<style type="text/css">

	input[type=file].photos {
	  outline: 0;
	  opacity: 0;
	  pointer-events: none;
	  user-select: none;
	  display: block;
	}

	.label {
	  width: 100%;
	 // height: 100px;
	  border: 2px dashed grey;
	  border-radius: 5px;
	  display: block;
	  padding: 1.2em;
	  transition: border 300ms ease;
	  cursor: pointer;
	  text-align: center;
	}

	label.label i{
		display: block;
		font-size: 42px;
		padding-bottom: 16px;
	}
	  
	label.label i .title {
	    color: grey;
		transition: 200ms color;
	}
	  
	.label:hover {
	    border: 2px solid black;
	}    

	i 
	.title {
	    color: black;
	}
</style>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-4 col-sm-12">
			<h4>Add Users</h4>
			<div class="card shadow mb-4">
				<div class="card-header py-3">
					<h6 class="m-0 font-weight-bold text-primary">Add Users</h6>
				</div>
				<div class="card-body">
					<form class="user" method="post" action="<?= base_url('administrator/addUsers') ?>" enctype="multipart/form-data">
						<div class="form-group row">
							<div class="col-sm-6 mb-3 mb-sm-0">
								<input type="text" class="form-control mb-3" id="Nama" name="name" placeholder="Full Name" value="<?= (isset($dataInput)) ? $dataInput['name'] : "" ?>">
								<?php if (isset($validation) && $validation->hasError('name')){ ?>
			                        <p class="alert alert-danger"><?php echo $validation->getError('name'); ?></p>
			                    <?php } ?>
							</div>
							<div class="col-sm-6">
								<input type="text" class="form-control mb-3" id="username" name="username" placeholder="Username" value="<?= (isset($dataInput)) ? $dataInput['username'] : "" ?>">
								<?php if (isset($validation) && $validation->hasError('username')){ ?>
			                        <p class="alert alert-danger"><?php echo $validation->getError('username'); ?></p>
			                    <?php } ?>
							</div>
						</div>
						<div class="form-group mb-3">
							<input type="email" class="form-control mb-3" id="email" name="email" placeholder="Email Address" value="<?= (isset($dataInput)) ? $dataInput['email'] : "" ?>">
							<?php if (isset($validation) && $validation->hasError('email')){ ?>
		                        <p class="alert alert-danger"><?php echo $validation->getError('email'); ?></p>
		                    <?php } ?>
						</div>
						<div class="form-group row mb-3">
							<div class="col-sm-6 mb-3 mb-sm-0">
								<input type="password" class="form-control" id="password" name="password" placeholder="Password">
								<?php if (isset($validation) && $validation->hasError('password')){ ?>
			                        <p class="alert alert-danger"><?php echo $validation->getError('password'); ?></p>
			                    <?php } ?>
							</div>
							<div class="col-sm-6">
								<input type="password" class="form-control" id="repeat_password" name="rep_password" placeholder="Repeat Password">
								<?php if (isset($validation) && $validation->hasError('rep_password')){ ?>
			                        <p class="alert alert-danger"><?php echo $validation->getError('rep_password'); ?></p>
			                    <?php } ?>
							</div>
						</div>
						<div class="form-group">
							<input type="number" class="form-control mb-3" id="no_telp" name="no_telp" placeholder="No. Phone" value="<?= (isset($dataInput)) ? $dataInput['no_telp'] : "" ?>">
							<?php if (isset($validation) && $validation->hasError('no_telp')){ ?>
		                        <p class="alert alert-danger"><?php echo $validation->getError('no_telp'); ?></p>
		                    <?php } ?>
						</div>
						<div class="form-group">
							<textarea class="form-control mb-3" id="address" name="address" placeholder="Address Users"><?= (isset($dataInput)) ? $dataInput['address'] : "" ?></textarea>
							<?php if (isset($validation) && $validation->hasError('address')){ ?>
		                        <p class="alert alert-danger"><?php echo $validation->getError('address'); ?></p>
		                    <?php } ?>
						</div>
						<div class="form-group">
							<label class="label">
								<i class="fa fa-file-image"></i>
								<span class="title title-choose-photos">Choose Photos</span>
								<input type="file" id="photos" name="photos" class="photos" />
								<img class="show-image w-100 rounded">
							</label>
						</div>
						<?php if (isset($validation) && $validation->hasError('photos')){ ?>
	                        <p class="alert alert-danger"><?php echo $validation->getError('photos'); ?></p>
	                    <?php } ?>
						<button class="btn btn-primary btn-block" type="submit">Add Users</button>
					</form>
				</div>
			</div>
		</div>

		<div class="col-md-8 col-sm-12">
			<h4>Data Users</h4>
			<div class="card shadow mb-4">
				<div class="card-header py-3">
					<h6 class="m-0 font-weight-bold text-primary">Data Users</h6>
				</div>
				<div class="card-body">
					<div class="table-responsive">
						<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
							<thead>
								<tr>
									<th>No</th>
									<th>Name</th>
									<th>Username</th>
									<th>Email</th>
									<th>Password</th>
									<th>No. Phone</th>
									<th>Address</th>
									<th>Photo</th>
									<th>Action</th>
								</tr>
							</thead>
							<tfoot>
								<tr>
									<th>No</th>
									<th>Name</th>
									<th>Username</th>
									<th>Email</th>
									<th>Password</th>
									<th>No. Phone</th>
									<th>Address</th>
									<th>Photo</th>
									<th>Action</th>
								</tr>
							</tfoot>
							<tbody>
								<tr>
									<td>1</td>
									<td>Arham</td>
									<td>arhamcaem</td>
									<td>arham@gethouse.com</td>
									<td>12345678</td>
									<td>083824587800</td>
									<td>Desa Kadugede</td>
									<td>users.png</td>
									<td>
										<button class="btn btn-warning btn-sm btn-circle"><i class="fa fas fa-exclamation-triangle"></i></button>
										<button class="btn btn-danger btn-sm btn-circle"><i class="fa fas fa-trash"></i></button>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	const chooseFile = document.querySelector(".photos")
	const showImage = document.querySelector(".show-image")
	const titleChoosePhotos = document.querySelector(".title-choose-photos")

	chooseFile.addEventListener("change", () => {
		console.log(chooseFile)
		const files = chooseFile.files[0]
		if(files){
			const fileReader = new FileReader()
			fileReader.readAsDataURL(files)
			fileReader.addEventListener("load", function() {
				titleChoosePhotos.innerHTML = "Change Photos"
				showImage.setAttribute("src", this.result)
			})
		}
	})
</script>