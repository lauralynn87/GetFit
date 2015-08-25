
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
    
    

    
    
    


<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    


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
       <div class="col-md-12">
        <div class="col-md-6 col-md-offset-3">
         	<h1 align="center">SIGN UP</h1>
         	<form action="<?php   echo  base_url('index.php/	');?>/activities/signup"  method="post" class="form-horizontal">
         	<fieldset>	
         	<label>Username</label>
         	<input type="text" class="form-control" name="username" />
         	<label>Email</label>
         	<input type="text" class="form-control" name="email"  />
         	<label>Password</label>
         	<input type="password" class="form-control" name="password" /><br>
         	<input type="submit" name="submit" value="SIGN UP" class="btn btn-primary" />
         	<input type="reset" name="RESET" value="RESET" class="btn" />
         	&nbsp;
         	<br>
         	<hr>
         	</fieldset>
         	</form>
         	
         	
         	
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
