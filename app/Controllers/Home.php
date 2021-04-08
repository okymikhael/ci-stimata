<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
        $this->load->model('Customers_model');
		return view('welcome_message');
	}
}

