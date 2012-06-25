<?php
( $this->session->userdata('email') ) ? $logged_in = true : $logged_in = false;
?>

<!-- Navbar -->
<div class="navbar navbar-fixed-bottom">
    <div class="navbar-inner">
        <div class="container">
            <ul class="pull-right nav">
                <li class="divider-vertical"></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <?php echo ( $logged_in ) ? $this->session->userdata('email') : 'MENU'; ?>
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu">
                        <?php
                        if ( $logged_in )
                        {
                            ?>
                            <li><a href="<?php echo site_url('user/logout'); ?>">Logout</a></li>
                            <li><a href="">My Listings</a></li>
                            <?php
                        }
                        else
                        {
                            ?>
                            <!-- <li><a href="<?php echo site_url('smartass/signup'); ?>">Signup</a></li>
                            <li><a href="<?php echo site_url('user/login'); ?>">Login</a></li> -->
                            <?php
                        }
                        ?>
                        <li><a href="<?php echo site_url('listings/create'); ?>">List a Space</a></li>
                        <li><a href="<?php echo site_url('listings/show'); ?>">Available Spaces</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>