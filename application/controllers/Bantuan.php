<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Bantuan extends CI_Controller
{
    function index()
    {
        $nama = $this->input->post('nama');
        $email = $this->input->post('email');
        $telp = $this->input->post('telp');
        $message = $this->input->post('message');

        $this->db->query("INSERT INTO lp_bantuan (nama,email,telp,message) VALUES ('" . $nama . "','" . $email . "','" . $telp . "','" . $message . "') ");

        $this->load->helper('url');
    }
}