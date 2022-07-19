<?php namespace App\Controllers;

 use CodeIgniter\Controller;
 use App\Models\TabulatorRealData_model;

 class TabulatorRealData_controller extends Controller{
    
    public function index(){
        echo view('TabulatorBasic_view');
    } /* Close: index() */
 
    /* Plant Day Reports */
    public function realDataReport(){

        $model = new TabulatorRealData_model();

        $data['dayReports'] = $model->getDayReport();

        echo view('Tabulator_realDataReport', $data);
    }

    /* Month Reports */
    public function realMonthReport(){

        $model = new TabulatorRealData_model();

        $data['monthReports'] = $model->getMonthReport();

        echo view('Tabulator_realDataReport', $data);
    }

    /* Year Reports */
    public function realYearReport(){

        $model = new TabulatorRealData_model();

        $data['yearReports'] = $model->getYearReport();

        echo view('Tabulator_realDataReport', $data);
    }

    /* Day-Data Reports */
    public function realDayDataReport(){
        $model = new TabulatorRealData_model();

        $data['dayDataReports'] = $model->getDayDataReport();

        echo view('Tabulator_realDataReport', $data);
    }

 }/* Close: class TabulatorBasic_controller */

?>