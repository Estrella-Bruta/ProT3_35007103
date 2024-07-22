<?php 
namespace app\Controllers;
Use app\Models\usuario_Model;
use CodeIgniter\Controller;

class usuario_controllers extends Controller{

    public function __construct(){
        helper(['form', 'url']);
    }

    public function create() {
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
            'email' => 'required|min_length[4] |max_length[100] |valid_email|is_unique[usuarios.mail]',
            'password' => 'required|min_length[3] |max_length[10]',
            'confirmar' => 'required|min_length[3] |max_length[10]'
        ],);
    
        $formModel = new usuario_Model();

        if (!$input) {
            $data['titulo'] ='registro';
            echo view('front/head_view', $data);
            echo view('front/nav_view');
            echo view('Back/usuario/registro', ['validation' => $this->validator]);
            echo view('front/footer_view');

        } else {
            $formModel->save([
                'nombre' => $this->request->getVar('nombre'),
                'apellido' => $this->request->getVar('apellido'),
                'usuario' => $this->request->getVar('usuario'),
                'email' => $this->request->getVar('email'),
                'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
            ]);

            session()->setFlashdata('success', 'usuario registrado con exito');
            return $this->response->redirect('/login');
        }
    }
}