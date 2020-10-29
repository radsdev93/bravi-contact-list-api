<?php
namespace App\Models;

use CodeIgniter\Model;

class EmailModel extends Model
{
    protected $table         = 'Emails';
    protected $primaryKey    = 'email_id';
    protected $allowedFields = ['email_label', 'email_address', 'email_contact'];
}
