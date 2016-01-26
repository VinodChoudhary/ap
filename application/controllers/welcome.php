<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	
	function __construct()
	{
		parent::__construct();

		$this->load->helper('url');
		$this->load->model('log_model');
		$this->load->model('progresspull');
	}

	public function index()
	{	 
		$this->load->view('welcome_message');
	}

	/*public function loading()
	{
<<<<<<< HEAD
		$this->load->view('Progress.html');
	}*/

	public function progpage()
	{	echo "string";
		
		//$q=$this->progresspull->pull();
		$this->load->model('progresspull');
		$q = $this->log_model->pull();
		$data['tab']=$q;

		
		//var_dump(expression)
		$this->load->view('Progress', $data);
		//$this->load->view('welcome_message');
	}
	public function red()
	{
		$this->load->view('login_page');	
	}
	public function login()
	{	
		$perr = 1; $merr = 1;
		$pass = $_POST['password'];
		$mobile = $_POST['mobile'];
		$in['pass'] = $pass;
		if(!is_numeric($mobile)==1){
			$merr = 0;
		//echo $pass.$mobile;
 		 //echo "mob err";

		}
		else $in['mob']=$mobile;
		if(strlen($mobile)!=10) {
			$merr = 0;
			$this->load->view('login_page');
		}

		if(strlen($pass)<8) $perr = 0;;
		if($merr) {
			$res = $this->log_model->login($in);
		}
		else {
			$data['er']['mob'] = $merr;
			$data['er']['pass'] = $perr;
			$data['er']['b'] = 1;
			$this->load->view('login_page',$data);

		}

		if($res == 0)
		{
			echo "0";//doesnt exist
		}
		else if($res == 1)
		{
		echo "1";	//wrong pass
	}

	else
	{	
		if($res[0]['type'] == 1)
		{
			//$this->load->view(); //load user page
		}
		else 
		{
			//$this->load->view(); //load vendor page
		}
	}
}
public function register()
{
	$nerr = 1; $eerr = 1; $merr = 1;
	$name = ($_POST['name']);
	$email = $_POST['email'];
	$pass = $_POST['pass'];
	$mobile = $_POST['mob'];
	$type = $_POST['type'];
	$in['pass'] = $pass;
	$in['type'] = $type;
//echo $type;
	if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
		$nerr = 0;
  //echo "name err"; 
	}
	else $in['name'] = $name;
	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		$eerr = 0; 
  //echo "email err";
	}
	else $in['email'] = $email;
	if(!is_numeric($mobile)==1){
		$merr = 0;
  //echo "mob err";

	}
	else $in['mob']=$mobile;
	if(strlen($pass)<8) echo "err";
	if($nerr && $eerr && $merr) {
		$this->log_model->register($in);
	}
	else {
		$data['er']['mob'] = $merr;
		$data['er']['name'] = $nerr;
		$data['er']['pass'] = $perr;
		$data['er']['email'] = $eerr;
		$data['er']['b'] = 1;
		
	}

}
public function che(){
	$this->load->view('prog.html');
}
public function logout()
{
	setcookie('userdata', "", time() - 3600);
	$this->load->view('welcome_message');
}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */