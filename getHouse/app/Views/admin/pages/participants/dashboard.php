
<div class="container-fluid">
	<div class="row">
		<div class="col-md-4 col-sm-12">
			<h4>Add Participants</h4>
			<div class="card shadow mb-4">
				<div class="card-header py-3">
					<div class="row align-items-center justify-content-between">
						<div class="col-md-8 col-sm-12">
							<h6 class="m-0 font-weight-bold text-primary">Add Participants</h6>
						</div>
						<div class="col-md-4 col-sm-12 text-right">
							<a type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModalCenter">
								<i class="fa fa-file-import"></i> 
								Import
							</a>
						</div>
					</div>
				</div>
				<div class="card-body">
					<form action="<?= base_url('administrator/addParticipants') ?>" method="post">
						<div class="form-group row">
							<div class="col-sm-6 mb-3 mb-sm-0">
								<input type="text" class="form-control" id="id_no" name="id_no" placeholder="ID Number">
								<?php if (isset($validation) && $validation->hasError('id_no')){ ?>
			                        <p class="alert alert-danger mt-3"><?php echo $validation->getError('id_no'); ?></p>
			                    <?php } ?>
							</div>
							<div class="col-sm-6">
								<input type="text" class="form-control" id="test_no" name="test_no" placeholder="ID Test">
								<?php if (isset($validation) && $validation->hasError('test_no')){ ?>
			                        <p class="alert alert-danger mt-3"><?php echo $validation->getError('test_no'); ?></p>
			                    <?php } ?>
							</div>
						</div>
						<div class="form-group">
							<input type="text" class="form-control" id="name" name="name" placeholder="Full Name">
							<?php if (isset($validation) && $validation->hasError('name')){ ?>
		                        <p class="alert alert-danger mt-3"><?php echo $validation->getError('name'); ?></p>
		                    <?php } ?>
						</div>
						<div class="form-group">
							<input type="number" class="form-control" id="no_phone" name="no_phone" placeholder="Phone No.">
							<?php if (isset($validation) && $validation->hasError('no_phone')){ ?>
		                        <p class="alert alert-danger mt-3"><?php echo $validation->getError('no_phone'); ?></p>
		                    <?php } ?>
						</div>
						<div class="form-group">
							<textarea name="address" class="form-control" placeholder="Address"></textarea>
							<?php if (isset($validation) && $validation->hasError('address')){ ?>
		                        <p class="alert alert-danger mt-3"><?php echo $validation->getError('address'); ?></p>
		                    <?php } ?>
						</div>
						
						<div class="form-group row">
							<div class="col-sm-6 mb-3 mb-sm-0">
								<input type="number" class="form-control" id="listening" name="listening" placeholder="Listening">
								<?php if (isset($validation) && $validation->hasError('listening')){ ?>
			                        <p class="alert alert-danger mt-3"><?php echo $validation->getError('listening'); ?></p>
			                    <?php } ?>
							</div>
							<div class="col-sm-6">
								<input type="number" class="form-control" id="structure" name="structure" placeholder="Structure">
								<?php if (isset($validation) && $validation->hasError('structure')){ ?>
			                        <p class="alert alert-danger mt-3"><?php echo $validation->getError('structure'); ?></p>
			                    <?php } ?>
							</div>
						</div>
						<div class="form-group">
							<input type="number" class="form-control" id="reading" name="reading" placeholder="Reading">
							<?php if (isset($validation) && $validation->hasError('reading')){ ?>
		                        <p class="alert alert-danger mt-3"><?php echo $validation->getError('reading'); ?></p>
		                    <?php } ?>
						</div>
						<div class="form-group row">
							<div class="col-sm-6 mb-3 mb-sm-0">
								<input type="number" class="form-control" id="total" name="total" placeholder="Total">
								<?php if (isset($validation) && $validation->hasError('total')){ ?>
			                        <p class="alert alert-danger mt-3"><?php echo $validation->getError('total'); ?></p>
			                    <?php } ?>
							</div>
							<div class="col-sm-6 mb-3 mb-sm-0">
								<input type="number" class="form-control" id="toefl_prediction" name="toefl_prediction" placeholder="Toefl Prediction">
								<?php if (isset($validation) && $validation->hasError('toefl_prediction')){ ?>
			                        <p class="alert alert-danger mt-3"><?php echo $validation->getError('toefl_prediction'); ?></p>
			                    <?php } ?>
							</div>
						</div>
						<div class="form-group">
							<input type="number" class="form-control" id="test_scores" name="test_scores" placeholder="Test Scores">
							<?php if (isset($validation) && $validation->hasError('test_scores')){ ?>
		                        <p class="alert alert-danger mt-3"><?php echo $validation->getError('test_scores'); ?></p>
		                    <?php } ?>
						</div>
						<div class="form-group">
							<input type="date" class="form-control" id="date" name="date" placeholder="Date">
							<?php if (isset($validation) && $validation->hasError('date')){ ?>
		                        <p class="alert alert-danger mt-3"><?php echo $validation->getError('date'); ?></p>
		                    <?php } ?>
						</div>
						<button class="btn btn-primary btn-block" type="submit">Add Participants</button>
						<!-- <a href="login.html" class="btn btn-primary btn-block">Add Participants</a> -->
					</form>
				</div>
			</div>
		</div>

		<div class="col-md-8 col-sm-12">
			<h4>Data Participants</h4>
			<div class="card shadow mb-4">
				<div class="card-header py-3">
					<h6 class="m-0 font-weight-bold text-primary">Data Participants</h6>
				</div>
				<div class="card-body">
					<div class="table-responsive">
						<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
							<thead>
								<tr>
									<th>No</th>
									<th>ID. No</th>
									<th>Test. No</th>
									<th>Date</th>
									<th>Name</th>
									<th>Address</th>
									<th>No. Phone</th>
									<th>Listening</th>
									<th>Structure</th>
									<th>Reading</th>
									<th>Total</th>
									<th>Toefl Prediction</th>
									<th>Test Scores</th>
									<th>Action</th>
								</tr>
							</thead>
							<tfoot>
								<tr>
									<th>No</th>
									<th>ID. No</th>
									<th>Test. No</th>
									<th>Date</th>
									<th>Name</th>
									<th>Address</th>
									<th>No. Phone</th>
									<th>Listening</th>
									<th>Structure</th>
									<th>Reading</th>
									<th>Total</th>
									<th>Toefl Prediction</th>
									<th>Test Scores</th>
									<th>Action</th>
								</tr>
							</tfoot>
							<tbody>
								<?php foreach($dataParticipants as $index => $items){ ?>
								<tr>
									<td><?= $index+1 ?></td>
									<td><?= $items['id_no'] ?></td>
									<td><?= $items['test_no'] ?></td>
									<td><?= $items['date'] ?></td>
									<td><?= $items['name'] ?></td>
									<td><?= $items['address'] ?></td>
									<td><?= $items['no_phone'] ?></td>
									<td><?= $items['listening'] ?></td>
									<td><?= $items['structure'] ?></td>
									<td><?= $items['reading'] ?></td>
									<td><?= $items['total'] ?></td>
									<td><?= $items['toefl_prediction'] ?></td>
									<td><?= $items['test_scores'] ?></td>
									<td>
										<button class="btn btn-warning btn-sm btn-circle"><i class="fa fas fa-exclamation-triangle"></i></button>
										<button class="btn btn-danger btn-sm btn-circle"><i class="fa fas fa-trash"></i></button>
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

<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<form action="<?= base_url('administrator/importExcel') ?>" method="post" enctype="multipart/form-data">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLongTitle">Import Data Participants</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<label for="importData">Choose Your File to Import</label>
					<input type="file" name="importExcel" class="form-control">
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary">import</button>
				</div>
			</form>
		</div>
	</div>
</div>