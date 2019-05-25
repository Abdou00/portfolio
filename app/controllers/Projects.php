<?php
/**
 * Created by PhpStorm.
 * User: samba
 * Date: 24/05/19
 * Time: 14:28
 * @property  projectModel
 * @property  userModel
 */

class Projects extends Controller
{
    public function __construct()
    {
        $this->projectModel = $this->model('Project');
        $this->userModel = $this->model('User');
    }

    public function index()
    {
        $projects = $this->projectModel->getProjects();
        $data = [
            'projects' => $projects
        ];
        $this->view('projects/index', $data);
    }

    public function show($id)
    {
        $project = $this->projectModel->getProjectById($id);
        $user = $this->userModel->getUserById($project->user_id);
        $data = [
            'experience' => $project,
            'user' => $user
        ];
        $this->view('projects/show', $data);
    }
}
