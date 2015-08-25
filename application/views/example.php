<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">


<title>GETFIT - YOUR ONLINE ACTIVITY TRACKER</title>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/font-awesome.min.css" rel="stylesheet">
<link href="css/bootstrap-social.css" rel="stylesheet">
<link href="css/theme.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">




<?php
foreach($css_files as $file): ?>
<link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
<?php endforeach; ?>
<?php foreach($js_files as $file): ?>
<script src="<?php echo $file; ?>"></script>
<?php endforeach; ?>



<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    
    	
<style type='text/css'>
body {
	font-family: Arial;
	font-size: 14px;
}

a {
	color: blue;
	text-decoration: none;
	font-size: 14px;
}

a:hover {
	text-decoration: underline;
}
</style>
</head>
<body>
<div><a href='<?php echo site_url('examples/customers_management')?>'>Customers</a>
| <a href='<?php echo site_url('examples/orders_management')?>'>Orders</a>
| <a href='<?php echo site_url('examples/products_management')?>'>Products</a>
| <a href='<?php echo site_url('examples/offices_management')?>'>Offices</a>
| <a href='<?php echo site_url('examples/employees_management')?>'>Employees</a>
| <a href='<?php echo site_url('examples/film_management')?>'>Films</a>
| <a href='<?php echo site_url('examples/multigrids')?>'>Multigrid
[BETA]</a></div>
<div style='height: 20px;'></div>
<div><?php echo $output; ?></div>






</body>
</html>
