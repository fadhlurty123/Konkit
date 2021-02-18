<?php
namespace App\Validation;
use App\Models\FreelancerModel;
class FreelancerRules{
    public function validateUser(string $str, string $fields, array $data){
        $model = new FreelancerModel();
        $user = $model->where('email', $data['email'])
                      ->first();
        if(!$user)
            return false;
        return password_verify($data['password'], $user['password']);
    }
    
}