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
   'carnet' => 'required|alpha_numeric_space|min_length[9]|max_length[9]|regex_match[^\\u\\d{8}$]',
   'grado_id' => 'required|alpha_numeric_space|min_length[11]|max_length[11]is_valid_grado',


    ];

  
        protected $validationMessages = [

         'nombre' => [
'required'                =>'conplementar campo Nombre',
'alpha_space'             =>'no se permiten numeros',
'min_length[3]'           =>'minimo 3 caracteres',
'max_length[75]'          =>'maximo 75 caracteres'
         ],
         
         'apellido' => [
            'required'                =>'conplementar campo Nombre',
            'alpha_space'             =>'no se permiten numeros',
            'min_length[3]'           =>'minimo 3 caracteres',
            'max_length[75]'          =>'maximo 75 caracteres'
                     ],

                     
         'dui' => [
            'required'                =>'conplementar campo Nombre',
            'alpha_space'             =>'no se permiten numeros',
            'min_length[3]'           =>'minimo 3 caracteres',
            'max_length[10]'          =>'maximo 10 caracteres'
                     ],

                     
         'genero' => [
            'required'                =>'conplementar campo Nombre',
            'alpha_space'             =>'no se permiten numeros',
            'min_length[1]'           =>'minimo 1 caracteres',
            'max_length[1]'          =>'maximo 1 caracteres'
                     ],

                     
         'carnet' => [
            'required'                =>'conplementar campo Nombre',
            'alpha_space'             =>'no se permiten numeros',
            'min_length[3]'           =>'minimo 3 caracteres',
            'max_length[9]'          =>'maximo 9 caracteres',
            'regex_match[^\\u\\d{8}$]' =>'debe de empezar con la letra u, puede llevar numeros, '
                     ],

                     
         'grado_id' => [
            'required'                =>'conplementar campo Nombre',
            'alpha_space'             =>'no se permiten numeros',
            'min_length[11]'           =>'minimo 11 caracteres',
            'max_length[11]'          =>'maximo 11 caracteres'
                     ],
            

                    ];

    protected $sipValidation = false;

}