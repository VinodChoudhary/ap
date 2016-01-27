<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class log_model extends CI_Controller{

public function register($in){
	//echo password_hash($in['pass'], PASSWORD_DEFAULT, sha512);
	$password = $in['pass'];
	$hash = hash("sha512",$password);
	echo $hash;	
	$qry = "SELECT * FROM users WHERE mobile = $in[mob]";
	$i = $this->db->query($qry);
	$i = $i->result_array();
	if(!$i){
		$qry = "INSERT INTO users (mobile,name,email,password,type) values ('$in[mob]','$in[name]','$in[email]','$hash','$in[type]')";
		$this->db->query($qry);
		return true;
			}
	else {
		return false;
	} 
	}
public function login($in)
{	
	$password = $in['pass'];
	$hash = hash("sha512",$password);
	//echo $password.$in['mob'];
	$qry = "SELECT * FROM users WHERE mobile = '$in[mob]'";
	$i = $this->db->query($qry);
	$i = $i->result_array();
	//var_dump($i);
	if(!$i){
		return 0;
	}
	else 
	{
		if($i[0]['password'] != $hash) return 1;
		else {
			setcookie('userdata',$i[0]['name']);
			return $i;}
	}
	
}
		public function pull()
	{
		$query=$this->db->query("SELECT `Proj_Name`, `Cust_Name`, `Vend_Name`, `Status` FROM `progress` WHERE `Status` <'100' ORDER BY `SNo` ASC ");

		$query=$query->result_array();
		return $query;
	}

}
?>