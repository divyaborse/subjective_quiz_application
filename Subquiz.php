<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Subquiz extends CI_Controller {
	public function index(){
		$this->load->model('Model_Subquiz');
		$data['data'] = $this->Model_Subquiz->dataconnect();

		$this->load->view('accountheader');
		$this->load->view('sampleaccount');
		$this->load->view('Subquizview',$data);
		$this->load->view('accountfooter');
		//$this->Model_Subquiz->display();
	}
	public function show(){
		$this->load->model('Model_Subquiz');
		$this->Model_Subquiz->summary();

		
	}
	public function view_result(){
		if(isset($_POST['Submit'])){
			$answer = $_POST['response'];

        $this->load->model('Model_Subquiz');
        $this->Model_Subquiz->update_data($answer);
        $data['data'] =  $this->Model_Subquiz->view_score();
        $this->load->view('accountheader');
		$this->load->view('sampleaccount');
        $this->load->view('subquiz_summary',$data);
        $this->load->view('accountfooter');

         
		}
	}
}
?>