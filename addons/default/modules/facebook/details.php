<?php defined('BASEPATH') or exit('No direct script access allowed');

/*
 * @todo: Login com facebook
 * @todo: Registar com facebook
 * @todo: Post in Facebook Profile
 * @todo: Post blog stream post in facebook page
 *
 */

class Module_Facebook extends Module {

    public $version = '1.0.0';

    public function info()
    {
        return array(
            'name' => array(
                'en' => 'Facebook',
                'pt' => 'Facebook'
            ),
            'description' => array(
                'en' => 'Register, Login, Post and manage Facebook page.',
                'pt' => 'Registar, Entrar, Postar e gerir páginas de facebook.'
            ),
            'frontend' => true,
            'backend' => true,
            'menu' => 'users', 
            'sections' => array(
                'items' => array( 
                    'name'  => 'facebook:user', // These are translated from your language file
                    'uri'   => 'admin/facebook/index'
                        /*'shortcuts' => array(
                            'create' => array(
                                'name'  => 'sample:create',
                                'uri'   => 'admin/sample/create',
                                'class' => 'add'
                                )
                            )*/
                        )
                )
        );
    }

    public function install()
    {
        // Desinstallar tudo !
        $this->uninstall();

        $this->dbforge->drop_table('facebook');
        $this->db->delete('settings', array('module' => 'facebook'));

        $social_login = array(
            'id' => array(
                'type' => 'INT',
                'constraint' => '11',
                'auto_increment' => true
            ),
            'idUser' => array(
                'type' => 'INT',
                'constraint' => '11',
                'auto_increment' => false
            ),
            'token' => array(
                'type' => 'VARCHAR',
                'constraint' => '255'
            ),
        );

        $social_setting = array(
            array(
                'slug' => 'appid_setting',
                'title' => 'App ID',
                'description' => 'App ID from facebook app page',
                'default' => '',
                'value' => 'XXXX',
                'type' => 'text',
                'options' => '',
                'is_required' => 1,
                'is_gui' => 1,
                'module' => 'facebook'
            ),
            array(
                'slug' => 'appsecret_setting',
                'title' => 'App Sescret',
                'description' => 'App Secret from facebook app page',
                'default' => '',
                'value' => 'XXXX',
                'type' => 'text',
                'options' => '',
                'is_required' => 1,
                'is_gui' => 1,
                'module' => 'facebook'
            ),
            array(
                'slug' => 'blogpost_setting',
                'title' => 'Post Blog in Facebook',
                'description' => 'When published a post, streaming too facebook timeline',
                'default' => '1',
                'value' => '',
                'type' => 'select',
                'options' => '0=No|1=Yes',
                'is_required' => 1,
                'is_gui' => 1,
                'module' => 'facebook'
            )
        );

        $this->dbforge->add_field($social_login);
        $this->dbforge->add_key('id', true);

        foreach ( $social_setting as $setting )
        {
            if( ! $this->db->insert('settings', $setting) )
            {
                return FALSE;
            }
        }

        // Let's try running our DB Forge Table and inserting some settings
        if ( ! $this->dbforge->create_table('facebook') )
        {
            return false;
        }

        // We made it!
        return true;
    }

    public function uninstall()
    {
        $this->dbforge->drop_table('facebook');

        $this->db->delete('settings', array('module' => 'facebook'));

        // Put a check in to see if something failed, otherwise it worked
        return true;
    }


    public function upgrade($old_version)
    {
        return true;
    }

    public function help()
    {
        return $this->load->view('help', null, true);
    }
}