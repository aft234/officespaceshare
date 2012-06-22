<?php $this->load->view('shared/header'); ?>

<div class="container">

    <?php echo $this->load->view('shared/logo'); ?>

    <div class="row">
        <div class="offset3 span6">
            <form class="well form-horizontal" id="list-space" action="<?php echo site_url('listings/create'); ?>" method="post">
                <h2>List a Space</h2>

                <?php echo validation_errors('<div class="alert alert-error">', '</div>'); ?>

                <fieldset>
                    <div class="control-group">
                        <label class="control-label" for="address">Address</label>
                        <div class="controls">
                            <input type="text" class="input-xlarge" id="address" name="address" value="<?php echo set_value('address'); ?>">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="zip_code">Zip Code</label>
                        <div class="controls">
                            <input type="text" class="input-xlarge" id="zip_code" name="zip_code" value="<?php echo set_value('zip_code'); ?>" >
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="desks_available">Desks Available</label>
                        <div class="controls">
                            <input type="text" class="input-xlarge" id="desks_available" name="desks_available" value="<?php echo set_value('desks_available'); ?>" >
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="desk_price">Price per Desk</label>
                        <div class="controls">
                            <input type="text" class="input-xlarge" id="desk_price" name="desk_price" value="<?php echo set_value('desk_price'); ?>" >
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="lease_duration">Lease Duration (in months)</label>
                        <div class="controls">
                            <input type="text" class="input-xlarge" id="lease_duratioin" name="lease_duration" value="<?php echo set_value('lease_duration'); ?>">
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="details">Other Details (e.g. who else would be sharing the space)</label>
                        <div class="controls">
                            <textarea class="input-xlarge" id="details" name="details" value="<?php echo set_value('details'); ?>" rows="3"></textarea>
                        </div>
                    </div>
                    <center><input type="submit" value="List Space!" /></center>
                </fieldset>
            </form>



        </div>
    </div>

</div>

<?php $this->load->view('shared/navbar'); ?>

<?php $this->load->view('shared/footer'); ?>