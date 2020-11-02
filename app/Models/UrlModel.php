<?php
namespace App\Models;

use CodeIgniter\Model;

class UrlModel extends Model
{
    protected $table         = 'URLs';
    protected $primaryKey    = 'url_id';
    protected $allowedFields = ['url_label', 'url_address', 'url_contact'];
}
