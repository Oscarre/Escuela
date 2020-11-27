<?php namespace App\Models;

use CodeIgniter\Model;

class GradoModel extends Model
{
    protected $table          = 'grado';
    protected $primarykey     ='id';

    protected $returnType     ='array';
    protected $allowedFields  =['grado', 'seccion','profesor_id'];

    protected $userTimestamps   =true;
    protected $createdFields    ='created_at';
    protected $updatedFields    ='updated_at';
    
    protected $foreignkey     ='profesor_id';

    protected $validationRules  = [
   'grado' => 'required|alpha_space|min_length[3]|max_length[60]',
   'seccion' => 'required|alpha_space|min_length[2]|max_length[2]',
   'profesor_id' => 'required|alpha_numeric_space|min_length[11]|max_length[11]',

    ];

    protected $sipValidation = false;

}