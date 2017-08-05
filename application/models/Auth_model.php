<?php

/**
 * Created by PhpStorm.
 * User: Saidi Dahabu
 * Date: 29/07/2017
 * Time: 14:53
 */
class Auth_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function register_user($data)
    {
        $this->db->insert('user_registration', $data);
    }

    public function get_hash_value()
    {
        $this->db->select('*');
        $this->db->from('uer_registration');
        $this->db->where('hash', md5(rand(0, 1000)));

        if ($result = $this->db->get()) {
            return $result->row_array(md5(rand(0, 1000)));
        } else {
            return false;
        }
    }

    public function verify_user($email)
    {
        $data = array('is_verified' => 1);
        $this->db->where('email', $email);
        $this->db->update('users', $data);
    }

    public function login_user($email, $password)
    {
        $this->db->select('*');
        $this->db->from('user_registration');
        $this->db->where('email', $email);
        $this->db->where('password', ($password));

        //querying the database to get password and user email
        if ($query = $this->db->get()) {
            return $query->row_array();
        } else {
            return false;
        }
    }

    public function email_check($email)
    {

        //querying the database to get the result
        $this->db->select('*');
        $this->db->from('user_registration');
        $this->db->where('email', $email);
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return false;
        } else {
            return true;
        }
    }
}