<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$config['opauth_config'] = array(
                                'path' => 'route_to_login_method', //example: /ci_opauth/auth/login/
                    			'callback_url' => 'route_to_callback_method', //example: /ci_opauth/auth/authenticate/
                                'callback_transport' => 'post', //Codeigniter don't use native session
                                'security_salt' => 'your_salt',
                                'debug' => false,
                                'Strategy' => array( //comment those you don't use
                                    'Twitter' => array(
                                        'key' => 'twitter_key',
                                        'secret' => 'twitter_secret'
                                    ),
                                    'Facebook' => array(
                                        'app_id' => 'app_id',
                                        'app_secret' => 'app_secret'
                                    ),
                                    'Google' => array(
                                        'client_id' => 'client_id',
                                        'client_secret' => 'client_secret'
                                    ),
                                    'OpenID' => array(
										'openid_url' => 'openid_url'
									)
                                )
                            );

/* End of file ci_opauth.php */
/* Location: ./application/config/ci_opauth.php */
