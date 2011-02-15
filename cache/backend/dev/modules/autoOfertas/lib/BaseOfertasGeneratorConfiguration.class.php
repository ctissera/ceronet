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
    return array(  '_delete' =>   array(    'label' => 'Eliminar Oferta',    'params' => 'confirm= Esta seguro ?',  ),  '_list' =>   array(    'label' => 'Volver a la Lista',  ),  '_save' =>   array(    'label' => 'Guardar Oferta',  ),);
  }

  public function getListObjectActions()
  {
    return array(  '_edit' =>   array(    'label' => 'Editar',  ),  '_delete' =>   array(    'label' => 'Eliminar',    'params' => 'confirm=Esta seguro ?',  ),);
  }

  public function getListActions()
  {
    return array(  '_new' =>   array(    'label' => 'Crear Nueva Oferta',  ),);
  }

  public function getListBatchActions()
  {
    return array(  '_delete' =>   array(    'label' => 'Eliminar Ofertas Seleccionadas',    'params' => 'confirm=Esta seguro ?',  ),);
  }

  public function getListParams()
  {
    return '%%=titulo%% - %%fechainicio%% - %%fechafin%% - %%_imagen%%';
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
    return array(  0 => '=titulo',  1 => 'fechainicio',  2 => 'fechafin',  3 => '_imagen',);
  }

  public function getFieldsDefault()
  {
    return array(
      'id' => array(  'is_link' => true,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',  'label' => 'Id',),
      'titulo' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',  'label' => 'Titulo Oferta',),
      'texto' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',  'label' => 'Descripcion',),
      'imagen' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',  'label' => 'Imagen',),
      'fechainicio' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Date',  'label' => 'Fecha Inicio',  'date_format' => 'dd/MM/yyyy',),
      'fechafin' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Date',  'label' => 'Fecha Fin',  'date_format' => 'dd/MM/yyyy',),
    );
  }

  public function getFieldsList()
  {
    return array(
      'id' => array(),
      'titulo' => array(),
      'texto' => array(),
      'imagen' => array(),
      'fechainicio' => array(  'label' => 'Inicio',  'date_format' => 'dd/MM/yyyy',),
      'fechafin' => array(  'label' => 'Fin',  'date_format' => 'dd/MM/yyyy',),
      '_link_to_image' => array(  'label' => 'Imagen',),
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
      'texto' => array(),
      'imagen' => array(  'params' => 'include_link=imagenes, include_remove=true',),
      'fechainicio' => array(),
      'fechafin' => array(),
    );
  }

  public function getFieldsNew()
  {
    return array(
      'id' => array(),
      'titulo' => array(),
      'texto' => array(),
      'imagen' => array(  'label' => 'Imagen',  'help' => 'Ingrese una imagen JPG o PNG',  'type' => 'admin_input_upload_tag',  'params' => 'include_link=imagenes, include_remove=true',  'upload_dir' => 'imagenes',),
      'fechainicio' => array(),
      'fechafin' => array(),
    );
  }


  /**
   * Gets the form class name.
   *
   * @return string The form class name
   */
  public function getFormClass()
  {
    return 'OfertasForm';
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
    return 10;
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
