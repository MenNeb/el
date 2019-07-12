<?php
class Parcours extends CI_Controller 
{
	public function __construct()
	{
	parent::__construct();
	$this->load->database();
	$this->load->helper('url');
	 $this->load->library('session');
	$this->load->model('Mparcours');
	$this->load->model('Msession');
	
	}
	
	function dashboard()
	{
	$this->load->view('dashboard');
	}


	function getall()
	{
    $data['parcours'] = $this->Mparcours->getAll();
    
		$this->page_construct('enseignant/parcours',$data);
	}

	function getbyID($id){

///select * from parcours p INNER join Apprenant a on p.id_apprenant=a.id INNER JOIN action act on act.id=p.id_action INNER join session s on s.id_apprenant=a.id where p.id_apprenant=19
		$id =$this->session->userdata('id');
		if($id!=null){
		$data['parcours'] = $query = $this->db->query("select * from Apprenant a inner join session s on a.id=s.id_apprenant inner join parcours p on p.id_apprenant=a.id and p.id_session=s.id inner join action act on act.id=p.id_action where a.id=".$id)->result();
		
		 $this->apprenant_construct('apprenant/parcours',$data);
		}else{
			$this->load->view('/auth/login.php');
		}
	}

	function getbyIDens($id){
		
///select * from parcours p INNER join Apprenant a on p.id_apprenant=a.id INNER JOIN action act on act.id=p.id_action INNER join session s on s.id_apprenant=a.id where p.id_apprenant=19
		
		$data['parcours'] = $query = $this->db->query("select * from Apprenant a inner join session s on a.id=s.id_apprenant inner join parcours p on p.id_apprenant=a.id and p.id_session=s.id inner join action act on act.id=p.id_action where a.id=".$id)->result();
		
		 $this->page_construct('enseignant/parcours',$data);
		
	}
	function search(){
		$nom=$this->input->post('nom');
		$prenom=$this->input->post('prenom');
		$action=$this->input->post('action');
		$ressource=$this->input->post('ressource');
		$date=$this->input->post('date');
		$where ="";
		// if($nom!='' ){
		// 	if($where !=" where "&&$where !="" ){
		// 		$where.= " and ";
		// 	}else{
		// 		$where.=" where ";
		// 	}
		// 	$where.= " a.nom % ".$nom;
		// }	
		if($nom!='' ){
			if($where !=" where "&&$where !="" ){
				$where.= " and ";
			}else{
				$where.=" where ";
			}
			$where.= " a.nom LIKE '".$nom."%'";
		}

		if($prenom!='' ){
			if($where !=" where "&&$where !="" ){
				$where.= " and ";
			}else{
				$where.=" where ";
			}
			$where.= " a.prenom  LIKE '".$prenom."%'";
		}

		if($action!='' ){
			if($where !=" where "&&$where !="" ){
				$where.= " and ";
			}else{
				$where.=" where ";
			}
			$where.= " act.nomAction  LIKE '".$action."%'";
		}

		if($ressource!='' ){
			if($where !=" where "&&$where !="" ){
				$where.= " and ";
			}else{
				$where.=" where ";
			}
			$where.= " p.ressource LIKE '".$ressource."%'";
		}
		if($date!='' ){
			if($where !=" where "&&$where !="" ){
				$where.= " and ";
			}else{
				$where.=" where ";
			}
			$where.= "STR_TO_DATE(s.date, 'Y-m-d') = ".$date;//2019-07-03
		}

		 	$data['parcours'] = $query = $this->db->query("select * from Apprenant a inner join session s on a.id=s.id_apprenant inner join parcours p on p.id_apprenant=a.id and p.id_session=s.id inner join action act on act.id=p.id_action".$where)->result();
		// var_dump($data);
		$this->page_construct('enseignant/filter',$data);
	}
	function filterForm(){
		$this->page_construct('enseignant/filter');
	}
	function getbyIDaction($id){
		
///select * from parcours p INNER join Apprenant a on p.id_apprenant=a.id INNER JOIN action act on act.id=p.id_action INNER join session s on s.id_apprenant=a.id where p.id_apprenant=19
		$id =$this->session->userdata('id');
		if($id!=null){
		$data['parcours'] = $query = $this->db->query("select * from Apprenant a inner join session s on a.id=s.id_apprenant inner join parcours p on p.id_apprenant=a.id and p.id_session=s.id inner join action act on act.id=p.id_action where act.id=".$id)->result();
		
		 $this->page_construct('enseignant/parcours',$data);
		}else{
			$this->load->view('/auth/login.php');
		}
	}
	// public function get_apprenant()
 //     {
 //          // Datatables Variables
 //          $draw = intval($this->input->get("draw"));
 //          $start = intval($this->input->get("start"));
 //          $length = intval($this->input->get("length"));


 //          $q = $this->Mapprenant->get_Apprenant();
 //          $data = array();

 //         if($q->num_rows() > 0)
 //          {
 //      // we will store the results in the form of class methods by using $q->result()
 //      // if you want to store them as an array you can use $q->result_array()
 //              foreach ($q->result() as $row)
 //                {
 //                      $subdata['id'] = $row->id;
 //                      $subdata['nom'] = $row->nom;
 //                      $subdata['prenom'] = $row->prenom;
 //                      $data[]=$subdata;
 //                }

 //           $output = array(
 //                "draw" => $draw,
                  
 //                 "data" => $data
 //             );
 //                     echo json_encode($output);  


 //     }


 //    }
	function getallsession(){

    $data['sessions'] = $this->Msession->getAll();
    
		$this->page_construct('enseignant/session',$data);
	
	}
	function getstats($id){

		$query =  $this->db->query(
			"select count(*) as count,ac.nomAction from Apprenant a INNER join parcours p on p.id_apprenant =a.id inner join action ac on ac.id=p.id_action where a.id= " . $id . "
     GROUP by p.id_action,ac.nomAction order by ac.nomAction"); 
 
      $record = $query->result();
      $chartd = [];
 
      foreach($record as $row) {
            $chartd['label'][] = $row->nomAction;
            $chartd['data'][] = (int) $row->count;
      }
      $data['chart_data'] = $chartd;
       $this->load->view( 'template/head');
        $this->load->view( 'apprenant/stats',$data);
	}

	function getSessionbyID($id){
///select * from parcours p INNER join Apprenant a on p.id_apprenant=a.id INNER JOIN action act on act.id=p.id_action INNER join session s on s.id_apprenant=a.id where p.id_apprenant=19
		$id =$this->session->userdata('id');
		if($id!=null){
		$data['ss'] = $query = $this->db->query("select * from Apprenant a inner join session s where a.id=".$id)->result();
		
		 $this->apprenant_construct('apprenant/asession',$data);
		}else{
			$this->load->view('/auth/login.php');
		}
	}
	function getSessionbyIDens($id){
///select * from parcours p INNER join Apprenant a on p.id_apprenant=a.id INNER JOIN action act on act.id=p.id_action INNER join session s on s.id_apprenant=a.id where p.id_apprenant=19
		$data['ss'] = $query = $this->db->query("select * from Apprenant a inner join session s where a.id=".$id)->result();
		
		 $this->page_construct('enseignant/asession',$data);
		
	}

	function page_construct($page, $meta = array(), $data = array()) {
    
        $this->load->view( 'template/headens', $meta);
        $this->load->view( $page, $data);
        $this->load->view('template/footer');
	
	}
	function apprenant_construct($page, $meta = array(), $data = array()) {
    
        $this->load->view( 'template/head', $meta);
        $this->load->view( $page, $data);
        $this->load->view('template/footer');
	
	}
}
?>