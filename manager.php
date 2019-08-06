<html>
<head>
<link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="home_style.css"/>
<link rel="stylesheet" href="manager_style.css"/>
</head>
<body>

<!--header section-->
<?php
include("fg.php");
?>

<!--sider section-->
<div class="row">
<section class="sider col-md-6 col-sm-6 col-xs-6">
<div class="a col-md-12 col-sm-12 col-xs-12">
<div class="a1">
<h3>Manage User Account</h3>
<ul>
<li><a href="adduser.php" >Add User Account</a></li>
<li><a href="updateuser.php" >Update User Account</a></li>
<li><a href="deleteuser.php" >Delete User Account</a></li>
</ul>
</div>
</div>
<div class="c col-md-12 col-sm-12 col-xs-12">
<div class="c2">
<h3>Related Links</h3>
<ul>
<li><a href="comment.php">Comments</a></li>
<li><a href="reservation.php" >View Reservations</a></li>
</ul>
</div>
</div>
</section>

<section class="link col-md-6 col-sm-6 col-xs-6">
<div class="d">
<img src="image/welcome.png"  style="height:100%; width:100%;"/>
</div>
</section>
</div>


<section class="foot">
<?php 
include('footer.php');
?>
</section>
</body>
</html>







