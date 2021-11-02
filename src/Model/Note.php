<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Note File
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
* Note class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Note extends OutlookItem
{
    /**
    * Gets the body
    *
    * @return ItemBody|null The body
    */
    public function getBody()
    {
        if (array_key_exists("body", $this->_propDict) && !is_null($this->_propDict["body"])) {
            if (is_a($this->_propDict["body"], "\Beta\Microsoft\Graph\Model\ItemBody")) {
                return $this->_propDict["body"];
            } else {
                $this->_propDict["body"] = new ItemBody($this->_propDict["body"]);
                return $this->_propDict["body"];
            }
        }
        return null;
    }
    
    /**
    * Sets the body
    *
    * @param ItemBody $val The body
    *
    * @return Note
    */
    public function setBody($val)
    {
        $this->_propDict["body"] = $val;
        return $this;
    }
    
    /**
    * Gets the hasAttachments
    *
    * @return bool|null The hasAttachments
    */
    public function getHasAttachments()
    {
        if (array_key_exists("hasAttachments", $this->_propDict)) {
            return $this->_propDict["hasAttachments"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the hasAttachments
    *
    * @param bool $val The hasAttachments
    *
    * @return Note
    */
    public function setHasAttachments($val)
    {
        $this->_propDict["hasAttachments"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the isDeleted
    *
    * @return bool|null The isDeleted
    */
    public function getIsDeleted()
    {
        if (array_key_exists("isDeleted", $this->_propDict)) {
            return $this->_propDict["isDeleted"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isDeleted
    *
    * @param bool $val The isDeleted
    *
    * @return Note
    */
    public function setIsDeleted($val)
    {
        $this->_propDict["isDeleted"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the subject
    *
    * @return string|null The subject
    */
    public function getSubject()
    {
        if (array_key_exists("subject", $this->_propDict)) {
            return $this->_propDict["subject"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the subject
    *
    * @param string $val The subject
    *
    * @return Note
    */
    public function setSubject($val)
    {
        $this->_propDict["subject"] = $val;
        return $this;
    }
    

     /** 
     * Gets the attachments
     *
     * @return Attachment[]|null The attachments
     */
    public function getAttachments()
    {
        if (array_key_exists('attachments', $this->_propDict) && !is_null($this->_propDict['attachments'])) {
           $attachments = [];
           if (count($this->_propDict['attachments']) > 0 && is_a($this->_propDict['attachments'][0], 'Attachment')) {
              return $this->_propDict['attachments'];
           }
           foreach ($this->_propDict['attachments'] as $singleValue) {
              $attachments []= new Attachment($singleValue);
           }
           $this->_propDict['attachments'] = $attachments;
           return $this->_propDict['attachments'];
        }
        return null;
    }
    
    /** 
    * Sets the attachments
    *
    * @param Attachment[] $val The attachments
    *
    * @return Note
    */
    public function setAttachments($val)
    {
        $this->_propDict["attachments"] = $val;
        return $this;
    }
    

     /** 
     * Gets the extensions
     *
     * @return Extension[]|null The extensions
     */
    public function getExtensions()
    {
        if (array_key_exists('extensions', $this->_propDict) && !is_null($this->_propDict['extensions'])) {
           $extensions = [];
           if (count($this->_propDict['extensions']) > 0 && is_a($this->_propDict['extensions'][0], 'Extension')) {
              return $this->_propDict['extensions'];
           }
           foreach ($this->_propDict['extensions'] as $singleValue) {
              $extensions []= new Extension($singleValue);
           }
           $this->_propDict['extensions'] = $extensions;
           return $this->_propDict['extensions'];
        }
        return null;
    }
    
    /** 
    * Sets the extensions
    *
    * @param Extension[] $val The extensions
    *
    * @return Note
    */
    public function setExtensions($val)
    {
        $this->_propDict["extensions"] = $val;
        return $this;
    }
    

     /** 
     * Gets the multiValueExtendedProperties
     *
     * @return MultiValueLegacyExtendedProperty[]|null The multiValueExtendedProperties
     */
    public function getMultiValueExtendedProperties()
    {
        if (array_key_exists('multiValueExtendedProperties', $this->_propDict) && !is_null($this->_propDict['multiValueExtendedProperties'])) {
           $multiValueExtendedProperties = [];
           if (count($this->_propDict['multiValueExtendedProperties']) > 0 && is_a($this->_propDict['multiValueExtendedProperties'][0], 'MultiValueLegacyExtendedProperty')) {
              return $this->_propDict['multiValueExtendedProperties'];
           }
           foreach ($this->_propDict['multiValueExtendedProperties'] as $singleValue) {
              $multiValueExtendedProperties []= new MultiValueLegacyExtendedProperty($singleValue);
           }
           $this->_propDict['multiValueExtendedProperties'] = $multiValueExtendedProperties;
           return $this->_propDict['multiValueExtendedProperties'];
        }
        return null;
    }
    
    /** 
    * Sets the multiValueExtendedProperties
    *
    * @param MultiValueLegacyExtendedProperty[] $val The multiValueExtendedProperties
    *
    * @return Note
    */
    public function setMultiValueExtendedProperties($val)
    {
        $this->_propDict["multiValueExtendedProperties"] = $val;
        return $this;
    }
    

     /** 
     * Gets the singleValueExtendedProperties
     *
     * @return SingleValueLegacyExtendedProperty[]|null The singleValueExtendedProperties
     */
    public function getSingleValueExtendedProperties()
    {
        if (array_key_exists('singleValueExtendedProperties', $this->_propDict) && !is_null($this->_propDict['singleValueExtendedProperties'])) {
           $singleValueExtendedProperties = [];
           if (count($this->_propDict['singleValueExtendedProperties']) > 0 && is_a($this->_propDict['singleValueExtendedProperties'][0], 'SingleValueLegacyExtendedProperty')) {
              return $this->_propDict['singleValueExtendedProperties'];
           }
           foreach ($this->_propDict['singleValueExtendedProperties'] as $singleValue) {
              $singleValueExtendedProperties []= new SingleValueLegacyExtendedProperty($singleValue);
           }
           $this->_propDict['singleValueExtendedProperties'] = $singleValueExtendedProperties;
           return $this->_propDict['singleValueExtendedProperties'];
        }
        return null;
    }
    
    /** 
    * Sets the singleValueExtendedProperties
    *
    * @param SingleValueLegacyExtendedProperty[] $val The singleValueExtendedProperties
    *
    * @return Note
    */
    public function setSingleValueExtendedProperties($val)
    {
        $this->_propDict["singleValueExtendedProperties"] = $val;
        return $this;
    }
    
}
