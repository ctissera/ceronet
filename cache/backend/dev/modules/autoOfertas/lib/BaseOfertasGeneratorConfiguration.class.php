<?php

/**
 * ofertas module configuration.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage ofertas
 * @author     ##AUTHOR_NAME##
 * @version    SVN: $Id: configuration.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseOfertasGeneratorConfiguration extends sfModelGeneratorConfiguration
{
  public function getActionsDefault()
  {
    return array();
  }

  public function getFormActions()
  {
    return array(  '_create' =>   array(    'label' => 'Crear Nueva Oferta',  ),);
  }

  public function getNewActions()
  {
    return array(  '_list' =>   array(    'label' => 'Volver a la Lista',  ),  '_save' =>   array(    'label' => 'Guardar Oferta',  ),  '_save_and_add' =>   array(    'label' => 'Guardar Oferta y Agregar Otra',  ),);
  }

  public function getEditActions()
  {
    return array(  '_delete' =>   array(    'label' => 'Eliminar Oferta',  ),  '_list' =>   array(    'label' => 'Volver a la Lista',  ),  '_save' =>   array(    'label' => 'Guardar Oferta',  ),  '_save_and_add' =>   array(    'label' => 'Guardar Oferta y Agregar Otra',  ),);
  }

  public function getListObjectActions()
  {
    return array(  '_edit' => NULL,  '_delete' => NULL,);
  }

  public function getListActions()
  {
    return array(  '_new' => NULL,);
  }

  public function getListBatchActions()
  {
    return array(  '_delete' => NULL,);
  }

  public function getListParams()
  {
    return '%%=titulo%% - %%fechainicio%% - %%fechafin%% - %%imagen%%';
  }

  public function getListLayout()
  {
    return 'tabular';
  }

  public function getListTitle()
  {
    return 'Listado de Ofertas';
  }

  public function getEditTitle()
  {
    return 'Edici&oacute;n de Oferta de %%Titulo%%';
  }

  public function getNewTitle()
  {
    return 'Crear Nueva Oferta.';
  }

  public function getFilterDisplay()
  {
    return array(  0 => 'titulo',  1 => 'texto',  2 => 'fechainicio',  3 => 'fechafin',);
  }

  public function getFormDisplay()
  {
    return array();
  }

  public function getEditDisplay()
  {
    return array();
  }

  public function getNewDisplay()
  {
    return array();
  }

  public function getListDisplay()
  {
    return array(  0 => '=titulo',  1 => 'fechainicio',  2 => 'fechafin',  3 => 'imagen',);
  }

  public function getFieldsDefault()
  {
    return array(
      'id' => array(  'is_link' => true,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',  'label' => 'Id',),
      'titulo' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',  'label' => 'Titulo Oferta',),
      'texto' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',  'label' => 'Descripcion',),
      'imagen' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',  'label' => 'Imagen',),
      'fechainicio' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Date',  'label' => 'Fecha Inicio',  'params' => 'date_format=\'dd/MM/yy\'',),
      'fechafin' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Date',  'label' => 'Fecha Fin',  'params' => 'date_format=\'dd/MM/yy\'',),
    );
  }

  public function getFieldsList()
  {
    return array(
      'id' => array(),
      'titulo' => array(),
      'texto' => array(),
      'imagen' => array(),
      'fechainicio' => array(  'label' => 'Inicio',  'params' => 'date_format=\'dd/MM/yy\'',),
      'fechafin' => array(  'label' => 'Fin',  'params' => 'date_format=\'dd/MM/yy\'',),
    );
  }

  public function getFieldsFilter()
  {
    return array(
      'id' => array(),
      'titulo' => array(),
      'texto' => array(),
      'imagen' => array(),
      'fechainicio' => array(),
      'fechafin' => array(),
    );
  }

  public function getFieldsForm()
  {
    return array(
      'id' => array(),
      'titulo' => array(),
      'texto' => array(),
      'imagen' => array(),
      'fechainicio' => array(),
      'fechafin' => array(),
    );
  }

  public function getFieldsEdit()
  {
    return array(
      'id' => array(),
      'titulo' => array(),
      'texto' => array(  'type' => 'textarea_tag',  'params' => 'rich=true css=user.css tinymce_options=width:330',),
      'imagen' => array(  'type' => 'admin_input_file_tag',),
      'fechainicio' => array(  'params' => 'date_format=\'dd/MM/yy\'',),
      'fechafin' => array(  'params' =>   array(    'date_format' => 'dd/MM/yyyy',  ),),
    );
  }

  public function getFieldsNew()
  {
    return array(
      'id' => array(),
      'titulo' => array(),
      'texto' => array(),
      'imagen' => array(  'label' => 'Imagen',  'help' => 'Ingrese una imagen JPG o PNG ()',  'type' => 'admin_input_file_tag',  'params' => 'include_link=imagenes include_remove=true',  'upload_dir' => 'imagenes',),
      'fechainicio' => array(  'params' => 'date_format=\'dd/MM/yy\'',),
      'fechafin' => array(  'params' => 'date_format=\'dd/MM/yy\'',),
    );
  }


  /**
   * Gets the form class name.
   *
   * @return string The form class name
   */
  public function getFormClass()
  {
    return 'ofertasForm';
  }

  public function hasFilterForm()
  {
    return true;
  }

  /**
   * Gets the filter form class name
   *
   * @return string The filter form class name associated with this generator
   */
  public function getFilterFormClass()
  {
    return 'ofertasFormFilter';
  }

  public function getPagerClass()
  {
    return 'sfDoctrinePager';
  }

  public function getPagerMaxPerPage()
  {
    return 2;
  }

  public function getDefaultSort()
  {
    return array(null, null);
  }

  public function getTableMethod()
  {
    return '';
  }

  public function getTableCountMethod()
  {
    return '';
  }
}
