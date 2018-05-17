<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class C_candidates extends CI_Controller{
 function __construct(){
  parent:: __construct();
  $this->load->model('candidates_model', 'm_can');

 }
 function index(){
  $this->load->view('templates/header');
  $this->load->view('menu/index');
  $this->load->view('welcome');
  $this->load->view('templates/footer');
 }
 function allCandidate() //list all candidate of admin 
 {
  $this->load->view('templates/header');   
  $this->load->view('menu/index');   
  $this->load->view('welcome');   
  $this->load->view('templates/footer');  
 }

 // function to call all Candidates
 public function showAllCandidates(){
  $result = $this->m_can->showAllCandidates();
  echo json_encode($result);
 }

 // function call delete Candidate

 public function deleteCandidate(){
  $result = $this->m_can->deleteCandidate();
  $msg['success'] = false;
  if($result){
   $msg['success'] = true;
  }
  echo json_encode($msg);
 }


// delete selected candidate
 public function deleteSelectedCandidate(){
  $result = $this->m_can->deleteCandidate();
  $msg['success'] = false;
  if($result){
   $msg['success'] = true;
  }
  echo json_encode($msg);
 }

 public function selectedCandidates(){
  $this->load->view('templates/header');   
  $this->load->view('menu/index');   
  $this->load->view('candidates/can_list');   
  $this->load->view('templates/footer'); 
 }
 // function call count all Candidates
 public function countCandidates(){
  $resultCount = $this->m_can->countCandidates();
  echo json_encode($resultCount);

 }
 // function call count selected candidates
 public function countSelectedCandidates(){
  $resultSelectedCount = $this->m_can->countSelectedCandidates();
  echo json_encode($resultSelectedCount);
 }
 // function call count provinces
 public function countProvinces(){
  $resultProvincesCount = $this->m_can->countProvinces();
  echo json_encode($resultProvincesCount);
 }
 public function showSelected(){
   $result = $this->m_can->showSelected();
   echo json_encode($result);
 }

 public function export() {
     $this->load->view('candidates/export');
 }

	public function exportSelectedCan()
	{
		$this->load->view('candidates/exportSelected');
	}

}