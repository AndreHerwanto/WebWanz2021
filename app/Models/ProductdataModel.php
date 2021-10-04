<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductdataModel extends Model
{
    protected $table = 'productdata';
    protected $useTimestamps = true;
    protected $allowedFields = ['nama', 'email', 'notelepon', 'namadomain', 'paketdomain'];
}
