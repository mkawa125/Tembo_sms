<?php

/**
 * Created by PhpStorm.
 * User: Saidi Dahabu
 * Date: 04/08/2017
 * Time: 16:31
 */
class Account_controller extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        //loading teh files
        $this->load->helper('url');
        $this->load->model('Redirect_user');
        $this->load->library('session');
    }

    public function billing()
    {
        $this->load->view('account_views/account.php');
    }

    public function project()
    {
        $this->load->view('account_views/project.php');
    }

    public function developer_API()
    {
        $this->load->view('account_views/developer-API.php');
    }

    public function org_settings()
    {
        $this->load->view('account_views/org-settings.php');
    }

    public function personal_settings()
    {
        $this->load->view('account_views/personal-setting.php');

    }

    public function accounts()
    {
        $this->load->view('account_views/user-account.php');
    }

    public function organizations()
    {
        $this->load->view('account_views/organizations.php');
    }

    public function security()
    {
        $this->load->view('account_views/security.php');
    }
}