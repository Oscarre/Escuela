<?php namespace App\Controllers\API;

use App\Models\EstudianteModel;
use CodeIgniter\RESTful\ResourceController;

class Estudiante extends ResourceController
{

  public  function __construct() {
        $this->model = $this->setModel(new EstudianteModel());
    }
    
	public function index()
	{
        echo "hola estas en estudiante";
      $estudiante = $this->model->findAll();
     return $this->respond($estudiante);
        
	}
public function create(){

try {
$estudiante = $this->request->getJSON();
if($this->model->insert($estudiante)):
    $estudiante->id = $this->model->insertID();
    return $this->respondCreated($estudiante);
else:
    return $this->failValidationError($this->model->validation->listErrors());
endif;
}catch (\Exception $e){

return $this->failServerError('ha ocurrido un error en el servidor');
}

}

public function edit($id = null)
{
    try {
      
        if($id == null)
        return $this->failValidationError('no se a pasado un ID valido');
        
        $estudiante = $this->model->find($id);
        if($estudiante == null)
        return $this->failNotFound('no se a encontrado un Estudiante con el id:'.$id);
        return $this->respond($estudiante);

        }catch (\Exception $e){
        
        return $this->failServerError('ha ocurrido un error en el servidor');
        }

}

public function update($id = null)
{
    try {
      
        if($id == null)
        return $this->failValidationError('no se a pasado un ID valido');
        
        $estudianteVerificado = $this->model->find($id);
        if($estudianteVerificado == null)
        return $this->failNotFound('no se a encontrado un cliente con el id:'.$id);
        
        $estudiante = $this->request->getJSON();

        if($this->model->update($id, $estudiante)):
            $estudiante->id = $id;
            return $this->respondUpdated($estudiante);
        else:
            return $this->failValidationError($this->model->validation->listErrors());
        endif;


        }catch (\Exception $e){
        
        return $this->failServerError('ha ocurrido un error en el servidor');
        }

}

public function delete($id = null)
{
    try {
      
        if($id == null)
        return $this->failValidationError('no se a pasado un ID valido');
        
        $estudianteVerificado = $this->model->find($id);
        if($estudianteVerificado == null)
        return $this->failNotFound('no se a encontrado un cliente con el id:'.$id);
        
        

        if($this->model->delete($id)):
            return $this->respondDeleted($estudianteVerificado);
        else:
            return $this->failServerError('no se a podido eliminar el registro');
        endif;


        }catch (\Exception $e){
        
        return $this->failServerError('ha ocurrido un error en el servidor');
        }
}

}
