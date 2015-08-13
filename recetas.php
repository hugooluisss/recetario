<?php
if ( !defined( '_PS_VERSION_' ) )
	exit;
	
class recetas extends Module{
	public function __construct(){
		$this->name = 'recetas';
		$this->tab = 'Recetario';
		$this->version = 1.0;
		$this->author = 'Hugo Luis Santiago Altamirano';
		$this->need_instance = 0;
		$this->bootstrap = true;
		parent::__construct();
		
		$this->displayName = $this->l('Recetario');
		$this->description = $this->l('Recetario para prestashop.');
	}
	
	public function install(){
		if (parent::install() == false 
			OR !$this->registerHook('top')
			OR !$this->registerHook('header'))
			return false;
			
		return true;
	}
	
	public function hookHeader( $params ){
		global $smarty;
		
		return $this->display( __FILE__, 'menu.tpl' );
	}
	
	public function hookTop($params){
		return $this->hookHeader($params);
	}
	
	public function uninstall(){
		if ( !parent::uninstall() )
			Db::getInstance()->Execute('DELETE FROM `' . _DB_PREFIX_ . 'recetas`');
			
		parent::uninstall();
	}
}
?>