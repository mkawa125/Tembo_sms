<?php
/**
 * Created by PhpStorm.
 * User: papaa_mukuru
 * Date: 29/07/2017
 * Time: 14:53
 */
class Auth_model extends CI_Model{

    public function __construct(){
        parent::__construct();
    }

    public function register_user($data){
        $this->db->insert('user_registration', $data);
    }

    public function login_user($email, $password){
        $this->db->select('*');
        $this->db->from('user_registration');
        $this->db->where('email', $email);
        $this->db->where('password', ($password));

        //querying the database to get password and user email
        if ($query = $this->db->get()){
          return $query->row_array();
        }
        else{
            return false;
        }
    }

    public function email_check($email){

        //querying the database to get the result
        $this->db->select('*');
        $this->db->from('user_registration');
        $this->db->where('email', $email);
        $query = $this->db->get();

        if ($query->num_rows()>0){
            return false;
        }
        else{
            return true;
        }
    }
}