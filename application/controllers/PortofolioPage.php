<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class PortofolioPage extends CI_Controller {
    public function index()
    {
        $this->load->view('templates/header');
        $this->load->view('Landing/Portofolio');
        $this->load->view('templates/footer');
    }
}

