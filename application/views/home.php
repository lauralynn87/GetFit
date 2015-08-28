


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
    
<link href="http://localhost/fitness/assets/grocery_crud/themes/flexigrid/css/flexigrid.css" rel="stylesheet" type="text/css">
<link href="http://localhost/fitness/assets/grocery_crud/css/jquery_plugins/fancybox/jquery.fancybox.css" rel="stylesheet" type="text/css">
<link href="http://localhost/fitness/assets/grocery_crud/css/ui/simple/jquery-ui-1.10.1.custom.min.css" rel="stylesheet" type="text/css">
<style type="text/css">
<style type="text/css">
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
          <?php
	$this->load->library('facebook');
          if (isset($auth_user_id)){
        	?>
        	<li><a href='<?php echo site_url('examples/logout')?>'>LOGOUT</a> </li>
        	<?php 
        }elseif($this->facebook->getuser()){
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
    <div>
	<h1 align="center">Fitness Center</h1>


<div class="container">
<div class="row">
<div class="col-md-12">

<div class="col-md-12">
                  <h1 class="bigtitle"><span>Get</span>fit</h1>
                  <p class="slogan">your online activity tracker</p>
                </div>

<table style="border:1px;" align="center" border="1px" class="table table-striped">
<thead>
<th>GoalNO</th>
<th>Goal</th>
<th>Goal Alloted Duration</th>
<th>Specifics</th>
<th>Start Date</th>
<th>End Date</th>
<th></th>

</thead>
<?php   

foreach ($data as $tmp) {
	echo"<tr>";
	foreach ($tmp as $key=>$value) {
	echo "<td>";	
		
		if ($key==='duration'  &&  $value!=0){
			
			$time2 = $value;
			$seconds = strtotime("1970-01-01 $time2 UTC");
		//	echo $seconds;
			
			
			$temptime=$seconds-$time;
			$lefttime=$temptime;
			
			
			$lefttime=$lefttime/3600;
			echo"Completed Hours: $lefttime completed Hours"; 
				echo"<br>";
				$seconds=$seconds/3600;
			echo "Total Hours Time: $seconds Hours";
			
			
		
			
			//echo"%";
			
		}else{
		echo $value;	
		}
		
		
		echo"</td>";
	}
	echo"</tr>";
	
}


?>
</table>
</div></div></div>
    </div>
</body>
</html>
