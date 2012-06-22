<?php $this->load->view('shared/header'); ?>

<div class="container">

    <?php echo $this->load->view('shared/logo'); ?>

    <div class="row">
        <div class="offset3 span6">
            <form class="well form-horizontal" id="list-space">
                <h2>List a Space</h2>
                <fieldset>
                    <div class="control-group">
                        <label class="control-label" for="input01">Address</label>
                        <div class="controls">
                            <input type="text" class="input-xlarge" id="input01">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="input01">Zip Code</label>
                        <div class="controls">
                            <input type="text" class="input-xlarge" id="input01">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="input01">Desks Available</label>
                        <div class="controls">
                            <input type="text" class="input-xlarge" id="input01">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="input01">Price per Desk</label>
                        <div class="controls">
                            <input type="text" class="input-xlarge" id="input01">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="input01">Lease Duration (in months)</label>
                        <div class="controls">
                            <input type="text" class="input-xlarge" id="input01">
                        </div>
                    </div>


                    <div class="control-group">
                        <label class="control-label" for="textarea">Other Details (e.g. who else would be sharing the space)</label>
                        <div class="controls">
                            <textarea class="input-xlarge" id="textarea" rows="3"></textarea>
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