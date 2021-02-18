<?php
namespace App\Models;
use CodeIgniter\Model;
class ProfilClientModel extends Model
{
    protected $table = 'profilclient';
    
    public function getprofil($id = false)
    {
        if ($id === false){
            return $this->findAll();
        } else {
            return $this->getWhere(['id' => $id]);
        }
    }
    public function saveprofil($data)
    {
        $query = $this->db->table($this->table)->insert($data);
        return $query;
    }
    public function updateprofil($data,$id)
    {
        $query = $this->db->table($this->table)->update($data, array('id'=>$id));
        return $query;
    }
    public function deleteprofil($id)
    {
        $query = $this->db->table($this->table)->delete(array('id' => $id));
        return $query;
    }
}