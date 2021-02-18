<?php
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\ProfilClientModel;

class ProfilClient extends Controller
{
    public function index()
    {
        $model = new ProfilClientModel();
        $data['profilclient'] = $model->getprofil();
        echo view('profile-client', $data);
    }
    
    public function add_new()
    {
        echo view('add-data-client');
    }

    public function save()
    {
        $model = new ProfilClientModel();
        $data = array(
            'name' => $this->request->getPost('name'),
            'email' => $this->request->getPost('email'), 
            'gender' => $this->request->getPost('gender'),
            'credit_card' => $this->request->getPost('credit_card'),
            'credit_number' => $this->request->getPost('credit_number'),
        );
        $model->saveprofil($data);
        return redirect()->to('/profileclient');
    }
    public function edit($id) {
        $model = new ProfilClientModel();
        $data['profilclient'] = $model->getprofil($id)->getRow();
        echo view('edit-data-client', $data);
    }
    public function update()
        {
            $model = new ProfilClientModel();
            $id = $this->request->getPost('id');
            $data = array(
                'name' => $this->request->getPost('name'),
                'email' => $this->request->getPost('email'), 
                'gender' => $this->request->getPost('gender'),
                'credit_card' => $this->request->getPost('credit_card'),
                'credit_number' => $this->request->getPost('credit_number'),
            );
            $model->updateprofil($data,$id);
            return redirect()->to('/profileclient');
        }
        
        public function delete($id)
    {
        $model = new ProfilClientModel();
        $model->deleteprofil($id);
        return redirect()->to('/profileclient');
    }
}