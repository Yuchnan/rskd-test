<?php

namespace App\Controllers;

use App\Models\RawatInapModel;

class RawatInapController extends BaseController
{
    public function index(): string
    {
        return view('pages/input_rinap');
    }

    public function submit()
    {
        $model = new RawatInapModel;

        $data = [
            'nama'  => $this->request->getPost('nama'),
            'tgl_masuk' => $this->request->getPost('tgl_masuk'),
            'r_akhir' => $this->request->getPost('r_akhir'),
        ];

        $model->insert($data);

        return view('pages/landing');
    }
}