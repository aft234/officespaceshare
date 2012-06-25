<?php $this->load->view('shared/header'); ?>

<div class="container">

    <?php echo $this->load->view('shared/logo'); ?>

    <div class="row">
        <div class="offset3 span6 well" id="listing-success">

            <p>Your listing has been created! You can see you listing on the <a href="<?php echo site_url('listings/show'); ?>">Available Spaces page</a>. We'll send you an email when someone is interested. If you have any questions or concerns, please don't hesitate to contact us at <a href="mailto:anthony.tumbiolo@gmail.com">anthony.tumbiolo@gmail.com</a></p>

        </div>
    </div>

</div>

<?php $this->load->view('shared/navbar'); ?>

<?php $this->load->view('shared/footer'); ?>