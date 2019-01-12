<?php
namespace App\Controllers;

use App\Models\ {Job, Project};

class IndexController {
    public function indexAction() {
        
    $name = 'Alejandro Chanquín';
    $limitMonths = 2000;

    include '../views/index.php';
    }
}