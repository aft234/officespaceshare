<?php $this->load->view('shared/header'); ?>

<div class="container">

    <?php echo $this->load->view('shared/logo'); ?>

    <div class="row">
        <div class="offset3 span6">
            <form class="well form-horizontal" id="list-space" action="<?php echo site_url('user/login'); ?>" method="post">
                <h2>Login</h2>

                <?php echo validation_errors('<div class="alert alert-error">', '</div>'); ?>

                <fieldset>

                    <div class="control-group">
                        <label class="control-label" for="email">Email</label>
                        <div class="controls">
                            <input type="text" class="input-xlarge" id="email" name="email" value="<?php echo set_value('email'); ?>" />
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="password">Password</label>
                        <div class="controls">
                            <input type="password" class="input-xlarge" id="password" name="password" />
                        </div>
                    </div>

                    <center><input type="submit" value="Login!" /></center>
                </fieldset>
            </form>



        </div>
    </div>

</div>

<?php $this->load->view('shared/navbar'); ?>

<?php $this->load->view('shared/footer'); ?>