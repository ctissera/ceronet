<?php

require_once dirname(__FILE__).'/../lib/vendor/symfony/lib/autoload/sfCoreAutoload.class.php';
sfCoreAutoload::register();

class ProjectConfiguration extends sfProjectConfiguration
{
	public function setup()
	{
		//$this->enablePlugins('sfDoctrinePlugin');
		//$this->disablePlugins(array('sfPropelPlugin'));
		$this->enableAllPluginsExcept(array('sfPropelPlugin'));
		
		 $this->enablePlugins(array('sfOfertaPlugin'
							 ));  

	}
}
