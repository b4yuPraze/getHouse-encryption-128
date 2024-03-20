<?php 

namespace App\Controllers;

use App\Controllers\BaseController;

class Admin extends BaseController{

	private $dataPassing;

	public function __construct(){
		$this->dataPassing['title'] = "Admin | Dashboard";
	}

	// function view
	public function index(){
		$this->lookAt->admin("admin/pages/dashboard", $this->dataPassing);
	}

	public function manageParticipants(){
		$this->lookAt->admin("admin/pages/participants/dashboard", $this->dataPassing);
	}

	public function manageCertificate(){
		$this->lookAt->admin("admin/pages/certificate/dashboard", $this->dataPassing);
	}

	public function manageUsers(){
		$this->lookAt->admin("admin/pages/users/dashboard", $this->dataPassing);
	}

	// function control
	public function addUsers(){
		if($this->validate($this->rules->addUsers())){

			$imagePost = $this->request->getFile("photos");

			if($imagePost->isValid() && !$imagePost->hasMoved()){
				$newName = $imagePost->getRandomName();
				$imagePost->move(ROOTPATH.'public/assets/uploads/image/', $newName);
				$data = [
					'name' => $this->request->getVar("name"),
					'username' => $this->request->getVar("username"),
					'email' => $this->request->getVar("email"),
					'password' => $this->request->getVar("password"),
					'no_telp' => $this->request->getVar("no_telp"),
					'address' => $this->request->getVar("address"),
					'photos' => $newName,
					'created_at' => date("Y-m-d H:i:s"),
					'updated_at' => date("Y-m-d H-i-s")
				];
			}


			echo var_dump($data);
			die();

			// if(model("users")->insert($data)){
			// 	return redirect()->route("homeAdmin")->with("successUsers", "Data users berhasil ditambahkan");
   //          }else{
   //              return redirect()->route("homeAdmin")->with("failedUsers", "Data users gagal ditambahkan");
   //          }
		}else{
			$this->getSomeErrors();
			$this->manageUsers();
		}
	}

	public function addParticipants(){}

	public function createCertificate(){}


	private function getSomeErrors(){
		$this->dataPassing['validation'] = $this->validator;
        $this->dataPassing['dataInput'] = $this->request->getPost();
	}

}