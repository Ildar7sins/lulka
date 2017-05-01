<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Portfolio PHP</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Bootstrap -->
  <style type="text/css">
    <?php  include "css/bootstrap.min.css";  ?>
  </style>
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
      <![endif]-->
  <style type="text/css">
    <?php include "css/style.css";  ?>
  </style>
</head>
<body>

 <div class="nav navbar-inverse navbar-static-top text-center">
  <div class="container">
    <div class="navbar-header">

      <button type="btn button" class="navbar-toggle" data-target="#responsive-menu" data-toggle="collapse">
        <span class="sr-only">Open navigation</span> 
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    

    </div>

    <div class="collapse navbar-collapse text-center" id="responsive-menu">
      <ul class="nav navbar-nav" id="navbar">
       <?php foreach ($headerCategories as $value): ?>
        <li><a href=" <?php echo $value->url ?> "><?php echo $value->title ?></a></li>
      <?php endforeach ?>
      <li><i class="fa fa-phone fa-2x" style="color: white;" aria-hidden="true"><a href="#">8(937)331-51-55</a></i></li>
    </ul>
  </div>
</div>
</div>
