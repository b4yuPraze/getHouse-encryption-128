<?php
namespace App\Libraries;


class Look{
	function users($location, $data){
		echo view("partition/head", $data);
		echo view("partition/nav", $data);
		echo view($location, $data);
		echo view("partition/footer", $data);
	}

	function admin(){

	}
}

/* End of file Look.php */
/* Location: .//C/xampp/htdocs/projects/skripsi/joki/getHouse/app/Libraries/Look.php */
