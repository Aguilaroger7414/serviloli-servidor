<?php

namespace App\Models;

use CodeIgniter\Model;

class PrestamoModel extends Model
{
    protected $table            = 'prestamo'; // nombre tabla en la bd
    protected $primaryKey       = 'id_prestamo'; // nombre llave primaria de la tabla, usado en todos los métodos del crud
    protected $useAutoIncrement = true; // si la llave primaria es auto incremental
    protected $returnType       = 'object'; // (opcional, por defecto usa array) tipo de datos que retornara el modelo
    protected $allowedFields    =
    [
        'fechasolicitud',
        'cantidad',
        'ID_herramienta',
        'estado',
        'fecha_aprob',
        'id_empleado',
    ]; // (obligatorio) campos de tabla que ingresaremos mediante el formulario
    protected $useTimestamps = true;
    protected $createdField = 'fechasolicitud';
    protected $updatedField = false;
}
