<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class Submenu{
		private $arr_menu;
		public function __construct($arr){
			$this->arr_menu = $arr;
		}		
		public function construirMenu(){
			$ret_menu ="<nav><ul>";
			foreach ($this->arr_menu as $opcion) {
				$ret_menu .= "<li><a href='#'>" . $opcion . "</a></li>";
			}
			$ret_menu .= "</ul></nav>";
			return $ret_menu;
		}
	}

?> 