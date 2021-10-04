<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        // $db = \Config\Database::connect();
        // $contactus = $db->query("SELECT * FROM contactus");
        // dd($contactus);
        return view('pages/home');
    }

    //--------------------------------------------------------------------

}
