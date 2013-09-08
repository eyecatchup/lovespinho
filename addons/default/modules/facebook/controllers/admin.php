<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
 * This is a Facebook module for PyroCMS
 *
 * @author 		Jonathan Fontes
 * @website		http://jonathanfontes.pt
 * @package 	PyroCMS
 * @subpackage 	Facebook Module
 */
class Admin extends Admin_Controller
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

	/**
	 * List all items
	 */
	public function index()
	{
		// here we use MY_Model's get_all() method to fetch everything
		$facebook_user = $this->facebook_m->get_all();

		// Build the view with sample/views/admin/items.php
		$this->template
			->title($this->module_details['name'])
			->set('user', $facebook_user)
			->build('admin/user_list');
	}
}