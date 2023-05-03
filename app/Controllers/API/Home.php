<?php

namespace App\Controllers\Api;

use App\Models\ModelPpdb;
use CodeIgniter\API\ResponseTrait;
use CodeIgniter\RESTful\ResourceController;

class Home extends ResourceController
{
    use ResponseTrait;

    public function show($id_ppdb = null)
    {
        $model = new ModelPpdb();
        $data = $model->find($id_ppdb);

        return $this->respond($data);
    }
}
