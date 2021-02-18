<?php
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\TarikDanaModel;

class TarikDana extends Controller
{
    public function index()
    {
        $model = new TarikDanaModel();
        $data['tarik_dana'] = $model->getprofil();
        echo view('dana-view', $data);
    }

    public function index2()
    {
        $model = new TarikDanaModel();
        $data['tarik_dana'] = $model->getprofil();
        echo view('dana-view-client', $data);
    }
    public function add_new()
    {
        echo view('add-dana');
    }

    public function save()
    {
        $model = new TarikDanaModel();
        $data = array(
            'deskripsi' => $this->request->getPost('deskripsi'),
            'harga' => $this->request->getPost('harga'), 
        );
        $model->saveprofil($data);
        return redirect()->to('/projectclient');
    }
    public function edit($id) {
        $model = new TarikDanaModel();
        $data['tarik_dana'] = $model->getprofil($id)->getRow();
        echo view('edit-data-projek', $data);
    }
    public function update()
        {
            $model = new TarikDanaModel();
            $id = $this->request->getPost('id');
            $data = array(
                'deskripsi' => $this->request->getPost('deskripsi'),
                'harga' => $this->request->getPost('harga'), 
            );
            $model->updateprofil($data,$id);
            return redirect()->to('/projek');
        }
        
        public function delete($id)
    {
        $model = new TarikDanaModel();
        $model->deleteprofil($id);
        return redirect()->to('/projek');
    }
}