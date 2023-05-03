<?php

namespace App\Controllers\Api;

use App\Models\Suratmodel;
use CodeIgniter\API\ResponseTrait;
use CodeIgniter\RESTful\ResourceController;

class Home extends ResourceController
{
    use ResponseTrait;

    public function show($id = null)
    {
        $model = new Suratmodel();
        $data = $model->find($id);

        return $this->respond($data);
    }
}
