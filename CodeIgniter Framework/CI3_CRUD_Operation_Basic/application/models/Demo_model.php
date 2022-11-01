<?php 
//'user' is a database name

class Demo_model extends CI_model{

    public function insert($formData){
        $this->db->insert('user', $formData);
    }

    public function read(){
        return $users = $this->db->get('user')->result_array();
    }
}

?>