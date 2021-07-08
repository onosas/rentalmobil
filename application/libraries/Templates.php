<?php

Class Templates {

	var $templates_data = array();

	function set($name, $value)
	{
		$this->templates_data[$name] = $value;
	}

	function load($templates = '', $view = '', $view_data = array(), $return = FALSE)
	{
		$this->CI =& get_instance();
		$this->set('content', $this->CI->load->view($view, $view_data, TRUE));
		return $this->CI->load->view($templates, $this->templates_data, $return);
	}
}

// @Onosas 2021