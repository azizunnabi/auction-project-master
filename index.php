<?php require_once 'core/init.php'; ?>
<?php require_once 'core/func/function.php'; ?>
<!DOCTYPE html>
<html>
<head>
<!--devided index page in parts-->
<?php require_once 'parts/header.php'; ?><!--header area-->
</head>
<body>
<?php require_once 'parts/nav.php';?><!--nav area-->
<div class="container"><!--banner container-->
<!--contact area-->
<?php require_once 'parts/banner.php';?>
</div><!--banner-container close-->
<hr>
<div class="container"><!--slider and cat container-->
<?php require_once 'parts/cate_slider.php';?>
</div><!--slider and cat container end-->
<hr>
<div class="container padding-top"><!--products are container-->

<!--products area-->
<?php require_once 'parts/products.php';?>
<!--products are close-->
<!--start pagination-->
<?php require_once 'parts/pagination.php';?>
<!--close pagination row-->
</div><!--close porducts area container-->

<!--footer area start-->
<?php require_once 'parts/footer.php';?>
<!--close footer-->


<div class="clear"></div>
<!--bottom footer start-->
<!--bottom footer clsoe-->


<?php require_once 'parts/javascript_files.php';?>
</body>
</html>