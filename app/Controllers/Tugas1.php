<?php

namespace App\Controllers;

class Tugas1 extends BaseController
{

    public function show()
    {

        echo view('admin/templete/header');
        echo view('admin/kalender');
        echo view('admin/templete/sidebar');
        echo view('admin/templete/footer');
    }
}
