<?php
namespace App\Controllers;
use App\Models\ProjectModel;

class Dashboard extends BaseController{
    public function index(){
        $model = new ProjectModel();
        $data['project'] = $model->getproject();
        return view('dashboard-freelancer', $data);
        echo view('dashboard-freelancer', $data);
    }
}