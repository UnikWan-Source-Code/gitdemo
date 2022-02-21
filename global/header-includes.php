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
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="description" content="Template by CocoBasic" />
<meta name="keywords" content="HTML, CSS, JavaScript, PHP" />
<meta name="author" content="CocoBasic" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

<link rel="shortcut icon" href="assets/images/favicon.ico" />

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;500;700&display=swap" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick-theme.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo $docroot; ?>assets/css/style.css" />
<link rel="stylesheet" type="text/css" href="<?php echo $docroot; ?>assets/css/responsive.css" />
<link rel="stylesheet" type="text/css" href="<?php echo $docroot; ?>assets/css/octanium.css" />
<link rel="stylesheet" type="text/css" href="<?php echo $docroot; ?>assets/css/animate.css" />

<script src="https://kit.fontawesome.com/0f1af461c3.js" crossorigin="anonymous"></script>