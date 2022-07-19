<?php namespace App\Models;

	use CodeIgniter\Model;

	class EmployeeData_model extends Model{

		protected $table = "employeeSalary";
		protected $allowedFields = ['name', 'salary'];

		/*This function return all employee records*/
		public function getEmployee(){
			return $this->findAll();
		}


		/*Function to update employee with specific id*/
		public function updateEmployee($id, $empData){
			$query = $this->db->table($this->table)->update($empData, array('id' => $id));
			return $query;
		}


		/*Function to delete employee with specific id*/
		public function deleteEmployee($id){
			$query = $this->db->table($this->table)->delete(array('id' => $id));
			return $query;
		}


	}/*Close: Model Class EmployeeData_model*/


?>