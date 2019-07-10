<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Mparcours extends CI_Model
{
    
    public function __construct()
    
    {
        parent::__construct(); // construct the Model class
    }

    
	 public function exist($ressource,$heure,$session,$act,$apprenant)
    {
        
        $this->db->where('id_apprenant',$apprenant);
        $this->db->where('id_session',$session);
        $this->db->where('id_action',$act);
        $this->db->where('ressource',$ressource);
        $this->db->where('heure',$heure);
        $q = $this->db->get("parcours");
        if ($q->num_rows() > 0) {
            
            return TRUE;
        }
        return FALSE;
    }


    public function getbyID($id)
    {
        $this->db->where('p.id_apprenant',$id);
        $this->db->from('Apprenant a');
        $this->db->join('parcours p', 'p.id_apprenant = a.id','inner');
        $this->db->join('action act', 'p.id_action = act.id','inner');
        $this->db->join('session s', 's.id_apprenant = a.id','inner');
        $q = $this->db->get();
       
        return $q->result();
     
    }
    public function ajouter($data){

    	$this->db->insert('parcours', $data);
    }

     public function getAll(){
        $this->db->from('parcours p');
        $this->db->join('action act', 'p.id_action = act.id');
        $this->db->join('session s', 'p.id_session = s.id');
        $this->db->join('Apprenant a', 's.id_apprenant = a.id');
        $q = $this->db->get(); 
        return $q->result();
     }
}
