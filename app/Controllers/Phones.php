<?php namespace App\Controllers;

use App\Models\PhoneModel;
use CodeIgniter\API\ResponseTrait;
use CodeIgniter\RESTful\ResourceController;

class Phones extends ResourceController
{
    use ResponseTrait;

    public function index()
    {
        $model          = new PhoneModel();
        $data['phones'] = $model->orderBy('phone_contact', 'DESC')->findAll();
        return $this->respond($data);
    }

    public function create()
    {
        $model = new PhoneModel();
        $data  = [
            'phone_label'   => $this->request->getVar('label'),
            'phone_number'  => $this->request->getVar('number'),
            'phone_country' => $this->request->getVar('country_id'),
            'phone_contact' => $this->request->getVar('contact_id')
        ];
        $model->insert($data);
        $response = [
            'status'   => 201,
            'error'    => null,
            'id' => $model->insertID(),
            'messages' => [
                'success' => 'Phone created successfully',
            ]
        ];
        return $this->respondCreated($response);
    }

    public function get($id = null)
    {
        $model = new PhoneModel();
        $data  = $model->where('phone_id', $id)->first();
        if ($data) {
            return $this->respond($data);
        } else {
            return $this->failNotFound('No phone found');
        }
    }

    public function getByContact($contact_id = null)
    {
        $model          = new PhoneModel();
        $data['phones'] = $model->where('phone_contact', $contact_id)->findAll();
        if ($data) {
            return $this->respond($data);
        } else {
            return $this->failNotFound('No phone found');
        }
    }

    public function getByCountry($country_id = null)
    {
        $model          = new PhoneModel();
        $data['phones'] = $model->where('phone_country', $country_id)->findAll();
        if ($data) {
            return $this->respond($data);
        } else {
            return $this->failNotFound('No phone found');
        }
    }

    public function update($id = null)
    {
        $model = new PhoneModel();
        $id    = $this->request->getVar('phone_id');
        $data  = [
            'phone_label'   => $this->request->getVar('phone_label'),
            'phone_number'  => $this->request->getVar('phone_number'),
            'phone_country' => $this->request->getVar('phone_country')
        ];
        $model->update($id, $data);
        $response = [
            'status'   => 200,
            'error'    => null,
            'messages' => [
                'success' => 'Phone updated successfully',
            ]
        ];
        return $this->respond($response);
    }

    public function delete($id = null)
    {
        $model = new PhoneModel();
        $data  = $model->where('phone_id', $id)->delete($id);
        if ($data) {
            $model->delete($id);
            $response = [
                'status'   => 200,
                'error'    => null,
                'messages' => [
                    'success' => 'Phone successfully deleted',
                ]
            ];
            return $this->respondDeleted($response);
        } else {
            return $this->failNotFound('No phone found');
        }
    }

}
