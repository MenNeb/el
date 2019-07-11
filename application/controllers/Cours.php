<?php
class Cours extends CI_Controller 
{
	public function __construct()
	{
	parent::__construct();
	$this->load->database();
	$this->load->helper('url');
	$this->load->model('Mcours');
	$this->load->library('session');
	}
	
	function dashboard()
	{
	$this->load->view('dashboard');
	}


	function getall()
	{
		$id =$this->session->userdata('id');
		if($id!=null){
			$data['cours'] = $this->Mcours->get_all();
    
		$this->page_construct('enseignant/cours',$data);
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