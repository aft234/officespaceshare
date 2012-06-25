<?php

class Email_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
        $this->load->library('email');
    }

    function send ( $from, $to, $cc = '', $subject = '', $body = '' )
    {
        $this->email->from($from);
        $this->email->to($to);
        $this->email->cc($cc);

        $this->email->subject($subject);
        $this->email->message($body);

        $this->email->send();

        error_log($this->email->print_debugger());

        return;
    }

}


/* End of file email_model.php */
/* Location: ./application/controllers/email_model.php */