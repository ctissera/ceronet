<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Ofertas', 'doctrine');

/**
 * BaseOfertas
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $titulo
 * @property string $texto
 * @property string $imagen
 * @property date $fechainicio
 * @property date $fechafin
 * 
 * @method integer getId()          Returns the current record's "id" value
 * @method string  getTitulo()      Returns the current record's "titulo" value
 * @method string  getTexto()       Returns the current record's "texto" value
 * @method string  getImagen()      Returns the current record's "imagen" value
 * @method date    getFechainicio() Returns the current record's "fechainicio" value
 * @method date    getFechafin()    Returns the current record's "fechafin" value
 * @method Ofertas setId()          Sets the current record's "id" value
 * @method Ofertas setTitulo()      Sets the current record's "titulo" value
 * @method Ofertas setTexto()       Sets the current record's "texto" value
 * @method Ofertas setImagen()      Sets the current record's "imagen" value
 * @method Ofertas setFechainicio() Sets the current record's "fechainicio" value
 * @method Ofertas setFechafin()    Sets the current record's "fechafin" value
 * 
 * @package    ceronet
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseOfertas extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('ofertas');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('titulo', 'string', 50, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 50,
             ));
        $this->hasColumn('texto', 'string', 500, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 500,
             ));
        $this->hasColumn('imagen', 'string', 500, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 500,
             ));
        $this->hasColumn('fechainicio', 'date', 25, array(
             'type' => 'date',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 25,
             ));
        $this->hasColumn('fechafin', 'date', 25, array(
             'type' => 'date',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 25,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}