<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Email_model extends CI_Model {
	
    public function __construct(){
        parent::__construct();
    }

        
    public function getWhere($table,$condition){
        $record = $this->db->get_where($table,$condition);
        if($record->num_rows() > 0):
            return $record->result();
        else:
            return "no";
        endif;  
    }
    
    public function getAllRec($table){
        $record = $this->db->get($table);
        if($record->num_rows() > 0):
            return $record->result();
        else:
            return "no";
        endif;  
    }
}
?>