<?php 
namespace App\filters;

use CodeIgniter\Autoloader\FileLocatorInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class Auch implements FilterInterface
{
public function before(RequestInterface $request, $arguments =null)
{
//si el usuario no esta logueado
if(!session()->get('logged_in')){
    //entonces redirecciona a la pagina de login 
    return redirect()->to('/login');
}
}

public function after(RequestInterface $request, ResponseInterface $response, $arguments= null)
{
    
}
}
