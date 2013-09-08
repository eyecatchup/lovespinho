<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * @author		Paul Thickett
 */
class Plugin_foundation extends Plugin
{

	/**
	* @todo: add extra functionality into button and alert to work
	* with parse Lex inside of content.
	*
	*/

	public $version = '1.1.0';

	public $name = array(
		'en'	=> 'Foundation'
	);

	public $description = array(
		'en'	=> 'Foundation structer to used inside a page|post and others. '
	);

	public $author = 'Jonathan Fontes';



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
			'row' => array(
				'description' => array(// a single sentence to explain the purpose of this method
					'en' => 'Creat a row...'
				),
				'single' => false,// will it work as a single tag?
				'double' => true,// how about as a double tag?
				'variables' => '',// list all variables available inside the double tag. Separate them|like|this
				'attributes' => array(
					'class' => array(// this is the name="World" attribute
						'type' => 'text',// Can be: slug, number, flag, text, array, any.
						'flags' => '',// flags are predefined values like asc|desc|random.
						'default' => '',// this attribute defaults to this if no value is given
						'required' => false,// is this attribute required?
					),
					'id' => array(
						'type' => 'text',
						'flags' => '',
						'default' => '',
						'required' => false
					)
				),
			),
			'columns' => array(
				'description' => array(
					'en' => 'create a column inside row div'
				),
				'single' => false,
				'double' => true,
				'variables' => '',
				'attributes' => array(
					'class' => array(
						'type' => 'text',
						'flags' => '',
						'default' => '',
						'required' => false
					),
					'id' => array(
						'type' => 'text',
						'flags' => '',
						'default' => '',
						'required' => false
					),
					'large' => array(
						'type' => 'number',
						'flags' => '1|2|3|4|5|6|7|8|9|10|11|12',
						'default' => '12',
						'required' => true
					),
					'small' => array(
						'type' => 'number',
						'flags' => '1|2|3|4|5|6|7|8|9|10|11|12',
						'default' => 'large value attribute (12)',
						'required' => true
					),
				)
			),
			'button' => array(
				'description' => array (
					'en' => 'To creat a button'
				),
				'single' => TRUE,
				'double' => FALSE, // @todo: for now, later added double.,
				'variables' => '',
				'attributes' => array(
					'class' => array(
						'type' => 'text',
						'flags' => '',
						'default' => '',
						'required' => FALSE
					),
					'id' => array(
						'type' => 'text',
						'flags' => '',
						'default' => '',
						'required' => FALSE
					),
					'data' => array(
						'type' => 'text',
						'flags' => '',
						'default' => '',
						'required' => FALSE
					),
					'size' => array(
						'type' => 'text',
						'flags' => 'tiny|small|medium|large',
						'default' => '',
						'required' => FALSE
					),
					'color' => array(
						'type' => 'text',
						'flags' => 'secondary|success|alert',
						'default' => '',
						'required' => FALSE
					),
					'radius' => array(
						'type' => 'text',
						'flags' => 'round|radius',
						'default' => '',
						'required' => ''
					),
					'text' => array(
						'type' => 'text',
						'flags' => '',
						'default' => '',
						'required' => TRUE
					)
				)
			)
		);
	
		return $info;
	}

	function row () {

		$class = $this->attribute('class','');

		$id = $this->attribute('id','');

		$parser = new Lex_Parser();
		$parser->scope_glue(':');

		$html = '<div class="row ' . $class . '" id="' . $id . '">';

		return $html . $parser->parse($this->content(), $data = array(), array($this->parser, 'parser_callback')) . '</div>';

	}

	function columns () {
		
		$large = $this->attribute('large',12);

		$small = $this->attribute('small', $large);

		$class = $this->attribute('class','');

		$id = $this->attribute('id','');

		$html = '<div class="large-' . $large . ' small-' . $small . ' columns ' . $class . '" id="' . $id . '">';

		$parser = new Lex_Parser();
		$parser->scope_glue(':');

		return $html . $parser->parse($this->content(), $data = array(), array($this->parser, 'parser_callback')) . '</div>';
	}

	function button ()
	{
		$size = $this->attribute('size', '');
		$color = $this->attribute('color', '');
		$radius = $this->attribute('radius', '');
		$text = $this->attribute('text');
		$url = $this->attribute('href', '#');
		$id = $this->attribute('id' , '' );
		$data = $this->attribute('data', '');

		if( $text == '' )
		{
			return '';
		}

		$html = '<a href="' . $url . '" ' . $data . ' class="button ' . $size . ' ' . $color . ' ' . $radius . '" id="' . $id . '">';

		$html .= $text;

		$html .= '</a>';

		return $html;
	}

	function alert ()
	{	


		$radius = $this->attribute ('radius' , '');
		$alert = $this->attribute ('alert', '');
		$text = $this->attribute('text', false);

		if( $text === FALSE )
		{
			return '';
		}

		if( ! in_array( $radius, array('radius','round') ))
		{
			$radius = '';
		}

		if( ! in_array( $alert, array('success','alert','secondary') ))
		{
			$alert = '';
		}

		$html = '<div data-alert class="alert-box ' . $radius . ' ' . $alert .' ' . '" id="' . $id . '"> ' . $text . '<a href="#" class="close">&times;</a></div>';
	}
}
