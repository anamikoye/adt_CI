<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class patient extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		// $this->load->model('patient_model');
	}

	public function index()
	{
		$data['content_view'] = "patient/patient_view";

		$data['title']="Patients";

		$data = array_merge($data,$this->load_libraries(array('fonts','jquery','smartadmin','bootstrap','configjs')));

		$this->template($data);
	}

}
