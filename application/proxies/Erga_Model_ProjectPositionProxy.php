<?php

namespace DoctrineProxies;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class Erga_Model_ProjectPositionProxy extends \Erga_Model_ProjectPosition implements \Doctrine\ORM\Proxy\Proxy
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

    
    public function get_positionid()
    {
        if ($this->__isInitialized__ === false) {
            return (int) $this->_identifier["_positionid"];
        }
        $this->__load();
        return parent::get_positionid();
    }

    public function set_positionid($_positionid)
    {
        $this->__load();
        return parent::set_positionid($_positionid);
    }

    public function get_project()
    {
        $this->__load();
        return parent::get_project();
    }

    public function set_project($_project)
    {
        $this->__load();
        return parent::set_project($_project);
    }

    public function get_teirole()
    {
        $this->__load();
        return parent::get_teirole();
    }

    public function set_teirole($_teirole)
    {
        $this->__load();
        return parent::set_teirole($_teirole);
    }

    public function get_partners()
    {
        $this->__load();
        return parent::get_partners();
    }

    public function set_partners($_partners)
    {
        $this->__load();
        return parent::set_partners($_partners);
    }

    public function get_teiiscoordinator()
    {
        $this->__load();
        return parent::get_teiiscoordinator();
    }

    public function set_teiiscoordinator($_teiiscoordinator)
    {
        $this->__load();
        return parent::set_teiiscoordinator($_teiiscoordinator);
    }

    public function get_anadoxos()
    {
        $this->__load();
        return parent::get_anadoxos();
    }

    public function set_anadoxos($_anadoxos)
    {
        $this->__load();
        return parent::set_anadoxos($_anadoxos);
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

    public function setOwner($owner)
    {
        $this->__load();
        return parent::setOwner($owner);
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
        return array('__isInitialized__', '_positionid', '_project', '_teirole', '_partners', '_teiiscoordinator', '_anadoxos');
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
            foreach ($class->reflFields AS $field => $reflProperty) {
                $reflProperty->setValue($this, $reflProperty->getValue($original));
            }
            unset($this->_entityPersister, $this->_identifier);
        }
        
    }
}