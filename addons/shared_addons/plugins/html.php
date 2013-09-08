<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Example Plugin
 *
 * Quick plugin to demonstrate how things work
 *
 * @author		PyroCMS Dev Team
 * @package		PyroCMS\Addon\Plugins
 * @copyright	Copyright (c) 2009 - 2010, PyroCMS
 */
class Plugin_Html extends Plugin
{
	public $version = '1.0.0';

	public $name = array(
		'en'	=> 'HTML',
		'pt'	=> 'HTML'
	);

	public $description = array(
		'en'	=> 'HTML tag helper',
		'pt'	=> 'Ajudante de HTML.'
	);

	/**
	 * Returns a PluginDoc array that PyroCMS uses 
	 * to build the reference in the admin panel
	 *
	 * All options are listed here but refer 
	 * to the Blog plugin for a larger example
	 *
	 * @return array
	 */
	public function _self_doc()
	{
		$info = array(
			'audio' => array(
				'description' => array(// a single sentence to explain the purpose of this method
					'en' => 'To creat a audio html tag'
				),
				'single' => true,// will it work as a single tag?
				'double' => false,// how about as a double tag?
				'variables' => 'controls|autoplay|source',// list all variables available inside the double tag. Separate them|like|this
				'attributes' => array(
					'controls' => array(// this is the name="World" attribute
						'type' => 'text',// Can be: slug, number, flag, text, array, any.
						'flags' => 'true|false',// flags are predefined values like asc|desc|random.
						'default' => '',// this attribute defaults to this if no value is given
						'required' => false,// is this attribute required?
					),
					'autoplay' => array(
						'type' => 'text',
						'flags' => 'true|false',
						'default' => 'true',
						'required' => false
					),
					'source' => array(
						'type' => 'array',
						'flags' => '',
						'default' => '',
						'required' => true
					)
				),
			),
		);
	
		return $info;
	}

	/**
	 * Audio
	 *
	 * Usage:
	 * {{ html:audio controls="false" autoplay="false" source="source1|source2" fallback="text to fallback" }}
	 *
	 * @return string
	 */
	function audio()
	{
		$controls = $this->attribute('controls', '');

		$autoplay = $this->attribute('autoplay', '');

		$source = $this->attribute('source', '' );

		if( $source == '' )
		{
			return '';
		}

		$split = explode("|", $source);

		$audio = '<audio controls="' . $controls . '" autoplay="' . $autoplay . '">';

		foreach ($split as $src) {
			$audio .= '<source src="' . $src . '">';
		}

		$audio .= '</audio>';

		return $audio;
	}
}

/* End of file example.php */