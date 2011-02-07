<?php

/**
 * Ofertas form base class.
 *
 * @method Ofertas getObject() Returns the current form's model object
 *
 * @package    ceronet
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseOfertasForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'          => new sfWidgetFormInputHidden(),
      'titulo'      => new sfWidgetFormInputText(),
      'texto'       => new sfWidgetFormTextarea(),
      'imagen'      => new sfWidgetFormTextarea(),
      'fechainicio' => new sfWidgetFormDate(),
      'fechafin'    => new sfWidgetFormDate(),
    ));

    $this->setValidators(array(
      'id'          => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'titulo'      => new sfValidatorString(array('max_length' => 50)),
      'texto'       => new sfValidatorString(array('max_length' => 500)),
      'imagen'      => new sfValidatorString(array('max_length' => 500, 'required' => false)),
      'fechainicio' => new sfValidatorDate(),
      'fechafin'    => new sfValidatorDate(),
    ));

    $this->widgetSchema->setNameFormat('ofertas[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Ofertas';
  }

}
