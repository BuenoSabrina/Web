<?php defined('BASEPATH') OR exit('No direct script access allowed');
	function dataBR_to_dataMySQL($data){
			$campos = explode("/",$data);
			return date("Y-m-d",strtotime($campos[2]."/".$campos[1]."/".$campos[0]));
	}
