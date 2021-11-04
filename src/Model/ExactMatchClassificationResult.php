<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ExactMatchClassificationResult File
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
* ExactMatchClassificationResult class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ExactMatchClassificationResult extends Entity
{

    /**
    * Gets the classification
    *
    * @return ExactMatchDetectedSensitiveContent[]|null The classification
    */
    public function getClassification()
    {
        if (array_key_exists("classification", $this->_propDict) && !is_null($this->_propDict["classification"])) {
       
            if (count($this->_propDict['classification']) > 0 && is_a($this->_propDict['classification'][0], 'ExactMatchDetectedSensitiveContent')) {
                return $this->_propDict['classification'];
            }
            $classification = [];
            foreach ($this->_propDict['classification'] as $singleValue) {
                $classification []= new ExactMatchDetectedSensitiveContent($singleValue);
            }
            $this->_propDict['classification'] = $classification;
            return $this->_propDict['classification'];
            }
        return null;
    }

    /**
    * Sets the classification
    *
    * @param ExactMatchDetectedSensitiveContent[] $val The value to assign to the classification
    *
    * @return ExactMatchClassificationResult The ExactMatchClassificationResult
    */
    public function setClassification($val)
    {
        $this->_propDict["classification"] = $val;
         return $this;
    }

    /**
    * Gets the errors
    *
    * @return ClassificationError[]|null The errors
    */
    public function getErrors()
    {
        if (array_key_exists("errors", $this->_propDict) && !is_null($this->_propDict["errors"])) {
       
            if (count($this->_propDict['errors']) > 0 && is_a($this->_propDict['errors'][0], 'ClassificationError')) {
                return $this->_propDict['errors'];
            }
            $errors = [];
            foreach ($this->_propDict['errors'] as $singleValue) {
                $errors []= new ClassificationError($singleValue);
            }
            $this->_propDict['errors'] = $errors;
            return $this->_propDict['errors'];
            }
        return null;
    }

    /**
    * Sets the errors
    *
    * @param ClassificationError[] $val The value to assign to the errors
    *
    * @return ExactMatchClassificationResult The ExactMatchClassificationResult
    */
    public function setErrors($val)
    {
        $this->_propDict["errors"] = $val;
         return $this;
    }
}
