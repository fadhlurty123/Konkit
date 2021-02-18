<?php
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\ProjekModel;

class Projek extends Controller
{
    public function index()
    {
        $model = new ProjekModel();
        $data['project_1'] = $model->getprofil();
        echo view('Projek-view', $data);
    }
    public function index2()
    {
        $model = new ProjekModel();
        $data['project_1'] = $model->getprofil();
        echo view('Projek-view-client', $data);
    }
    
    public function add_new()
    {
        echo view('add-data-projek');
    }

    public function save()
    {
        $model = new ProjekModel();
        $data = array(
            'nama_client' => $this->request->getPost('nama_client'),
            'nama_project' => $this->request->getPost('nama_project'), 
            'deskripsi_project' => $this->request->getPost('deskripsi_project'),
            'harga' => $this->request->getPost('harga'),
            'jangka_waktu' => $this->request->getPost('jangka_waktu'),
        );
        $model->saveprofil($data);
        return redirect()->to('/projek');
    }
    public function edit($id) {
        $model = new ProjekModel();
        $data['project_1'] = $model->getprofil($id)->getRow();
        echo view('edit-data-projek', $data);
    }
    public function update()
        {
            $model = new ProjekModel();
            $id = $this->request->getPost('project_id');
            $data = array(
                'nama_client' => $this->request->getPost('nama_client'),
                'nama_project' => $this->request->getPost('nama_project'), 
                'deskripsi_project' => $this->request->getPost('deskripsi_project'),
                'harga' => $this->request->getPost('harga'),
                'jangka_waktu' => $this->request->getPost('jangka_waktu'),
            );
            $model->updateprofil($data,$id);
            return redirect()->to('/projek');
        }
        
        public function delete($id)
    {
        $model = new ProjekModel();
        $model->deleteprofil($id);
        return redirect()->to('/projek');
    }
}