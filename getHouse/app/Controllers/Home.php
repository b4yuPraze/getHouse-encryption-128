<?php

namespace App\Controllers;

class Home extends BaseController{


    private $dataPassing;

    public function __construct(){
        $this->dataPassing['title'] = "Get - House Capital";
    }
    public function index(){
        $this->lookAt->users("welcome_message", $this->dataPassing);
    }
}
