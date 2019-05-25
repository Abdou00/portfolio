<?php
/**
 * Created by PhpStorm.
 * User: samba
 * Date: 24/05/19
 * Time: 09:50
 */

class Experience
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getExperiences()
    {
        $this->db->query('select * from experiences');
        return $this->db->resultSet();

    }

    public function getExperienceById($id)
    {
        $this->db->query('select * from experiences where id = :id');
        $this->db->bind(':id', $id);
        return $this->db->single();
    }

    /**
     * public function getExperienceByUserId($user_id)
     * {
     * $this->db->query('select count(*) as total from experiences where user_id = :user_id');
     * $this->db->bind(':user_id',$user_id);
     * return $this->db->single();
     * }
     * @param $data
     * @return bool
     */
    public function addExperience($data)
    {
        $this->db->query('INSERT INTO experiences (title, body, begin_at, end_at, company, location) values (:title, :body, :begin_at, :end_at, :company, :location)');
        // Bind values
        $this->db->bind(':title', $data['title']);
        $this->db->bind(':body', $data['body']);
        $this->db->bind(':begin_at', $data['begin_at']);
        $this->db->bind(':end_at', $data['end_at']);
        $this->db->bind(':company', $data['company']);
        $this->db->bind(':location', $data['location']);

        // Execute
        if( $this->db->execute() ){
            return true;
        } else {
            return false;
        }
    }

    /**
     * @param $data
     * @return bool
     */
    public function updateExperience($data)
    {
        $this->db->query('UPDATE experiences SET title = :title, body = :body, begin_at = :begin_at, end_at = :end_at, company = :company, location = :location where id = :id');
        // Bind values
        $this->db->bind(':title', $data['title']);
        $this->db->bind(':body', $data['body']);
        $this->db->bind(':begin_at', $data['begin_at']);
        $this->db->bind(':end_at', $data['end_at']);
        $this->db->bind(':company', $data['company']);
        $this->db->bind(':location', $data['location']);

        // Execute
        if( $this->db->execute() ){
            return true;
        } else {
            return false;
        }
    }

    /**
     * @param $id
     * @return bool
     */
    public function deleteExperience($id)
    {
        $this->db->query('DELETE FROM experiences where id = :id');
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
