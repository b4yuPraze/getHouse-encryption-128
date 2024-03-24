<div class="container-fluid">
	<div class="row">
		<div class="col-md-12 col-sm-12">
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
									<th>ID NUMBER</th>
									<th>ID TEST</th>
									<th>Nilai</th>
									<th>Certificate</th>
									<th>Action</th>
								</tr>
							</thead>
							<tfoot>
								<tr>
									<th>No</th>
									<th>Name</th>
									<th>ID NUMBER</th>
									<th>ID TEST</th>
									<th>Nilai</th>
									<th>Certificate</th>
									<th>Action</th>
								</tr>
							</tfoot>
							<tbody>
								<?php foreach($dataParticipants as $index => $items){ ?>
								<tr>
									<td><?= $index+1 ?></td>
									<td><?= $items['name'] ?></td>
									<td><?= $items['id_no'] ?></td>
									<td><?= $items['test_no'] ?></td>
									<td><?= $items['total'] ?></td>
									<td><button id="btn_preview_certificate" class="btn btn-info btn-sm w-100" data-toggle="modal" data-target="#exampleModalCenter" data-name="<?= $items['name'] ?>" data-address="<?= $items['address'] ?>" data-phone="<?= $items['no_phone'] ?>" data-test_no="<?= $items['test_no'] ?>" data-date="<?= $items['date'] ?>" data-id_no="<?= $items['id_no'] ?>" data-test_scores="<?= $items['test_scores'] ?>" data-listening="<?= $items['listening'] ?>" data-structure="<?= $items['structure'] ?>" data-reading="<?= $items['reading'] ?>" data-total="<?= $items['total'] ?>" data-toefl_prediction="<?= $items['toefl_prediction'] ?>">Certificate</button></td>
									<td>
										<!-- <button class="btn btn-warning btn-sm btn-circle"><i class="fa fas fa-exclamation-triangle"></i></button> -->
										<a href="<?= base_url('administrator/print/').$items['id_participants'] ?>" class="btn btn-success btn-sm w-100"><i class="fa fas fa-download"></i> Download</a>
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
	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLongTitle">Preview Certificate</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="container-fluid">
					<div class="row align-items-center">
						<div class="col-md-3 col-sm-3 d-flex justify-content-end">
							<img src="<?= base_url('assets/img/undraw_profile.svg') ?>" alt="logo" class="w-25">
						</div>
						<div class="col-md-7 col-sm-7 text-center">
							<span><b>GET - House of English</b></span><br>
							<span style="font-size: 14px">Jl. Dr. Wahidin Sudirohusodo IV No. 7 Cirebon Telp. (0231) 200668 / 081224428325</span><br>
							<span style="margin-right: 3rem; font-size: 12px;">Website: www.get-star.net</span>
							<span style="font-size: 12px">email: get.cirebon@gmail.com</span>
						</div>
					</div>
				</div>
				<hr class="border border-5">
				<span class="d-flex justify-content-center"><b class="text-center">TEST OF ENGLISH PROFICIENCY<br> ( TEP ) <br> RESULTS</b></span>
				<div class="table-responsive">
					<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" style="font-size: 14px; border-color: #000;">
						<thead>
							<tr>
								<th>Name</th>
								<td id="name"></td>
								<th>Test No. </th>
								<td id="test_no"></td>
							</tr>
							<tr>
								<th>Address</th>
								<td id="address"></td>
								<th>Date Test</th>
								<td id="date_test"></td>
							</tr>
							<tr>
								<th>Phone no.</th>
								<td id="phone_no"></td>
								<th>ID No.</th>
								<td id="id_no"></td>
							</tr>
							<tr>
								<th colspan="4" class="text-center">
									<b>TEST SCORES</b>
									<br>
									FORM: <span id="test_scores">C</span>
								</th>
							</tr>
							<tr>
								<th>Componen</th>
								<th>Rating</th>
								<th>TOEFL Prediction</th>
								<td class="text-center border-bottom-0">Issued in Cirebon, September 27, 2023</td>
							</tr>
							<tr>
								<th>Listening</th>
								<td id="listening"></td>
								<th rowspan="4" class="align-middle text-center" style="font-size: 20px;" id="nilai"></th>
								<td rowspan="3" class="border-top-0 border-bottom-0 align-middle text-center">Untuk QRCODE</td>
							</tr>
							<tr>
								<th>Structure</th>
								<td id="structure"></td>
							</tr>
							<tr>
								<th>Reading</th>
								<td class="valign-center" id="reading"></td>
							</tr>
							<tr>
								<th>TOTAL</th>
								<td class="valign-center" id="total"></td>
								<th class="text-center border-start-0 border-top-0">Akhmad Fauzi, M.Pd. / Head</th>
							</tr>
							<tr>
								<td colspan="5"><span style="font-size: 12px">When properly signed this is to certify that the person mentioned above has taken the Test of English Proficiency under secure conditions. This TOEFL<sup>&reg;</sup> Prediction score is valid for 1 (one) year period.</span></td>
							</tr>
						</thead>
					</table>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	const name = document.querySelector("#name")
	const test_no = document.querySelector("#test_no")
	const address = document.querySelector("#address")
	const dateTest = document.querySelector("#date_test")
	const phone_no = document.querySelector("#phone_no")
	const id_no = document.querySelector("#id_no")
	const test_scores = document.querySelector("#test_scores")
	const listening = document.querySelector("#listening")
	const nilai = document.querySelector("#nilai")
	const structure = document.querySelector("#structure")
	const reading = document.querySelector("#reading")
	const total = document.querySelector("#total")

	const btnPreview = document.querySelectorAll("#btn_preview_certificate")

	btnPreview.forEach(n => {
		n.addEventListener('click', () => {
			name.innerHTML = n.getAttribute('data-name')
			test_no.innerHTML = n.getAttribute('data-test_no')
			address.innerHTML = n.getAttribute('data-address')
			dateTest.innerHTML = n.getAttribute('data-date')
			phone_no.innerHTML = n.getAttribute('data-phone')
			id_no.innerHTML = n.getAttribute('data-id_no')
			test_scores.innerHTML = n.getAttribute('data-test_scores')
			listening.innerHTML = n.getAttribute('data-listening')
			nilai.innerHTML = n.getAttribute('data-toefl_prediction')
			structure.innerHTML = n.getAttribute('data-structure')
			reading.innerHTML = n.getAttribute('data-reading')
			total.innerHTML = n.getAttribute('data-total')
		})
	})
</script>