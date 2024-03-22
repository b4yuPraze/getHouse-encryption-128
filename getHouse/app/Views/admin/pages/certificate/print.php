<div class="container-fluid">
	<div class="row align-items-center">
		<div class="col-md-3 col-sm-3 d-flex justify-content-end">
			<img src="<?= base_url('assets/img/undraw_profile.svg') ?>" alt="logo" class="w-25">
		</div>
		<div class="col-md-7 col-sm-7 text-center">
			<span><b>GET - House of English</b></span><br>
			<span style="font-size: 12px">Jl. Dr. Wahidin Sudirohusodo IV No. 7 Cirebon Telp. (0231) 200668 / 081224428325</span><br>
			<span style="margin-right: 3rem; font-size: 10px;">Website: www.get-star.net</span>
			<span style="font-size: 10px">email: get.cirebon@gmail.com</span>
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

<script type="text/javascript">
	window.addEventListener('load', () => {
		window.print()
	})
</script>