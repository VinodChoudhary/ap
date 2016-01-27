<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class progresspull extends CI_Controller{

	public function pull()
	{
		$query=$this->db->query("SELECT `Proj_Name`, `Cust_Name`, `Vend_Name`, `Status` FROM `progress` WHERE `Status` <'100' ORDER BY `SNo` ASC ");

		$query=$query->result_array();
		return $query;
	}
}