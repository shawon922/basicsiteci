<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site extends CI_Controller {
	public function index()
	{
		$data['title'] = "Home";

		$this->load->model('db_model');
		$results['output']= $this->db_model->get_product('computer');

		$this->load->view('header', $data);
		$this->load->view('header_nav');
		$this->load->view('sidebar_nav');
		$this->load->view('main_body', $results);
		$this->load->view('footer_nav');
		$this->load->view('footer');

	}

	function product()
	{
		$data['name'] = 'computer';
		$this->load->model('db_model');
		$results['output']= $this->db_model('name');


	}

	/*public function _remap($method)
	{
		if($method=='some_method')
		{
			$this->$method();
		}
		else
		{
			$this->index();
		}
	}*/

	public function _remap($method, $params = array())
	{
		//$method = 'process_'.$method;

		if(method_exists($this, $method))
		{
			return call_user_func_array(array($this, $method), $params);
		}

		show_404();
	}
}