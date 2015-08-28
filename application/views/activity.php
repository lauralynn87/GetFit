
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>GETFIT - YOUR ONLINE ACTIVITY TRACKER </title>
   <link href="<?php   echo  base_url('/application/assets/css/')?>/bootstrap.min.css" rel="stylesheet">
   <link rel="stylesheet" type="text/css" href="<?php   echo  base_url('/application/assets/css/')?>/bootstrap.min.css">
    <link href="<?php   echo  base_url('/application/assets/css/')?>/bootstrap-social.css" rel="stylesheet">
    <link href="<?php   echo  base_url('/application/assets/css/')?>/theme.css" rel="stylesheet">
    <link href="<?php   echo  base_url('/application/assets/css/')?>/styles.css" rel="stylesheet">
    
    

    
    
    
<?php
foreach($css_files as $file): ?>
	<link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
<?php endforeach; ?>


<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    


<?php foreach($js_files as $file): ?>
	<script src="<?php echo $file; ?>"></script>
<?php endforeach; ?>
<style type='text/css'>
body
{
	font-family: Arial;
	font-size: 14px;
}
a {
    color: blue;
    text-decoration: none;
    font-size: 14px;
}
a:hover
{
	text-decoration: underline;
}
</style>
</head>
<body>


<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><STRONG>GET</STRONG>FIT</a>
      
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a>WELCOME
        <?php if(isset($auth_user_id)){
                	$user=strtoupper($auth_user_name);
        	echo'<b>'; 
                	
        
                	echo $user;	
 echo'</b>';
        }?>
        </a>
        </li>
        <li><a href='<?php echo site_url('activities/home')?>'>HOME</a> </li>	
      
        <li><a href='<?php echo site_url('activities/showgoals')?>'>GOALS</a> </li>
          <li><a href='<?php echo site_url('activities/showactivities')?>'>ACTIVITIES</a> </li>
        <?php if (isset($auth_user_id)){
        	?>
        	<li><a href='<?php echo site_url('examples/logout')?>'>LOGOUT</a> </li>
        	<?php 
        }
        elseif($this->facebook->getuser()){
        	?>
        	<li><a href='<?php echo site_url('examples/logout')?>'>LOGOUT</a> </li>
        	
        	<?php 
        }else{
        	
        }
        
        ?>
        
      </ul>
      
      
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
	<div>
		
		
	</div>
	<div style='height:20px;'></div>  
    <div>
		<?php  //echo $output ; ?>
    </div>
    
    
    
    
    
    
    <div class="container">
      <div class="row">

       <div class="col-md-6 ">
              <div class="row">
                <div class="col-md-12">
                  <h1 class="bigtitle"><span>Get</span>fit</h1>
                  <p class="slogan">your online activity tracker</p>
                </div>
              </div>
      
        </div>
      </div>
      <div class="row">
       <div class="col-md-12 ">
        <div class="message">
         	<?php echo $output ; ?>
        </div>
        
        </div>
        </div>

      </div>
    
    
    
<script type="text/javascript">
$("form").addClass("form-horizontal");
$("input").addClass("form-control");
</script>
    
    
</body>
</html>
