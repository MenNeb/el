<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Mapprenant extends CI_Model
{

	public function __construct()
	{
    	parent::__construct(); // construct the Model class
  	}
	 public function exist($nom,$prenom)
    {
        
        $this->db->where('nom',$nom);
        $this->db->where('prenom',$prenom);
        $q = $this->db->get("Apprenant");
        if ($q->num_rows() > 0) {
            
            return TRUE;
        }
        return FALSE;
    }

    public function ajouter($data){
        
    	$this->db->insert('Apprenant', $data);
    }

    public function get_Apprenant()
     {		
     	$q=$this->db->get('Apprenant');
       
		return $q->result();
          
     }
     public function getByUserID($uesr_id){
        $this->db->where('user_id',$uesr_id);
        $q = $this->db->get("Apprenant");
     
        
       return $q->result();
   } 
   public function getByID($id){
        $this->db->where('id',$id);
        $q = $this->db->get("Apprenant");
     
        
       return $q->result();
   }    
     public function getIDApp($nom,$prenom){

     	  $this->db->where('nom',$nom);
        $this->db->where('prenom',$prenom);
        $q = $this->db->get("Apprenant");
     
        
       return $q->result();
     }

}
