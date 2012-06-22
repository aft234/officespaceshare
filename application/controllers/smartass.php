<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Smartass extends MY_Controller {

    public function __construct ()
    {
        parent::__construct();
        // $this->load->library(array());
        // $this->load->model(array());
    }

    public function homepage ()
    {
        $this->data['title'] = 'Office Share NYC';
        $this->load->view('smartass_controller/homepage', $this->data);
    }

    public function list_space ()
    {
        $this->data['title'] = 'Office Share NYC | List Space';
        $this->load->view('smartass_controller/list_space', $this->data);
    }

    public function spaces ()
    {
        $this->data['title'] = 'Office Share NYC | Find a Space';
        $this->load->view('smartass_controller/spaces', $this->data);
    }

    public function signup ()
    {
        $this->data['title'] = 'Office Share NYC | Signup';
        $this->load->view('smartass_controller/signup', $this->data);
    }

}

/* End of file home.php */
/* Location: ./application/controllers/smartass.php */