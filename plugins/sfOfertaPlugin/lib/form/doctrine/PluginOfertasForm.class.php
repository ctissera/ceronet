<?php

/**
 * Ofertas form.
 *
 * @package    ceronet
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
abstract class PluginOfertasForm extends BaseOfertasForm {

	//public function configure() {
	//	parent::configure();
	public function setup() {
		parent::setup();

		$this->widgetSchema['imagen'] = new sfWidgetFormInputFileEditable(array(
		  'label'     => 'Imagen Oferta',
		  //'file_src'  => '/uploads/imagenes/'.$this->getObject()->getImagen(),
		  // 'file_src'  => sfConfig::get('sf_upload_dir').'/'.$this->getObject()->getId(), 
		  'file_src'  => '/uploads/imagenes/mantis.jpg',
		  'is_image'  => true,
		  'edit_mode' => !$this->isNew(),
		  'delete_label' => 'Eliminar Imagen',
		  'template'  => '<div>%file%<br />%input%<br />%delete% %delete_label%</div>',
		));

		$this->validatorSchema['imagen'] = new sfValidatorPass();
		//$this->validatorSchema['imagen'] = new sfValidatorFile(array(
		//'mime_types' => 'web_images',
		//'path' => sfConfig::get('sf_upload_dir'.'/imagenes/'),
		//'required' => false));
		
		//$this->validatorSchema['imagen'] = new sfValidatorBoolean();

		$this->setWidget('fechainicio', new sfWidgetFormI18nDate(array(
		  'culture'      => 'es_AR',
		  'month_format' => 'number',   // Use any of 'name' (default), 'short_name', and 'number' 
		  //'label'        => 'Inicia',
		  //'default'      => '01/01/1950',
		  //'years'        => array(1950, 1951, 1990)
		)));

		$this->setWidget('fechafin', new sfWidgetFormI18nDate(array(
		  'culture'      => 'es_AR',
		  'month_format' => 'number',   // Use any of 'name' (default), 'short_name', and 'number' 
		  //'label'        => 'Termina',
		  //'default'      => '01/01/1950',
		  //'years'        => array(1950, 1951, 1990)
		)));

	}
}
