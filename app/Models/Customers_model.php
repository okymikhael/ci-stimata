<?php 

namespace App\Models;
use CodeIgniter\Model;

class Customers_model extends Model {

    public function get_customer($id) {
        $data['id'] = 3;
        $data['first_name'] = 'John';
        $data['last_name'] = 'Doe';
        $data['address'] = 'Kingstone';
        return $data;
    }

}