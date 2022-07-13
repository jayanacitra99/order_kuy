<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->library('session');
	}

	public function get_data_items_foods()
	{
		return $this->db->where('KIND', 1)
						->get('items')
						->result();
	}

	public function get_data_items_drinks()
	{
		return $this->db->where('KIND', 2)
						->get('items')
						->result();
	}

	public function get_data_items_foods_price()
	{
		$foods = $this->input->post('foods');

		return $this->db->where('NAME', $foods)
						->get('items')
						->result();
	}

	public function get_data_items_drinks_price()
	{
		$drinks = $this->input->post('drinks');
		return $this->db->where('NAME', $drinks)
						->get('items')
						->result();
	}

	public function add_order(){
		//<------------------------------------------------------------------------------------------>
		$data_customer = array (
			'CUSTOMER_ID' 	=> NULL,
			'NO_TABLE'		=> $this->input->post('no_table'),
			'CUSTOMER_NAME'	=> $this->input->post('name'),
		);

		$this->db->insert('customer',$data_customer);
		//<------------------------------------------------------------------------------------------>
		$this->db->select("MAX(CUSTOMER_ID) AS id_cus1");
		$this->db->from("CUSTOMER");
		$query = $this->db->get();
		$CUSTOMERS = $query->row()->id_cus1;

		$data_order = array (
			'ORDER_ID'		=> NULL,
			'ADMIN_ID'		=> NULL,
			'CUSTOMER_ID'	=> $CUSTOMERS,
			'TOTAL_BAYAR'	=> NULL,
			'BAYAR'			=> NULL,
			'KEMBALIAN'		=> NULL,
			'DATE'			=> date('d D-M-Y'),
			'STATUS'		=> 'UNPAYED'
		);

		$this->db->insert('order_list',$data_order);
		//<------------------------------------------------------------------------------------------>
		$foods = $_POST['foods'];
		$qtyf = $_POST['qtyf'];

		foreach ($foods as $index => $food_item)
		{
				$this->db->select("MAX(ORDER_ID) AS id_derf");
				$this->db->from("ORDER_LIST");
				$query = $this->db->get();
				$DERF = $query->row()->id_derf;

				$FOODS  = $this->db->select('ITEMS_ID')
									->where('NAME', $food_item)
									->get('items')
									->result_array()[0]['ITEMS_ID'];

				$data_detailf = array (
					'DETAIL_ID'		=> $DETF,
					'ORDER_ID'		=> $DERF,
					'ITEMS_ID'		=> $FOODS,
					'QUANTITY'		=> $qtyf[$index],
					'STATUS'		=> 'WAITING',
				);	

				$this->db->insert('detail_order',$data_detailf);
		}

		//<------------------------------------------------------------------------------------------>

		$drinks = $_POST['drinks'];
		$qtyd = $_POST['qtyd'];
		foreach ($drinks as $index => $drink_item)
		{
			$this->db->select("MAX(ORDER_ID) AS id_derd");
			$this->db->from("ORDER_LIST");
			$query = $this->db->get();
			$DERD = $query->row()->id_derd;

			$DRINKS_ID = $this->db->select('ITEMS_ID')
									->where('NAME', $drink_item)
									->get('items')
									->result_array()[0]['ITEMS_ID'];

			$data_detaild = array (
				'DETAIL_ID'		=> $DETD,
				'ORDER_ID'		=> $DERD,
				'ITEMS_ID'		=> $DRINKS_ID,
				'QUANTITY'		=> $qtyd[$index],
				'STATUS'		=> 'WAITING',
			);

			$this->db->insert('detail_order',$data_detaild);
		}

		//<------------------------------------------------------------------------------------------>


		if($this->db->affected_rows() > 0) {
			return TRUE;
		} else {
			return FALSE;
		}
	}

	public function select(){
			return $this->db->join('customer','customer.CUSTOMER_ID = order_list.CUSTOMER_ID')
							->where('STATUS','UNPAYED')
	                        ->get('order_list')
	                        ->result();
	}

	public function selects($he){
			return $this->db->where('order_list.ORDER_ID', $he)
							->join('detail_order','detail_order.ORDER_ID = order_list.ORDER_ID')
							->join('items','items.ITEMS_ID = detail_order.ITEMS_ID')
							->join('customer','customer.CUSTOMER_ID = order_list.CUSTOMER_ID')
	                        ->get('order_list')
	                        ->row();
	}

	public function getmenu($asek){
		return $this->db->where('detail_order.ORDER_ID', $asek)
							->join('items','items.ITEMS_ID = detail_order.ITEMS_ID')
	                        ->get('detail_order')->result();
	}

	public function do_edit_qty($DETAIL_ID){
		$data = array(
			'QUANTITY' 	=> $this->input->post('qty_edit'),
			);

		$this->db->where('DETAIL_ID', $DETAIL_ID)
				->update('detail_order', $data);

		if ($this->db->affected_rows() > 0) {
			return TRUE;
		} else {
			return FALSE;
		}
	}

	public function select2(){

		return $this->db->join('customer','customer.CUSTOMER_ID = order_list.CUSTOMER_ID')
							->where('STATUS','PAYED')
	                        ->get('order_list')
	                        ->result();
	}

	public function cancel_order($ORDER_ID){
			$this->db->where('ORDER_ID', $ORDER_ID)
					->delete('detail_order');

			$this->db->where('ORDER_ID', $ORDER_ID)
					->delete('order_list');

			if ($this->db->affected_rows() > 0) {
				return TRUE;
			}else {
				return FALSE;
			}
	}

	public function cancel_item($DETAIL_ID){
			$this->db->where('DETAIL_ID', $DETAIL_ID)
					->delete('detail_order');

			if ($this->db->affected_rows() > 0) {
				return TRUE;
			}else {
				return FALSE;
			}
	}

	public function show()
	{
		return $this->db->join('detail_order','detail_order.ORDER_ID = order_list.ORDER_ID')
						->join('customer','customer.CUSTOMER_ID = order_list.CUSTOMER_ID')
						->join('items','items.ITEMS_ID = detail_order.ITEMS_ID')
						->get('order_list')
						->result();
	}

	public function update_bayar($ORDER_ID){
		$useradmin = $this->input->post('username');
		$passadmin = md5($this->input->post('password'));

		$ADMIN_ID = $this->db->select('ADMIN_ID')
							->where('USERNAME', $useradmin)
							->get('admin')
							->row();
		
		$data = array(
			'ADMIN_ID'		=> 1,
			'TOTAL_BAYAR' 	=> $this->input->post('total'),
			'BAYAR' 		=> $this->input->post('bayar'),
			'KEMBALIAN' 	=> $this->input->post('kembalian'),
			'STATUS'		=> 'PAYED'
		);

		$this->db->where('ORDER_ID', $ORDER_ID)->update('order_list', $data);

		$data = array(
			'STATUS'		=> 'DONE'
		);

		$this->db->where('ORDER_ID', $ORDER_ID)->update('detail_order', $data);

		if ($this->db->affected_rows() > 0) {
			return TRUE;
		} else {
			return FALSE;
		}
	}

	public function do_login(){
		$username = $this->input->post('username');
		$password = md5($this->input->post('password'));

		$query = $this->db->where('USERNAME', $username)
							->where('PASSWORD', $password)
							->get('admin');

		if($query->num_rows() > 0) {
			$data_admin = $query->row();
			$session = array (
				'LOGGED_IN'		=> TRUE,
				'USERNAME' 		=> $data_admin->USERNAME,
				'ADMIN_ROLE'	=> $data_admin->ADMIN_ROLE,
			);

			$this->session->set_userdata($session);
			return true;
		} else {
			return false;
		}

	}

}

/* End of file main_model.php */
/* Location: ./application/models/main_model.php */