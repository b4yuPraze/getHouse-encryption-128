<?php 

namespace App\Controllers;

use App\Controllers\BaseController;
use PhpOffice\PhpSpreadsheet\IOFactory;
use Endroid\QrCode\Color\Color;
use Endroid\QrCode\Encoding\Encoding;
use Endroid\QrCode\ErrorCorrectionLevel\ErrorCorrectionLevelLow;
use Endroid\QrCode\QrCode;
use Endroid\QrCode\Label\Label;
use Endroid\QrCode\Logo\Logo;
use Endroid\QrCode\RoundBlockSizeMode\RoundBlockSizeModeMargin;
use Endroid\QrCode\Writer\PngWriter;
use App\Libraries\Algorithm;

class Admin extends BaseController{

	private $dataPassing;

	public function __construct(){
		$this->dataPassing['title'] = "Admin | Dashboard";
		$this->dataPassing['dataParticipants'] = model("Participants")->findAll();
		$this->dataPassing['dataUsers'] = model("Users")->findAll();
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

	public function printCertificate($id_participants){
		if ($id_participants != null) {
			$this->dataPassing['qrCode'] = $this->makeQR($id_participants);
			$this->dataPassing['printCertificate'] = model("Participants")->where("id_participants", $id_participants)->get()->getResultArray();
			$this->lookAt->print("admin/pages/certificate/print", $this->dataPassing);
		}
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
					'fullname' => $this->request->getVar("fullname"),
					'username' => $this->request->getVar("username"),
					'email' => $this->request->getVar("email"),
					'password' => password_hash($this->request->getVar("password"), PASSWORD_DEFAULT),
					'no_phone' => $this->request->getVar("no_phone"),
					'address' => $this->request->getVar("address"),
					'photos' => $newName,
					'created_at' => date("Y-m-d H:i:s"),
					'updated_at' => date("Y-m-d H-i-s")
				];
			}

			if(model("Users")->insert($data)){
				return redirect()->route("administrator/kelolaPengguna")->with("successUsers", "Data users berhasil ditambahkan");
            }else{
                return redirect()->route("administrator/kelolaPengguna")->with("failedUsers", "Data users gagal ditambahkan");
            }
		}else{
			$this->getSomeErrors();
			$this->manageUsers();
		}
	}

	public function editUsers(){
		if($this->validate($this->rules->editUsers())){

			$imagePost = $this->request->getFile("photos");
			$id_users = $this->request->getVar("id_users");
			$password = $this->request->getVar("password");

			if($imagePost->isValid() && !$imagePost->hasMoved() && $imagePost != null && $password != ""){
				$newName = $imagePost->getRandomName();
				$imagePost->move(ROOTPATH.'public/assets/uploads/image/', $newName);
				$data = [
					'fullname' => $this->request->getVar("fullname"),
					'username' => $this->request->getVar("username"),
					'email' => $this->request->getVar("email"),
					'password' => password_hash($this->request->getVar("password"), PASSWORD_DEFAULT),
					'no_phone' => $this->request->getVar("no_phone"),
					'address' => $this->request->getVar("address"),
					'photos' => $newName,
					'created_at' => date("Y-m-d H:i:s"),
					'updated_at' => date("Y-m-d H-i-s")
				];
			}else{
				$data = [
					'fullname' => $this->request->getVar("fullname"),
					'username' => $this->request->getVar("username"),
					'email' => $this->request->getVar("email"),
					'no_phone' => $this->request->getVar("no_phone"),
					'address' => $this->request->getVar("address"),
					'created_at' => date("Y-m-d H:i:s"),
					'updated_at' => date("Y-m-d H-i-s")
				];
			}

			if(model("Users")->update($id_users, $data)){
				return redirect()->back()->with("successUsers", "Data users berhasil ditambahkan");
            }else{
                return redirect()->back()->with("failedUsers", "Data users gagal ditambahkan");
            }
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

	public function editParticipants(){
		$id_participants = $this->request->getVar("id_participants");
		if($id_participants != null){
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
				if(model("Participants")->update($id_participants, $data)){
					return redirect()->route("administrator/kelolaPeserta")->with("successParticipants", "Success to update data participants");
	            }else{
	                return redirect()->route("administrator/kelolaPeserta")->with("failedParticipants", "Failed to update data participants");
	            }
			}else{
				return redirect()->back()->with("failedUsers", "Data users not updated");
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

	private function makeQR($id_participants){
		$initial = new PngWriter();
		$imgQR = $this->encrypt($id_participants);
		$makeQR = QrCode::create($imgQR, "GETHOUSE")->setEncoding(new Encoding("UTF-8"))->setSize(100)->setMargin(5)->setForegroundColor(new Color(0, 0, 0))->setBackgroundColor(new Color(255,255,255));
		$res = $initial->write($makeQR);
		$filename = "QrCode_".date("Y-m-d_H-i-s").".png";
		$res->saveToFile(ROOTPATH."public/assets/QRcode/".$filename);
		$data = $res->getDataUri();

		return $filename;
	}

	private function encrypt($id_participants){
		$AES = new Algorithm();
		$cipher = bin2hex($AES->encrypt($id_participants));
		return $cipher;
	}

	private function getSomeErrors(){
		$this->dataPassing['validation'] = $this->validator;
        $this->dataPassing['dataInput'] = $this->request->getPost();
	}

}