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
<!--Load JavaScript-->
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick.min.js"></script>
<!-- <script src="js/jquery.js"></script> -->
<script src="<?php echo $docroot; ?>assets/js/jquery.sticky.js"></script>
<script src="<?php echo $docroot; ?>assets/js/tipper.js"></script>
<script src="<?php echo $docroot; ?>assets/js/jarallax.js"></script>
<script src="<?php echo $docroot; ?>assets/js/jarallax-element.min.js"></script>
<script src="<?php echo $docroot; ?>assets/js/imagesloaded.pkgd.js"></script>
<script src="<?php echo $docroot; ?>assets/js/jquery.fitvids.js"></script>
<script src="<?php echo $docroot; ?>assets/js/jquery.smartmenus.min.js"></script>
<script src="<?php echo $docroot; ?>assets/js/isotope.pkgd.js"></script>
<script src="<?php echo $docroot; ?>assets/js/owl.carousel.min.js"></script>
<script src="<?php echo $docroot; ?>assets/js/jquery.sticky-kit.min.js"></script>
<script src="<?php echo $docroot; ?>assets/js/main.js"></script>
<script src="<?php echo $docroot; ?>assets/js/functions.js"></script>
<script src="<?php echo $docroot; ?>assets/js/wow.js"></script>


<script>
new WOW().init();
</script>