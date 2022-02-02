<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function index()
    {
        // $data['judul'] = "Toko Oleh-oleh";
        $this->load->view("index");
    }
}
