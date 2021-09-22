<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SynchronizationRule File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Model;
/**
* SynchronizationRule class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class SynchronizationRule extends Entity
{
    /**
    * Gets the editable
    * true if the synchronization rule can be customized; false if this rule is read-only and should not be changed.
    *
    * @return bool|null The editable
    */
    public function getEditable()
    {
        if (array_key_exists("editable", $this->_propDict)) {
            return $this->_propDict["editable"];
        } else {
            return null;
        }
    }

    /**
    * Sets the editable
    * true if the synchronization rule can be customized; false if this rule is read-only and should not be changed.
    *
    * @param bool $val The value of the editable
    *
    * @return SynchronizationRule
    */
    public function setEditable($val)
    {
        $this->_propDict["editable"] = $val;
        return $this;
    }
    /**
    * Gets the id
    * Synchronization rule identifier. Must be one of the identifiers recognized by the synchronization engine. Supported rule identifiers can be found in the synchronization template returned by the API.
    *
    * @return string|null The id
    */
    public function getId()
    {
        if (array_key_exists("id", $this->_propDict)) {
            return $this->_propDict["id"];
        } else {
            return null;
        }
    }

    /**
    * Sets the id
    * Synchronization rule identifier. Must be one of the identifiers recognized by the synchronization engine. Supported rule identifiers can be found in the synchronization template returned by the API.
    *
    * @param string $val The value of the id
    *
    * @return SynchronizationRule
    */
    public function setId($val)
    {
        $this->_propDict["id"] = $val;
        return $this;
    }

    /**
    * Gets the metadata
    * Additional extension properties. Unless instructed explicitly by the support team, metadata values should not be changed.
    *
    * @return StringKeyStringValuePair[]|null The metadata
    */
    public function getMetadata()
    {
        if (array_key_exists("metadata", $this->_propDict) && !is_null($this->_propDict["metadata"])) {
       
            if (count($this->_propDict['metadata']) > 0 && is_a($this->_propDict['metadata'][0], 'StringKeyStringValuePair')) {
               return $this->_propDict['metadata'];
            }
            $metadata = [];
            foreach ($this->_propDict['metadata'] as $singleValue) {
               $metadata []= new StringKeyStringValuePair($singleValue);
            }
            $this->_propDict['metadata'] = $metadata;
            return $this->_propDict['metadata'];
            }
        return null;
    }

    /**
    * Sets the metadata
    * Additional extension properties. Unless instructed explicitly by the support team, metadata values should not be changed.
    *
    * @param StringKeyStringValuePair[] $val The value to assign to the metadata
    *
    * @return SynchronizationRule The SynchronizationRule
    */
    public function setMetadata($val)
    {
        $this->_propDict["metadata"] = $val;
         return $this;
    }
    /**
    * Gets the name
    * Human-readable name of the synchronization rule. Not nullable.
    *
    * @return string|null The name
    */
    public function getName()
    {
        if (array_key_exists("name", $this->_propDict)) {
            return $this->_propDict["name"];
        } else {
            return null;
        }
    }

    /**
    * Sets the name
    * Human-readable name of the synchronization rule. Not nullable.
    *
    * @param string $val The value of the name
    *
    * @return SynchronizationRule
    */
    public function setName($val)
    {
        $this->_propDict["name"] = $val;
        return $this;
    }

    /**
    * Gets the objectMappings
    * Collection of object mappings supported by the rule. Tells the synchronization engine which objects should be synchronized.
    *
    * @return ObjectMapping[]|null The objectMappings
    */
    public function getObjectMappings()
    {
        if (array_key_exists("objectMappings", $this->_propDict) && !is_null($this->_propDict["objectMappings"])) {
       
            if (count($this->_propDict['objectMappings']) > 0 && is_a($this->_propDict['objectMappings'][0], 'ObjectMapping')) {
               return $this->_propDict['objectMappings'];
            }
            $objectMappings = [];
            foreach ($this->_propDict['objectMappings'] as $singleValue) {
               $objectMappings []= new ObjectMapping($singleValue);
            }
            $this->_propDict['objectMappings'] = $objectMappings;
            return $this->_propDict['objectMappings'];
            }
        return null;
    }

    /**
    * Sets the objectMappings
    * Collection of object mappings supported by the rule. Tells the synchronization engine which objects should be synchronized.
    *
    * @param ObjectMapping[] $val The value to assign to the objectMappings
    *
    * @return SynchronizationRule The SynchronizationRule
    */
    public function setObjectMappings($val)
    {
        $this->_propDict["objectMappings"] = $val;
         return $this;
    }
    /**
    * Gets the priority
    * Priority relative to other rules in the synchronizationSchema. Rules with the lowest priority number will be processed first.
    *
    * @return int|null The priority
    */
    public function getPriority()
    {
        if (array_key_exists("priority", $this->_propDict)) {
            return $this->_propDict["priority"];
        } else {
            return null;
        }
    }

    /**
    * Sets the priority
    * Priority relative to other rules in the synchronizationSchema. Rules with the lowest priority number will be processed first.
    *
    * @param int $val The value of the priority
    *
    * @return SynchronizationRule
    */
    public function setPriority($val)
    {
        $this->_propDict["priority"] = $val;
        return $this;
    }
    /**
    * Gets the sourceDirectoryName
    * Name of the source directory. Must match one of the directory definitions in synchronizationSchema.
    *
    * @return string|null The sourceDirectoryName
    */
    public function getSourceDirectoryName()
    {
        if (array_key_exists("sourceDirectoryName", $this->_propDict)) {
            return $this->_propDict["sourceDirectoryName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the sourceDirectoryName
    * Name of the source directory. Must match one of the directory definitions in synchronizationSchema.
    *
    * @param string $val The value of the sourceDirectoryName
    *
    * @return SynchronizationRule
    */
    public function setSourceDirectoryName($val)
    {
        $this->_propDict["sourceDirectoryName"] = $val;
        return $this;
    }
    /**
    * Gets the targetDirectoryName
    * Name of the target directory. Must match one of the directory definitions in synchronizationSchema.
    *
    * @return string|null The targetDirectoryName
    */
    public function getTargetDirectoryName()
    {
        if (array_key_exists("targetDirectoryName", $this->_propDict)) {
            return $this->_propDict["targetDirectoryName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the targetDirectoryName
    * Name of the target directory. Must match one of the directory definitions in synchronizationSchema.
    *
    * @param string $val The value of the targetDirectoryName
    *
    * @return SynchronizationRule
    */
    public function setTargetDirectoryName($val)
    {
        $this->_propDict["targetDirectoryName"] = $val;
        return $this;
    }
}
