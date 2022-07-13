<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->model('main_model');
		$this->load->library('form_validation', 'session');
	}

	public function index()
	{
		$this->load->view('welcome_view');
	}

	public function order(){
		$data['items_foods'] = $this->main_model->get_data_items_foods();
		$data['items_drinks'] = $this->main_model->get_data_items_drinks();
		$data['foods_price'] = $this->main_model->get_data_items_foods_price();
		$data['drinks_price'] = $this->main_model->get_data_items_drinks_price();
		$data['asu'] = $this->main_model->select();
		$this->load->view('template_order', $data);
	}

	public function add_order(){
		if($this->input->post('submit'))
		{
			if($this->main_model->add_order() == TRUE) 
			{
				redirect('main/bill','refresh');
			}else {
				$data['notif'] = 'Add Order Failed!!';
				$this->load->view('template_order',$data);
			}
		} 
		else {
			$data['notif'] = 'Order Failed!!';
			$this->load->view('template_order',$data);
		}
	}

	public function login(){
		$this->load->view('login_view');
	}

	public function bayar(){
		
		if ($this->input->post('submit')) {
			if ($this->main_model->update_bayar($this->input->post('orderid')) == TRUE) {
					redirect('main/kasir');
			} else {					
				echo "string";
			}
			
		} 
	}

	public function detail(){
		
		$orderid = $this->input->post('hello');
		$data['laos'] = $this->main_model->selects($orderid);
		$data['menu'] = $this->main_model->getmenu($orderid);
		$this->load->view('detail_view', $data);
	}

	public function detailhistory(){
		
		$orderid = $this->input->post('hello');
		$data['laos'] = $this->main_model->selects($orderid);
		$data['menu'] = $this->main_model->getmenu($orderid);
		$this->load->view('detail_history_view', $data);
	}

	public function bill(){
		$orderid = $this->input->post('hello');
		$data['laos'] = $this->main_model->selects($orderid);
		$data['menu'] = $this->main_model->getmenu($orderid);
		$data['asu'] = $this->main_model->select2();
		$this->load->view('bill_view',$data);
	}

	public function kasir(){
		if($this->session->userdata('LOGGED_IN') == TRUE)
		{
			if($this->session->userdata('ADMIN_ROLE') == 'KASIR')
			{
				$data['asu'] = $this->main_model->select();
				$data['main_view'] = 'kasir_view';
				$this->load->view('template_kasir', $data);
			} else {
				redirect(base_url('index.php/main/login'));
			}
		} else {
			redirect(base_url('index.php/main/login'));
		}
	}

	public function history(){
		if($this->session->userdata('LOGGED_IN') == TRUE)
		{
			if($this->session->userdata('ADMIN_ROLE') == 'KASIR')
			{
				$orderid = $this->input->post('hello');
				$data['asu'] = $this->main_model->select2();
				$data['main_view'] = 'history_view';
				$this->load->view('template_kasir', $data);
			} else {
				redirect(base_url('index.php/main/login'));
			}
		} else {
			redirect(base_url('index.php/main/login'));
		}
	}

	public function chef(){
		if($this->session->userdata('LOGGED_IN') == TRUE)
		{
			if($this->session->userdata('ADMIN_ROLE') == 'CHEF')
			{	
				$data['dapur']= $this->main_model->show();
				$data['main_view'] = 'chef_view';
				$this->load->view('template_blank', $data);
			} else {
				redirect(base_url('index.php/main/login'));
			}
		} else {
			redirect(base_url('index.php/main/login'));
		}
	}

	public function logout(){
		$data = array(
				'USERNAME' 		=> '',
				'ADMIN_ROLE' 	=> '',
				'LOGGED_IN'		=> FALSE
			);
		$this->session->sess_destroy();
		redirect('main/login');
	}

	public function do_login(){
		if($this->input->post('submit')){
			$this->form_validation->set_rules('username', 'Username', 'trim|required');
			$this->form_validation->set_rules('password', 'Password', 'trim|required');

			if ($this->form_validation->run() == TRUE) {
				if($this->main_model->do_login() == TRUE){
					if($this->session->userdata('ADMIN_ROLE') == 'KASIR'){
						redirect('main/kasir','refresh');
					} elseif ($this->session->userdata('ADMIN_ROLE') == 'CHEF'){
						redirect('main/chef','refresh');
					}
				} else {
					$data['notif'] = 'Login Failed 1 !!';
					$this->load->view('login_view', $data);
				}
			} else {
				$data['notif'] = 'Login Failed 2 !!';
				$this->load->view('login_view', $data);
			}
		}
	}

	public function cancel(){
		if($this->session->userdata('LOGGED_IN') == TRUE) {
			if($this->session->userdata('ADMIN_ROLE') == 'KASIR')
			{	
				$ORDER_ID = $this->uri->segment(3);

				if($this->main_model->cancel_order($ORDER_ID) == TRUE) {
					$this->session->set_flashdata('notif','Hapus Sukses');
					redirect(base_url('index.php/main/kasir'));
				}else {
					$this->session->set_flashdata('notif','Hapus Gagal !!');
					redirect(base_url('index.php/main/kasir'));
				}
			} else {
				$this->session->set_flashdata('notif','Hapus Gagal !!');
				redirect(base_url('index.php/main/logout'));
			} 
		}else {
			redirect(base_url('index.php/main/login'));
		}
	}

	public function cancel_item(){
		if($this->session->userdata('LOGGED_IN') == TRUE) {
			if($this->session->userdata('ADMIN_ROLE') == 'KASIR')
			{	
				$DETAIL_ID = $this->uri->segment(3);

				if($this->main_model->cancel_item($DETAIL_ID) == TRUE) {
					$this->session->set_flashdata('notif','Hapus Sukses');
					redirect(base_url('index.php/main/kasir'));
				}else {
					$this->session->set_flashdata('notif','Hapus Gagal !!');
					redirect(base_url('index.php/main/kasir'));
				}
			} else {
				$this->session->set_flashdata('notif','Hapus Gagal !!');
				redirect(base_url('index.php/main/logout'));
			} 
		}else {
			redirect(base_url('index.php/main/login'));
		}
	}

	public function edit_qty(){
		if($this->session->userdata('LOGGED_IN') == TRUE) {
			if($this->session->userdata('ADMIN_ROLE') == 'KASIR')
			{	
				$data['main_view'] = 'kasir_view';
				$DETAIL_ID = $this->uri->segment(3);
				$data['menu'] = $this->main_model->getmenu($DETAIL_ID);

				$this->load->view('template', $data);
			} else {
				$this->session->set_flashdata('notif','Hapus Gagal !!');
				redirect(base_url('index.php/main/logout'));
			} 
		}else {
			redirect(base_url('index.php/main/login'));
		}
	}

	public function do_edit_qty(){
		if($this->session->userdata('LOGGED_IN') == TRUE) {
			if($this->session->userdata('ADMIN_ROLE') == 'KASIR')
			{	
				$DETAIL_ID = $this->uri->segment(3);

				if ($this->input->post('submit')) {

					if ($this->admin_model->update_qty($DETAIL_ID) == TRUE) {
						
						$data['main_view'] = 'kasir_view';
						$this->load->view('template_kasir', $data);
					} else {
						
						$data['notif'] = 'Update Gagal!';
						$data['main_view'] = 'kasir_view';
						$this->load->view('template_kasir', $data);
					}
			}
			} else {
				$this->session->set_flashdata('notif','Hapus Gagal !!');
				redirect(base_url('index.php/main/logout'));
			} 
		}else {
			redirect(base_url('index.php/main/login'));
		}
	}	
}

/* End of file main.php */
/* Location: ./application/controllers/main.php */