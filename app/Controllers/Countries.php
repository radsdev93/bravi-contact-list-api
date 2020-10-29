<?php namespace App\Controllers;

use App\Models\CountryModel;
use CodeIgniter\API\ResponseTrait;
use CodeIgniter\RESTful\ResourceController;

class Countries extends ResourceController
{
    use ResponseTrait;

    public function index()
    {
        $model             = new CountryModel();
        $data['countries'] = $model->orderBy('name', 'DESC')->findAll();
        return $this->respond($data);
    }

    public function getCountry($id = null)
    {
        $model = new CountryModel();
        $data  = $model->where('country_code', $id)->first();
        if ($data) {
            return $this->respond($data);
        } else {
            return $this->failNotFound('No country found');
        }
    }

}
