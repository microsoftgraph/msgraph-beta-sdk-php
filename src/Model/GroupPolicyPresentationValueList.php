<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* GroupPolicyPresentationValueList File
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
* GroupPolicyPresentationValueList class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class GroupPolicyPresentationValueList extends GroupPolicyPresentationValue
{

     /** 
     * Gets the values
    * A list of pairs for the associated presentation.
     *
     * @return KeyValuePair[]|null The values
     */
    public function getValues()
    {
        if (array_key_exists('values', $this->_propDict) && !is_null($this->_propDict['values'])) {
           $values = [];
           if (count($this->_propDict['values']) > 0 && is_a($this->_propDict['values'][0], 'KeyValuePair')) {
              return $this->_propDict['values'];
           }
           foreach ($this->_propDict['values'] as $singleValue) {
              $values []= new KeyValuePair($singleValue);
           }
           $this->_propDict['values'] = $values;
           return $this->_propDict['values'];
        }
        return null;
    }
    
    /** 
    * Sets the values
    * A list of pairs for the associated presentation.
    *
    * @param KeyValuePair[] $val The values
    *
    * @return GroupPolicyPresentationValueList
    */
    public function setValues($val)
    {
        $this->_propDict["values"] = $val;
        return $this;
    }
    
}
