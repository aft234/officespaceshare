<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Listings extends MY_Controller {

    public function __construct ()
    {
        parent::__construct();
        // $this->load->library(array());
        // $this->load->model(array());
    }

    public function create ()
    {
        $address = '';
        $zipcode = '';
        $desks_available = '';
        $desk_price = '';
        $lease_duration = '';
        $details = '';

        $address = $this->input->post('address');
        $zip_code = $this->input->post('zip_code');
        $desks_available = $this->input->post('desks_available');
        $desk_price = $this->input->post('desk_price');
        $lease_duration = $this->input->post('lease_duration');
        $details = $this->input->post('details');

        if ( $address || $zipcode || $desks_available || $desk_price || $lease_duration || $details )
        {
            // Validation
            $this->form_validation->set_rules('address', 'Address', 'required');
            $this->form_validation->set_rules('zip_code', 'Zip Code', 'trim|required|min_length[5]|max_length[5]|integer');
            $this->form_validation->set_rules('desks_available', 'Desks Available', 'trim|required|integer');
            $this->form_validation->set_rules('desk_price', 'Price per Desk', 'trim|required|integer');
            $this->form_validation->set_rules('lease_duration', 'Lease Duration', 'trim|required|integer');

            if ( $this->form_validation->run() == FALSE )
            {
                $this->data['title'] = 'Office Share NYC | List Space';
                $this->load->view('listings_controller/list_space', $this->data);
                return;
            }
            else
            {
                // Save in db
                return;
            }

        }

        $this->data['title'] = 'Office Share NYC | List Space';
        $this->load->view('listings_controller/list_space', $this->data);
    }

    public function show ()
    {
        $this->data['title'] = 'Office Share NYC | Find a Space';
        $this->load->view('listings_controller/list', $this->data);
    }

}

/* End of file listings.php */
/* Location: ./application/controllers/listings.php */