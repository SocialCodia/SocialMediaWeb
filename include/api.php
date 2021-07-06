<?php 

require_once('constants.php');

class Api{

	function doLogin($email,$password)
	{
		$endPoint = 'login';
		$url = API_URL.$endPoint;
		$ch = curl_init($url);
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch,CURLOPT_POST,true);
		curl_setopt($ch,CURLOPT_POSTFIELDS,"email=$email&password=$password");
		curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
		$response = curl_exec($ch);
		curl_close($ch);
		return json_decode($response);
	}

	function verifyEmail($email,$code)
	{
		$endPoint = 'verifyEmail';
		$url = API_URL.$endPoint;
		$ch = curl_init($url);
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch,CURLOPT_POST,true);
		curl_setopt($ch,CURLOPT_POSTFIELDS,"email=$email&code=$code");
		curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
		$response = curl_exec($ch);
		curl_close($ch);
		return json_decode($response);
	}



}

?>