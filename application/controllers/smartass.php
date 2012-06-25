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

    public function signup ()
    {
        $email = '';
        $password = '';

        $email = $this->input->post('email');
        $password = $this->input->post('password');

        if ( $email || $password )
        {
            // Validation
            $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|callback_email_already_registered');
            $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]|max_length[32]');

            if ( $this->form_validation->run() == FALSE )
            {
                $this->data['title'] = 'Office Share NYC | Signup';
                $this->load->view('smartass_controller/signup', $this->data);
                return;
            }
            else
            {
                // Register user in db
                $user = new User_model();
                if ( $user->create($email, $password) )
                {
                    if ( $res = $user->login($email, $password) )
                    {
                        $data = array(
                            'id' =>  $res->id,
                            'email' =>  $res->email
                        );

                        $this->session->set_userdata($data);
                        return;
                    }
                    else
                    {
                        $this->data['title'] = 'Office Share NYC | Login';
                        $this->load->view('user_controller/login', $this->data);
                        return;
                    }
                }
                else
                {
                    $this->data['title'] = 'Office Share NYC | Signup';
                    $this->load->view('smartass_controller/signup', $this->data);
                }
            }

        }

        $this->data['title'] = 'Office Share NYC | Signup';
        $this->load->view('smartass_controller/signup', $this->data);
    }







    // Validation stuff
    function email_already_registered($email)
    {
        $query = $this->db->get_where('users', array('email' => $email));
        if( $query->num_rows() > 0 )
        {
            $this->form_validation->set_message('email_already_registered', 'This email has already been registered.');
            return FALSE;
        }
        else
        {
            return TRUE;
        }
    }

}

/* End of file home.php */
/* Location: ./application/controllers/smartass.php */