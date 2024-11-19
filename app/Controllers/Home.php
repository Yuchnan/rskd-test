<?php

namespace App\Controllers;

use App\Models\RawatJalanModel;
use App\Models\RawatInapModel;

class Home extends BaseController
{
    public function index(): string
    {
        $model = new \App\Models\RawatJalanModel();
        $model2 = new \App\Models\RawatInapModel();
        $data['rawat_jalan'] = $model->findAll();
        $data['rawat_inap'] = $model2->findAll();
        return view('pages/landing', $data);
    }

    public function sukses()
    {
        echo "Data berhasil disimpan!";
        sleep(3);
        return redirect()->to('/');
    }

    public function rawatJalan()
    {
        return view('pages/input_rjalan');
    }

    public function rawatInap()
    {
        return view('pages/input_rinap');
    }
}
