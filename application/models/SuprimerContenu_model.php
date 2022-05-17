<?php  
 class SuprimerContenu_model extends CI_Model  
 {  
      
   function deleteContenue($id)  
      {  
         $this->db->set('suprimer', 1);
		 $this->db->where('id', $id);
		 $this->db->update('contenue'); 
      }  

 }  