<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Muser extends CI_Model
{

	public function __construct()
	{
    	parent::__construct(); // construct the Model class
  	}
	 public function exist($nom,$prenom)
    {
        
        $this->db->where('pseudo',$nom);
        $this->db->where('password',$prenom);
        $q = $this->db->get("user");
        if ($q->num_rows() > 0) {
            
            return TRUE;
        }
        return FALSE;
    }

    public function ajouter($data){
        
    	$this->db->insert('user', $data);
        $insertId = $this->db->insert_id();
        return $insertId;
    }

    public function get_Apprenant()
     {		
     	$q=$this->db->get('Apprenant');
       
		return $q->result();
          
     }

     public function getIDApp($nom,$prenom){

     	  $this->db->where('nom',$nom);
        $this->db->where('prenom',$prenom);
        $q = $this->db->get("Apprenant");
     
        
       return $q->result();
     }

}
