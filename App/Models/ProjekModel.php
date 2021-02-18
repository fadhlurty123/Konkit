<?php
namespace App\Models;
use CodeIgniter\Model;
class ProjekModel extends Model
{
    protected $table = 'project_1';
    
    public function getprofil($id = false)
    {
        if ($id === false){
            return $this->findAll();
        } else {
            return $this->getWhere(['project_id' => $id]);
        }
    }
    public function saveprofil($data)
    {
        $query = $this->db->table($this->table)->insert($data);
        return $query;
    }
    public function updateprofil($data,$id)
    {
        $query = $this->db->table($this->table)->update($data, array('project_id'=>$id));
        return $query;
    }
    public function deleteprofil($id)
    {
        $query = $this->db->table($this->table)->delete(array('project_id' => $id));
        return $query;
    }
}