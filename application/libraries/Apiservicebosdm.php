<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
 
class Apiservicebosdm
{
		/* kimia */
		/*
		var $user="197711182009111001";
		var $secretkey="S101";
		var $token = "ae7e0d6bf18d0c9c7c68a733a4b7227b";
		*/
		var $user="198311112006042001";
		var $secretkey="050911";
		var $token = "77b86625384e0669dce1434170448356";
		var $urlgetdatapegawai ="https://bosdm.lipi.go.id/api/index.php/hris/pegawai/list";
		var $urlkaryailmiah ="https://bosdm.lipi.go.id/api/index.php/hris/pegawai/publikasi";
		var $urlpendidikan ="https://bosdm.lipi.go.id/api/index.php/hris/pegawai/pendidikan";
		
	function Apiservicesas()
	{
	//	die('fdsgsf');
	}
 
 	private function searchdatasdm($parameters)
	{
		return $this->eventsearch($parameters,$this->urlgetdatapegawai);
	}
	private function searchpublikasi($parameters)
	{
		return $this->eventsearch($parameters,$this->urlkaryailmiah);
	}
	private function searchpendidikan($parameters)
	{
		return $this->eventsearch($parameters,$this->urlpendidikan);
	}
	
	function  eventsearch($params,$url)
	{	 
		$ci =& get_instance();
		$ci->load->library('emu');
		$emulator = new Emu();
		$cookie = "";
		$host = $url;
		$canonicalized_query = array();
	 
		foreach ($params as $param=>$value)
		{
			$param = str_replace("%7E", "~", rawurlencode($param));
			$value = str_replace("%7E", "~", rawurlencode($value));
			$canonicalized_query[] = $param."=".$value;
		}
		$canonicalized_query = implode("&", $canonicalized_query);
		$string_to_sign = $host."\n".$canonicalized_query;
		$request = $host."?".$canonicalized_query;
		//die($request);
		$response = $emulator->getUrl($request, $this->token, $this->user,$this->secretkey);
		//print_r($response);
		//die($request);
		/* If cURL doesn't work for you, then use the 'file_get_contents'
		   function as given below.
		*/
		if ($response[0] === False)
		{
			return False;
		}
		else
		{
			return $response[0];
		}
	}
	public function getdatapegawai($start,$limit)
	{
		$parameters = array("Username"=> $this->user,
						"password"=> $this->secretkey,
							"X-API-KEY"=> $this->token,
							"start"=> $start,
							"limit"=> $limit);
		$json_response = $this->searchdatasdm($parameters);
		return $json_response;
	}
	public function getdatapublikasi($nip)
	{
		$parameters = array("Username"=> $this->user,
						"password"=> $this->secretkey,
							"X-API-KEY"=> $this->token,
							"nip"=> $nip
							);
		$json_response = $this->searchpublikasi($parameters);
		return $json_response;
	}
	public function getdatapendidikan($nip)
	{
		$parameters = array("Username"=> $this->user,
						"password"=> $this->secretkey,
							"X-API-KEY"=> $this->token,
							"nip"=> $nip
							);
		$json_response = $this->searchpendidikan($parameters);
		return $json_response;
	}
	 
}
?>