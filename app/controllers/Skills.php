<?php
/**
 * @property mixed skillModel
 * @property mixed userModel
 */
class Skills extends Controller
{
   public function __construct()
   {
      $this->skillModel = $this->model('Skill');
      $this->userModel = $this->model('User');
   }

   public function index()
    {
       $skills = $this->skillModel->getSkills();
       $data = [
          'skills' => $skills
       ];
       $this->view('skills/index', $data);
    }

   public function show($id)
   {
      $skill = $this->skillModel->getSkillById($id);
      $user = $this->userModel->getUserById($skill->user_id);
      $data = [
         'skill' => $skill,
         'user' => $user
      ];
      $this->view('skills/show', $data);
   }
}
