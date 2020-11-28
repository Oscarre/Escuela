<?php  namespace App\Models\CustomRules;



use App\Models\GradoModel;



use App\Models\ProfesorModel;


class MyCustomRules{

public function is_valid_grado(int $id): bool{


    $model = new GradoModel();
    $grado = $model->find($id);

    return $grado == null ? false : true;
}

public function is_valid_profesor(int $id): bool{


    $model = new ProfesorModel();
    $profesor = $model->find($id);

    return $profesor == null ? false : true;
}

}