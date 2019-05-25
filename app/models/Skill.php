<?php
    class Skill
    {
       private $db;

       public function __construct()
       {
           $this->db = new Database();
       }

       public function getSkills()
       {
           $this->db->query('select * from skills');
           return $this->db->resultSet();

       }

       public function getSkillById($id)
       {
           $this->db->query('select * from skills where id = :id');
           $this->db->bind(':id',$id);
           return $this->db->single();
       }
       
       public function addSkill($data)
       {
           $this->db->query('INSERT INTO skills (title, level, image) values (:title, :level, :image)');
           // Bind values
           $this->db->bind(':title', $data['title']);
           $this->db->bind(':level', $data['level']);
           $this->db->bind(':image', $data['image']);

           // Execute
           if( $this->db->execute() ){
               return true;
           } else {
               return false;
           }
       }

       public function updateSkill($data)
       {
           $this->db->query('UPDATE skills SET title = :title, level = :level, image = :image where id = :id');
           // Bind values
           $this->db->bind(':id', $data['id']);
           $this->db->bind(':title', $data['title']);
           $this->db->bind(':level', $data['level']);
           $this->db->bind(':image', $data['image']);

           // Execute
           if( $this->db->execute() ){
               return true;
           } else {
               return false;
           }
       }

       public function deleteSkill($id)
       {
           $this->db->query('DELETE FROM skills where id = :id');
           // Bind values
           $this->db->bind(':id', $id);

           // Execute
           if( $this->db->execute() ){
               return true;
           } else {
               return false;
           }
       }
    }
