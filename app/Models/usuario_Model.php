<?php
namespace App\Models;

use CodeIgniter\Model;

class usuario_Model extends Model
{
    protected $table = 'usuarios';
    protected $primarykey = 'id_usuario';
    protected $allowedFields = ['nombre','apellido', 'usuario', 'email', 'password', 'confirmar', 'perfil_id','baja', 'created_at'];
}