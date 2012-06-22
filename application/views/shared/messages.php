<?php
    if ($this->session->userdata('errors'))
    {
        foreach ($this->session->userdata('errors') as $error)
        {
            ?>
                <div class="error clear">
                    <?php
                        echo $error;
                    ?>
                </div>
            <?php
        }
        $this->session->unset_userdata('errors');
    }

    if ($this->session->userdata('notices'))
    {
        foreach ($this->session->userdata('notices') as $notice)
        {
            ?>
                <div class="notice clear ">
                    <?php
                        echo $notice;
                    ?>
                </div>
            <?php
        }
        $this->session->unset_userdata('notices');
    }
    if ($this->session->userdata('successes'))
    {
        foreach ($this->session->userdata('successes') as $success)
        {
            ?>
                <div class="success clear ">
                    <?php
                        echo $success;
                    ?>
                </div>
            <?php
        }
        $this->session->unset_userdata('successes');
    }
?>
