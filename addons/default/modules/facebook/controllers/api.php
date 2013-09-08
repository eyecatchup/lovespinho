<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
 * This is a Facebook module for PyroCMS
 *
 * @author 		Jonathan Fontes
 * @website		http://jonathanfontes.pt
 * @package 	PyroCMS
 * @subpackage 	Facebook Module
 */
class Api extends Public_Controller
{
	
	//protected $section = 'items';

	protected $sdk;

	public function __construct()
	{
		parent::__construct();

		// Load all the required classes
		$this->load->model('facebook_m');
		$this->load->library('form_validation');
		$this->lang->load('facebook'); // LOAD LANG
	}

	public function index ()
	{
		$this->load->helper('sdk');

		$sdk = get_sdk();

		if( ! has_login () )
		{
			redirect( login() );
			return FALSE;
		}

		$profile = $sdk->api('/me', 'GET');

		if( ! $profile )
		{
			redirect( base_url() );
			return FALSE;
		}

		dump($profile);

	}

	public function logout ()
	{	
		$this->load->helper('sdk');
		
		ci()->load->config('facebook');

		$sdk = get_sdk();

		$params = array( 'next' => config_item('logout_redirect') );

		$url = $sdk->getLogoutUrl( $params ); // $params is optional. 

		redirect( $url );
	}
}