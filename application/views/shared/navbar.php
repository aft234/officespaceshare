<?php
$logged_in = false;
if ( $this->session->userdata('email') )
{
    $logged_in = true;
}
?>

<!-- Navbar -->
<div class="navbar navbar-fixed-bottom">
    <div class="navbar-inner">
        <div class="container">
            <ul class="pull-right nav">
                <!-- <li>
                    <a href="">Available Spaces</a>
                </li>
                <li>
                    <a href="">List a Space</a>
                </li> -->
                <li class="divider-vertical"></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <?php echo ( $logged_in ) ? $this->session->userdata('email') : 'NAV'; ?>
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
                            <li><a href="<?php echo site_url('smartass/signup'); ?>">Signup</a></li>
                            <li><a href="<?php echo site_url('user/login'); ?>">Login</a></li>
                            <?php
                        }
                        ?>
                        <li><a href="<?php echo site_url('smartass/list_space'); ?>">List a Space</a></li>
                        <li><a href="<?php echo site_url('smartass/spaces'); ?>">Available Spaces</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>