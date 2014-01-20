<?php
/**
 * @name Bootstrap
 * @author panshengjun
 * @desc 所有在Bootstrap类中, 以_init开头的方法, 都会被Yaf调用,
 * @see http://www.php.net/manual/en/class.yaf-bootstrap-abstract.php
 * 这些方法, 都接受一个参数:Yaf_Dispatcher $dispatcher
 * 调用的次序, 和申明的次序相同
 */
class Bootstrap extends Yaf_Bootstrap_Abstract{

    public function _initConfig() {
	//把配置保存起来
    $config = Yaf_Application::app()->getConfig();
	Yaf_Registry::set("config", $config);	  
    #自定义常量
    define('PATH_APP',Yaf_Registry::get('config')->application->directory);

    define('PATH_TPL',PATH_APP.'/views');
	}

	public function _initPlugin(Yaf_Dispatcher $dispatcher) {
		//注册一个插件
		$objSamplePlugin = new SamplePlugin();
		$dispatcher->registerPlugin($objSamplePlugin);
	}

	public function _initRoute(Yaf_Dispatcher $dispatcher) {
		//在这里注册自己的路由协议,默认使用简单路由
		//$config=Yaf_Registry::get('config');
		//$routeConfigs=isset($config['routes']) ? $config['routes'] :array();
		//var_dump($routeConfigs);exit;
    //Yaf_Router::addConfig($routeConfigs);
		//Yaf_Dispatcher::getInstance()->getRouter()->addConfig($routeConfigs);

	}
	
	public function _initView(Yaf_Dispatcher $dispatcher){
		//在这里注册自己的view控制器，例如smarty,firekylin
	}
}
