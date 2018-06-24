<?php
class Mahasiswa_model extends CI_Model
{
	function Mahasiswa model()
	{
	parent::_Model()
	{
$this->load->database();
	}
	function Get_Mahasiswa()
	{
	$get_mhs= " select * from mahasiswa";
	return fetchArray($get_mhs);
	}
	}
}