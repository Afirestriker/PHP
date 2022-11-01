<?php namespace App\Controllers;

use CodeIgniter\Controller;

Class Hello extends Controller{
	public function index(){

		//PHP Associative array
		$data['title'] = "Hello from CI4";
		
		echo view('hello_view', $data);
	}
}


?>