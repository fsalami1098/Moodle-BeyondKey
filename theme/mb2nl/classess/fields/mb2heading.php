<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 *
 * @package   theme_mb2nl2
 * @copyright 2017 Mariusz Boloz (mb2moodle.com)
 * @license   Commercial https://themeforest.net/licenses
 *
 */

defined('MOODLE_INTERNAL') || die();




if (!class_exists('admin_setting_configmb2heading'))
{

	class admin_setting_configmb2heading extends admin_setting 
	{
			
		
		public $paramtype;
		public $size;
	
		public function __construct($name, $visiblename = '', $description = '', $defaultsetting = '', $hr = false, $paramtype=PARAM_RAW, $size=null) 
		{
			$this->paramtype = $paramtype;  
			$this->hr = $hr;      
			parent::__construct($name, $visiblename, $description, $defaultsetting, $hr);
		}	   
		
		
		public function get_setting() 
		{
			return $this->config_read($this->name);
		}
		
	
	
	
		public function write_setting($data) 
		{
			if ($this->paramtype === PARAM_INT and $data === '') {
			// do not complain if '' used instead of 0
				$data = 0;
			}
			// $data is a string
			$validated = $this->validate($data);
			if ($validated !== true) {
				return $validated;
			}
			return ($this->config_write($this->name, $data) ? '' : get_string('errorsetting', 'admin'));
		}
		
		
		 public function validate($data) 
		{
			// allow paramtype to be a custom regex if it is the form of /pattern/
			if (preg_match('#^/.*/$#', $this->paramtype)) {
				if (preg_match($this->paramtype, $data)) {
					return true;
				} else {
					return get_string('validateerror', 'admin');
				}
	
			} else if ($this->paramtype === PARAM_RAW) {
				return true;
	
			} else {
				$cleaned = clean_param($data, $this->paramtype);
				if ("$data" === "$cleaned") { // implicit conversion to string is needed to do exact comparison
					return true;
				} else {
					return get_string('validateerror', 'admin');
				}
			}
		}
			
	
		
		public function output_html($data, $query='') 
		{
			
			global $OUTPUT;
			global $PAGE;       
			print_r($data);
			$output = '<input type="hidden" name="' . $this->get_full_name() . '" id="' . $this->get_id() . '" value="' . $data . '" />';
			$output .= '<div class="mb2config-heading">' . $this->visiblename . '</div>';
	
			return $output;	
			
			
		}
		
		
	}

}