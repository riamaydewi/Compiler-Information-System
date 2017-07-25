<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class AuthControllers extends CI_Controller
{
    function __construct(){
        parent::__construct();
        $login=$this->session->userdata('logged_in');
        if($login != 1){
            redirect('/');
        }
    }
}