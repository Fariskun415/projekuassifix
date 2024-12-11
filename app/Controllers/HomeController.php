<?php

// app/Controllers/HomeController.php
namespace App\Controllers;

use App\Models\PeriodeModel;
use App\Models\AlternatifModel;
use App\Models\KriteriaModel;
use App\Models\SubkriteriaModel;

class HomeController extends BaseController
{
    protected $periodeModel;
    protected $alternatifModel;
    protected $kriteriaModel;
    protected $subkriteriaModel;

    public function __construct()
    {
        $this->periodeModel = new PeriodeModel();
        $this->alternatifModel = new AlternatifModel();
        $this->kriteriaModel = new KriteriaModel();
        $this->subkriteriaModel = new SubkriteriaModel();
    }

    public function index()
    {
        $data = [
            'periode_count' => $this->periodeModel->countAllResults(),
            'alternatif_count' => $this->alternatifModel->countAllResults(),
            'kriteria_count' => $this->kriteriaModel->countAllResults(),
            'subkriteria_count' => $this->subkriteriaModel->countAllResults(),
        ];

        return view('template/home', $data); // pastikan nama view yang benar
    }
}
