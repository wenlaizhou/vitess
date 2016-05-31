<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin 1.0
// Source: vschema.proto

namespace Vitess\Proto\Vschema\Keyspace {

  class TablesEntry extends \DrSlump\Protobuf\Message {

    /**  @var string */
    public $key = null;
    
    /**  @var \Vitess\Proto\Vschema\Table */
    public $value = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'vschema.Keyspace.TablesEntry');

      // OPTIONAL STRING key = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "key";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE value = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "value";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\Vitess\Proto\Vschema\Table';
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <key> has a value
     *
     * @return boolean
     */
    public function hasKey(){
      return $this->_has(1);
    }
    
    /**
     * Clear <key> value
     *
     * @return \Vitess\Proto\Vschema\Keyspace\TablesEntry
     */
    public function clearKey(){
      return $this->_clear(1);
    }
    
    /**
     * Get <key> value
     *
     * @return string
     */
    public function getKey(){
      return $this->_get(1);
    }
    
    /**
     * Set <key> value
     *
     * @param string $value
     * @return \Vitess\Proto\Vschema\Keyspace\TablesEntry
     */
    public function setKey( $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <value> has a value
     *
     * @return boolean
     */
    public function hasValue(){
      return $this->_has(2);
    }
    
    /**
     * Clear <value> value
     *
     * @return \Vitess\Proto\Vschema\Keyspace\TablesEntry
     */
    public function clearValue(){
      return $this->_clear(2);
    }
    
    /**
     * Get <value> value
     *
     * @return \Vitess\Proto\Vschema\Table
     */
    public function getValue(){
      return $this->_get(2);
    }
    
    /**
     * Set <value> value
     *
     * @param \Vitess\Proto\Vschema\Table $value
     * @return \Vitess\Proto\Vschema\Keyspace\TablesEntry
     */
    public function setValue(\Vitess\Proto\Vschema\Table $value){
      return $this->_set(2, $value);
    }
  }
}
