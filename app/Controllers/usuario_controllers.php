<?php 
namespace app\Controllers;
Use app\Models\usuario_Model;
use CodeIgniter\Controller;

class usuario_controllers extends BaseController
{

    public function create()
    {
        helper(['form', 'url']);
    
        $data['titulo']='registro';
        echo view('front/head_view',$data);
        echo view('front/nav_view');
        echo view('Back/usuario/registro');
        echo view('front/footer_view');
    }

    public function formValidation() {
        $input = $this->validate([
            'nombre' => 'required|min_length[3]',
            'apellido' => 'required|min_length[3] |max_length[25]',
            'usuario' => 'required|min_length[3]',
            'email' => 'required|valid_email',
            'password' => 'required|min_length[7]',
            'confirmar' => 'required|min_length[7]'
        ]);

        if (!$input) {
            $data['titulo'] ='registro';
            echo view('front/head_view', $data);
            echo view('front/navbar_view');
            echo view('Back/usuario/registro', ['validation' => $this->validator]);
            echo view('front/footer_view');

        } else {
            $model = new usuario_Model();
            $data = [
                'nombre' => $this->request->getVar('nombre'),
                'apellido' => $this->request->getVar('apellido'),
                'usuario' => $this->request->getVar('usuario'),
                'email' => $this->request->getVar('email'),
                'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
            ];
            
            $model->save($data);
            session()->setFlashdata('msg', 'usuario registrado con exito');
            return redirect()->to('/login');
        }
    }
}