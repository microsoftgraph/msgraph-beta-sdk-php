<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ClassificationError File
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
* ClassificationError class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ClassificationError extends ClassifcationErrorBase
{

    /**
    * Gets the details
    *
    * @return ClassifcationErrorBase[]|null The details
    */
    public function getDetails()
    {
        if (array_key_exists("details", $this->_propDict) && !is_null($this->_propDict["details"])) {
       
            if (count($this->_propDict['details']) > 0 && is_a($this->_propDict['details'][0], 'ClassifcationErrorBase')) {
                return $this->_propDict['details'];
            }
            $details = [];
            foreach ($this->_propDict['details'] as $singleValue) {
                $details []= new ClassifcationErrorBase($singleValue);
            }
            $this->_propDict['details'] = $details;
            return $this->_propDict['details'];
            }
        return null;
    }

    /**
    * Sets the details
    *
    * @param ClassifcationErrorBase[] $val The value to assign to the details
    *
    * @return ClassificationError The ClassificationError
    */
    public function setDetails($val)
    {
        $this->_propDict["details"] = $val;
         return $this;
    }
}
