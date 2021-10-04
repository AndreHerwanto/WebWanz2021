<?php

namespace App\Controllers;

use App\Models\ContactusModel;

class Contactus extends BaseController
{
    protected $contactusModel;
    public function __construct()
    {
        $this->contactusModel = new ContactusModel();
    }
    public function index()
    {

        // KONEKIN DATABASE TANPA MENGGUNAKAN MODEL
        // $db = \Config\Database::connect();
        // $contactus = $db->query("SELECT * FROM contactus");
        // foreach ($contactus->getResultArray() as $row) {
        //     d($row);
        // }

        // $ContactusModel = new \App\Models\ContactusModel();

        $contactus = $this->contactusModel->findAll();
        $data = [
            'contactus' => $contactus
        ];

        return view('pages/home', $data);
    }

    public function create()
    {
        $data = [];

        return view('pages/home', $data);
    }

    public function save()
    {
        $this->contactusModel->save([
            'nama' => $this->request->getVar('nama'),
            'email' => $this->request->getVar('email'),
            'komentar' => $this->request->getVar('komentar')
        ]);

        return redirect()->to('/contactus');
    }

    //--------------------------------------------------------------------

}
