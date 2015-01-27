<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Category', 'doctrine');

/**
 * BaseCategory
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $name
 * @property string $slug
 * @property timestamp $created_at
 * @property timestamp $updated_at
 * @property Doctrine_Collection $Post
 * 
 * @method integer             getId()         Returns the current record's "id" value
 * @method string              getName()       Returns the current record's "name" value
 * @method string              getSlug()       Returns the current record's "slug" value
 * @method timestamp           getCreatedAt()  Returns the current record's "created_at" value
 * @method timestamp           getUpdatedAt()  Returns the current record's "updated_at" value
 * @method Doctrine_Collection getPost()       Returns the current record's "Post" collection
 * @method Category            setId()         Sets the current record's "id" value
 * @method Category            setName()       Sets the current record's "name" value
 * @method Category            setSlug()       Sets the current record's "slug" value
 * @method Category            setCreatedAt()  Sets the current record's "created_at" value
 * @method Category            setUpdatedAt()  Sets the current record's "updated_at" value
 * @method Category            setPost()       Sets the current record's "Post" collection
 * 
 * @package    blog
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseCategory extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('category');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => true,
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('name', 'string', 100, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 100,
             ));
        $this->hasColumn('slug', 'string', 100, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 100,
             ));
        $this->hasColumn('created_at', 'timestamp', 25, array(
             'type' => 'timestamp',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 25,
             ));
        $this->hasColumn('updated_at', 'timestamp', 25, array(
             'type' => 'timestamp',
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
        $this->hasMany('Post', array(
             'local' => 'id',
             'foreign' => 'category_id'));
    }
}