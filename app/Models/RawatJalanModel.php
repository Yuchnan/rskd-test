<?php

namespace App\Models;

use CodeIgniter\Model;

class RawatJalanModel extends Model
{
    protected $table = 'rawat_jalan';
    protected $primaryKey = 'nocm';
    protected $allowedFields = ['nama', 'tgl_kunjung', 'r_masuk'];
    protected $useTimestamps = true;
    
}
