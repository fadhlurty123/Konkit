<?php
namespace App\Models;
use CodeIgniter\Model;
class ProjectModel extends Model
{
    protected $table = 'project';
    
    public function getproject($id = false)
    {
        if ($id === false){
            return $this->findAll();
        } else {
            return $this->getWhere(['id' => $id]);
        }
    }
    public function saveproject($data)
    {
        $query = $this->db->table($this->table)->insert($data);
        return $query;
    }
    public function updateproject($data,$id)
    {
        $query = $this->db->table($this->table)->update($data, array('id'=>$id));
        return $query;
    }
    public function deleteproject($id)
    {
        $query = $this->db->table($this->table)->delete(array('id' => $id));
        return $query;
    }
}