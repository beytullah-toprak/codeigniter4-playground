<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Install extends BaseController
{
    public function run()
    {
        $this->db = \Config\Database::connect();
    }
}
