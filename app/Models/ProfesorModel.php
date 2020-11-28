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

                    
        'profesion' => [
           'required'                =>'conplementar campo Nombre',
           'alpha_space'             =>'no se permiten numeros',
           'min_length[3]'           =>'minimo 3 caracteres',
           'max_length[75]'          =>'maximo 75 caracteres'
                    ],

                    
        'telefono' => [
           'required'                =>'conplementar campo Nombre',
           'alpha_space'             =>'no se permiten numeros',
           'min_length[9]'           =>'minimo 9 caracteres',
           'max_length[9]'          =>'maximo 9 caracteres'
                    ],

                    
        'dui' => [
           'required'                =>'conplementar campo Nombre',
           'alpha_space'             =>'no se permiten numeros',
           'min_length[10]'           =>'minimo 10 caracteres',
           'max_length[710]'          =>'maximo 10 caracteres',
         
                    ],

        
           

                   ];
       
   

    protected $sipValidation = false;

}