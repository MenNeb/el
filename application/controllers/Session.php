<?php
class Session extends CI_Controller 
{
	public function __construct()
	{
	parent::__construct();
	$this->load->database();
	$this->load->helper('url');
	$this->load->model('Msession');
	}
	
	function dashboard()
	{
	$this->load->view('dashboard');
	}


	function getall()
	{
    $data['sessions'] = $this->Msession->getAll();
    
		$this->page_construct('enseignant/session',$data);
	}

	function getbyID($id){
///select * from parcours p INNER join Apprenant a on p.id_apprenant=a.id INNER JOIN action act on act.id=p.id_action INNER join session s on s.id_apprenant=a.id where p.id_apprenant=19
		$data['ss'] = $query = $this->db->query("select * from Apprenant a inner join session s where a.id=".$id)->result();
		
		 $this->apprenant_construct('apprenant/asession',$data);
		
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

	function apprenant_construct($page, $meta = array(), $data = array()) {
    
        $this->load->view( 'template/head', $meta);
        $this->load->view( $page, $data);
        $this->load->view('template/footer');
	
	}

}
?>