<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

    protected $data = array();

    function __construct()
    {
        parent::__construct();
        // $this->load->library(array());
        $this->load->model(array('user_model', 'listings_model', 'email_model'));
    }

}

/* End of file MY_Controller.php */
/* Location: ./application/controllers/MY_Controller.php */