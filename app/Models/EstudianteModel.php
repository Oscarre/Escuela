<?php namespace App\Models;

use CodeIgniter\Model;

class EstudianteModel extends Model
{
    protected $table          = 'estudiante';
    protected $primarykey     ='id';

    protected $returnType     ='array';
    protected $allowedFields  =['nombre', 'apellido', 'dui', 'genero', 'carnet','grado_id'];

    protected $userTimestamps   =true;
    protected $createdFields    ='created_at';
    protected $updatedFields    ='updated_at';
    protected $foreignkey     ='grado_id';

    protected $validationRules  = [
   'nombre' => 'required|alpha_space|min_length[3]|max_length[75]',
   'apellido' => 'required|alpha_space|min_length[3]|max_length[75]',
   'dui' => 'required|alpha_space|min_length[3]|max_length[10]',
   'genero' => 'required|alpha_numeric_space|min_length[1]|max_length[1]',
   'carnet' => 'required|alpha_numeric_space|min_length[9]|max_length[9]',
   'grado_id' => 'required|alpha_numeric_space|min_length[11]|max_length[11]',


    ];

    protected $sipValidation = false;

}