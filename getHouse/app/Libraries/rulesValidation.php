<?php
namespace App\Libraries;


class rulesValidation{

	function addUsers(){
		$data = [
			'name' => [
				'label' => "Full Name",
				'rules' => "required|min_length[2]",
				'errors' => [
					'required' => "Full Name is required!",
					'min_length' => "Full Name not valid, min length for name is 2 character!"
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
			'no_telp' => [
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

}

/* End of file Look.php */
/* Location: .//C/xampp/htdocs/projects/skripsi/joki/getHouse/app/Libraries/Look.php */
