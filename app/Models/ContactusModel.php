<?php

namespace App\Models;

use CodeIgniter\Model;

class ContactusModel extends Model
{
    protected $table = 'contactus';
    protected $useTimestamps = true;
    protected $allowedFields = ['nama', 'email', 'komentar'];
}
