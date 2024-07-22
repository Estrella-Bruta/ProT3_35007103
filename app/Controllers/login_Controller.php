<?php 
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\usuario_Model;

class login_Controller extends BaseController
{
    public function index()
        {
            helper(['form','url']);

            $dato['titulo']='login';
            echo view('front/head_view',$dato);
            echo view('front/nabar_view');
            echo view('Back/usuario/login');
            echo view('font/catalogo');
            echo view('front/footer_view');
        }
    
    public function auth()
    {
        $session = session();
        $model = new usuario_Model();

//traemos los datos del formulario
$email = $this->request->getVar('email');
$password = $this->request->getVar('password');

$data = $model->where('email', $email)->first();
if($data){
    $password = $data['password'];
    $baja= $data['baja'];
    if ($baja == 'SI'){
        $session->setFlashdata('msg', 'usuario dado de baja');
        return redirect()->to('/login_Controller');
    }
//Se verifican los datos ingresados para iniciar, si cumple con la verificacion inicia la sesion
$verify_password = password_verify ($password, $password);
//password_verify determina los requisitos de configuracion de la contraseña
if($verify_password){
    $ses_data =[
        'id_usuario'=>$data['id_usuario'],
        'nombre' => $data['nombre'],
        'apellido' => $data['apellido'],
        'usuario' => $data['usuario'],
        'email' => $data['email'],
        'password' => $data['password'],
        'perfil_id' => $data['perfil_id'],
        'logged_in' => TRUE

        ];
//Se cumple la verificacion inicia la Sesion
$session->set($ses_data);

session()->setFlashdata('msg', 'Bienvenido!!');
return redirect()->to('/panel');
//return redirect()->to('/prueba');//pagina principal_ultimo
}
else{
    //no pasola validacion de la password
    $session->setFlashdata('msg', 'Password Incorrecta');
    return redirect()->to('/login_Controller');
}
}else{
    $session->setFlashdata('msg', 'No existe el Email o es Incorrecto');
    return redirect()->to('/login_Controller');
}

}

public function logout()
{
    $session = session();
    $session->detroy();
    return redirect()->to('/');
}

}