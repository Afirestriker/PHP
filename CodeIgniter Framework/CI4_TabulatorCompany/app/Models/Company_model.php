<?php namespace App\Models;

use CodeIgniter\Model;

class Company_model extends Model{

    protected $table = "companyReport";
    protected $allowedFields = ['cname','cemail', 'cmobile', 'cGST', 'netWorth', 'addr1', 'addr2', 'city', 'state', 'country_name', 'zip' ];

    public function getCompanyData(){
        return $this->findAll();
    }

    public function updateCompanyData($cid, $companyFormData){
        $query  = $this->db->table($this->table)->update($companyFormData, array('serial' => $cid));
        return $query;
    }

    public function update_company_status($cId, $cStatus){

        $updateStatus = array("active" => $cStatus);

        $query = $this->db->table($this->table)->update($updateStatus, array('serial' => $cId));

        return "1";
    }
}

?>