<?php namespace App\Models;

use CodeIgniter\Model;

class ProfesorModel extends Model
{
    protected $table          = 'profesor';
    protected $primarykey     ='id';

    protected $returnType     ='array';
    protected $allowedFields  =['nombre', 'apellido', 'profesion', 'telefono', 'dui'];

    protected $userTimestamps   =true;
    protected $createdFields    ='created_at';
    protected $updatedFields    ='updated_at';
    

    protected $validationRules  = [
   'nombre' => 'required|alpha_space|min_length[3]|max_length[75]',
   'apellido' => 'required|alpha_space|min_length[3]|max_length[75]',
   'profesion' => 'required|alpha_space|min_length[3]|max_length[75]',
   'telefono' => 'required|alpha_numeric_space|min_length[9]|max_length[9]',
   'dui' => 'required|alpha_numeric_space|min_length[10]|max_length[10]',

    ];

    protected $sipValidation = false;

}