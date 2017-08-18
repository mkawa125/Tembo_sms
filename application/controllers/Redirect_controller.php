<?php

/**
 * Created by PhpStorm.
 * User: Saidi Dahabu
 * Date: 03/08/2017
 * Time: 11:39
 */
class Redirect_controller extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        //loading teh files
        $this->load->helper('url');
        $this->load->model('Redirect_user');
        $this->load->library('session');
    }

    public function dashboard()
    {
        $this->load->view('user_pages/welcome.php');
    }

    public function messages()
    {
        $this->load->view('message_pages/all_messages.php');
    }

    public function contacts()
    {
        $this->load->view('contacts/contacts_view.php');
    }

    public function services()
    {
        $this->load->view('service_pages/services.php');
    }

    public function phones()
    {
        $this->load->model('Redirect_user/phones');

    }

    public function accounts()
    {
        $this->load->view('account_views/account.php');
    }

    public function upgrade_plans()
    {
        $this->load->model('Redirect_user/upgrade_plans');

    }

    public function user_projects()
    {
        $this->load->view('user_pages/user_projects.php');
    }

    public function add_project()
    {
        $this->load->view('user_pages/add_projects.php');
    }

    public function phone()
    {
        $this->load->view('phones_pages/phones.php');
    }

    public function add_phone()
    {
        $this->load->view('phones_pages/add_phone.php');
    }
}