<?php $this->load->view('shared/header'); ?>

<div class="container">

    <?php echo $this->load->view('shared/logo'); ?>

    <div class="row">
        <div class="offset3 span6">
            <form class="well form-horizontal" id="list-space" action="<?php echo site_url('listings/message'); ?>" method="post">
                <h2>Message</h2>

                <?php echo validation_errors('<div class="alert alert-error">', '</div>'); ?>

                <fieldset>
                    <div class="control-group">
                        <label class="control-label" for="from_email">From:</label>
                        <div class="controls">
                            <input type="text" class="input-xlarge" id="from_email" name="from_email" value="<?php echo set_value('from_email'); ?>" placeholder="Your email address" />
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="subject">Subject:</label>
                        <div class="controls">
                            <span class="input-xlarge uneditable-input" id="subject" style="font-family:'Helvetica Neue'">OfficeShareNYC - I'm interested in your space!</span>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="message">Message:</label>
                        <div class="controls">
                            <textarea class="input-xlarge" id="message" name="details" value="<?php echo set_value('message'); ?>" rows="6" placeholder="Any specific questions?"></textarea>
                        </div>
                    </div>
                    <center><input type="submit" value="Send" /></center>
                </fieldset>
            </form>



        </div>
    </div>

</div>

<?php $this->load->view('shared/navbar'); ?>

<?php $this->load->view('shared/footer'); ?>