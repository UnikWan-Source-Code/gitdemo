<?php
$directoryURI = $_SERVER['REQUEST_URI'];
$path = parse_url($directoryURI, PHP_URL_PATH);
$components = explode('/', $path);
$first_part = $components[2];
$docroot = '../';
?>
<?php if ($first_part == "") {
  $docroot = './';
}  ?>
<header class="header-holder">
    <div class="menu-wrapper center-relative relative">
        <div class="header-logo">
            <a href="<?php echo $docroot; ?>">
                <h2 style='color:#FDE8BC;font-size:34px'>playful degens</h2>
            </a>
        </div>

        <div class="toggle-holder">
            <div id="toggle">
                <div class="first-menu-line"></div>
                <div class="second-menu-line"></div>
                <div class="third-menu-line"></div>
            </div>
        </div>

        <div class="menu-holder">
            <nav id="header-main-menu">
                <ul class="main-menu sm sm-clean">
                    <li>
                        <a href="<?php echo $docroot; ?>#octa-roadmap">Roadmap</a>
                    </li>
                    <li>
                        <a href="<?php echo $docroot; ?>#octa-meta">Metaverse</a>
                    </li>
                    <li>
                        <a href="<?php echo $docroot; ?>#octa-team">Team</a>
                    </li>
                    <li>
                        <a href="<?php echo $docroot; ?>#octa-faq">FAQ</a>
                    </li>
                    <!-- <li>
                  <a href="<?php echo $docroot; ?>#">Opeansea</a>
                </li> -->
                    <li>
                        <a href="<?php echo $docroot; ?>mint" class="button border-o mint-btn <?php if ($first_part == "") {
                                                                                        echo "";
                                                                                    } else {
                                                                                        echo 'active';
                                                                                    } ?>">MINT</a>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="clear"></div>
    </div>
</header>