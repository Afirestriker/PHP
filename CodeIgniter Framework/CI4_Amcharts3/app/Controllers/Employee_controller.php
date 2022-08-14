<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\EmployeeData_model;

class Employee_controller extends Controller
{

	public function index()
	{

		$model = new EmployeeData_model();
		$data['employee'] = $model->getEmployee();

		echo view('Employee_view.php', $data);
	}/*Close: index()*/


	/*Function to add Employee data to database on form submit*/
	public function addEmployee()
	{

		$model = new EmployeeData_model();

		$empData = array();
		if ($this->request->getMethod() == "get") {
			/*Note: at left its database column name | and at right side its form fields name, from which data is fetched*/
			$empData['name'] = $this->request->getGet('name');
			$empData['salary'] = $this->request->getGet('salary');
		}

		$model->save($empData);

		return redirect()->route('Employee_controller');
	}/*Close: addEmployee()*/


	/*Function to edit employee details*/
	public function editEmployee()
	{

		$model = new EmployeeData_model();

		$id = $this->request->getGet('id');

		$empData = array();
		$empData['name'] = $this->request->getGet('name');
		$empData['salary'] = $this->request->getGet('salary');

		$model->updateEmployee($id, $empData);

		return redirect()->to('Employee_controller/');
	}/*Close: editEmployee()*/


	/*Function to delete employee with id passed in parameter*/
	public function deleteAction($id)
	{

		$model = new EmployeeData_model();
		$model->deleteEmployee($id);

		return redirect()->route('Employee_controller');
	}/*close: deleteAction()*/


	//edit()
	//editAction($id)

}/*Close: class AmchartsThreeCustom*/
