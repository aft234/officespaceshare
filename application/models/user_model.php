<?php

class User_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }

    function create ($email, $password)
    {
        $new_user_insert_data = array(
            'email'     =>  $email,
            'password'  =>  $password
        );

        $insert = $this->db->insert('users', $new_user_insert_data);

        return $insert;
    }

    function login ($email, $password)
    {
        $query = $this->db->get_where('users', array('email' => $email, 'password'=>$password));

        if( $query->num_rows() == 1 )
        {
            return $row = $query->row();
        }
        else
        {
            return false;
        }
    }

}


/* End of file user_model.php */
/* Location: ./application/controllers/user_model.php */