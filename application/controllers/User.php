<?php
class User extends CI_Controller 
{
	public function __construct()
	{
	parent::__construct();
	$this->load->database();
	$this->load->helper('url');
    $this->load->library('session');
	$this->load->model('Mapprenant');
	$this->load->model('MEnseignant');
	$this->load->model('Mparcours');
	$this->load->model('Muser');
	}

	public function login()
	{   $e=$this->input->post('user');
        $p=$this->input->post('pass');


		$que=$this->db->query("SELECT * FROM `user` WHERE `pseudo`='".$e."' and `password`='$p'");
		$row = $que->num_rows();
		if($row)

		{	$counting['apprenant']=$this->db->query("select count(*) as nbrapp from Apprenant")->result();
			$counting['parcours']=$this->db->query("select count(*) as nbrpar from parcours")->result();
			$counting['action']=$this->db->query("select count(*) as nbraction from action")->result();
			$counting['session']=$this->db->query("select count(*) as nbrsession from session")->result();
			
		
			
			$data=$que->result();
			if($data[0]->type==2){
				//getByUserID
				$apprenant=$this->Mapprenant->getByUserID($data[0]->id);

				$this->session->set_userdata('nom',$apprenant[0]->nom);
				$this->session->set_userdata('prenom',$apprenant[0]->prenom);
				$this->session->set_userdata('id',$apprenant[0]->id);
				$this->session->set_userdata('user_id',$apprenant[0]->user_id);
				$this->session->set_userdata('type',$data[0]->type);
				$this->apprenant_construc('template/page',$counting);
			}else{
				$enseignant=$this->MEnseignant->getByUserID($data[0]->id);
				$this->session->set_userdata('nom',$enseignant[0]->nom);
				$this->session->set_userdata('prenom',$enseignant[0]->prenom);
				$this->session->set_userdata('id',$enseignant[0]->id);
				$this->session->set_userdata('user_id',$enseignant[0]->iduser);
				$this->session->set_userdata('type',$data[0]->type);
				$this->page_construct('template/page',$counting);
			}
			
			
		}
		else
		{
			$data['error']=  'Les informations que vous avez saisie sont invalide';
			$this->load->view('/auth/login.php',$data);
		}	

		
	}
	function uploadform()
	{
		$this->page_construct('enseignant/uploadfile',array('error' => ' ' ));
	}
	function details($id){
		$id =$this->session->userdata('id');
		$type =$this->session->userdata('type');
		if($id!=null){

			$data['apprenant'] = $this->Mapprenant->getByID($id );
			$this->apprenant_construc('apprenant/profile',$data);
		}
	}
	
	function dashboard()
	{
		$id =$this->session->userdata('id');
		$type =$this->session->userdata('type');
		if($id!=null){
			$counting['apprenant']=$this->db->query("select count(*) as nbrapp from Apprenant")->result();
			$counting['parcours']=$this->db->query("select count(*) as nbrpar from parcours")->result();
			$counting['action']=$this->db->query("select count(*) as nbraction from action")->result();
			$counting['session']=$this->db->query("select count(*) as nbrsession from session")->result();
			if($type==2){
				$this->apprenant_construc('template/page',$counting);
			}else{
				$this->page_construct('template/page',$counting);
			}
			
		}
	}

	
	function page_construct($page, $meta = array(), $data = array()) {
    
        $this->load->view( 'template/headens', $meta);
        $this->load->view( $page, $data);
        $this->load->view('template/footer');
	
	}
	function apprenant_construc($page, $meta = array(), $data = array()) {
    
        $this->load->view( 'template/head', $meta);
        $this->load->view( $page, $data);
        $this->load->view('template/footer');
	
	}

	public function updetails($iduser)
	{
		$type =$this->session->userdata('type');

		if($type ==1){
			$data['enseignant']=$this->MEnseignant->getByID($iduser);

			$this->page_construct('enseignant/profile',$data);
		}elseif ($type==2) {
			$data['apprenant']=$this->Mapprenant->getByID($iduser);
			$this->apprenant_construc('apprenant/profile',$data);
		}	
	}
	function logout(){
		$this->session->unset_userdata('id');
			$this->load->view('/auth/login.php');
	}

 	function update(){

 		$nom=$this->input->post('nom');
		$prenom=$this->input->post('prenom');
		$adress=$this->input->post('adress');
		$numtel=$this->input->post('numtel');
		$mail=$this->input->post('mail');
		$id =$this->session->userdata('id');
		$type =$this->session->userdata('type');
		if($type ==1){
			$this->MEnseignant->update($nom,$prenom,$adress,$numtel,$mail,$id);
			$data['enseignant']=$this->MEnseignant->getByID($id);

			$this->page_construct('enseignant/profile',$data);
		}elseif ($type==2) {
			$this->MEnseignant->update($nom,$prenom,$adress,$numtel,$mail,$id);
			$data['apprenant']=$this->Mapprenant->getByID($id);
			$this->apprenant_construc('apprenant/profile',$data);
		}	
		
 	}	

 	function uppassword(){
 		$type =$this->session->userdata('type');
 		if($type ==1){
			

			$this->page_construct('enseignant/passwordform');
		}elseif ($type==2) {
			$this->apprenant_construc('apprenant/passwordform');
		}	
 	}

 	function updatepass(){
 		$iduser =$this->session->userdata('user_id');
 		$type =$this->session->userdata('type');
 		$old=$this->input->post('old');
		$new=$this->input->post('nouveau');
		if($this->Muser->existp($old)){
			$this->Muser->updatepass($new,$iduser);
			$counting['apprenant']=$this->db->query("select count(*) as nbrapp from Apprenant")->result();
			$counting['parcours']=$this->db->query("select count(*) as nbrpar from parcours")->result();
			$counting['action']=$this->db->query("select count(*) as nbraction from action")->result();
			$counting['session']=$this->db->query("select count(*) as nbrsession from session")->result();
			if($type==2){
				$this->apprenant_construc('template/page',$counting);
			}else{
				$this->page_construct('template/page',$counting);
			}
		}

 	}
}
?>