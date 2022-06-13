<?php

class Anggota extends CI_Controller 
{
    public function index()
    {
        $this->load->view('templates/header');
        $this->load->view('angota/index');
        $this->load->view('templates/footer');
        
    }
}