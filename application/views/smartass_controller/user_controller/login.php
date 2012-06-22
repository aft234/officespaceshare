<?php $this->load->view('shared/header'); ?>

<div class="container">

    <?php echo $this->load->view('shared/logo'); ?>

    <div class="row">
        <div class="offset3 span6">
            <form class="well form-horizontal" id="list-space">
                <h2>Login</h2>
                <fieldset>
                    <div class="control-group">
                        <label class="control-label" for="input01">Email</label>
                        <div class="controls">
                            <input type="text" class="input-xlarge" id="input01">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="input01">Password</label>
                        <div class="controls">
                            <input type="text" class="input-xlarge" id="input01">
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