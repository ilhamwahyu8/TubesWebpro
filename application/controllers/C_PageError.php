<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_PageError extends CI_Controller {
    public function index()
    {
        $this->load->view('V_PageError');
        
    }
}