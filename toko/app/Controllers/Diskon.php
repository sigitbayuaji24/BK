<?php

namespace App\Controllers;
use App\Models\DiskonModel;
class Diskon extends BaseController
{

    public function __construct()
	{ 
        helper('form'); 
		$this->diskon = new DiskonModel();
	}

    public function index()
    {
        $diskon = $this->diskon->findAll();
        return view('diskon',[
            'diskons' => $diskon,
        ]);
    }
}