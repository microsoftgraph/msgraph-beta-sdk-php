<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DlpPoliciesJobResult File
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
* DlpPoliciesJobResult class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DlpPoliciesJobResult extends Entity
{

    /**
    * Gets the matchingRules
    *
    * @return MatchingDlpRule[]|null The matchingRules
    */
    public function getMatchingRules()
    {
        if (array_key_exists("matchingRules", $this->_propDict) && !is_null($this->_propDict["matchingRules"])) {
       
            if (count($this->_propDict['matchingRules']) > 0 && is_a($this->_propDict['matchingRules'][0], 'MatchingDlpRule')) {
                return $this->_propDict['matchingRules'];
            }
            $matchingRules = [];
            foreach ($this->_propDict['matchingRules'] as $singleValue) {
                $matchingRules []= new MatchingDlpRule($singleValue);
            }
            $this->_propDict['matchingRules'] = $matchingRules;
            return $this->_propDict['matchingRules'];
            }
        return null;
    }

    /**
    * Sets the matchingRules
    *
    * @param MatchingDlpRule[] $val The value to assign to the matchingRules
    *
    * @return DlpPoliciesJobResult The DlpPoliciesJobResult
    */
    public function setMatchingRules($val)
    {
        $this->_propDict["matchingRules"] = $val;
         return $this;
    }
}
