<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
<!--<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>-->
<link href="main.css" rel="stylesheet" type="text/css">
</head>

<body>

<div class="container">
<!-- You will only include things that will stay the same on your page. Like your header and footer.-->

  <?php include_once('includes/header.php'); ?>
  
  
  <?php require_once('includes/sidebar1.php'); ?>
  
  <?php require_once('includes/article.php'); ?>
  
  
  <?php require_once('includes/aside.php'); ?>
  
  <?php include('includes/footer.php'); ?>
  
  <!-- end .container --></div>
</body>
</html>
