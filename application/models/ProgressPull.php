<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ProgressPull extends CI_Controller{

	public function pull()
	{
		$query=$this->$db->query("SELECT `Proj_Name`, `Cust_Name`, `Vend_Name`, `Status` FROM `progress` ORDER BY `SNo` DESC WHERE `Status` < 100");
		$query=$query->result_array();
		return $query;
	}
}