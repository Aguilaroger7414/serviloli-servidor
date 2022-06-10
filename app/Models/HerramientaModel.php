<?php

namespace App\Models;

use CodeIgniter\Model;

class HerramientaModel extends Model
{
    protected $table = 'herramienta'; //nombre de la tabla en la bd
    protected $primaryKey = 'ID_herramienta'; //nombre de la llave primaria usada en metodos crud
    protected $useAutoIncrement = true;
    protected $returnType = 'object';
    protected $allowedFields = [
        'ID_herramienta', 'nombre_herramienta', 'cantidad', 'marca',
    ];
}
