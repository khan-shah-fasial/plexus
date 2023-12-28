<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Website_model extends CI_Model {
	
    public function __construct(){
        parent::__construct();
    }


    public function getWhere($table,$condition){
    	$record = $this->db->get_where($table,$condition);
    	if($record->num_rows() > 0):
    		return $record->result_array();
    	else:
    		return "no";
    	endif;	
    }


    public function getAllRec($table){
    	$record = $this->db->get($table);
    	if($record->num_rows() > 0):
    		return $record->result_array();
    	else:
    		return "no";
    	endif;	
    }

    
    public function get_country(){
        $query = $this->db->get('product_country');
        return $query->result_array();
    
   }

   public function product_bysubcategories($sub_categoryid)
   {
        $this->db->select('*');
        $this->db->from('product');
        $this->db->where_in('sub-category_id', $sub_categoryid);
       $record = $this->db->get();

        if($record->num_rows() > 0):
            return $record->result_array();
        else:
            return "no";
        endif;  
   }
   public function homeslider()
   {
       $this->db->select('*');
       $this->db->from('homeslider');
       $this->db->where('hs_status','1');
       $this->db->order_by('hs_orderby','asc');
      
       $record = $this->db->get();

       if($record->num_rows() > 0):
           return $record->result_array();
       else:
           return "no";
       endif;     
   }
   public function testimonial()
   {
       $this->db->select('*');
       $this->db->from('testimonials');
       $this->db->where('test_status','1');

      
       $record = $this->db->get();

       if($record->num_rows() > 0):
           return $record->result_array();
       else:
           return "no";
       endif;     
   }
 
}