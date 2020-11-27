<?php namespace App\Controllers\API;

use App\Models\ProfesorModel;
use CodeIgniter\RESTful\ResourceController;

class Profesor extends ResourceController
{

  public  function __construct() {
        $this->model = $this->setModel(new ProfesorModel());
    }
    
	public function index()
	{
        echo "hola";
      $profesor = $this->model->findAll();
     return $this->respond($profesor);
        
	}
public function create(){

try {
$profesor = $this->request->getJSON();
if($this->model->insert($profesor)):
    $profesor->id = $this->model->insertID();
    return $this->respondCreated($profesor);
else:
    return $this->failValidationError($this->model->validation->listErrors());
endif;
}catch (\Exception $e){

return $this->failServerError('ha ocurrido un error en el servidor');
}

}

}
