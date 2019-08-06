<html>
<head>
<link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="home_style.css"/>
<link rel="stylesheet" href="dist/css/lightbox.min.css">
<style>
.innercircle{
	margin-top:12%;
}
.example-image {

    width: 32%;
    height: 38%;
    margin-top: 2%;
    margin-left: 1%;

}

.shrinkToFit {

    width: 10%;
    height: 10%;

}
</style>
</head>
<body>
<!--header section-->
<?php 
include("fg.php");
?>



<!--innercircle section-->
<section class="innercircle col-md-12 col-sm-12 col-xs-12"><center>
<h2>PARKVIEW INNERCIRCLE</h2></center>
<div class="gallery col-md-12">
<?php
include("lightbox.php");
?>
</section>

<!--footer section-->
<?php
include("footer.php");
?>

</body>
</html>