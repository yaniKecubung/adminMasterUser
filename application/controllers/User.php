<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
* This is Example Controller
*/
class User extends CI_Controller
{	

	function __construct()
	{
		parent::__construct();
		$this->load->model('M_user');
		$this->template->write_view('sidenavs', 'template/default_sidenavs', true);
		$this->template->write_view('navs', 'template/default_topnavs.php', true);
	}
	
	function index() {
		$session = $this->session->userdata('status');
		
		// redirect('Example');

		if ($session == '') {
			$this->load->view('login');
		} else {
			$data['dataAdmin'] = $this->M_user->select_all_admin();  
			$session_data = $this->session->userdata('logged_in');
			$data['username'] = $session_data['username'];
			$data['coba'] = "cpna|";
			$this->template->write('title', 'My Simple Template', TRUE);
			$this->template->write('header', 'Page Example');
			$this->template->write_view('content', 'myView/mypage', $data, true);		
			$this->template->render();			
		}

	}
	// show datatable
	public function show(){
		$data['dataAdmin'] = $this->M_user->select_all_admin(); 
		$this->load->view('myView/list_data',$data);
	}
	
	public function update(){
		$id = trim($_POST['id']);
		
		$datax['dataAdmin'] = $this->M_user->get_by_id($id);
		
		
		echo show_my_modal('modal/update_admin_modal', 'update-admin', $datax);
	}
	
	public function delete(){
		$id = trim($_POST['id']);
		//echo $id; die();
		$result = $this->M_user->delete($id);
		
		if ($result > 0) {
			echo show_succ_msg('Data User Berhasil dihapus', '20px');
		} else {
			echo show_err_msg('Data User Gagal dihapus', '20px');
		}
	}
	
	
		
}	
