<?php

namespace App\Controllers;

class Tugas2 extends BaseController
{

    public function show()
    {

        echo view('admin/templete/header');
        echo view('admin/flot');
        echo view('admin/templete/sidebar');
        echo view('admin/templete/footer_flot');
    }
}
