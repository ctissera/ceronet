<?php

require_once dirname(__FILE__).'/../lib/ofertasGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/ofertasGeneratorHelper.class.php';

/**
 * ofertas actions.
 *
 * @package    ceronet
 * @subpackage ofertas
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class ofertasActions extends autoOfertasActions
{
  public function executeIndex(sfWebRequest $request)
  {
	$this->getUser()->setCulture('es_AR'); 
	parent::executeIndex($request);
  }
  
  public function executeEdit(sfWebRequest $request)
  {
	$this->getUser()->setCulture('es_AR'); 
	parent::executeEdit($request);
  }  
}
