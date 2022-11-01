<?php namespace App\Models;

    use CodeIgniter\Model;

class DataModel extends Model{

    /* Database basic configuration are set on
     * 
     * App > Config > Database.php 
     *
     */
    protected $table = "datatable";
    protected $allowedFields = ['name','email'];

    /* Fetch all data from the database table */
    public function ReadData(){
       return $this->findAll();
    }

    /* Fetch particualr ROW data from database table */
    public function readDataRow($id){
        return $this->where('id', $id)->first();
    }

    /* Make changes in database table for particualr row with given ID */
    public function editData($id, $data){
        $query = $this->db->table($this->table)->update($data, array('id' => $id));
        return $query;
    }

    /* Delete data from table for the particular row with given ID */
    public function deleteData($id){
        $query = $this->db->table($this->table)->delete(array('id' => $id));
        return $query;
    }
}
?>