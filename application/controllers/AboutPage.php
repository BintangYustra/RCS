<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class AboutPage extends CI_Controller {
    public function index()
    {
        $this->load->view('templates/header');
        $this->load->view('Landing/About');
        $this->load->view('templates/footer');
    }
}

