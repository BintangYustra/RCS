<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class ContactPage extends CI_Controller {
    public function index()
    {
        $this->load->view('templates/header');
        $this->load->view('Landing/Contact');
        $this->load->view('templates/footer');
    }
}

