<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Maction extends CI_Model
{

	public function __construct()
	{
    	parent::__construct(); // construct the Model class
  	}
	 public function exist($nomaction)
    {
        
        $this->db->where('nomAction',$nomaction);
        
        $q = $this->db->get("action");
        if ($q->num_rows() > 0) {
            
            return TRUE;
        }
        return FALSE;
    }

     public function get($nomaction)
    {
        
        $this->db->where('nomAction',$nomaction);
        
        $q = $this->db->get("action");
        return $q->result( );
    }

    public function create ($data){

    	$this->db->insert('action', $data);
    }

    
      public function get_all()
     {      
        $q=$this->db->get('action');
        return $q->result();
          
     }
}
