<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

if( ! function_exists('get_sdk'))
{
	function get_sdk ()
	{	
		static $sdk;

		if( isset( ci()->facebook ) )
		{
			return ci()->facebook;
		}

		// Not call the same obj.
		// return the previous object loaded.
		if( is_object($sdk) )
		{
			return $sdk;
		}

		// get settings
		$appid = Settings::get('appid_setting');
		$appsecret = Settings::get('appsecret_setting');

		// Some config to facebook sdk
		$config = array();
		$config['appId'] = $appid;
		$config['secret'] = $appsecret;

		$sdk = ci()->load->library('facebook/facebook', $config );

		return $sdk;
	}
}


if ( ! function_exists('has_login') )
{
	function has_login ()
	{	
		$facebook = get_sdk();

		// Get current user id.
		$user_id = $facebook->getUser();

		if( ! $user_id )
		{
			return FALSE;
		}

		try {

			$user_profile = $facebook->api('/me','GET');
			

		} catch(FacebookApiException $e) {
		
			return FALSE;
		} 

		return TRUE;
	}
}

if( ! function_exists( 'login' ))
{
	function login ()
	{	
		ci()->config->load('facebook');

		$params = array(
			'scope' => config_item('scope'),
			'redirect_uri' => config_item('register_redirect')
		);

		$facebook = get_sdk();

		return $facebook->getLoginUrl( $params );
	}
}

if( ! function_exists( 'api' ) )
{
	function api ($path, $method = 'POST', $params = array() )
	{
		// get sdk facebook page
		$facebook = get_sdk();

		return $facebook->api($path, $method, $params);
	}
}