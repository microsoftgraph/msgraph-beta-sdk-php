<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* InformationProtectionPolicy File
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
* InformationProtectionPolicy class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class InformationProtectionPolicy extends Entity
{

     /** 
     * Gets the labels
     *
     * @return InformationProtectionLabel[]|null The labels
     */
    public function getLabels()
    {
        if (array_key_exists('labels', $this->_propDict) && !is_null($this->_propDict['labels'])) {
           $labels = [];
           if (count($this->_propDict['labels']) > 0 && is_a($this->_propDict['labels'][0], 'InformationProtectionLabel')) {
              return $this->_propDict['labels'];
           }
           foreach ($this->_propDict['labels'] as $singleValue) {
              $labels []= new InformationProtectionLabel($singleValue);
           }
           $this->_propDict['labels'] = $labels;
           return $this->_propDict['labels'];
        }
        return null;
    }
    
    /** 
    * Sets the labels
    *
    * @param InformationProtectionLabel[] $val The labels
    *
    * @return InformationProtectionPolicy
    */
    public function setLabels($val)
    {
        $this->_propDict["labels"] = $val;
        return $this;
    }
    
}
