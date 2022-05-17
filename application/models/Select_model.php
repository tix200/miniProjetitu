<?php  
 class Select_model extends CI_Model  
 {  
      
   function findAllContenue()  
      {     
           return $query = $this->db->get_where('contenue', array('suprimer' => 0));
      }  

 }  