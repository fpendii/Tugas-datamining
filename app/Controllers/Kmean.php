<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\KmeanModel;

class Kmean extends BaseController
{
    public function index()
    {
        $dataset = new KmeanModel();
        $data_covid = $dataset->findAll();
        $data = [
            'dataset' => $data_covid
        ];
        echo view("layout",$data);
        echo view("k-mean/index");
        echo view("script");
    }
}
