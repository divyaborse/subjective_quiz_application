<?php
class Model_subquiz extends CI_Model{
	public function dataconnect(){
		$this->load->database('sub_quiz');
		$q_id = 1;
		$this->db->where('q_id',$q_id);
		return $this->db->get('subjective_quiz');

	}
	public function display(){

		$this->load->view('accountheader');
		$this->load->view('sampleaccount');
		$this->load->view('Subquizview');
		$this->load->view('accountfooter');

	}
	public function summary(){
		$this->load->view('accountheader');
		$this->load->view('sampleaccount');

		$this->load->view('subquiz_summary');
		$this->load->view('accountfooter');


	}
	public function update_data($answer){
		$this->load->database('sub_quiz');
		$data = [
            'answer' => $answer,];
		$q_id = 1;
		$this->db->where('q_id',$q_id);
		$this->db->update('subjective_quiz',$data);



	}
	public function fetch_detail(){
		$this->load->database('sub_quiz');
		$q_id = 1;
		$this->db->where('q_id',$q_id);
		return $this->db->get('subjective_quiz');
	}
	public function store_score($score){
		$this->load->database('sub_quiz');
		$q_id = 1;
		$data = [
            'score' => $score,];
		$q_id = 1;
		$this->db->where('q_id',$q_id);
		$this->db->update('subjective_quiz',$data);

	}

	public function view_score(){
		$this->load->database('sub_quiz');
		$q_id = 1;
		$this->db->where('q_id',$q_id);
		return $this->db->get('subjective_quiz');
	}

}

?>