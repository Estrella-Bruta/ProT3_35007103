<?php
namespace App\Models;

use CodeIgniter\Model;
use CodeIgniter\Models;

class usuario_Model extends Model
{
    protected $table = 'usuarios';
    protected $primarykey = 'id_usuario';
    protected $allowedFields = ['nombre','apellido', 'usuario', 'email', 'password', 'perfil_id','baja', 'created_at'];
}