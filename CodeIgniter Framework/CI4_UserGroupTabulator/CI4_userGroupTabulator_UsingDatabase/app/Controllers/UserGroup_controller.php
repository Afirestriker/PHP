<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserGroup_model;

class UserGroup_controller extends Controller{


    public function index(){
         $model = new UserGroup_model();

        $data["userGroups"] = $model->model_getUserGroup();
        echo view("userGroup", $data);
    }

    public function addUserGroup(){

        $model = new UserGroup_model();
        
        $userGroupData = array();
        
        $userGroupData["group_name"] = $this->request->getGet('groupName');
        $userGroupData["created_by"] = "CreatedBy_Name";
        
        // print_r($userGroupData);
        
        $model->save($userGroupData);

        return redirect()->to('UserGroup_controller/');
    }

    public function editUserGroup(){
        $model = new UserGroup_model();

        $userGroupData = array();

        $sn = $this->request->getGet('sn');
        $userGroupData["group_name"] = $this->request->getGet('groupName');

        $model->model_editUserGroup($sn, $userGroupData);

        return redirect()->to('UserGroup_controller/');
    }

} 

?>