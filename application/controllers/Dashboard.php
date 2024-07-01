<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	private $css = array();
	private $js = array();

	function __construct()
  {
    parent::__construct();
    date_default_timezone_set('Asia/Jakarta');
    $this->load->helper('url');
    $this->load->helper('html');
    $this->_init();
  }
	
	private function _init()
  {
    $this->css[] = base_url('assets/vendors/feather/feather.css');
    $this->css[] = base_url('assets/vendors/mdi/css/materialdesignicons.min.css'); 
    $this->css[] = base_url('assets/vendors/ti-icons/css/themify-icons.css'); 
    $this->css[] = base_url('assets/vendors/typicons/typicons.css'); 
    $this->css[] = base_url('assets/vendors/simple-line-icons/css/simple-line-icons.css'); 
    $this->css[] = base_url('assets/vendors/css/vendor.bundle.base.css'); 
    // $this->css[] = base_url('assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css'); 
    // $this->css[] = base_url('assets/js/select.dataTables.min.css'); 
    $this->css[] = base_url('assets/css/vertical-layout-light/style.css'); 
    $this->css[] = base_url('assets/css/styles.css'); 
		
		$this->js[] = base_url('assets/vendors/js/vendor.bundle.base.js');
		$this->js[] = base_url('assets/vendors/chart.js/Chart.min.js');
		$this->js[] = base_url('assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js');
		$this->js[] = base_url('assets/vendors/progressbar.js/progressbar.min.js');
		$this->js[] = base_url('assets/js/off-canvas.js');
		$this->js[] = base_url('assets/js/hoverable-collapse.js');
		$this->js[] = base_url('assets/js/template.js');
		$this->js[] = base_url('assets/js/settings.js');
		$this->js[] = base_url('assets/js/todolist.js');
		$this->js[] = base_url('assets/js/jquery.cookie.js');
		$this->js[] = base_url('assets/js/dashboard.js');
		$this->js[] = base_url('assets/js/Chart.roundedBarCharts.js');
  }

	public function index()
	{
    $data = array(); 

    $this->load->model('user');
    $users = $this->user->get()->result_array();

    $data['users'] = $users;
		$data['js'] = $this->js;
		$data['css'] = $this->css;
		$data['page'] = 'dashboard';

		$this->load->view('template', $data);
	}

	public function adduser()
	{
    $data = array(); 

		$data['js'] = $this->js;
		$data['css'] = $this->css;
		$data['page'] = 'add_user';

		$this->load->view('template', $data);
	}

	public function insertuser()
	{
		$name = $this->input->post('name', TRUE);
		$gender = $this->input->post('gender', TRUE);
		$email = $this->input->post('email', TRUE);
		$phone = $this->input->post('phone', TRUE);
		$profile = $this->input->post('profile', TRUE);
		$status = $this->input->post('status', TRUE);

		$initial = 'AA';

		$data = array(
			'name' => $name,
			'initial' => $initial,
			'gender' => $gender,
			'email' => $email,
			'phone' => $phone,
			'profile' => $profile,
			'status' => $status
		);

    $this->load->model('user');
		$insert = $this->user->insert($data);

		if ($insert) {
    	redirect('/');
		} else {
    	redirect('/adduser');
		}

	}

	public function edituser($id)
	{
		// $this->from_validaiton->set_rules('name','Name', 'required', ['required' => '%s Harus Diisi']);
		$data = array(
			'judul' => 'Edit User',
			'user' => $this->User->detail_data($id),
			'page' => 'edit_users',
		);
		$this->load->view('edit_users', $data, false);
	}
}
