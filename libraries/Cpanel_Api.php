<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

require_once "xmlapi/xmlapi.php";

class Cpanel_Api extends xmlapi {

	public function __construct() {
		$ci =& get_instance();
		$ci->load->config('cpanel_api', TRUE);
		
		$this->debug = $ci->config->item('debug', 'cpanel_api');
		$this->host = $ci->config->item('host', 'cpanel_api');
		$this->port = $ci->config->item('port', 'cpanel_api');
		$this->protocol = $ci->config->item('protocol', 'cpanel_api');
		$this->output = $ci->config->item('output', 'cpanel_api');
		$this->auth_type = $ci->config->item('auth_type', 'cpanel_api');
		$this->auth = $ci->config->item('auth', 'cpanel_api');
		$this->user = $ci->config->item('user', 'cpanel_api');
		$this->http_client = $ci->config->item('http_client', 'cpanel_api');
		
		parent::__construct($ci->config->item('host', 'cpanel_api'), $ci->config->item('user', 'cpanel_api'), $ci->config->item('auth', 'cpanel_api'));
		
		$this->set_port($ci->config->item('port', 'cpanel_api'));
		$this->set_output($ci->config->item('output', 'cpanel_api'));
		$this->set_debug($ci->config->item('debug', 'cpanel_api'));
		$this->set_auth_type($ci->config->item('auth_type', 'cpanel_api'));
		$this->set_protocol($ci->config->item('protocol', 'cpanel_api'));
		$this->set_http_client($ci->config->item('http_client', 'cpanel_api'));
	}
	
}




/* End of file */