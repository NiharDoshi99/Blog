<?php namespace App\Models;

use CodeIgniter\Model;


class blogModel extends Model {

    protected $table = 'data';
    protected $allowedFields = ['title','description','body','image'];

    
}



?>