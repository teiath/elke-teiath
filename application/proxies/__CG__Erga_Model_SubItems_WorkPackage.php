<?php

namespace DoctrineProxies\__CG__;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class Erga_Model_SubItems_WorkPackage extends \Erga_Model_SubItems_WorkPackage implements \Doctrine\ORM\Proxy\Proxy
{
    private $_entityPersister;
    private $_identifier;
    public $__isInitialized__ = false;
    public function __construct($entityPersister, $identifier)
    {
        $this->_entityPersister = $entityPersister;
        $this->_identifier = $identifier;
    }
    /** @private */
    public function __load()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;

            if (method_exists($this, "__wakeup")) {
                // call this after __isInitialized__to avoid infinite recursion
                // but before loading to emulate what ClassMetadata::newInstance()
                // provides.
                $this->__wakeup();
            }

            if ($this->_entityPersister->load($this->_identifier, $this) === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            unset($this->_entityPersister, $this->_identifier);
        }
    }

    /** @private */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    
    public function get_subproject()
    {
        $this->__load();
        return parent::get_subproject();
    }

    public function set_subproject($_subproject)
    {
        $this->__load();
        return parent::set_subproject($_subproject);
    }

    public function get_isvirtual()
    {
        $this->__load();
        return parent::get_isvirtual();
    }

    public function set_isvirtual($_isvirtual)
    {
        $this->__load();
        return parent::set_isvirtual($_isvirtual);
    }

    public function get_deliverables()
    {
        $this->__load();
        return parent::get_deliverables();
    }

    public function get_deliverablesNatsort()
    {
        $this->__load();
        return parent::get_deliverablesNatsort();
    }

    public function set_deliverables($_deliverables)
    {
        $this->__load();
        return parent::set_deliverables($_deliverables);
    }

    public function get_workpackagecodename()
    {
        $this->__load();
        return parent::get_workpackagecodename();
    }

    public function set_workpackagecodename($_workpackagecodename)
    {
        $this->__load();
        return parent::set_workpackagecodename($_workpackagecodename);
    }

    public function get_workpackagename()
    {
        $this->__load();
        return parent::get_workpackagename();
    }

    public function set_workpackagename($_workpackagename)
    {
        $this->__load();
        return parent::set_workpackagename($_workpackagename);
    }

    public function get_name()
    {
        $this->__load();
        return parent::get_name();
    }

    public function get_iscomplete()
    {
        $this->__load();
        return parent::get_iscomplete();
    }

    public function set_iscomplete($_iscomplete)
    {
        $this->__load();
        return parent::set_iscomplete($_iscomplete);
    }

    public function isComplete()
    {
        $this->__load();
        return parent::isComplete();
    }

    public function getCompletionDate()
    {
        $this->__load();
        return parent::getCompletionDate();
    }

    public function get_hasoverduedeliverables()
    {
        $this->__load();
        return parent::get_hasoverduedeliverables();
    }

    public function set_hasoverduedeliverables($_hasoverduedeliverables)
    {
        $this->__load();
        return parent::set_hasoverduedeliverables($_hasoverduedeliverables);
    }

    public function hasOverdueDeliverables()
    {
        $this->__load();
        return parent::hasOverdueDeliverables();
    }

    public function getDeliverableSumAmount(\Erga_Model_PersonnelCategories_PersonnelCategory $category = NULL)
    {
        $this->__load();
        return parent::getDeliverableSumAmount($category);
    }

    public function getDeliverableSumAmountGreekFloat()
    {
        $this->__load();
        return parent::getDeliverableSumAmountGreekFloat();
    }

    public function setOwner($owner)
    {
        $this->__load();
        return parent::setOwner($owner);
    }

    public function __toString()
    {
        $this->__load();
        return parent::__toString();
    }

    public function get_recordid()
    {
        if ($this->__isInitialized__ === false) {
            return (int) $this->_identifier["_recordid"];
        }
        $this->__load();
        return parent::get_recordid();
    }

    public function set_recordid($_recordid)
    {
        $this->__load();
        return parent::set_recordid($_recordid);
    }

    public function __set($name, $value)
    {
        $this->__load();
        return parent::__set($name, $value);
    }

    public function __get($name)
    {
        $this->__load();
        return parent::__get($name);
    }

    public function get__classname()
    {
        $this->__load();
        return parent::get__classname();
    }

    public function set__classname($__classname)
    {
        $this->__load();
        return parent::set__classname($__classname);
    }

    public function setOptions(array $options, $ignoreisvisible = false)
    {
        $this->__load();
        return parent::setOptions($options, $ignoreisvisible);
    }

    public function getOptions($onlyDbFields = true, $poptions = array (
))
    {
        $this->__load();
        return parent::getOptions($onlyDbFields, $poptions);
    }

    public function toArray($onlyDbFields = true, $recursive = false, $options = array (
))
    {
        $this->__load();
        return parent::toArray($onlyDbFields, $recursive, $options);
    }

    public function save()
    {
        $this->__load();
        return parent::save();
    }

    public function remove()
    {
        $this->__load();
        return parent::remove();
    }

    public function getMetaOptions()
    {
        $this->__load();
        return parent::getMetaOptions();
    }

    public function getOptionsAsStrings($where = 'object', $dbfieldsonly = false, $curObject = NULL, &$variables = array (
), $visited = array (
))
    {
        $this->__load();
        return parent::getOptionsAsStrings($where, $dbfieldsonly, $curObject, $variables, $visited);
    }

    public function modifySubCollection($newcollection, &$oldcollection)
    {
        $this->__load();
        return parent::modifySubCollection($newcollection, $oldcollection);
    }


    public function __sleep()
    {
        return array('__isInitialized__', '_isvirtual', '_workpackagecodename', '_workpackagename', '_iscomplete', '_hasoverduedeliverables', '_recordid', '_subproject', '_deliverables');
    }

    public function __clone()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;
            $class = $this->_entityPersister->getClassMetadata();
            $original = $this->_entityPersister->load($this->_identifier);
            if ($original === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            foreach ($class->reflFields as $field => $reflProperty) {
                $reflProperty->setValue($this, $reflProperty->getValue($original));
            }
            unset($this->_entityPersister, $this->_identifier);
        }
        
    }
}