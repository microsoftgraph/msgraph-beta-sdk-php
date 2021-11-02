<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Approval File
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
* Approval class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Approval extends Entity
{

     /** 
     * Gets the steps
     *
     * @return ApprovalStep[]|null The steps
     */
    public function getSteps()
    {
        if (array_key_exists('steps', $this->_propDict) && !is_null($this->_propDict['steps'])) {
           $steps = [];
           if (count($this->_propDict['steps']) > 0 && is_a($this->_propDict['steps'][0], 'ApprovalStep')) {
              return $this->_propDict['steps'];
           }
           foreach ($this->_propDict['steps'] as $singleValue) {
              $steps []= new ApprovalStep($singleValue);
           }
           $this->_propDict['steps'] = $steps;
           return $this->_propDict['steps'];
        }
        return null;
    }
    
    /** 
    * Sets the steps
    *
    * @param ApprovalStep[] $val The steps
    *
    * @return Approval
    */
    public function setSteps($val)
    {
        $this->_propDict["steps"] = $val;
        return $this;
    }
    
}
