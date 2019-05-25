<?php
/**
 * Created by PhpStorm.
 * User: samba
 * Date: 24/05/19
 * Time: 14:31
 */

class Project
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getProjects()
    {
        $this->db->query('select * from projects');
        return $this->db->resultSet();

    }

    public function getProjectById($id)
    {
        $this->db->query('select * from projects where id = :id');
        $this->db->bind(':id',$id);
        return $this->db->single();
    }

    public function addProject($data)
    {
        $this->db->query('INSERT INTO projects (title, description, language, screenshot, date, type) values (:title, :description, :language, :screenshot, :date, :type)');
        // Bind values
        $this->db->bind(':title', $data['title']);
        $this->db->bind(':description', $data['description']);
        $this->db->bind(':language', $data['language']);
        $this->db->bind(':screenshot', $data['screenshot']);
        $this->db->bind(':date', $data['date']);
        $this->db->bind(':type', $data['type']);

        // Execute
        if( $this->db->execute() ){
            return true;
        } else {
            return false;
        }
    }

    public function updateProject($data)
    {
        $this->db->query('UPDATE projects SET title = :title, description = :description, language = :language, screenshot = :screenshot, date = :date, type= :type where id = :id');
        // Bind values
        $this->db->bind(':id', $data['id']);
        $this->db->bind(':title', $data['title']);
        $this->db->bind(':description', $data['description']);
        $this->db->bind(':language', $data['language']);
        $this->db->bind(':screenshot', $data['screenshot']);
        $this->db->bind(':date', $data['date']);
        $this->db->bind(':type', $data['type']);

        // Execute
        if( $this->db->execute() ){
            return true;
        } else {
            return false;
        }
    }

    public function deleteProject($id)
    {
        $this->db->query('DELETE FROM projects where id = :id');
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
