<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Company_model;

class Company_controller extends Controller{

    public $model;
    

    //constructor
    public function __construct(){
        $model = new Company_model();
    }

    public function index(){
        $model = new Company_model();

        $data['companyData']  = $model->getCompanyData();

        $data['countries'] = [
            "91"    =>     "India",
            "43"    =>     "Autralia",
            "93"    =>     "Afghanistan",
            "32"    =>     "Belgium",
            "975"   =>     "Bhutan",
            "55"    =>     "Brazil",
            "1"     =>     "Canada"
        ];

        // print_r($data);

        return view("CRM/company", $data);
    }

    public function addCompanyData(){

        $model = new Company_model();

        $companyFormData = array();

        if($this->request->getMethod() == "post"){
            $companyFormData['cname'] =         $this->request->getPost('companyName');
            $companyFormData['cemail'] =        $this->request->getPost('companyEmail');
            $companyFormData['cmobile'] =       $this->request->getPost('contactNumber');
            $companyFormData['cGST'] =          $this->request->getPost('GSTNumber');
            $companyFormData['netWorth'] =      $this->request->getPost('netWorth');
            $companyFormData['addr1'] =         $this->request->getPost('addr1');
            $companyFormData['addr2'] =         $this->request->getPost('addr2');
            $companyFormData['city'] =          $this->request->getPost('city');
            $companyFormData['state'] =         $this->request->getPost('state');
            $companyFormData['country_name'] =  $this->request->getPost('country');
            $companyFormData['zip'] =           $this->request->getPost('zip');
        }

        $model->save($companyFormData);

        return redirect()->to(base_url("public/Company_controller"));
    }

    public function editCompanyData(){
        $model = new Company_model();

        $companyFormData = array();

        if($this->request->getMethod() == "post"){
            $companyFormData['serial']          =   $this->request->getPost('company_id');
            $companyFormData['cname']           =   $this->request->getPost('companyName');
            $companyFormData['cemail']          =   $this->request->getPost('companyEmail');
            $companyFormData['cmobile']         =   $this->request->getPost('contactNumber');
            $companyFormData['cGST']            =   $this->request->getPost('GSTNumber');
            $companyFormData['netWorth']        =   $this->request->getPost('netWorth');
            $companyFormData['addr1']           =   $this->request->getPost('addr1');
            $companyFormData['addr2']           =   $this->request->getPost('addr2');
            $companyFormData['city']            =   $this->request->getPost('city');
            $companyFormData['state']           =   $this->request->getPost('state');
            $companyFormData['country_name']    =   $this->request->getPost('country');
            $companyFormData['zip']             =   $this->request->getPost('zip');
        }

        $model->updateCompanyData($companyFormData['serial'], $companyFormData);

        return redirect()->to(base_url("public/Company_controller"));
    }

    public function update_company_status(){
        $model = new Company_model();

        if(isset($_POST)){
            $cId            = ($_POST['cId']);
            $cStatus 		= $_POST['cStatus'];
            
            if(isset($cId)){
                return $model->update_company_status($cId, $cStatus);
            }
        }
        else{
            echo 0;
        }

    }



}

?>