<?php

namespace App\Controllers;

use App\Models\ProductdataModel;

class Productdata extends BaseController
{
    protected $productdataModel;
    public function __construct()
    {
        $this->productdataModel = new ProductdataModel();
    }
    public function index()
    {
        $productdata = $this->productdataModel->findAll();
        // $productdataModel = new ProductdataModel();

        $data = [

            'productdata' => $productdata
        ];

        // if (empty($data['productdata'])) {
        //     throw new \CodeIgniter\Exceptions\PageNotFoundException('Product tidak ditemukan');
        // }

        return view('product/create', $data);
    }

    public function create()
    {
        session();
        $data = [
            'validation' => \Config\Services::validation()
        ];
        return view('product/create', $data);
    }

    public function save()
    {
        // VALIDASI INPUT 

        if (!$this->validate([
            'nama' => 'required',
            'email' => 'required',
            'notelepon' => 'required',
            'namadomain' => 'required'
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('/productdata/create')->withInput()->with('validation', $validation);
        }

        // CATATAN ERROR PART 10 VALIDATION DAM ROUTES NYA ERROR TAI
        // YUK BISA YUKKK


        $this->productdataModel->save(
            [
                'nama' => $this->request->getVar('nama'),
                'email' => $this->request->getVar('email'),
                'notelepon' => $this->request->getVar('notelepon'),
                'namadomain' => $this->request->getVar('namadomain'),
                'paketdomain' => $this->request->getVar('paketdomain')
            ]
        );

        session()->setFlashdata('pesan', 'Data Berhasil ditambahkan.');
        return redirect()->to('/productdata');
        // dd($this->request->getVar('nama'));

        // return view('product/create');
    }
}
