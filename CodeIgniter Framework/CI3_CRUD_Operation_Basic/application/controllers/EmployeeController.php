<?php

    class EmployeeController extends CI_controller{
       public function index(){
            $this->load->model('Demo_model');

            $users = $this->Demo_model->read();

            $data = array();
            $data['users'] = $users;

            $this->load->view('demo', $data);
        }

        public function read(){
            $this->load->model('Demo_model');

            $users = $this->Demo_model->read();

            $data = array();
            $data['users'] = $users;

            $this->load->view('view_user', $data);
        }

        public function create(){
            $this->load->view('demo');
        }

        public function insert(){
            //form_validation
            $this->load->model('Demo_model');

            $formArray = array();

            $formArray['sr_no'] = $this->input->post('srno');
            $formArray['name'] = $this->input->post('firstname');
            $formArray['surname'] = $this->input->post('lastname');
            $formArray['email'] = $this->input->post('email');
            $formArray['mobile_no'] = $this->input->post('mobile');

            $this->Demo_model->insert($formArray);
            
            redirect(base_url(). "EmployeeController/index");
        }

    }

?>