<?php
defined('BASEPATH') or exit('Npo direct script access allowed');

class Welcome extends MY_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('M_data');
		$this->load->helper('url');
		$this->load->helper('download');
	}

	public function index()
	{
		$this->data['website'] = $this->db->get('lp_website')->row();
		$this->data['sosmed'] = $this->db->get('lp_sosmed')->result();
		$this->data['home'] = $this->db->get('lp_home')->row();
		$this->data['keunggulan'] = $this->db->get('lp_keunggulan')->result();
		$this->data['fitur'] = $this->db->get('lp_fitur')->result();
		$this->data['about'] = $this->db->get('lp_about')->result();
		$this->data['pengguna'] = $this->db->get('lp_pengguna')->result();
		$this->data['filter'] = $this->db->get('tbl_master_filter_library')->result();

		$this->data['fs1'] = $this->db->get_where('lp_fitur_spesial', array('id' => 1))->row();
		$this->data['fs2'] = $this->db->get_where('lp_fitur_spesial', array('id' => 2))->row();
		$this->data['fs3'] = $this->db->get_where('lp_fitur_spesial', array('id' => 3))->row();
		$this->data['fs4'] = $this->db->get_where('lp_fitur_spesial', array('id' => 4))->row();

		$this->data['kl1'] = $this->db->get_where('lp_kelebihan', array('id' => 1))->row();
		$this->data['kl2'] = $this->db->get_where('lp_kelebihan', array('id' => 2))->row();
		$this->data['kl3'] = $this->db->get_where('lp_kelebihan', array('id' => 3))->row();
		$this->data['kl4'] = $this->db->get_where('lp_kelebihan', array('id' => 4))->row();

		// $this->data['testimoni'] = $this->db->get('lp_testimoni')->result();
		$this->data['testimoni'] = $this->db->get('tbl_testimonial')->result();

		$this->data['silver'] = $this->db->get_where('lp_jasa', array('id' => 1))->row();
		$this->data['gold'] = $this->db->get_where('lp_jasa', array('id' => 2))->row();
		$this->data['platinum'] = $this->db->get_where('lp_jasa', array('id' => 3))->row();
		$this->data['spesial'] = $this->db->get_where('lp_jasa', array('id' => 4))->row();

		$this->data['kebutuhan'] = $this->db->get('lp_kebutuhan')->result();
		$this->data['faq'] = $this->db->get('lp_faq')->result();

		$this->data['fitur_special'] = $this->db->get_where('lp_deskripsi_content', array('id' => 1))->row();
		$this->data['kelebihan'] = $this->db->get_where('lp_deskripsi_content', array('id' => 2))->row();
		$this->data['jasa'] = $this->db->get_where('lp_deskripsi_content', array('id' => 3))->row();
		$this->data['konsultasi'] = $this->db->get_where('lp_deskripsi_content', array('id' => 4))->row();


		$this->web = 'content/v_home';
		// $this->data['navigation']=$this->db->get_where('tbl_navigation');
		$this->layout();
	}
	public function formPost()

	{

		$recaptchaResponse = trim($this->input->post('g-recaptcha-response'));



		$userIp = $this->input->ip_address();



		$secret = $this->config->item('google_secret');



		$url = "https://www.google.com/recaptcha/api/siteverify?secret=" . $secret . "&response=" . $recaptchaResponse . "&remoteip=" . $userIp;



		$ch = curl_init();

		curl_setopt($ch, CURLOPT_URL, $url);

		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

		$output = curl_exec($ch);

		curl_close($ch);



		$status = json_decode($output, true);



		if ($status['success']) {

			print_r('Google Recaptcha Successful');

			exit;
		} else {

			$this->session->set_flashdata('flashError', 'Sorry Google Recaptcha Unsuccessful!!');
		}



		redirect('form', 'refresh');
	}



	// public function add_user()
	// {
	// 	$nama = $this->input->post('nama');
	// 	$telp = $this->input->post('telp');
	// 	$namaLogistics = $this->input->post('namaLogistics');
	// 	$alamat = $this->input->post('alamat');
	// 	$email = $this->input->post('email');
	// 	$domisili = $this->input->post('domisili');
	// 	$keterangan = $this->input->post('keterangan');

	// 	$data = array(
	// 		'nama' => $nama,
	// 		'noTelp' => $telp,
	// 		'namaLogistics' => $namaLogistics,
	// 		'alamat' => $alamat,
	// 		'email' => $email,
	// 		'domisili' => $domisili,
	// 		'keterangan' => $keterangan
	// 	);
	// 	$this->M_data->input_data($data, 'log_user');
	// 	// echo "<script>alert('Success');</script>";
	// 	redirect('../thank_you', 'refresh');
	// }

	// public function download()
	// {
	// 	force_download('upload/Promo-List-EMCO.pdf', NULL);
	// }
}
