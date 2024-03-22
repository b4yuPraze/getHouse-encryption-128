<?php 

namespace App\Controllers;

use App\Controllers\BaseController;
use PhpOffice\PhpSpreadsheet\IOFactory;

class Admin extends BaseController{

	private $dataPassing;

	public function __construct(){
		$this->dataPassing['title'] = "Admin | Dashboard";
		$this->dataPassing['dataParticipants'] = model("Participants")->findAll();
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

	public function printCertificate(){
		$this->lookAt->print("admin/pages/certificate/print", $this->dataPassing);
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

	public function addParticipants(){
		if($this->validate($this->rules->addParticipants())){
			$data = [
				'id_no' => $this->request->getVar("id_no"),
				'test_no' => $this->request->getVar("test_no"),
				'date' => $this->request->getVar("date"),
				'name' => $this->request->getVar("name"),
				'address' => $this->request->getVar("address"),
				'no_phone' => $this->request->getVar("no_phone"),
				'listening' => $this->request->getVar("listening"),
				'structure' => $this->request->getVar("structure"),
				'reading' => $this->request->getVar("reading"),
				'test_scores' => $this->request->getVar("test_scores"),
				'total' => $this->request->getVar("total"),
				'toefl_prediction' => $this->request->getVar("toefl_prediction")
			];

			if(model("Participants")->insert($data)){
				return redirect()->route("administrator/kelolaPeserta")->with("successParticipants", "Success to add data participants");
            }else{
                return redirect()->route("administrator/kelolaPeserta")->with("failedParticipants", "Failed to add data participants");
            }
		}else{
			$this->getSomeErrors();
			$this->manageParticipants();
		}
	}

	public function createCertificate($id_participants){
		if($id_participants != null){
			
		}
	}

	public function importData(){
		$file = $this->request->getFile("importExcel");

		if($file->isValid() && $file->getExtension() === 'xlsx'){
			$reader = IOFactory::createReader("Xlsx");
			$spreadSheet = $reader->load($file->getTempName());
			$worksheet = $spreadSheet->getActiveSheet();
			$data = $worksheet->toArray();

			$infoInsert = false;

			foreach(array_slice($data, 1) as $index => $row){
				$dataInsert[$index] = [
					'id_no' => $row[0],
					'test_no' => $row[1],
					'date' => $row[2],
					'name' => $row[3],
					'address' => $row[4],
					'no_phone' => $row[5],
					'listening' => $row[6],
					'structure' => $row[7],
					'reading' => $row[8],
					'test_scores' => $row[9],
					'total' => $row[10],
					'toefl_prediction' => $row[11],
					'created_at' => date("Y-m-d H:i:s"),
					'updated_at' => date("Y-m-d H:i:s"),
				];
				if(model('Participants')->insert($dataInsert[$index])){
					$infoInsert = true;
	            }else{
	            	$infoInsert = false;
	            }
			}

			if($infoInsert){
				return redirect()->route("administrator/kelolaPeserta")->with("successParticipants", "Success to add data participants");
            }else{
                return redirect()->route("administrator/kelolaPeserta")->with("failedParticipants", "Failed to add data participants");
            }
		}else{
			$this->getSomeErrors();
			$this->manageParticipants();
		}
	}

	private function getSomeErrors(){
		$this->dataPassing['validation'] = $this->validator;
        $this->dataPassing['dataInput'] = $this->request->getPost();
	}

}