<?php
namespace App\Models;

use CodeIgniter\Model;

class PhoneModel extends Model
{
    protected $table         = 'Phones';
    protected $primaryKey    = 'phone_id';
    protected $allowedFields = ['phone_label', 'phone_number', 'phone_country', 'phone_contact'];
}
