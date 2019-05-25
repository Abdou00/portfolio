<?php
/**
 * Created by PhpStorm.
 * User: samba
 * Date: 25/05/19
 * Time: 12:54
 * @property mixed experienceModel
 * @property mixed skillModel
 * @property mixed projectModel
 * @property mixed userModel
 */

class Admin extends Controller
{
    public function __construct()
    {
        $this->experienceModel = $this->model('Experience');
        $this->skillModel = $this->model('Skill');
        $this->projectModel = $this->model('Project');
        $this->userModel = $this->model('User');
    }

    public function index()
    {
        if (!isLoggedIn())
        {
            $this->view('user/login');
        }
        $experiences = $this->experienceModel->getExperiences();
        $skills = $this->skillModel->getSkills();
        $projects = $this->projectModel->getProjects();

        $data = [
            'experiences' => $experiences,
            'skills' => $skills,
            'projects' => $projects
        ];
        $this->view('admin/index', $data);
    }

    private function addExperience()
    {
        if($_SERVER['REQUEST_METHOD']=='POST'){
            // Sanitize POST Array
            $_POST = filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);

            $data = [
                'title' => trim($_POST['title']),
                'body' => trim($_POST['body']),
                'begin_at' => trim($_POST['begin_at']),
                'end_at' => trim($_POST['end_at']),
                'company' => trim($_POST['company']),
                'location' => trim($_POST['location']),
                'title_err' => '',
                'body_err' => '',
                'begin_at_err' => '',
                'end_at_err' => '',
                'company_err' => '',
                'location_err' => ''
            ];

            // Validate
            if( empty($data['title']) ){
                $data['title_err'] = 'Please enter the title';
            }
            if( empty($data['body']) ){
                $data['body_err'] = 'Please enter the body';
            }
            if( empty($data['begin_at']) ){
                $data['begin_at_err'] = 'Please enter the begin date';
            }
            if( empty($data['end_at']) ){
                $data['end_at_err'] = 'Please enter the end date';
            }
            if( empty($data['company']) ){
                $data['company_err'] = 'Please enter the company';
            }
            if( empty($data['location']) ){
                $data['location_err'] = 'Please enter the location';
            }

            // Make sure no errors
            if ( empty($data['title_err']) && empty($data['body_err']) && empty($data['begin_at_err']) && empty($data['end_at_err']) && empty($data['company_err']) && empty($data['location_err'])  ){
                // Validated
                if( $this->experienceModel->addExperience($data) ){
                    flash('experience_message', 'Experience Added');
                    redirect('admin/index');
                } else{
                    die('Something went wrong');
                }
            } else {
                // Load the view
                $this->view('admin/addExperience', $data);
            }

        } else{
            $data = [
                'title' => '',
                'body' => '',
                'begin_at' => '',
                'end_at' => '',
                'company' => '',
                'location' => '',
            ];
            $this->view('admin/addExperience', $data);
        }

    }

    public function addSkill()
    {
        if($_SERVER['REQUEST_METHOD']=='POST'){
            // Sanitize POST Array
            $_POST = filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);

            $data = [
                'title' => trim($_POST['title']),
                'level' => trim($_POST['level']),
                'image' => trim($_POST['image']),
                'title_err' => '',
                'level_err' => '',
                'image_err' => ''
            ];

            // Validate
            if( empty($data['title']) ){
                $data['title_err'] = 'Please enter the title';
            }
            if( empty($data['level']) ){
                $data['level_err'] = 'Please enter the body';
            }
            if (empty($data['image'])){
                $data['image_err'] = 'Please add a valid type image';
            }

            // Make sure no errors
            if ( empty($data['title_err']) && empty($data['level_err']) && empty($data['image_err']) ){
                // Validated
                if( $this->skillModel->addSkill($data) ){
                    flash('skill_message', 'Skill Added');
                    redirect('admin/index');
                } else{
                    die('Something went wrong');
                }
            } else {
                // Load the view
                $this->view('admin/addSkill', $data);
            }

        } else{
            $data = [
                'title' => '',
                'level' => '',
                'image' => ''
            ];
            $this->view('admin/addSkill', $data);
        }

    }

    public function addProject()
    {
        if($_SERVER['REQUEST_METHOD']=='POST'){
            // Sanitize POST Array
            $_POST = filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);

            $data = [
                'title' => trim($_POST['title']),
                'description' => trim($_POST['description']),
                'language' => trim($_POST['language']),
                'screenshot' => trim($_POST['screenshot']),
                'date' => trim($_POST['date']),
                'type' => trim($_POST['type']),
                'title_err' => '',
                'description_err' => '',
                'language_err' => '',
                'screenshot_err' => '',
                'date_err' => '',
                'type_err' => ''
            ];

            // Validate
            if( empty($data['title']) ){
                $data['title_err'] = 'Please enter the title';
            }
            if( empty($data['description']) ){
                $data['description_err'] = 'Please enter the description';
            }
            if( empty($data['language']) ){
                $data['language_err'] = 'Please enter the begin date';
            }
            if( empty($data['screenshot']) ){
                $data['screenshot_err'] = 'Please enter the end date';
            }
            if( empty($data['date']) ){
                $data['date_err'] = 'Please enter the date';
            }
            if( empty($data['type']) ){
                $data['type_err'] = 'Please enter the type';
            }

            // Make sure no errors
            if ( empty($data['title_err']) && empty($data['description_err']) && empty($data['language_err']) && empty($data['screenshot_err']) && empty($data['date_err']) && empty($data['type_err'])  ){
                // Validated
                if( $this->projectModel->addProject($data) ){
                    flash('experience_message', 'Project Added');
                    redirect('admin/index');
                } else{
                    die('Something went wrong');
                }
            } else {
                // Load the view
                $this->view('admin/addProject', $data);
            }

        } else{
            $data = [
                'title' => '',
                'description' => '',
                'language' => '',
                'screenshot' => '',
                'date' => '',
                'type' => '',
            ];
            $this->view('admin/addProject', $data);
        }

    }

    public function editExperience($id)
    {
        if($_SERVER['REQUEST_METHOD']=='POST'){
            // Sanitize POST Array
            $_POST = filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);

            $data = [
                'id' => $id,
                'title' => trim($_POST['title']),
                'body' => trim($_POST['body']),
                'begin_at' => trim($_POST['begin_at']),
                'end_at' => trim($_POST['end_at']),
                'company' => trim($_POST['company']),
                'location' => trim($_POST['location']),
                'title_err' => '',
                'body_err' => '',
                'begin_at_err' => '',
                'end_at_err' => '',
                'company_err' => '',
                'location_err' => ''
            ];

            // Validate
            if( empty($data['title']) ){
                $data['title_err'] = 'Please enter the title';
            }
            if( empty($data['body']) ){
                $data['body_err'] = 'Please enter the body';
            }
            if( empty($data['begin_at']) ){
                $data['begin_at_err'] = 'Please enter the begin date';
            }
            if( empty($data['end_at']) ){
                $data['end_at_err'] = 'Please enter the end date';
            }
            if( empty($data['company']) ){
                $data['company_err'] = 'Please enter the company';
            }
            if( empty($data['location']) ){
                $data['location_err'] = 'Please enter the location';
            }

            // Make sure no errors
            if ( empty($data['title_err']) && empty($data['body_err']) && empty($data['begin_at_err']) && empty($data['end_at_err']) && empty($data['company_err']) && empty($data['location_err'])  ){
                // Validated
                if( $this->experienceModel->updateExperience($data) ){
                    flash('experience_message', 'Experience Updated');
                    redirect('admin/index');
                } else{
                    die('Something went wrong');
                }
            } else {
                // Load the view
                $this->view('admin/editExperience', $data);
            }

        } else{
            // Get existing experience from model
            $experience = $this->experienceModel->getExperienceById($id);

            //Check for owner
            if( $experience->user_id != $_SESSION['user_id'] ){
                redirect('experiences');
            }
            $data = [
                'id' => $experience->id,
                'title' => $experience->title,
                'body' => $experience->body,
                'begin_at' => $experience->begin_at,
                'end_at' => $experience->end_at,
                'company' => $experience->company,
                'location' => $experience->location,
                'title_err' => '',
                'body_err' => '',
                'begin_at_err' => '',
                'end_at_err' => '',
                'company_err' => '',
                'location_err' => ''
            ];
            $this->view('admin/editExperience', $data);
        }

    }

    public function editSkill($id)
    {
        if($_SERVER['REQUEST_METHOD']=='POST'){
            // Sanitize POST Array
            $_POST = filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);

            $data = [
                'id' => $id,
                'title' => trim($_POST['title']),
                'body' => trim($_POST['body']),
                'user_id' => $_SESSION['user_id'],
                'title_err' => '',
                'body_err' => ''
            ];

            // Validate
            if( empty($data['title']) ){
                $data['title_err'] = 'Please enter the title';
            }
            if( empty($data['body']) ){
                $data['body_err'] = 'Please enter the body';
            }

            // Make sure no errors
            if ( empty($data['title_err']) && empty($data['body_err']) ){
                // Validated
                if( $this->skillModel->updateSkill($data) ){
                    flash('skill_message', 'Skill Updated');
                    redirect('admin/index');
                } else{
                    die('Something went wrong');
                }
            } else {
                // Load the view
                $this->view('admin/editSkill', $data);
            }

        } else{
            // Get existing skill from model
            $skill = $this->skillModel->getSkillById($id);

            //Check for owner
            if( $skill->user_id != $_SESSION['user_id'] ){
                redirect('Skills');
            }
            $data = [
                'id' => $skill->id,
                'title' => $skill->title,
                'body' => $skill->body,
                'title_err' => '',
                'body_err' => ''
            ];
            $this->view('admin/editSkill', $data);
        }

    }

    public function editProject($id)
    {
        if($_SERVER['REQUEST_METHOD']=='POST'){
            // Sanitize POST Array
            $_POST = filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);

            $data = [
                'id' => $id,
                'title' => trim($_POST['title']),
                'description' => trim($_POST['description']),
                'language' => trim($_POST['language']),
                'screenshot' => trim($_POST['screenshot']),
                'date' => trim($_POST['date']),
                'type' => trim($_POST['type']),
                'title_err' => '',
                'description_err' => '',
                'language_err' => '',
                'screenshot_err' => '',
                'date_err' => '',
                'type_err' => ''
            ];

            // Validate
            if( empty($data['title']) ){
                $data['title_err'] = 'Please enter the title';
            }
            if( empty($data['description']) ){
                $data['description_err'] = 'Please enter the description';
            }
            if( empty($data['language']) ){
                $data['language_err'] = 'Please enter the begin date';
            }
            if( empty($data['screenshot']) ){
                $data['screenshot_err'] = 'Please enter the end date';
            }
            if( empty($data['date']) ){
                $data['date_err'] = 'Please enter the date';
            }
            if( empty($data['type']) ){
                $data['type_err'] = 'Please enter the type';
            }

            // Make sure no errors
            if ( empty($data['title_err']) && empty($data['description_err']) && empty($data['language_err']) && empty($data['screenshot_err']) && empty($data['date_err']) && empty($data['type_err'])  ){
                // Validated
                if( $this->projectModel->updateProject($data) ){
                    flash('experience_message', 'Project Updated');
                    redirect('admin/index');
                } else{
                    die('Something went wrong');
                }
            } else {
                // Load the view
                $this->view('admin/editProject', $data);
            }

        } else{
            // Get existing experience from model
            $project = $this->projectModel->getProjectById($id);

            //Check for owner
            if( $project->user_id != $_SESSION['user_id'] ){
                redirect('projects');
            }
            $data = [
                'id' => $project->id,
                'title' => $project->title,
                'description' => $project->description,
                'language' => $project->language,
                'screenshot' => $project->screenshot,
                'date' => $project->date,
                'type' => $project->type,
                'title_err' => '',
                'description_err' => '',
                'language_err' => '',
                'screenshot_err' => '',
                'date_err' => '',
                'type_err' => ''
            ];
            $this->view('admin/editProject', $data);
        }

    }

    public function deleteExperience($id)
    {
        if($_SERVER['REQUEST_METHOD']=='POST') {
            // Get existing experience from model
            $experience = $this->experienceModel->getExperienceById($id);

            //Check for owner
            if( $experience->user_id != $_SESSION['user_id'] ){
                redirect('experiences');
            }
            if( $this->experienceModel->deleteExperience($id) ){
                flash('experience_message', 'Experience removed');
                redirect('admin/index');
            } else {
                die('Something went wrong');
            }

        } else {
            redirect('admin/index');
        }
    } //end function

    public function deleteSkill($id)
    {
        if($_SERVER['REQUEST_METHOD']=='POST') {
            // Get existing skill from model
            $skill = $this->skillModel->getSkillById($id);

            //Check for owner
            if( $skill->user_id != $_SESSION['user_id'] ){
                redirect('Skills');
            }
            if( $this->skillModel->deleteSkill($id) ){
                flash('skill_message', 'Skill removed');
                redirect('Skills');
            } else {
                die('Something went wrong');
            }

        } else {
            redirect('admin/index');
        }
    } //end function

    public function deleteProject($id)
    {
        if($_SERVER['REQUEST_METHOD']=='POST') {
            // Get existing experience from model
            $project = $this->projectModel->getProjectById($id);

            //Check for owner
            if( $project->user_id != $_SESSION['user_id'] ){
                redirect('projects');
            }
            if( $this->projectModel->deleteProject($id) ){
                flash('experience_message', 'Project removed');
                redirect('admin/index');
            } else {
                die('Something went wrong');
            }

        } else {
            redirect('admin/index');
        }
    } //end function
}
