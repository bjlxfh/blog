<?php

class Base_App extends Yaf_Controller_Abstract {

	//public $_layout;
	public $layoutfile = 'column_main';
	public $main_view = 'main';

	public function init() {
		/* 首先关闭自动渲染 */
		//Yaf_Dispatcher::getInstance()->disableView();
	}
  
}
?>
