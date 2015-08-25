
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

 
                
      
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Community Auth - Login Form View
 *
 * Community Auth is an open source authentication application for CodeIgniter 3
 *
 * @package     Community Auth
 * @author      Robert B Gottier
 * @copyright   Copyright (c) 2011 - 2015, Robert B Gottier. (http://brianswebdesign.com/)
 * @license     BSD - http://www.opensource.org/licenses/BSD-3-Clause
 * @link        http://community-auth.com
 */

if( ! isset( $optional_login ) )
{
	//echo '<h1>Login</h1>';
}

if( ! isset( $on_hold_message ) )
{
	if( isset( $login_error_mesg ) )
	{
		echo '
			<div style="border:1px solid red;">
				<p>
					Login Error: Invalid Username, Email Address, or Password.
				</p>
				<p>
					Username, email address and password are all case sensitive.
				</p>
			</div>
		';
		
		
		
		
		
		
	}

	if( $this->input->get('logout') )
	{
		echo '
			<div style="border:1px solid green">
				<p>
					You have successfully logged out.
				</p>
			</div>
		';
	}

	echo form_open( $login_url, array( 'class' => 'std-form' ) ); 
?>

	<div>



<div class="row">

       <div class="col-md-6 col-md-offset-3">
        <div class="row">
<div class="col-md-12">
  <h1 class="bigtitle text-center"><span>Get</span>fit</h1>
  <p class="slogan text-center">your online activity tracker</p>
</div>
        </div>
            <div class="row wrapper">
                  <div class="col-md-6">
                    <div class="login">
                      <h3>Log In</h3>
                      <p class="desc">
                      
Not Registered <a href="activities/signup">Sign Up</a>
                      </p>
                      <!-- <form class="form-horizontal" >  -->
                        <div class="form-group">
                        	<!-- <label for="login_string" class="form_label">Username or Email</label>-->
                          <label for="login_string" class="col-sm-12 control-label  form_label">Email</label>
                          
                          <div class="col-sm-12">
                       <!--     <!-- <input type="email" class="form-control" id="inputEmail3" placeholder="Email">-->
                            <input type="email" name="login_string" id="login_string" class="form_input form-control"  placeholder="Email"  autocomplete="off" maxlength="255" />
                          </div>
                        </div>
                        <div class="form-group">
                          <!-- <label for="inputPassword3" class="col-sm-12 control-label">Password</label>-->
                          <label for="login_pass" class="form_label col-sm-12 control-label ">Password</label>
                          <div class="col-sm-12">
                            <!--   <input type="password" class="form-control" id="inputPassword3" placeholder="Password">-->
                            <input type="password" name="login_pass" id="login_pass" class="form_input password form-control"  placeholder="Password" autocomplete="off" maxlength="<?php echo config_item('max_chars_for_password'); ?>" />
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="col-sm-offset-2 col-sm-10">
                            <div class="checkbox">
                              <label>
                               <!--  <input type="checkbox"> Remember the password  -->
                              </label>
                              
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="col-sm-offset-2 col-sm-10">
                         <!--    <button type="submit" name="submit" class="btn btn-primary" value="Login" id="submit_button" >Log in</button> -->
                            <input type="submit" name="submit"  class="btn btn-primary"  value="Login" id="submit_button"  />
                            <input type="reset" name="reset"  class="btn"  value="RESET" id="submit_button"  />
                            
                            
                            
                            
                            
                            
                            <?php
			if( config_item('allow_remember_me') )
			{
		?>

			<br />

			<label for="remember_me" class="form_label">Remember Me</label>
			<input type="checkbox" id="remember_me" name="remember_me" value="yes" />

		<?php
			}
		?>

		<p>
			<a href="<?php echo secure_site_url('examples/recover'); ?>">
				Can't access your account?
			</a>
		</p>
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                          </div>
                        </div>
                      <!-- </form> -->
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="social">
                      <h3>Login by another ways</h3>
                      <p class="desc">
                        Integer ornare libero nisi. Duis ac magna urna. Nulla facilisi:
                      </p>
                      <div class="socialLogin">

                      <a class="btn btn-block btn-social btn-facebook">
                        <i class="fa fa-facebook"></i> Sign in with Facebook
                      </a>
                      <a class="btn btn-block btn-social btn-twitter">
                        <i class="fa fa-twitter"></i> Sign in with Twitter
                      </a>
                      <a class="btn btn-block btn-social btn-google">
                        <i class="fa fa-google"></i> Sign in with Google
                      </a>
                    </div>
                  </div>
            </div>
                
        
       </div>
      

      </div>


<!-- 

		<label for="login_string" class="form_label">Username or Email</label>
		<input type="text" name="login_string" id="login_string" class="form_input" autocomplete="off" maxlength="255" />

		<br />

		<label for="login_pass" class="form_label">Password</label>
		<input type="password" name="login_pass" id="login_pass" class="form_input password" autocomplete="off" maxlength="<?php echo config_item('max_chars_for_password'); ?>" />

 -->


		


	<!-- <input type="submit" name="submit" value="Login" id="submit_button"  /> -->

	</div>
</form>

<?php

	}
	else
	{
		// EXCESSIVE LOGIN ATTEMPTS ERROR MESSAGE
		echo '
			<div style="border:1px solid red;">
				<p>
					Excessive Login Attempts
				</p>
				<p>
					You have exceeded the maximum number of failed login<br />
					attempts that this website will allow.
				<p>
				<p>
					Your access to login and account recovery has been blocked for ' . ( (int) config_item('seconds_on_hold') / 60 ) . ' minutes.
				</p>
				<p>
					Please use the ' . secure_anchor('examples/recover','Account Recovery') . ' after ' . ( (int) config_item('seconds_on_hold') / 60 ) . ' minutes has passed,<br />
					or contact us if you require assistance gaining access to your account.
				</p>
			</div>
		';
	}

/* End of file login_form.php */
/* Location: /views/examples/login_form.php */

	?>
	
	</body>