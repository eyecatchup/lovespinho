<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
 * This is a sample module for PyroCMS
 *
 * @author 		Jerel Unruh - PyroCMS Dev Team
 * @website		http://unruhdesigns.com
 * @package 	PyroCMS
 * @subpackage 	Sample Module
 */
class Facebook_m extends MY_Model {

	public function __construct()
	{		
		parent::__construct();
		$this->_table = 'facebook';
	}

	//create a new item
	public function create( $input )
	{

		// Check about idUser if exists,
		// if so, check if we have in table users
		// Exists in table ? Yes, Ok lets insert.
		// Isn't exists in table ? No, Uhoh! Return false.

		if ( isset($input['idUser']) && (int)$input['idUser'] > 0 )
		{
			$this->load->model('users/Users_m');

			$iduser = $input['idUser'];

			if( ! $this->users_m->get( $idUser ) )
			{
				return FALSE;
			}
		}

		// Check if we have got token access.
		if( ! isset($input['token']) )
		{
			return false;
		}

		$to_insert = array(
			'idUser' => isset($input['idUser']) ? $input['idUser'] : 'null',
			'token' => $input['token']
		);

		return $this->db->insert('facebook', $to_insert);
	}
}