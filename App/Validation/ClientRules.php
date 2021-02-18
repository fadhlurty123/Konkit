<?php
namespace App\Validation;
use App\Models\ClientModel;
class ClientRules{
    public function validateClient(string $str, string $fields, array $data){
        $model = new ClientModel();
        $Client = $model->where('email', $data['email'])
                      ->first();
        if(!$Client)
            return false;
        return password_verify($data['password'], $Client['password']);
    }
    
}