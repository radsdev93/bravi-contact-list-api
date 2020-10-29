<?php
namespace App\Models;

use CodeIgniter\Model;

class CountryModel extends Model
{
    protected $table         = 'Countries';
    protected $primaryKey    = 'country_id';
    protected $allowedFields = [];
}
