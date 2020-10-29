<?php
namespace App\Models;

use CodeIgniter\Model;

class ContactModel extends Model
{
    protected $table         = 'Contacts';
    protected $primaryKey    = 'contact_id';
    protected $allowedFields = ['contact_firstname', 'contact_lastname', 'contact_birthdate'];
}
