<?php
class Activities extends MY_Controller{

	public  $fbloggedin;
	public function __construct()
	{
		parent::__construct();


		$this->load->database();
		$this->load->helper('url');

		$this->load->library('Grocery_CRUD');
	}

	public function index()
	{
			

	}


	public function _example_output($output = null)
	{
		$this->load->helper("url");
		$this->load->view('activity.php',$output);

	}

	public function home(){
		$this->load->library('facebook');

		if( $this->verify_min_level(0) || $this->facebook->getuser() ){

			
			$user=$this->facebook->getuser();
			//var_dump($user);
			
			if ($user!=0){
				$userid=1;
			}else {
				$userid=$this->auth_user_id;
			}
			//$this->load->view('home.php');

			/*CALCULATING THE GOAL PROGRESS IS CALCULATING THE
			 * THE TOTAL TIME OF GOAL'S ACTIVITIES AND COMPARING THAT
			 * WITH TOTAL TIME ALLOTED TO  A GOAL
			 * THE RESULT WILL BE REMAINING TIME TO COMPLETE THE GOAL
			 */

			//			$this->load->database();
			//			$goalid=1;
			//
			//
			//			$sql = "SELECT * FROM activities" ;
			//			$result=$this->db->query($sql);
			//			var_dump($result);
			//
			//			$crud = new grocery_CRUD();
			//			$crud->set_table('goals');
			//			$output = $crud->render();
			//     		$this->_example_output($output);


			$this->load->helper ( 'url' );
			$this->load->model('Activities_model');
			$this->db->select_sum('duration');

			$this->db->where('goal_id', '1');
			//$query=$this->db->query("select sum(duration) as time from activities");
			$query=$this->db->query("
SELECT SUM(duration ) as time from activities WHERE goal_id=(SELECT id FROM goals WHERE `user_id`=$userid); ");
			$row = $query->row();
			//echo $row->time;
			//NOW WE HAVE TOTAL TIME HERE

			$totaltime1=$row->time;//TOTAL TIME
			$time3 = $totaltime1;
			//$totalseconds = strtotime("1970-01-01 $time3 UTC");
			//$totalactivitytime=$totalseconds;
		//	var_dump($time3);
			

			$this->load->model('Goals_model');
			//$this->db->select();
			//REMEMBER WE HAVE TO GET USER ID SOMEHOW
			$userid=$this->auth_user_id;
			$this->db->where('user_id',$userid);
			$query=$this->db->query("select * from goals")->result();
			//	$row2=$query->row();

			//
			//			foreach ($row2 as $key=>$value) {
			//				echo $key;
			//				echo'=';
			//				echo $value;
			//				echo"<br>";
			//
			//				if ($key='duration'){
			//
			//				}
			//
			//			}
			//
			$row3 = array('data'=>$query);
			$row3['time']=$time3;
				
			$this->load->view('home.php',$row3);




		}else {
			redirect('LOGIN_PAGE');
		}
	}

	public function showactivities(){
		$this->load->library('facebook');
		if( $this->verify_min_level(6) ||  $this->facebook->getuser() )
		{
			$crud = new grocery_CRUD();
			//$crud->where('goal_id');

			$crud->set_table('activities');
			$crud->set_theme('datatables');

			$crud->set_relation('goal_id','goals','goal');

			$output = $crud->render();

			$this->_example_output($output);
		}else {
			redirect('LOGIN_PAGE');
		}

	}

	public function showgoals(){
		$this->load->library('facebook');
		if( $this->verify_min_level(0)  || $this->facebook->getuser() ){


			$crud = new grocery_CRUD();
			$crud->set_theme('datatables');
			$crud->set_table('goals');
			$crud->set_relation('user_id','users','user_name');

			$output = $crud->render();

			$this->_example_output($output);
		}else {
			redirect('LOGIN_PAGE');
		}
	}
	public function signup(){



		if (isset($_POST['username'])){
			$this->load->model ( 'Users_model' );


			$username=$_POST['username'];
			$email=$_POST['email'];
			$password=$_POST['password'];
				
			$user_salt     = $this->authentication->random_salt();
			$user_pass     = $this->authentication->hash_passwd($password, $user_salt);
			//$user_id      = $this->_get_unused_id();
			$user_date     = date('Y-m-d H:i:s');
			$user_modified = date('Y-m-d H:i:s');
				
				
				
				
			$data=array(
                        'user_name'=>$username,
                		'user_email'=>$email,
                		'user_pass'=>$user_pass,
                	 	'user_level'    => '1',
                		'user_salt'=>$user_salt,
                		'user_date'=>$user_date,
                		//'user_id'=>$user_id,
                		'user_modified'=>$user_modified
			);
				
			$this->db->insert('users', $data
			);

			
			$this->load->view('thankyou.php');
			
			
			//redirect('LOGIN_PAGE');
				
		}else{
			$this->load->view("signup.php");
		}






	}


	public function fblogin(){

		$this->load->library('facebook'); // Automatically picks appId and secret from config
		// OR
		// You can pass different one like this
		//$this->load->library('facebook', array(
		//    'appId' => 'APP_ID',
		//    'secret' => 'SECRET',
		//    ));

		$user = $this->facebook->getUser();

		if ($user) {
			try {
				$data['user_profile'] = $this->facebook->api('/me');
			} catch (FacebookApiException $e) {
				$user = null;
			}
		}else {
			// Solves first time login issue. (Issue: #10)
			//$this->facebook->destroySession();
		}

		if ($user) {

			$data['logout_url'] = site_url('examples/logout'); // Logs off application
			// OR
			// Logs off FB!
			// $data['logout_url'] = $this->facebook->getLogoutUrl();

		} else {
			$data['login_url'] = $this->facebook->getLoginUrl(array(
                'redirect_uri' => site_url("HOME"), 
                'scope' => array("email") // permissions here
			));
		}
		$this->load->view('fblogin',$data);

	}


	private function _get_unused_id()
	{
		// Create a random user id
		$random_unique_int = mt_rand(1200, 4294967295);

		// Make sure the random user_id isn't already in use
		$query = $this->db->where('user_id', $random_unique_int)
		->get_where(config_item('user_table'));

		if ($query->num_rows() > 0) {
			$query->free_result();

			// If the random user_id is already in use, get a new number
			return $this->_get_unused_id();
		}

		return $random_unique_int;
	}

	

}//class ends





