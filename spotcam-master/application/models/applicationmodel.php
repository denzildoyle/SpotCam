<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class ApplicationModel extends CI_Model{


    public function __construct(){
        parent::__construct();
    }

    function insertEmail($data){
        return $this->db->insert('emails', $data);
    }
}	