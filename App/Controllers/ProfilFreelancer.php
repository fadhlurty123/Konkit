<?php
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\ProfilFreelancerModel;

class ProfilFreelancer extends Controller
{
    public function index()
    {
        $model = new ProfilFreelancerModel();
        $data['freelancer'] = $model->getprofil();
        echo view('profile-freelancer', $data);
    }
    
    public function add_new()
    {
        echo view('add-data-freelancer');
    }

    public function save()
    {
        $model = new ProfilFreelancerModel();
        $data = array(
            'name' => $this->request->getPost('name'),
            'email' => $this->request->getPost('email'),
            'skill' => $this->request->getPost('skill'),
            'gender' => $this->request->getPost('gender'),
            'phone_number' => $this->request->getPost('phone_number'),
        );
        $model->saveprofil($data);
        return redirect()->to('/profilefreelancer');
    }
    public function edit($id) {
        $model = new ProfilFreelancerModel();
        $data['freelancer'] = $model->getprofil($id)->getRow();
        echo view('edit-data-freelancer', $data);
    }
    public function update()
        {
            $model = new ProfilFreelancerModel();
            $id = $this->request->getPost('id');
            $data = array(
                'name' => $this->request->getPost('name'),
                'email' => $this->request->getPost('email'),
                'skill' => $this->request->getPost('skill'),
                'gender' => $this->request->getPost('gender'),
                'phone_number' => $this->request->getPost('phone_number'),
            );
            $model->updateprofil($data,$id);
            return redirect()->to('/profilefreelancer');
        }
        
        public function delete($id)
    {
        $model = new ProfilFreelancerModel();
        $model->deleteprofil($id);
        return redirect()->to('/profilefreelancer');
    }
}