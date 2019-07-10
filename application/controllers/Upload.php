<?php
  
   class Upload extends CI_Controller {
	
      public function __construct() { 
         parent::__construct(); 
         $this->load->helper(array('form', 'url')); 
      }
		
      public function index() { 
         $this->load->view('enseignant/uploadfile', array('error' => ' ' )); 
      } 
		
      public function do_upload() { 
         $config['upload_path']   = './uploads/'; 
         $config['allowed_types'] = 'csv';
         $config['max_size']      = 1000; 
         $config['max_width']     = 1024; 
         $config['max_height']    = 768;  
         $this->load->library('upload', $config);
			   $this->load->model('Mapprenant');
         $this->load->model('Mcours');
         $this->load->model('Maction');
         $this->load->model('Msession');
         $this->load->model('Muser');
         $this->load->model('Mparcours');
         if ( ! $this->upload->do_upload('userfile')) {
            $error = array('error' => $this->upload->display_errors()); 
            $this->load->view('enseignant/uploadfile', $error); 
         }
			
         else { 

            $data = array('upload_data' => $this->upload->data()); 
             if(is_uploaded_file($_FILES['userfile']['tmp_name'])){
               
               //open uploaded csv file with read only mode
               $csvFile = fopen($_FILES['userfile']['tmp_name'], 'r');
               
               // skip first line
               // if your csv file have no heading, just comment the next line
               $csvcontent=fgetcsv($csvFile);
               // var_dump($csvcontent);
               //parse data from csv file line by line
               while(! feof($csvFile)){
                     $ar=fgetcsv($csvFile);   
                     $cours = array('titre' => $ar[0] );
                     $apprenant= array('nom' => $ar[5] ,
                                         'prenom'=> $ar[4]  );
                     $session = array('date' => $ar[1],'heure'=>$ar[2],'ip'=>$ar[3] );
                     $ressource = array('heure'=>$ar[2],'ressource'=>$ar[7] ); 
                     // creation de cours 
                    if(!$this->Mcours->exist($ar[0] )){
                     
                        if($ar[0]!=null)
                     
                         $this->Mcours->ajouter($cours );
                     }

                     // Création des apprennants 

                    if(!$this->Mapprenant->exist($apprenant['nom'],$apprenant['prenom'])){
                        //create User
                        $user = array('pseudo' => $ar[5] ,
                            'password'=> $ar[4],
                            'type'=>0);
                        // user_id = Id du dernier utilisateur inséré 
                        $user_id = $this->Muser->ajouter($user);
                         $apprenant= array('nom' => $ar[5] ,
                                         'prenom'=> $ar[4],
                                         'user_id'=>$user_id  );
                        
                        $this->Mapprenant->ajouter($apprenant );
                     }
                     // echo print_r($ar); // print the array 
                     // echo "<br>";
                     $action = array('nomAction' => $ar[6] );
                  // Creation Des Action   
                     if(!$this->Maction->exist($action['nomAction'])){
                     
                          $this->Maction->create($action);
                     
                           echo print_r($action); // print the array 
                     echo "<br>";
                        
                     }
                     //creation des sessions 
                     //1- get Apprennant 
                     $r= $this->Mapprenant->getIDApp($apprenant['nom'],$apprenant['prenom']);
                      if($r!=null){

                    //Création des sessions 
                     if(!$this->Msession->exist($session['ip'],$session['date'],$r[0]->id)){
                        $tocreate =
                         array(
                           'ip' => $session['ip'],
                            'date'=>$session['date'],
                           
                           'id_apprenant'=>$r[0]->id);
                  
                         $this->Msession->create($tocreate);
                    }
                    $act = $this->Maction->get($ar[6]);
                    $s =  $this->Msession->getID($session['ip'],$session['date'],$r[0]->id);
                    if($s !=null && $r!=null&& $act!=null){
                  
                        if (!$this->Mparcours->exist($ressource['ressource'],$ressource['heure'],$s[0]->id,$act[0]->id,$r[0]->id)){
                              $parcoursToCreate=array(
                                  'id_apprenant'=>$r[0]->id,
                                  'id_session'=>$s[0]->id,
                                  'id_action'=>$act[0]->id,
                                  'ressource'=>$ressource['ressource'],
                                  'heure' =>$ressource['heure']
                                );
                               echo print_r($parcoursToCreate); // print the array 
                              echo "<br>";
                              $this->Mparcours->ajouter($parcoursToCreate);

                        }
                      }
                  }

               }
               
               // while(!feof($csvFile)){
               //    $ar=fgetcsv($csvFile);   

               //       $cours = array('titre' => $ar[0] );

               //       $apprenant= array('nom' => $ar[5] ,
               //                           'prenom'=> $ar[4]  );
               //       $session = array('date' => $ar[1],'heure'=>$ar[2],'ip'=>$ar[3] );

               //    $r= $this->Mapprenant->getIDApp($apprenant['nom'],$apprenant['prenom']);
                    
                     

            
                 
               //     $act = $this->Maction->get($ar[6]);
               //     $s =  $this->Msession->getID($session['ip'],$session['date'],$r[0]->id);
               //    var_dump($s);
               //     if($s !=null && $r!=null&& $act!=null){
               //      echo($ressource);
               //      echo($s[0]->id);
               //      echo($act[0]->id);
               //      echo($r[0]->id);
               //      if (!$this->Mparcours->exist($ressource,$s[0]->id,$act[0]->id,$r[0]->id)){
               //        $parcoursToCreate=array(
               //            'id_apprenant'=>$r[0]->id,
               //            'id_session'=>$s[0]->id,
               //             'id_action'=>$act[0]->id,
               //             'ressource'=>$ressource
               //             );
               //          echo print_r($parcoursToCreate); // print the array 
               //       echo "<br>";
               //        $this->Mparcours->ajouter($parcoursToCreate);
                        
               //      }
               //     }
               // }
               //close opened csv file
               fclose($csvFile);
               $qstring["status"] = 'Success';
           }
            // $this->load->view('upload_success', $data); 
         } 
      } 
   } 
?>