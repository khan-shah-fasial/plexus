<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Admin_model extends CI_Model {
	
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


    public function select_career()
    {
            $this->db->select('*');
            $this->db->from('career');
            $this->db->where('c_status','1');
            $query = $this->db->get();
            return $query->result_array();
    }

}