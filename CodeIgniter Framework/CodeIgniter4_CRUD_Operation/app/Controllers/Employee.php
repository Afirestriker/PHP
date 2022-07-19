<?php  namespace App\Controllers;

	use CodeIgniter\Controller;
	use App\Models\Employee_model;

	class Employee extends BaseController
	{
		public function index()
		{
			echo "Website Home Page";
		}
		//index() close

		public function view()
		{
			$model = new Employee_model();
			$data['employee'] = $model->getEmployee();
			echo view('emp_crud', $data);
		}
		//view() close

		/* Function to take data submitted using HTML form
		   and inserting the data into database
		 */
		public function addAction()
		{
			$model = new Employee_model();

			$empFormData = array();
			if($this->request->getMethod() == 'get'){
				echo "Form submitted using get method <br> ";
				$empFormData['firstname'] = $this->request->getGet('firstname');
				$empFormData['lastname'] = $this->request->getGet('lastname'); 
				$empFormData['date'] = $this->request->getGet('date'); 
				$empFormData['gender'] = $this->request->getGet('gender'); 
				$empFormData['email'] = $this->request->getGet('email'); 
				$empFormData['mobile'] = $this->request->getGet('mobile'); 
			}

			$model->save($empFormData);
			
			return redirect()->to('Employee/view');
		}//addAction() close

		public function edit($emp_id)
		{
			$model = new Employee_model();
			$empOne = $model->getEmployee($emp_id);
			if(empty($empOne))
			{
				echo "No record found for #".$emp_id;
			}
			else{
				$data['employee'] = $empOne;
				echo view('emp_edit', $data);
			}
		}//edit() close

		public function editAction(){
			$model = new Employee_model();

			$id=null;
			$empData = array();
			if($this->request->getMethod() == 'get'){
				$id = $this->request->getGet('empId');
				$empData['firstname'] = $this->request->getGet('firstname');
				$empData['lastname'] = $this->request->getGet('lastname'); 
				$empData['date'] = $this->request->getGet('date'); 
				$empData['gender'] = $this->request->getGet('gender'); 
				$empData['email'] = $this->request->getGet('email'); 
				$empData['mobile'] = $this->request->getGet('mobile'); 
			}

			//$model->update($id, $empData);		//Method 1
			$model->updateEmployee($id, $empData);	//Method 2

			return redirect()->to('Employee/view');

		}//editAction() close

		public function deleteAction($emp_id){
			$model = new Employee_model();
			$model->deleteEmployee($emp_id);
			return redirect()->to('Employee/view');
		}//deleteAction() close

	} //class close

?>