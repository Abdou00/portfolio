<?php
/**
 * Created by PhpStorm.
 * User: samba
 * Date: 24/05/19
 * Time: 09:52
 * @property mixed experienceModel
 * @property mixed userModel
 */

class Experiences extends Controller
{
    public function __construct()
    {
        $this->experienceModel = $this->model('Experience');
        $this->userModel = $this->model('User');
    }

    public function index()
    {
        $experiences = $this->experienceModel->getExperiences();
        $data = [
            'experiences' => $experiences
        ];
        $this->view('experiences/index', $data);
    }

    public function show($id)
    {
        $experience = $this->experienceModel->getExperienceById($id);
        $user = $this->userModel->getUserById($experience->user_id);
        $data = [
            'experience' => $experience,
            'user' => $user
        ];
        $this->view('experiences/show', $data);
    }
}
