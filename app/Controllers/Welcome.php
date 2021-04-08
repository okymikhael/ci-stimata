<?php

namespace App\Controllers;

use App\Models\Customers_model;

class Welcome extends BaseController {
    public function index()
    {
        $data['customer'] = Customers_model::get_customer(3);

		return view('welcome_message', $data);
    }
}