<?php
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\ProjectModel;

class Project extends Controller
{
    public function index()
    {
        $model = new ProjectModel();
        $data['project'] = $model->getproject();
        echo view('profile-client', $data);
    }
    
    public function add_new()
    {
        echo view('add-project');
    }

    public function save()
    {
        $model = new ProjectModel();
        $data = array(
            'client' => $this->request->getPost('client'),
            'email' => $this->request->getPost('email'), 
            'prioritas' => $this->request->getPost('prioritas'),
            'proyek' => $this->request->getPost('proyek'),
            'status' => $this->request->getPost('status'),
            'Harga' => $this->request->getPost('Harga'),
        );
        $model->saveproject($data);
        return redirect()->to('/dashboard2');
    }
    public function edit($id) {
        $model = new ProjectModel();
        $data['project'] = $model->getproject($id)->getRow();
        echo view('edit-project', $data);
    }
    public function update()
        {
            $model = new ProjectModel();
            $id = $this->request->getPost('id');
            $data = array(
                'client' => $this->request->getPost('client'),
                'email' => $this->request->getPost('email'), 
                'prioritas' => $this->request->getPost('prioritas'),
                'proyek' => $this->request->getPost('proyek'),
                'status' => $this->request->getPost('status'),
                'Harga' => $this->request->getPost('Harga'),
            );
            $model->updateproject($data,$id);
            return redirect()->to('/dashboard');
        }
        
        public function delete($id)
    {
        $model = new ProjectModel();
        $model->deleteproject($id);
        return redirect()->to('/profileclient');
    }
}