<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Portfolio PHP</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Bootstrap -->
	<link href= "/css/bootstrap.min.css" rel="stylesheet">
  <style type="text/css">
    <?php include "css/bootstrap.min.css";  ?>
  </style>

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
      <![endif]-->
      <link rel="stylesheet" type="text/css" href="/css/style.css">
  <style type="text/css">
    <?php include "css/style.css";  ?>
  </style>
</head>
<body>

 <div class="nav navbar-inverse navbar-static-top">
  <div class="container">
    <div class="navbar-header">

      <button type="btn button" class="navbar-toggle" data-target="#responsive-menu" data-toggle="collapse">
        <span class="sr-only">Open navigation</span> 
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand logo" href="/"><img class="img-responsive logo" src="http://findicons.com/files/icons/2711/free_icons_for_windows8_metro/128/workers.png">  </a>

    </div>

    <div class="collapse navbar-collapse" id="responsive-menu">
      <ul class="nav navbar-nav">
       <?php foreach ($headerCategories as $value): ?>
        <li><a href=" <?php echo $value->url ?> "><?php echo $value->title ?></a></li>
      <?php endforeach ?>
    </ul>
  </div>
</div>
</div>
