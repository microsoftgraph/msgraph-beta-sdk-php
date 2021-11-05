<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PasswordSingleSignOnSettings File
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
* PasswordSingleSignOnSettings class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PasswordSingleSignOnSettings extends Entity
{

    /**
    * Gets the fields
    *
    * @return PasswordSingleSignOnField[]|null The fields
    */
    public function getFields()
    {
        if (array_key_exists("fields", $this->_propDict) && !is_null($this->_propDict["fields"])) {
       
            if (count($this->_propDict['fields']) > 0 && is_a($this->_propDict['fields'][0], 'PasswordSingleSignOnField')) {
                return $this->_propDict['fields'];
            }
            $fields = [];
            foreach ($this->_propDict['fields'] as $singleValue) {
                $fields []= new PasswordSingleSignOnField($singleValue);
            }
            $this->_propDict['fields'] = $fields;
            return $this->_propDict['fields'];
            }
        return null;
    }

    /**
    * Sets the fields
    *
    * @param PasswordSingleSignOnField[] $val The value to assign to the fields
    *
    * @return PasswordSingleSignOnSettings The PasswordSingleSignOnSettings
    */
    public function setFields($val)
    {
        $this->_propDict["fields"] = $val;
         return $this;
    }
}
