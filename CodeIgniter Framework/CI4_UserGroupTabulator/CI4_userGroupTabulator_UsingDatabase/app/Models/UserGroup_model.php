<?php namespace App\Models;

use CodeIgniter\Model;

class UserGroup_model extends Model{

    protected $table = "usergroup";
    protected $allowedFields = ['group_name', 'created_by'];

    public function model_getUserGroup(){
        return $this->findAll();
    }

    public function model_editUserGroup($sn, $data){
        return $this->db->table($this->table)->update($data, array('sn'=>$sn));
    }

}


?>