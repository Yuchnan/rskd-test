<?php

namespace App\Models;

use CodeIgniter\Model;

class RawatInapModel extends Model
{
    protected $table = 'rawat_inap';
    protected $primaryKey = 'nocm';
    protected $allowedFields = ['nama', 'tgl_masuk', 'r_akhir'];
    protected $useTimestamps = true;
}
