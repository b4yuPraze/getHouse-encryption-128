<?php
namespace App\Libraries;


class Look{
	function users($location, $data){
		echo view("partition/head", $data);
		echo view("partition/nav", $data);
		echo view($location, $data);
		echo view("partition/footer", $data);
	}


	function admin($location, $data){
		echo view("admin/partition/head", $data);
		echo view("admin/partition/aside", $data);
		echo view("admin/partition/navbar", $data);
		echo view($location, $data);
		echo view("admin/partition/footer", $data);
	}

	function print($location, $data){
		echo view("partition/head", $data);
		echo view($location, $data);
		// echo view("partition/footer", $data);
	}
}

/* End of file Look.php */
/* Location: .//C/xampp/htdocs/projects/skripsi/joki/getHouse/app/Libraries/Look.php */
