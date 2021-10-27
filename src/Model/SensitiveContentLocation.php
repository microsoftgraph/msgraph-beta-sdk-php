<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SensitiveContentLocation File
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
* SensitiveContentLocation class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class SensitiveContentLocation extends Entity
{
    /**
    * Gets the confidence
    *
    * @return int|null The confidence
    */
    public function getConfidence()
    {
        if (array_key_exists("confidence", $this->_propDict)) {
            return $this->_propDict["confidence"];
        } else {
            return null;
        }
    }

    /**
    * Sets the confidence
    *
    * @param int $val The value of the confidence
    *
    * @return SensitiveContentLocation
    */
    public function setConfidence($val)
    {
        $this->_propDict["confidence"] = $val;
        return $this;
    }

    /**
    * Gets the evidences
    *
    * @return SensitiveContentEvidence[]|null The evidences
    */
    public function getEvidences()
    {
        if (array_key_exists("evidences", $this->_propDict) && !is_null($this->_propDict["evidences"])) {
       
            if (count($this->_propDict['evidences']) > 0 && is_a($this->_propDict['evidences'][0], 'SensitiveContentEvidence')) {
               return $this->_propDict['evidences'];
            }
            $evidences = [];
            foreach ($this->_propDict['evidences'] as $singleValue) {
               $evidences []= new SensitiveContentEvidence($singleValue);
            }
            $this->_propDict['evidences'] = $evidences;
            return $this->_propDict['evidences'];
            }
        return null;
    }

    /**
    * Sets the evidences
    *
    * @param SensitiveContentEvidence[] $val The value to assign to the evidences
    *
    * @return SensitiveContentLocation The SensitiveContentLocation
    */
    public function setEvidences($val)
    {
        $this->_propDict["evidences"] = $val;
         return $this;
    }
    /**
    * Gets the idMatch
    *
    * @return string|null The idMatch
    */
    public function getIdMatch()
    {
        if (array_key_exists("idMatch", $this->_propDict)) {
            return $this->_propDict["idMatch"];
        } else {
            return null;
        }
    }

    /**
    * Sets the idMatch
    *
    * @param string $val The value of the idMatch
    *
    * @return SensitiveContentLocation
    */
    public function setIdMatch($val)
    {
        $this->_propDict["idMatch"] = $val;
        return $this;
    }
    /**
    * Gets the length
    *
    * @return int|null The length
    */
    public function getLength()
    {
        if (array_key_exists("length", $this->_propDict)) {
            return $this->_propDict["length"];
        } else {
            return null;
        }
    }

    /**
    * Sets the length
    *
    * @param int $val The value of the length
    *
    * @return SensitiveContentLocation
    */
    public function setLength($val)
    {
        $this->_propDict["length"] = $val;
        return $this;
    }
    /**
    * Gets the offset
    *
    * @return int|null The offset
    */
    public function getOffset()
    {
        if (array_key_exists("offset", $this->_propDict)) {
            return $this->_propDict["offset"];
        } else {
            return null;
        }
    }

    /**
    * Sets the offset
    *
    * @param int $val The value of the offset
    *
    * @return SensitiveContentLocation
    */
    public function setOffset($val)
    {
        $this->_propDict["offset"] = $val;
        return $this;
    }
}
