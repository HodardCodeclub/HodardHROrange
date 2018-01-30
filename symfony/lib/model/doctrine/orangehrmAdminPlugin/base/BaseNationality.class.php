<?php

/**
 * BaseNationality
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $name
 * @property Doctrine_Collection $Employee
 * 
 * @method integer             getId()       Returns the current record's "id" value
 * @method string              getName()     Returns the current record's "name" value
 * @method Doctrine_Collection getEmployee() Returns the current record's "Employee" collection
 * @method Nationality         setId()       Sets the current record's "id" value
 * @method Nationality         setName()     Sets the current record's "name" value
 * @method Nationality         setEmployee() Sets the current record's "Employee" collection
 * 
 * @package    orangehrm
 * @subpackage model\admin\base
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseNationality extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('ohrm_nationality');
        $this->hasColumn('id', 'integer', null, array(
             'type' => 'integer',
             'primary' => true,
             'autoincrement' => true,
             ));
        $this->hasColumn('name', 'string', 100, array(
             'type' => 'string',
             'length' => 100,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('Employee', array(
             'local' => 'id',
             'foreign' => 'nation_code'));
    }
}