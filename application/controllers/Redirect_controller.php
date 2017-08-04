<?php
/**
 * Created by PhpStorm.
 * User: papaa_mukuru
 * Date: 03/08/2017
 * Time: 11:39
 */
class Redirect_controller extends CI_Controller{

    public function __construct()
    {
        parent::__construct();

        //loading teh files
        $this->load->helper('url');
        $this->load->model('Redirect_user');
        $this->load->library('session');
    }

    public function dashboard(){
        $this->load->model('Redirect_user/dashboard');
    }
    public function message(){
        $this->load->model('Redirect_user/message');
    }
    public function contacts(){
        $this->load->model('Redirect_user/contacts');
    }
    public function services(){
        $this->load->model('Redirect_user/services');
    }
    public function phones(){
        $this->load->model('Redirect_user/phones');

    }public function account(){
    $this->load->model('Redirect_user/account');
    }
    public function upgrade_plans(){
        $this->load->model('Redirect_user/upgrade_plans');
    }
}