<?php namespace App\Controllers;

use App\Models\EmailModel;
use CodeIgniter\API\ResponseTrait;
use CodeIgniter\RESTful\ResourceController;

class Emails extends ResourceController
{
    use ResponseTrait;

    public function index()
    {
        $model          = new EmailModel();
        $data['emails'] = $model->orderBy('email_contact', 'DESC')->findAll();
        return $this->respond($data);
    }

    public function create()
    {
        $model = new EmailModel();
        $data  = [
            'email_label'   => $this->request->getVar('label'),
            'email_address' => $this->request->getVar('address'),
            'email_contact' => $this->request->getVar('contact_id')
        ];
        $model->insert($data);
        $response = [
            'status'   => 201,
            'error'    => null,
            'messages' => [
                'success' => 'Email created successfully',
            ]
        ];
        return $this->respondCreated($response);
    }

    public function get($id = null)
    {
        $model = new EmailModel();
        $data  = $model->where('email_id', $id)->first();
        if ($data) {
            return $this->respond($data);
        } else {
            return $this->failNotFound('No email found');
        }
    }

    public function getByContact($contact_id = null)
    {
        $model          = new EmailModel();
        $data['emails'] = $model->where('email_contact', $contact_id)->findAll();
        if ($data) {
            return $this->respond($data);
        } else {
            return $this->failNotFound('No email found');
        }
    }

    public function update($id = null)
    {
        $model = new EmailModel();
        $id    = $this->request->getVar('email_id');
        $data  = [
            'email_label'   => $this->request->getVar('label'),
            'email_address' => $this->request->getVar('address')
        ];
        $model->update($id, $data);
        $response = [
            'status'   => 200,
            'error'    => null,
            'messages' => [
                'success' => 'Email updated successfully',
            ]
        ];
        return $this->respond($response);
    }

    public function delete($id = null)
    {
        $model = new EmailModel();
        $data  = $model->where('email_id', $id)->delete($id);
        if ($data) {
            $model->delete($id);
            $response = [
                'status'   => 200,
                'error'    => null,
                'messages' => [
                    'success' => 'Email successfully deleted',
                ]
            ];
            return $this->respondDeleted($response);
        } else {
            return $this->failNotFound('No email found');
        }
    }

}
