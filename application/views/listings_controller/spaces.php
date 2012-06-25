<?php $this->load->view('shared/header'); ?>

<div class="container">

    <?php echo $this->load->view('shared/logo'); ?>

    <h2 id="available-spaces">Available Spaces</h2>

    <div class="row" id="spaces">
        <div class="span10 offset1 available-space featured" data-id="">
            <p class="listing-title">2 desks at 44 Wall St 13th Floor</p>
            <p class="listing-description">We are a group of 3, 2 software developers and 1 stock broker looking to move into a bigger corner office on the 13th floor. We need to fill 2 desks.</p>
            <?php
            $address = '44 Wall St.';
            // manipulate address to only get what needed for google map api
            $google_address = explode('(', $address);
            $google_address = trim($google_address[0]);
            $google_address = str_replace(' ', '+', $google_address);
            ?>
            <p class="address"><em>Address:</em> <?php echo $address ?> - <a id="googlemaps" href="#map">Google Map</a>
                <div style="display:none">
                    <div id="map">
                        <img src="https://maps.googleapis.com/maps/api/staticmap?center=<?php echo $google_address; ?>,New+York,NY&zoom=15&size=500x400&maptype=roadmap&markers=color:red%7Clabel:A%7C<?php echo $google_address?>,New+York,NY&sensor=false" />
                    </div>
                </div>
            </p>
            <p class="desks-available"><em>Desks Available:</em> 2</p>
            <p class="desk-price"><em>Price per Desk:</em> $315</p>
            <p class="lease-duration"><em>Lease Duration:</em> 6 months</p>

            <span style="display:none" class="contact-lister" data-id="">
                <center><a href="<?php echo site_url('listings/message'); ?>" class="" ><button class="contact-button" style="margin-top: -200px">Contact</button></a></center>
            </span>
        </div>

    </div>

    <div class="span4">&nbsp;</div>
    <a href="<?php echo site_url('listings/create'); ?>" class=""><button class="homepage-buttons span4" style="margin-left:0">
        <span >Create a Listing</span>
    </button></a>

</div>

<?php $this->load->view('shared/navbar'); ?>

<script type="text/javascript">

jQuery(function() {
    $("a#googlemaps").fancybox({
        'hideOnContentClick': false,
        'autoDimensions': false,
        'height': 403,
        'width' : 500
    });

    var contactButton = $('.contact-lister');
    var availableSpace = $('.available-space');
    $(availableSpace).live('mouseenter', function() {
        contactButton.fadeIn('slow');
    });

    $(availableSpace).live('mouseleave', function() {
        contactButton.hide();
    });
})

</script>

<?php $this->load->view('shared/footer'); ?>