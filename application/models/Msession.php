<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Msession extends CI_Model
{

	public function __construct()
	{
    	parent::__construct(); // construct the Model class
  	}
	 public function exist($ip,$date,$idapprenant)
    {
        
        $this->db->where('id_apprenant',$idapprenant);
        $this->db->where('ip',$ip);//` `date``heure
        $this->db->where('date',$date);//` `date``heure
        // $this->db->where('heure',$heure);//` `date``heure
        $q = $this->db->get("session");
        if ($q->num_rows() > 0) {
            
            return TRUE;
        }
        return FALSE;
    }

    public function create ($data){

    	$this->db->insert('session', $data);
    }

    public function getID($ip,$date,$idapprenant){

        
        $this->db->where('id_apprenant',$idapprenant);
        $this->db->where('ip',$ip);//` `date``heure
        $this->db->where('date',$date);//` `date``heure
        $q = $this->db->get("session");
     
        
       return $q->result();
     }

      public function getAll(){
        $this->db->from('session s');
        $this->db->join('Apprenant a', 's.id_apprenant = a.id');
        $q = $this->db->get(); 
        return $q->result();
     }

}
