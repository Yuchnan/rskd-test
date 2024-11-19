<?php

namespace App\Controllers;

use App\Models\RawatJalanModel;

class RawatJalanController extends BaseController
{
    public function index(): string
    {
        return view('pages/input_rjalan');
    }

    public function submit()
    {
        $model = new RawatJalanModel;
        $tglkunjung = $this->request->getPost('tgl_kunjung').' '.$this->request->getPost('jam_kunjung');
        $data = [
            'nama'  => $this->request->getPost('nama'),
            'tgl_kunjung' => $tglkunjung,
            'r_masuk' => $this->request->getPost('r_masuk'),
        ];

        $model->insert($data);
    }
}
