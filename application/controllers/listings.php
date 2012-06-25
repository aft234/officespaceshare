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
        $email = '';
        $address = '';
        $zipcode = '';
        $desks_available = '';
        $desk_price = '';
        $lease_duration = '';
        $details = '';

        $email = $this->input->post('email');
        $address = $this->input->post('address');
        $zip_code = $this->input->post('zip_code');
        $desks_available = $this->input->post('desks_available');
        $desk_price = $this->input->post('desk_price');
        $lease_duration = $this->input->post('lease_duration');
        $details = $this->input->post('details');

        if ($this->input->server('REQUEST_METHOD') == 'POST')
        {
            // Validation
            $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
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
                $listing = new Listings_model();
                if ( $res = $listing->create($email, $address, $zipcode, $desks_available, $desk_price, $lease_duration, $details) )
                {
                    // Email Anthony and Josh
                    $email = new Email_model();
                    $email->send($email, 'anthony.tumbiolo@gmail.com', 'josh.kehn@gmail.com', 'New Listing Inquiry', 'New Listing Cheahhhh');

                    // Sucess Page
                    $this->data['title'] = 'Office Share NYC | Listing Created';
                    $this->load->view('listings_controller/success', $this->data);
                    return;
                }
                else
                {
                    $this->data['title'] = 'Office Share NYC | Signup';
                    $this->load->view('listings_controller/list_space', $this->data);
                    return;
                }
            }

        }

        $this->data['title'] = 'Office Share NYC | List Space';
        $this->load->view('listings_controller/list_space', $this->data);
    }

    public function show ()
    {
        $this->data['title'] = 'Office Share NYC | Find a Space';
        $this->load->view('listings_controller/spaces', $this->data);
    }

    public function message ()
    {
        $from_email = '';
        $subject = '';
        $message = '';

        $from_email = $this->input->post('from_email');
        $subject = "OfficeShareNYC - I'm interested in your space!'";
        $message = $this->input->post('message');

        if ( $from_email || $subject || $message )
        {
            // Validation
            $this->form_validation->set_rules('from_email', 'From', 'trim|required|valid_email');

            if ( $this->form_validation->run() == FALSE )
            {
                $this->data['title'] = 'Office Share NYC | Message';
                $this->load->view('listings_controller/message', $this->data);
                return;
            }
            else
            {
                // Send message
                $email = new Email_model();
                $email->send($from_email, 'anthony.tumbiolo@gmail.com', 'josh.kehn@gmail.com', $subject, $message);

                // Sucess Page
                $this->data['title'] = 'Office Share NYC | Listing Created';
                $this->load->view('listings_controller/email_inquiry_success', $this->data);
                return;
            }

        }

        $this->data['title'] = 'Office Share NYC | Message';
        $this->load->view('listings_controller/message', $this->data);
    }

}

/* End of file listings.php */
/* Location: ./application/controllers/listings.php */