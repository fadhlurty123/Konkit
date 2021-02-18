<?php
namespace App\Controllers;
use App\Models\ProjectModel;

class Dashboard2 extends BaseController{
    public function index(){
        $model = new ProjectModel();
        $data['project'] = $model->getproject();
        return view('dashboard-client', $data);
        echo view('dashboard-client', $data);
    }
}