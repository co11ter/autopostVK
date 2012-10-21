<?php

// no direct access to this file
defined( '_JEXEC' ) or die( 'Restricted access' );

//Import JPlugin
jimport( 'joomla.plugin.plugin' );
require_once (JPATH_ROOT . DS . 'components' . DS . 'com_content' . DS . 'helpers' . DS . 'route.php');

jimport( 'joomla.application.router' );
require_once (JPATH_ROOT.DS.'includes'.DS.'router.php');
require_once (JPATH_ROOT.DS.'includes'.DS.'application.php');

class plgSystemAutopostVK extends JPlugin	{
	
	protected $access_token = '';
	protected $owner_id  = '';
	protected $category = '';

	function plgSystemAutopostVK(&$subject, $config)	{

	      global $mainframe;
	      parent::__construct($subject, $config);

	      $this->loadLanguage();
	      $this->access_token = $this->params->get('access_token', '');
	      $this->owner_id = $this->params->get('id', '');
	      $this->category = explode(',', $this->params->get('category', ''));
	 }

	 function onAfterContentSave(&$article, $isNew)		{

	 }
	 
	 private function postMessage($article, $access_token, $owner_id)	{
	 	 	 	 
	 }
	 
}