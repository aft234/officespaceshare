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
        $email = '';
        $password = '';

        $email = $this->input->post('email');
        $password = $this->input->post('password');

        if ( $email || $password )
        {
            // Validation
            $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|callback_invalid_combo[' . $password . ']');
            $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]|max_length[32]');

            if ( $this->form_validation->run() == FALSE )
            {
                $this->data['title'] = 'Office Share NYC | Login';
                $this->load->view('user_controller/login', $this->data);
                return;
            }
            else
            {
                // Register user in db
                $user = new User_model();
                if ( $res = $user->login($email, $password) )
                {
                    $data = array(
                        'id' =>  $res->id,
                        'email' =>  $res->email
                    );

                    $this->session->set_userdata($data);
                    error_log('Successful Login');
                    redirect('/smartass/homepage');
                }
                else
                {
                    $this->data['title'] = 'Office Share NYC | Login';
                    $this->load->view('user_controller/login', $this->data);
                }
            }

        }

        $this->data['title'] = 'Office Share NYC | Login';
        $this->load->view('user_controller/login', $this->data);
    }

    function logout ()
    {
        $this->session->sess_destroy();
        redirect('/smartass/homepage');
    }


    // Validation
    function invalid_combo($email, $password)
    {
        $query = $this->db->get_where('users', array('email' => $email, 'password'=>$password));

        if( $query->num_rows() == 0 )
        {
            $this->form_validation->set_message('invalid_combo', 'Invalid username/password combo.');
            return FALSE;
        }
        else
        {
            return TRUE;
        }
    }

}

/* End of file home.php */
/* Location: ./application/controllers/user.php */