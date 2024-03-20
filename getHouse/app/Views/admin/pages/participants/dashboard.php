
<div class="container-fluid">
	<div class="row">
		<div class="col-md-4 col-sm-12">
			<h4>Add Participants</h4>
			<div class="card shadow mb-4">
				<div class="card-header py-3">
					<h6 class="m-0 font-weight-bold text-primary">Add Participants</h6>
				</div>
				<div class="card-body">
					<form class="user">
						<div class="form-group row">
							<div class="col-sm-6 mb-3 mb-sm-0">
								<input type="text" class="form-control" id="id_no" name="id_no" placeholder="ID Number" readonly>
							</div>
							<div class="col-sm-6">
								<input type="text" class="form-control" id="id_test" name="id_test" placeholder="ID Test" readonly>
							</div>
						</div>
						<div class="form-group">
							<select class="form-control" name="id_users">
								<option value="">-- Pilih Pengguna --</option>
								<option value="1">Bayu Prasetyo</option>
								<option value="2">Bayu Nugraha</option>
							</select>
						</div>
						<div class="form-group row">
							<div class="col-sm-6 mb-3 mb-sm-0">
								<input type="number" class="form-control" id="listening" placeholder="Listening">
							</div>
							<div class="col-sm-6">
								<input type="number" class="form-control" id="structure" placeholder="Structure">
							</div>
						</div>
						<div class="form-group">
							<input type="number" class="form-control" id="reading" name="reading" placeholder="Reading">
						</div>
						<div class="form-group row">
							<div class="col-sm-6 mb-3 mb-sm-0">
								<input type="number" class="form-control" id="total" name="total" placeholder="Total">
							</div>
							<div class="col-sm-6 mb-3 mb-sm-0">
								<input type="number" class="form-control" id="toefl_prediction" name="toefl_prediction" placeholder="Toefl Prediction">
							</div>
						</div>
						<div class="form-group">
							<input type="date" class="form-control" id="toefl_prediction" name="toefl_prediction" placeholder="Toefl Prediction">
						</div>
						<a href="login.html" class="btn btn-primary btn-block">Add Participants</a>
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
									<td>users.png</td>
									<td>users.png</td>
									<td>users.png</td>
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

