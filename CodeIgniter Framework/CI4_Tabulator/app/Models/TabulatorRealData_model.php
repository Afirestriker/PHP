<?php namespace App\Models;

    use CodeIgniter\Model;

    class TabulatorRealData_model extends Model{

        /* NOTE: database configuration is defined in app/config/database.php file
         * database name: tabulatorRealData
        */

        protected $table = "";

        /* Function to fetch dayReport data
        This function do the following task:
         * 1. Initialize the $table variable to the table-name from which we want to fetch the data
         * 2. using findAll() method, fetch all the record from the given table-name and return to the array */
        public function getDayReport(){
            $this->table = "dayReport"; 
            return $this->findAll();
        }

        /* Function to fetch monthReport data */
        public function getMonthReport(){
            $this->table = "monthReport";
            return $this->findAll();
        }

        /* Function to fetch yearReport data */
        public function getYearReport(){
            $this->table = "yearReport";
            return $this->findAll();
        }

        /* Function to fetch dayData Report */
        public function getDayDataReport(){
            $this->table = "dayDataReport";
            return $this->findAll();
        }

    }
    /* Close: Class TabulatorRealdata_model */

?>