<?php

namespace App\Controllers;

class Tugas3 extends BaseController
{

    public function show()
    {

        echo view('admin/templete/header');
        echo view('admin/chart');
        echo view('admin/templete/sidebar');
        echo view('admin/templete/footer_chart');
    }
}
