<?php
namespace App\Controllers;

use App\Models\Project;

class ProjectsController {
    public function GetAddProjectAction () {
        if (!empty($_POST)) {
            $project = new Project();
            $project->title = $_POST['title'];
            $project->description = $_POST['description'];
            $project->save();
        }

        include '../views/addProject.php';
    }
}