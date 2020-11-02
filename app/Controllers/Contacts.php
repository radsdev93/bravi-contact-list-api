<?php namespace App\Controllers;

use App\Models\ContactModel;
use CodeIgniter\API\ResponseTrait;
use CodeIgniter\RESTful\ResourceController;

class Contacts extends ResourceController
{
    use ResponseTrait;

    public function index()
    {
        $model            = new ContactModel();
        $data['contacts'] = $model->orderBy('contact_id', 'DESC')->findAll();
        return $this->respond($data);
    }

    public function create()
    {
        $model = new ContactModel();
        $data  = [
            'contact_firstname' => $this->request->getVar('firstname'),
            'contact_lastname'  => $this->request->getVar('lastname'),
            'contact_birthdate' => $this->request->getVar('birthdate')
        ];
        $model->insert($data);
        $response = [
            'status'   => 201,
            'error'    => null,
            'id' => $model->insertID(),
            'messages' => [
                'success' => 'Contact created successfully',
            ]
        ];
        return $this->respondCreated($response);
    }

    public function get($id = null)
    {
        $model = new ContactModel();
        $data  = $model->where('contact_id', $id)->first();
        if ($data) {
            return $this->respond($data);
        } else {
            return $this->failNotFound('No contact found');
        }
    }

    public function update($id = null)
    {
        $model = new ContactModel();
        $id    = $this->request->getVar('contact_id');
        $data  = [
            'contact_firstname' => $this->request->getVar('firstname'),
            'contact_lastname'  => $this->request->getVar('lastname'),
            'contact_birthdate' => $this->request->getVar('birthdate')
        ];
        $model->update($id, $data);
        $response = [
            'status'   => 200,
            'error'    => null,
            'messages' => [
                'success' => 'Contact updated successfully',
            ]
        ];
        return $this->respond($response);
    }

    public function delete($id = null)
    {
        $model = new ContactModel();
        $data  = $model->where('contact_id', $id)->delete($id);
        if ($data) {
            $model->delete($id);
            $response = [
                'status'   => 200,
                'error'    => null,
                'messages' => [
                    'success' => 'Contact successfully deleted',
                ]
            ];
            return $this->respondDeleted($response);
        } else {
            return $this->failNotFound('No contact found');
        }
    }

}
