<?php

namespace DoctrineProxies\__CG__;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class Erga_Model_Project extends \Erga_Model_Project implements \Doctrine\ORM\Proxy\Proxy
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

    
    public function get_projectid()
    {
        if ($this->__isInitialized__ === false) {
            return (int) $this->_identifier["_projectid"];
        }
        $this->__load();
        return parent::get_projectid();
    }

    public function set_projectid($_projectid)
    {
        $this->__load();
        return parent::set_projectid($_projectid);
    }

    public function get_code()
    {
        $this->__load();
        return parent::get_code();
    }

    public function get_creationdate()
    {
        $this->__load();
        return parent::get_creationdate();
    }

    public function get_lastupdatedate()
    {
        $this->__load();
        return parent::get_lastupdatedate();
    }

    public function get_basicdetails()
    {
        $this->__load();
        return parent::get_basicdetails();
    }

    public function set_basicdetails($_basicdetails)
    {
        $this->__load();
        return parent::set_basicdetails($_basicdetails);
    }

    public function get_position()
    {
        $this->__load();
        return parent::get_position();
    }

    public function set_position($_position)
    {
        $this->__load();
        return parent::set_position($_position);
    }

    public function get_financialdetails()
    {
        $this->__load();
        return parent::get_financialdetails();
    }

    public function set_financialdetails($_financialdetails)
    {
        $this->__load();
        return parent::set_financialdetails($_financialdetails);
    }

    public function get_iscomplex()
    {
        $this->__load();
        return parent::get_iscomplex();
    }

    public function set_iscomplex($_iscomplex)
    {
        $this->__load();
        return parent::set_iscomplex($_iscomplex);
    }

    public function containsAitisiType($type)
    {
        $this->__load();
        return parent::containsAitisiType($type);
    }

    public function get_subprojects()
    {
        $this->__load();
        return parent::get_subprojects();
    }

    public function set_subprojects($_subprojects)
    {
        $this->__load();
        return parent::set_subprojects($_subprojects);
    }

    public function getNextSubProjectNumber()
    {
        $this->__load();
        return parent::getNextSubProjectNumber();
    }

    public function get_subprojectsname()
    {
        $this->__load();
        return parent::get_subprojectsname();
    }

    public function set_subprojectsname($_subprojectsname)
    {
        $this->__load();
        return parent::set_subprojectsname($_subprojectsname);
    }

    public function getVirtualSubProject()
    {
        $this->__load();
        return parent::getVirtualSubProject();
    }

    public function get_employees()
    {
        $this->__load();
        return parent::get_employees();
    }

    public function get_thisprojectemployees()
    {
        $this->__load();
        return parent::get_thisprojectemployees();
    }

    public function set_employees($_employees)
    {
        $this->__load();
        return parent::set_employees($_employees);
    }

    public function get_contractors()
    {
        $this->__load();
        return parent::get_contractors();
    }

    public function get_employeeTotals()
    {
        $this->__load();
        return parent::get_employeeTotals();
    }

    public function get_personnelcategories()
    {
        $this->__load();
        return parent::get_personnelcategories();
    }

    public function set_personnelcategories($_personnelcategories)
    {
        $this->__load();
        return parent::set_personnelcategories($_personnelcategories);
    }

    public function get_personnelcategoriesAs2dArray()
    {
        $this->__load();
        return parent::get_personnelcategoriesAs2dArray();
    }

    public function get_timesheets()
    {
        $this->__load();
        return parent::get_timesheets();
    }

    public function set_timesheets($_timesheets)
    {
        $this->__load();
        return parent::set_timesheets($_timesheets);
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

    public function getTimesheetDeliverables(\Erga_Model_SubItems_SubProjectEmployee $employee, \EDateTime $month)
    {
        $this->__load();
        return parent::getTimesheetDeliverables($employee, $month);
    }

    public function get_aitiseis()
    {
        $this->__load();
        return parent::get_aitiseis();
    }

    public function set_aitiseis($_aitiseis)
    {
        $this->__load();
        return parent::set_aitiseis($_aitiseis);
    }

    public function save()
    {
        $this->__load();
        return parent::save();
    }

    public function simplySave()
    {
        $this->__load();
        return parent::simplySave();
    }

    public function setOptions(array $options, $ignoreisvisible = false)
    {
        $this->__load();
        return parent::setOptions($options, $ignoreisvisible);
    }

    public function get_title()
    {
        $this->__load();
        return parent::get_title();
    }

    public function get_shorttitle()
    {
        $this->__load();
        return parent::get_shorttitle();
    }

    public function get_id()
    {
        $this->__load();
        return parent::get_id();
    }

    public function __toString()
    {
        $this->__load();
        return parent::__toString();
    }

    public function get_employeesAs2dArray()
    {
        $this->__load();
        return parent::get_employeesAs2dArray();
    }

    public function findEmployeeByEmployee(\Application_Model_Employee $employee)
    {
        $this->__load();
        return parent::findEmployeeByEmployee($employee);
    }

    public function get_employeeSurnamesAs2dArray()
    {
        $this->__load();
        return parent::get_employeeSurnamesAs2dArray();
    }

    public function get_contractorsAs2dArray()
    {
        $this->__load();
        return parent::get_contractorsAs2dArray();
    }

    public function findContractorByAgency(\Application_Model_Contractor $agency)
    {
        $this->__load();
        return parent::findContractorByAgency($agency);
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
        return array('__isInitialized__', '_projectid', '_iscomplex', '_subprojectsname', '_creationdate', '_lastupdatedate', '_iscomplete', '_hasoverduedeliverables', '_basicdetails', '_position', '_financialdetails', '_subprojects', '_aitiseis', '_timesheets', '_employees', '_personnelcategories');
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