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
				<div id="card_header" class="card-header py-3">
					<h6 class="m-0 font-weight-bold text-primary">Add Users</h6>
				</div>
				<div class="card-body">
					<form id="form_add_and_edit" class="user" method="post" action="<?= base_url('administrator/addUsers') ?>" enctype="multipart/form-data">
						<input type="text" id="id_users" name="id_users" hidden readonly>
						<div class="form-group row">
							<div class="col-sm-6 mb-3 mb-sm-0">
								<input type="text" class="form-control mb-3" id="fullname" name="fullname" placeholder="Full Name" value="<?= (isset($dataInput)) ? $dataInput['fullname'] : "" ?>">
								<?php if (isset($validation) && $validation->hasError('fullname')){ ?>
			                        <p class="alert alert-danger"><?php echo $validation->getError('fullname'); ?></p>
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
							<input type="number" class="form-control mb-3" id="no_phone" name="no_phone" placeholder="No. Phone" value="<?= (isset($dataInput)) ? $dataInput['no_phone'] : "" ?>">
							<?php if (isset($validation) && $validation->hasError('no_phone')){ ?>
		                        <p class="alert alert-danger"><?php echo $validation->getError('no_phone'); ?></p>
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
						<button id="addandedit" class="btn btn-primary btn-block" type="submit">Add Users</button>
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
									<th>No. Phone</th>
									<th>Address</th>
									<th>Photo</th>
									<th>Action</th>
								</tr>
							</tfoot>
							<tbody>
								<?php foreach($dataUsers as $index => $items){ ?>
								<tr>
									<td><?= $index+1 ?></td>
									<td><?= $items['fullname'] ?></td>
									<td><?= $items['username'] ?></td>
									<td><?= $items['email'] ?></td>
									<td><?= $items['no_phone'] ?></td>
									<td><?= $items['address'] ?></td>
									<td><img src="<?= base_url('assets/uploads/image/').$items['photos'] ?>" alt="photo pengguna" class="w-100"></td>
									<td>
										<button id="edit" class="btn btn-warning btn-sm btn-circle" data-id_users="<?= $items['id_users'] ?>" data-fullname="<?= $items['fullname'] ?>" data-username="<?= $items['username'] ?>" data-email="<?= $items['email'] ?>" data-no_phone="<?= $items['no_phone'] ?>" data-address="<?= $items['address'] ?>"><i class="fa fas fa-exclamation-triangle"></i></button>
										<button id="deleteDataUser" class="btn btn-danger btn-sm btn-circle" data-toggle="modal" data-target="#deleteData" data-fullname="<?= $items['fullname'] ?>" data-id_users="<?= $items['id_users'] ?>"><i class="fa fas fa-trash"></i></button>
									</td>
								</tr>
								<?php } ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="deleteData" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLongTitle">Confirm Delete Data</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<h4>Are you sure to delete data <b id="name_to_delete"></b></h4>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<a href="#!" class="btn btn-danger" id="routeDelete">Yes, Delete</a>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	const fullname = document.querySelector("#fullname")
	const username = document.querySelector("#username")
	const email = document.querySelector("#email")
	const phone = document.querySelector("#no_phone")
	const address = document.querySelector("#address")
	const addandedit = document.querySelector("#addandedit")
	const id_users = document.querySelector("#id_users")
	const form_add_and_edit = document.querySelector("#form_add_and_edit")

	const chooseFile = document.querySelector(".photos")
	const showImage = document.querySelector(".show-image")
	const titleChoosePhotos = document.querySelector(".title-choose-photos")

	// Edit
	const edit = document.querySelectorAll("#edit")

	// delete
	const deleteDataUser = document.querySelectorAll("#deleteDataUser")
	const name_to_delete = document.querySelector("#name_to_delete")
	const routeDelete = document.querySelector("#routeDelete")


	edit.forEach(n => {
		n.addEventListener("click", () => {
			form_add_and_edit.setAttribute("action", "<?= base_url('administrator/editUsers') ?>")
			id_users.value = n.getAttribute("data-id_users")
			fullname.value = n.getAttribute("data-fullname")
			username.value = n.getAttribute("data-username")
			email.value = n.getAttribute("data-email")
			phone.value = n.getAttribute("data-no_phone")
			address.value = n.getAttribute("data-address")
			addandedit.innerHTML = "Edit Users"
			addandedit.setAttribute("class", "btn btn-warning w-100")
		})
	})

	deleteDataUser.forEach(n => {
		n.addEventListener('click', () => {
			name_to_delete.innerHTML = n.getAttribute("data-fullname")
			routeDelete.setAttribute("href", "<?= base_url('administrator/deleteUsers/') ?>"+n.getAttribute('data-id_users'))
		})
	})

	card_header.addEventListener('click', () => {
		form_add_and_edit.setAttribute("action", "<?= base_url('administrator/addUsers') ?>")
		id_users.value = ""
		fullname.value = ""
		username.value = ""
		email.value = ""
		phone.value = ""
		address.value = ""
		addandedit.innerHTML = "Add Users"
		addandedit.setAttribute("class", "btn btn-primary w-100")
	})

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