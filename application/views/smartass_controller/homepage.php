<?php $this->load->view('shared/header'); ?>

<div class="container">

    <?php echo $this->load->view('shared/logo'); ?>

    <div class="row">
        <div class="offset2 span8">
            <div class="well" id="value-prop">
                In NYC it can be difficult to either <strong>find a small number of desks</strong> or to <strong>find people to take a desk or two</strong> in an office. We want to make it easy.
            </div>
        </div>
    </div>

    <div class="row">
        <div class="span3">&nbsp;</div>
        <a href="<?php echo site_url('smartass/spaces'); ?>" class=""><button class="homepage-buttons span3" style="margin-left:0">I need desks</button></a>
        <div class="span1">&nbsp;</div>
        <a href="<?php echo site_url('smartass/list_space'); ?>" class=""><button class="homepage-buttons span3" style="margin-left:0">
            <span >I have desks</span>
        </button></a>
    </div>

    <div class="clear"></div>

    <h2 id="featured-title">Featured Listing</h2>

    <div class="row" id="featured-container">
        <div class="span4">&nbsp;</div>
        <a href="<?php echo site_url('smartass/spaces'); ?>">
            <div class="span4">
                <div class="featured-listing">
                    <p class="listing-title">2 desks at 44 Wall St 13th Floor</p>
                    <p class="listing-description">We are a group of 3, 2 software developers and 1 stock broker looking to move into a bigger corner office on the 13th floor. We need to fill 2 desks.</p>
                </div>
            </div>
        </a>
    </div>

</div>

<?php $this->load->view('shared/navbar'); ?>

<?php $this->load->view('shared/footer'); ?>