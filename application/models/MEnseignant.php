<?php defined('BASEPATH') OR exit('No direct script access allowed');

class MEnseignant extends CI_Model
{

	public function __construct()
	{
    	parent::__construct(); // construct the Model class
  	}
	 public function exist($nom,$prenom)
    {
        
        $this->db->where('nom',$nom);
        $this->db->where('prenom',$prenom);
        $q = $this->db->get("enseignant");
        if ($q->num_rows() > 0) {
            
            return TRUE;
        }
        return FALSE;
    }

    public function ajouter($data){
        
    	$this->db->insert('enseignant', $data);
    }

    public function get_enseignant()
     {		
     	$q=$this->db->get('enseignant');
       
		return $q->result();
          
     }
     public function getByUserID($uesr_id){
        $this->db->where('iduser',$uesr_id);
        $q = $this->db->get("enseignant");
     
        
       return $q->result();
   } 
   public function getByID($id){
        $this->db->where('id',$id);
        $q = $this->db->get("enseignant");
     
        
       return $q->result();
   }    
     public function getIDenseignant($nom,$prenom){

     	  $this->db->where('nom',$nom);
        $this->db->where('prenom',$prenom);
        $q = $this->db->get("enseignant");
     
        
       return $q->result();
     }

}
