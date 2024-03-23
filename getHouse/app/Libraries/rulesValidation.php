<?php
namespace App\Libraries;


class rulesValidation{

	function addUsers(){
		$data = [
			'fullname' => [
				'label' => "Full Name",
				'rules' => "required|min_length[2]",
				'errors' => [
					'required' => "Full Name is required!",
					'min_length' => "Full Name not valid, min length for fullname is 2 character!"
				]
			],
			'username' => [
				'label' => "Username",
				'rules' => "required|min_length[6]",
				'errors' => [
					'required' => "Username is required!",
					'min_length' => "Username not valid, min length for username is 6 character!"
				]
			],
			'password' => [
				'label' => "Password",
				'rules' => "required|min_length[8]",
				'errors' => [
					'required' => "Password is required!",
					'min_length' => "Password not valid, min length for password is 8 character!"
				]
			],
			'rep_password' => [
				'label' => "Repeat Password",
				'rules' => "required|matches[password]",
				'errors' => [
					'required' => "Repeat Password is required!",
					'matches' => "Password dont matches!"
				]
			],
			'no_phone' => [
				'label' => "No. Phone",
				'rules' => "required|numeric|min_length[8]|max_length[15]",
				'errors' => [
					'required' => "No. Phone is required!",
					'numeric' => "No. Phone not valid, No. Phone must be number!",
					'min_length' => "No. Phone not valid, min length for No. Phone is 8 digits!",
					'min_length' => "No. Phone not valid, max length for No. Phone is 15 digits!"
				]
			],
			'address' => [
				'label' => "Address",
				'rules' => "required|min_length[3]",
				'errors' => [
					'required' => "Address is required!",
					'min_length' => "Address not valid, min length for Address is 3 character!"
				]
			],
			'photos' => [
				'label' => "Photos",
				'rules' => "uploaded[photos]|max_size[photos,100024]|mime_in[photos,image/jpeg,image/png,image/gif]",
			]
		];

		return $data;
	}

	function editUsers(){
		$data = [
			'id_users' => [
				'label' => "ID Users",
				'rules' => "required",
				'errors' => [
					'required' => "ID Users is required!",
				]
			],
			'fullname' => [
				'label' => "Full Name",
				'rules' => "required|min_length[2]",
				'errors' => [
					'required' => "Full Name is required!",
					'min_length' => "Full Name not valid, min length for fullname is 2 character!"
				]
			],
			'username' => [
				'label' => "Username",
				'rules' => "required|min_length[6]",
				'errors' => [
					'required' => "Username is required!",
					'min_length' => "Username not valid, min length for username is 6 character!"
				]
			],
			'no_phone' => [
				'label' => "No. Phone",
				'rules' => "required|numeric|min_length[8]|max_length[15]",
				'errors' => [
					'required' => "No. Phone is required!",
					'numeric' => "No. Phone not valid, No. Phone must be number!",
					'min_length' => "No. Phone not valid, min length for No. Phone is 8 digits!",
					'min_length' => "No. Phone not valid, max length for No. Phone is 15 digits!"
				]
			],
			'address' => [
				'label' => "Address",
				'rules' => "required|min_length[3]",
				'errors' => [
					'required' => "Address is required!",
					'min_length' => "Address not valid, min length for Address is 3 character!"
				]
			]
		];

		return $data;
	}

	function addParticipants(){
		$data = [

			'id_no' => [
				'label' => "ID NO",
				'rules' => "required",
				'errors' => [
					'required' => "ID No harus diisi!"
				]
			],

			'test_no' => [
				'label' => "Test No",
				'rules' => "required",
				'errors' => [
					'required' => "Test No harus diisi!"
				]
			],

			'date' => [
				'label' => "Tanggal",
				'rules' => "required",
				'errors' => [
					'required' => "Tanggal harus diisi!"
				]
			],

			'name' => [
				'label' => "Nama",
				'rules' => "required",
				'errors' => [
					'required' => "Nama harus diisi!"
				]
			],

			'address' => [
				'label' => "Alamat",
				'rules' => "required",
				'errors' => [
					'required' => "Alamat harus diisi!"
				]
			],

			'no_phone' => [
				'label' => "Nomor Ponsel",
				'rules' => "required",
				'errors' => [
					'required' => "Nomor Ponsel harus diisi!"
				]
			],

			'listening' => [
				'label' => "Listening",
				'rules' => "required",
				'errors' => [
					'required' => "Listening harus diisi!"
				]
			],

			'structure' => [
				'label' => "Structure",
				'rules' => "required",
				'errors' => [
					'required' => "Structure harus diisi!"
				]
			],

			'reading' => [
				'label' => "Reading",
				'rules' => "required",
				'errors' => [
					'required' => "Reading harus diisi!"
				]
			],

			'test_scores' => [
				'label' => "Test Score",
				'rules' => "required",
				'errors' => [
					'required' => "Test Score harus diisi!"
				]
			],

			'total' => [
				'label' => "Total",
				'rules' => "required",
				'errors' => [
					'required' => "Total harus diisi!"
				]
			],

			'toefl_prediction' => [
				'label' => "TOEFL PREDICTION",
				'rules' => "required",
				'errors' => [
					'required' => "Toefl Prediction harus diisi!"
				]
			],
		];

		return $data;
	}

}

/* End of file Look.php */
/* Location: .//C/xampp/htdocs/projects/skripsi/joki/getHouse/app/Libraries/Look.php */
