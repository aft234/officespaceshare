<?php

class Message
{
    public $errors;
    public $notices;
    public $successes;

    private $CI;

    public function __construct()
    {
        $sid = session_id();

        if(!isset($sid))
        {
            session_start();
        }

        $this->CI =& get_instance();

        $this->_load_messages();
    }

    public function reload()
    {
        $this->_load_messages();
    }

    public function reset()
    {
        $this->clear_session();
        $this->clear_messages();
    }

    public function clear_session()
    {
        $this->clear_session_errors();
        $this->clear_session_notices();
        $this->clear_session_successes();
    }

    public function clear_messages()
    {
        $this->clear_errors();
        $this->clear_notices();
        $this->clear_successes();
    }

    public function clear_session_errors()
    {
        $this->CI->session->unset_userdata('errors');
    }
    public function clear_errors()
    {
        $this->errors = array();
    }

    public function clear_session_notices()
    {
        $this->CI->session->unset_userdata('notices');
    }

    public function clear_notices()
    {
        $this->notices = array();
    }

    public function clear_session_successes()
    {
        $this->CI->session->unset_userdata('successes');
    }

    public function clear_successes()
    {
        $this->successes = array();
    }

    public function has_errors()
    {
        return ( !empty($this->errors) );
    }

    public function has_notices()
    {
        return ( !empty($this->notices) );
    }

    public function has_successes()
    {
        return ( !empty($this->successes) );
    }

    public function next_error()
    {
        return array_shift($this->errors);
    }

    public function next_notice()
    {
        return array_shift($this->notices);
    }

    public function next_success()
    {
        return array_shift($this->successes);
    }

    private function _load_messages()
    {
        $this->clear_errors();
        $this->clear_notices();
        $this->clear_successes();

        $ers = $this->CI->session->userdata('errors');
        if($ers)
        {
            foreach($ers as $e)
            {
                $this->add_error($e);
            }
        }

        $ntc = $this->CI->session->userdata('notices');
        if($ntc)
        {
            foreach($ntc as $n)
            {
                $this->add_notice($n);
            }
        }

        $scc = $this->CI->session->userdata('successes');
        if($scc)
        {
            foreach($scc as $s)
            {
                $this->add_success($s);
            }
        }
    }

    public function add_error($message)
    {
        if(!is_array($message))
        {
            $message = array($message);
        }

        foreach($message as $m)
        {
            $this->errors[] = $m;
        }

        $this->CI->session->set_userdata('errors', $this->errors);
    }

    public function add_notice($message)
    {
        array_push($this->notices, $message);

        $this->CI->session->set_userdata('notices', $this->notices);
    }

    public function add_success($message)
    {
        array_push($this->successes, $message);

        $this->CI->session->set_userdata('successes', $this->successes);
    }
}
/* End of file message.php */
/* Location: /system/application/libraries/message.php */