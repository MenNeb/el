<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Mcours extends CI_Model
{
    
    public function __construct()
    
    {
        parent::__construct(); // construct the Model class
    }

	 public function exist($titre)
    {
        
        $this->db->where('titre',$titre);
        $q = $this->db->get("cours");
        if ($q->num_rows() > 0) {
            
            return TRUE;
        }
        return FALSE;
    }
    public function getCours($titre)
    {
        $this->db->where('titre',$titre);
       
        $q = $this->db->get("cours");
       
        return $q->result();
     
    }
    public function ajouter($data){

    	$this->db->insert('cours', $data);
    }

      public function get_all()
     {      
        $q=$this->db->get('cours');
        return $q->result();
          
     }
}
