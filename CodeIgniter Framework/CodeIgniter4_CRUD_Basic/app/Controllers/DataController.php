<?php namespace App\Controllers;

    use CodeIgniter\Controller;
    use App\Models\DataModel;

    class DataController extends Controller{
        /* Read data from database and show to user */
        public function index(){
            $Model= new DataModel();
            $data=array();
            $data['data']=$Model->ReadData();
            echo view('Data\read_add_update_data',$data);

        }

        /* fetch data on form submit and store in database */
        public function getdata(){
            $Model= new DataModel();
            $data=array();

            $data['name'] = $this->request->getGet('name');
            $data['email'] = $this->request->getGet('email');

            $Model->save($data);

            return redirect()->to('DataController/');
        }

        /* On Edit click -> get data of that particualr row/id and pass to edit form */
        public function edit($id){
            $Model = new DataModel();
            
            $rowData = $Model->readDataRow($id);

            $data['data'] = $rowData;

            echo view('Data/editDataForm', $data);
        }

        /* On Edit form submit -> fetch data and make changes in database */
        public function editData(){
            $Model = new DataModel();
            
            $id = $this->request->getGet('id');

            $data = array();             
            $data['name'] = $this->request->getGet('name');
            $data['email'] = $this->request->getGet('email');

            $Model->editData($id, $data);

            return redirect()->to('DataController/');
        }

        /* On Delete click -> call this controller functin with particular row ID and delete that row from database */
        public function delete($id){
            $Model = new DataModel();
            $Model->deleteData($id);

            return redirect()->to('DataController/');
        }

    }
?>