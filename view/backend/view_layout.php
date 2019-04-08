<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="public/backend/css/bootstrap.min.css">
  <script type="text/javascript" src="public/backend/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="public/backend/ckeditor/ckeditor.js"></script>
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">DKT-STORE</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="admin.php">Trang chủ</a></li>
            <li class="active"><a href="admin.php?controller=category_product">Danh mục sản phẩm</a></li>
            <li class="active"><a href="admin.php?controller=product">Sản phẩm</a></li>
            <li class="active"><a href="admin.php?controller=order">Đơn hàng</a></li>
            <li class="active"><a href="admin.php?controller=static">Thống kê</a></li>
            <li class="active"><a href="admin.php?controller=slide">Slide show</a></li>
            <li class="active"><a href="admin.php?controller=support_online">Support online</a></li>
            <li class="active"><a href="admin.php?controller=news">Tin tức</a></li>
            <li class="active"><a href="admin.php?controller=user">User</a></li>
            <li class="active"><a href="admin.php?controller=logout">Logout</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    <div class="container" style="margin-top: 70px;">
    	<?php 
        if(file_exists($controller) == true)
         include $controller;
      ?>
    </div>
</body>
</html>