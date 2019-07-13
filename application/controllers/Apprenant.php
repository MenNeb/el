<?php
class Apprenant extends CI_Controller 
{
	public function __construct()
	{
	parent::__construct();
	$this->load->database();
	$this->load->helper('url');
	$this->load->model('Mapprenant');

	$this->load->library('session');
	}
	
	function dashboard()
	{
	$this->load->view('dashboard');
	}


	public function stats()
	{
 $query = $this->db->query("select count(*) as nbrsession, s.id_apprenant, a.nom as nom ,a.prenom as prenom  from session s inner join apprenant a on a.id=s.id_apprenant GROUP by s.id_apprenant");
/*		$record = $query->result();
      $chartd = [];
 
      foreach($record as $row) {
            $chartd['label'][] = $row->nomAction;
            $chartd['data'][] = (int) $row->count;
      }
      $data['chart_data'] = $chartd;

*/
      $record = $query->result();
      $chartd = []; 
      foreach($record as $row) {
      	$chartd['label'][] = $row->nom . " ".$row->prenom;
      	$chartd['data'][] = (int) $row->nbrsession;
      	

      }
       $data['chart_data'] = json_encode($chartd);
	$this->page_construct('enseignant/stats',$data);
// $this->load->view( 'enseignant/test');
	}
	function getall()
	{
		$id =$this->session->userdata('id');
		if($id!=null){
			 $data['users'] = $this->Mapprenant->get_Apprenant();
    
			$this->page_construct('enseignant/apprenant',$data);
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

	function page_construct($page, $meta = array(), $data = array()) {
    
        $this->load->view( 'template/headens', $meta);
        $this->load->view( $page, $data);
        $this->load->view('template/footer');
	
	}

}
?>