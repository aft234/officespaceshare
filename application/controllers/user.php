<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends MY_Controller {

    public function __construct ()
    {
        parent::__construct();
        // $this->load->library(array());
        // $this->load->model(array());
    }

    public function login ()
    {
        $this->data['title'] = 'Office Share NYC | Login';
        $this->load->view('user_controller/login', $this->data);
    }

}

/* End of file home.php */
/* Location: ./application/controllers/user.php */