<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class FormController extends BaseController
{
    public function index()
    {
        return view('form/form1');
    }

    function hitung()
    {
        $harga = '';
        $jumlah = '';
        $totalBayar = 0;

        $harga = $this->request->getPost('txtHarga');
        $jumlah = $this->request->getPost('txtJumlah');
       

        if (is_numeric($harga) && is_numeric($jumlah)) {
            $totalBayar = $harga * $jumlah;
        } else {
            $totalBayar = 0;
        }
        $data = [
            'harga' => $harga,
            'jumlah' => $jumlah,
            'bayar' => $totalBayar
        ];

        return view('form/form1', $data);
    }
}
