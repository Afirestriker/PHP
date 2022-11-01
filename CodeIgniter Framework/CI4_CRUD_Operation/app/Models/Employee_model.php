<?php namespace App\Models;

	use CodeIgniter\Model;

	class Employee_model extends Model
	{
		public $table = "employee";
		protected $allowedFields = ['firstname', 'lastname', 'date', 'gender', 'email', 'mobile'];

		/*
		 * using PHP function with default parameter
		 * this function combine two query task:
		 	1. fetch all data
		 	2. fetch data where emp_id = ?

		 * working:
		 	- this function is called from Employee.php controller
		  	- when calling this function, if parameter is not specified it will set default value i.e $id=false and based on condition, fetch all value from employee table.
		  	- else, if $id=X then it will run else block and fetch only data with specific emp_id.
		*/
		public function getEmployee($id = false)
		{
			if($id === false){
				//return $this->findAll();
				return $this->orderBy('emp_id','DESC')->findAll();
			}
			else
			{	
				return $this->where('emp_id', $id)->first();	//Method 1
				//return $this->getWhere(['emp_id' => $id]);	//Method 2 (Didn't work)
			}

		}//getEmployee() close


		public function updateEmployee($emp_id, $data){
			$query = $this->db->table($this->table)->update($data, array('emp_id' => $emp_id) );
			return $query;
		}//updateEmployee() close


		public function deleteEmployee($emp_id){
			
			$query = $this->db->table($this->table)->delete(array('emp_id' => $emp_id) );
			return $query;

		}//deleteEmployee() close
	
	} //class close 

?>