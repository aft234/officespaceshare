<?php

class Listings_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }

    function create ( $email, $address, $zipcode, $desks_available, $desk_price, $lease_duration, $details )
    {
        $new_user_insert_data = array(
            'email'             =>      $email,
            'address'           =>      $address,
            'zipcode'           =>      $zipcode,
            'desks_available'   =>      $desks_available,
            'desk_price'        =>      $desk_price,
            'lease_duration'    =>      $lease_duration,
            'details'           =>      $details
        );

        $insert = $this->db->insert('listings', $new_user_insert_data);

        return $insert;
    }

}


/* End of file listings_model.php */
/* Location: ./application/controllers/listings_model.php */