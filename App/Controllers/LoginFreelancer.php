<?php
namespace App\Controllers;
use App\Models\FreelancerModel;
class LoginFreelancer extends BaseController{
    public function Home(){
        return view('\index');
    }
    public function Tentang(){
        return view('\tentang');
    }
    public function Dana(){
        return view('\penarikan-dana-freelancer');
    }
    public function Mercendise(){
        return view('\Merchandise');
    }
    public function profile(){
        return view('\profile-freelancer');
    }
    public function Invoice(){
        return view('\invoice-client');
    }
public function index(){
$data=[];
helper(['form']);
helper('cookie');
if(get_cookie('email')&& get_cookie('password')){
    $email =get_cookie('email');
    $password = get_cookie('password');
    $model = new FreelancerModel();
    $user = $model->where('email',$email)
        ->first();
    if($password == $user['password'])
        $this->setUserSession($user);
}
if(session()->get('isLoggedIn')){
    return redirect()->to('/dashboard');
}
if($this->request->getMethod() == 'post') {
$rules = [
'email' => 'required|min_length[6]|max_length[50]|valid_email',
'password' => 'required|min_length[6]|max_length[255]|validateUser[email,password]',
];
$errors = [
'password' => [
'validateUser' => 'Email atau Password salah!!'
]
];
if (!$this->validate($rules,$errors)) {
$data['validation'] = $this->validator;
} else {
$model = new FreelancerModel();

$user = $model->where('email', $this->request->getVar('email'))->first();

$this->setUserSession($user);

if (isset($_POST['remember'])){
    setcookie('email', $this->request->getVar('email'), time() + 1000);
    setcookie('password', $user['password'], time() + 1000);
    return redirect()->to('dashboard');
}
return redirect()->to('dashboard');}
}
return view('login-freelancer', $data);
}

private function setUserSession($user) {
$data = [
'email' => $user['email'],
'isLoggedIn' => true,
];
session()->set($data);
return true;
}



public function register() {
$data = [];
helper(['form']);
if($this->request->getMethod() == 'post') {
$rules = [
'email' => 'required|min_length[6]|max_length[50]|valid_email|is_unique[users.email]',
'password' => 'required|min_length[8]|max_length[255]',
'password_confirm' => 'matches[password]',
];
if (!$this->validate($rules)) {
$data['validation'] = $this->validator;
} else {
$model = new FreelancerModel();

$newData = [
'email' => $this->request->getVar('email'),
'password' => $this->request->getVar('password'),
];
$model->save($newData);
$session = session();
$session->setFlashdata('success', 'Registrasi Berhasil');
return redirect()->to('/freelancer');
}
}
return view('register-freelancer', $data);
}



public function logout() {
helper('cookie');
setcookie('email','', time()+1000);
setcookie('password','', time()+1000);
session()->destroy();
return redirect()->to('/freelancer');
}
}
?>