<?php namespace App\Controllers;

use App\Models\UrlModel;
use CodeIgniter\API\ResponseTrait;
use CodeIgniter\RESTful\ResourceController;

class Urls extends ResourceController
{
    use ResponseTrait;

    public function index()
    {
        $model        = new UrlModel();
        $data['urls'] = $model->orderBy('url_contact', 'DESC')->findAll();
        return $this->respond($data);
    }

    public function create()
    {
        $model = new UrlModel();
        $data  = [
            'url_label'   => $this->request->getVar('label'),
            'url_address' => $this->request->getVar('address'),
            'url_contact' => $this->request->getVar('contact_id')
        ];
        $model->insert($data);
        $response = [
            'status'   => 201,
            'error'    => null,
            'id' => $model->insertID(),
            'messages' => [
                'success' => 'Url created successfully',
            ]
        ];
        return $this->respondCreated($response);
    }

    public function get($id = null)
    {
        $model = new UrlModel();
        $data  = $model->where('url_id', $id)->first();
        if ($data) {
            return $this->respond($data);
        } else {
            return $this->failNotFound('No url found');
        }
    }

    public function getByContact($contact_id = null)
    {
        $model        = new UrlModel();
        $data['urls'] = $model->where('url_contact', $contact_id)->findAll();
        if ($data) {
            return $this->respond($data);
        } else {
            return $this->failNotFound('No url found');
        }
    }

    public function update($id = null)
    {
        $model = new UrlModel();
        $id    = $this->request->getVar('url_id');
        $data  = [
            'url_label'   => $this->request->getVar('label'),
            'url_address' => $this->request->getVar('address'),
        ];
        $model->update($id, $data);
        $response = [
            'status'   => 200,
            'error'    => null,
            'messages' => [
                'success' => 'Url updated successfully',
            ],
        ];
        return $this->respond($response);
    }

    public function delete($id = null)
    {
        $model = new UrlModel();
        $data  = $model->where('url_id', $id)->delete($id);
        if ($data) {
            $model->delete($id);
            $response = [
                'status'   => 200,
                'error'    => null,
                'messages' => [
                    'success' => 'Url successfully deleted',
                ],
            ];
            return $this->respondDeleted($response);
        } else {
            return $this->failNotFound('No url found');
        }
    }

}
