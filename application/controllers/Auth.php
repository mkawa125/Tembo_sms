<?php
/**
 * Created by PhpStorm.
 * User: papaa_mukuru
 * Date: 29/07/2017
 * Time: 14:55
 */
class Auth extends CI_Controller{


    public function __construct()
    {
        parent::__construct();

        //loading the files
        $this->load->helper('url');
        $this->load->model('Auth_model');
        $this->load->library('session');
    }

    public function index()
    {
        $this->load->view('user_pages/register.php');
    }

    public function register() {

        if (isset($_POST['register'])) {
            $this->form_validation->set_rules('organization_name', 'Organization name', 'required');
            $this->form_validation->set_rules('name', 'your name', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required');
            $this->form_validation->set_rules('password', 'password', 'required|min_length[8]|max_length[15]');
            $this->form_validation->set_rules('password2', 'password', 'required|min_length[8]|max_length[15]|matches[password]');

            //if form validated
            if ($this->form_validation->run() == TRUE) {

                //add user to the database
                $data = array(
                    'organization_name' => $_POST['organization_name'],
                    'name' => $_POST['name'],
                    'email' => $_POST['email'],
                    'password' => md5($_POST['password']),
                    'password2' => md5($_POST['password2']),
                    'register_date' => time(),
                );
                //email existence check
                $email_check = $this->Auth_model->email_check($data['email']);

                if ($email_check) {
                    $this->Auth_model->register_user($data);
                    $this->session->set_flashdata('success_msg', 'Registered successfully.Now login to your account.');
                    redirect('Auth/after_register');
                } else {
                    $this->session->set_flashdata('error_msg', 'User with that email already exist in the database');
                    redirect('Auth/register', 'refresh');
                }

            }
        }
        //loading view
        $this->load->view('user_pages/register.php');
    }

    public function after_register()
    {
        $this->load->view('user_pages/welcome.php');
    }


    function login_user(){

        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('password', 'password', 'required');

        //declaring variables

        if ($this->form_validation->run() == TRUE){
            //check user to the database
            $this->db->select('*');
            $this->db->from('user_registration');
            $this->db->where(
                array(
                    'email'=>$_POST['email'],
                    'password'=>md5($_POST['password']),
                ));

            $query = $this->db->get();

            $user = $query->row();

            //if user exist
            if ($user->email){
                $this->session->set_flashdata('success', 'you have logged in');

                //set session variables
                $_SESSION['user_logged'] = TRUE;
                $_SESSION['email'] = $user->email;
                $_SESSION['name'] = $user->name;

                //redirect user
                redirect("Auth/after_register");


            }else{
                $this->session->set_flashdata('error_msg', 'Either password or email is incorrect');
                redirect("auth/login_user");
            }
        }
        $this->load->view('user_pages/login.php');
    }

    public function logout(){
        $this->session->sess_destroy();
        redirect('Auth/login_user', 'refresh');
    }

}