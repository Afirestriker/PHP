<?php namespace App\Controllers;

 use CodeIgniter\Controller;
 use App\Models\TabulatorRealData_model;

 class TabulatorBasic_controller extends Controller{
    
    public function index(){
        echo view('TabulatorBasic_view');
    } /* Close: index() */
 
    public function dummyReport(){
        echo view('Tabulator_dummyReport');
    }
    
 }/* Close: class TabulatorBasic_controller */

?>