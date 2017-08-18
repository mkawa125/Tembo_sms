<?php

/**
 * Created by PhpStorm.
 * User: saidi dahabu
 * Date: 29/07/2017
 * Time: 14:55
 */
class Auth extends CI_Controller
{


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

    public function register()
    {

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
                    'register_date' => date('Y-m-d H:i:s'),
                    'hash' => md5(rand(0, 1000))
                );
                //email existence check
                $email_check = $this->Auth_model->email_check($data['email']);

                if ($email_check) {
                    $this->Auth_model->register_user($data);
                    $this->session->set_flashdata('success_msg', 'Registered successfully.Now login to your account.');
                    redirect('Auth/register_refresh');
                } else {
                    $this->session->set_flashdata('error_msg', 'Ooooops.....   User with that email already exist in the database');
                    redirect('Auth/register', 'refresh');
                }

            }
        }
        //loading view
        $this->load->view('user_pages/register.php');
    }

    public function register_refresh()
    {
        $this->load->view('user_pages/login.php', 'refresh');
    }

    function send_confirmation()
    {

        //load email library
        $this->load->library('email');

        //sender's email
        $this->email->from('dahabusaidi@gmail.com', 'My Site');

        //receiver's email
        $address = $_POST['email'];

        //subject
        $subject = "Welcome to Tembo_sms messaging platform!";


        /*-----------This is the email body sent to user who registered in tembo_sms requires him/her to verify account-----------*/
        $message =
            'Thanks for signing up, ' . $_POST['name'] . '!
      
        Your account has been created. 
        Here are your login details.
        -------------------------------------------------
        Email   : ' . $_POST['email'] . '
        Password: ' . $_POST['password'] . '
        -------------------------------------------------
                        
        Please click this link to activate your account:
            
        ' . base_url() . 'index.php/user_registration/verify?' .
            'email=' . $_POST['email'] . '&hash=' . $this->data['hash'];
        /*-----------end of email body-----------*/


        $this->email->to($address);
        $this->email->subject($subject);
        $this->email->message($message);
        $this->email->send();
    }

    function verify()
    {
        $result = $this->Auth_model->get_hash_value($_GET['email']); //get the hash value which belongs to given email from database
        if ($result) {
            if ($result['hash'] == $_GET['hash']) {  //check whether the input hash value matches the hash value retrieved from the database
                $this->Auth_model->verify_user($_GET['email']); //update the status of the user as verified

                //redirecting user after completing verification
                redirect();
            }
        }
    }

    public function after_register()
    {
        $this->load->view('user_pages/welcome.php', 'refresh');
    }


    function login_user()
    {

        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('password', 'password', 'required');

        //declaring variables

        if ($this->form_validation->run() == TRUE) {
            //check user to the database
            $this->db->select('*');
            $this->db->from('user_registration');
            $this->db->where(
                array(
                    'email' => $_POST['email'],
                    'password' => md5($_POST['password']),
                ));

            $query = $this->db->get();

            $user = $query->row();

            //if user exist
            if ($user->email) {
                $this->session->set_flashdata('success', 'you have logged in');

                //set session variables
                $_SESSION['user_logged'] = TRUE;
                $_SESSION['email'] = $user->email;
                $_SESSION['name'] = $user->name;
                $_SESSION['organization_name'] = $user->organization_name;
                $_SESSION['user_id'] = $user->user_id;


                //redirect user
                redirect("Auth/after_register");


            } else {
                $this->session->set_flashdata('error_msg', 'Either password or email is incorrect');
                redirect("auth/login_user");
            }
        }
        $this->load->view('user_pages/login.php');
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('Auth/login_user', 'refresh');
    }

}