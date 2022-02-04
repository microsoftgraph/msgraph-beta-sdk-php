<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AccessReviewSet File
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
* AccessReviewSet class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AccessReviewSet extends Entity
{

     /**
     * Gets the decisions
    * Represents an Azure AD access review decision on an instance of a review.
     *
     * @return AccessReviewInstanceDecisionItem[]|null The decisions
     */
    public function getDecisions()
    {
        if (array_key_exists('decisions', $this->_propDict) && !is_null($this->_propDict['decisions'])) {
            $decisions = [];
            if (count($this->_propDict['decisions']) > 0 && is_a($this->_propDict['decisions'][0], 'AccessReviewInstanceDecisionItem')) {
                return $this->_propDict['decisions'];
            }
            foreach ($this->_propDict['decisions'] as $singleValue) {
                $decisions []= new AccessReviewInstanceDecisionItem($singleValue);
            }
            $this->_propDict['decisions'] = $decisions;
            return $this->_propDict['decisions'];
        }
        return null;
    }

    /**
    * Sets the decisions
    * Represents an Azure AD access review decision on an instance of a review.
    *
    * @param AccessReviewInstanceDecisionItem[] $val The decisions
    *
    * @return AccessReviewSet
    */
    public function setDecisions($val)
    {
        $this->_propDict["decisions"] = $val;
        return $this;
    }


     /**
     * Gets the definitions
    * Represents the template and scheduling for an access review.
     *
     * @return AccessReviewScheduleDefinition[]|null The definitions
     */
    public function getDefinitions()
    {
        if (array_key_exists('definitions', $this->_propDict) && !is_null($this->_propDict['definitions'])) {
            $definitions = [];
            if (count($this->_propDict['definitions']) > 0 && is_a($this->_propDict['definitions'][0], 'AccessReviewScheduleDefinition')) {
                return $this->_propDict['definitions'];
            }
            foreach ($this->_propDict['definitions'] as $singleValue) {
                $definitions []= new AccessReviewScheduleDefinition($singleValue);
            }
            $this->_propDict['definitions'] = $definitions;
            return $this->_propDict['definitions'];
        }
        return null;
    }

    /**
    * Sets the definitions
    * Represents the template and scheduling for an access review.
    *
    * @param AccessReviewScheduleDefinition[] $val The definitions
    *
    * @return AccessReviewSet
    */
    public function setDefinitions($val)
    {
        $this->_propDict["definitions"] = $val;
        return $this;
    }


     /**
     * Gets the historyDefinitions
    * Represents a collection of access review history data and the scopes used to collect that data.
     *
     * @return AccessReviewHistoryDefinition[]|null The historyDefinitions
     */
    public function getHistoryDefinitions()
    {
        if (array_key_exists('historyDefinitions', $this->_propDict) && !is_null($this->_propDict['historyDefinitions'])) {
            $historyDefinitions = [];
            if (count($this->_propDict['historyDefinitions']) > 0 && is_a($this->_propDict['historyDefinitions'][0], 'AccessReviewHistoryDefinition')) {
                return $this->_propDict['historyDefinitions'];
            }
            foreach ($this->_propDict['historyDefinitions'] as $singleValue) {
                $historyDefinitions []= new AccessReviewHistoryDefinition($singleValue);
            }
            $this->_propDict['historyDefinitions'] = $historyDefinitions;
            return $this->_propDict['historyDefinitions'];
        }
        return null;
    }

    /**
    * Sets the historyDefinitions
    * Represents a collection of access review history data and the scopes used to collect that data.
    *
    * @param AccessReviewHistoryDefinition[] $val The historyDefinitions
    *
    * @return AccessReviewSet
    */
    public function setHistoryDefinitions($val)
    {
        $this->_propDict["historyDefinitions"] = $val;
        return $this;
    }

    /**
    * Gets the policy
    * Resource that enables administrators to manage directory-level access review policies in their tenant.
    *
    * @return AccessReviewPolicy|null The policy
    */
    public function getPolicy()
    {
        if (array_key_exists("policy", $this->_propDict) && !is_null($this->_propDict["policy"])) {
            if (is_a($this->_propDict["policy"], "\Beta\Microsoft\Graph\Model\AccessReviewPolicy")) {
                return $this->_propDict["policy"];
            } else {
                $this->_propDict["policy"] = new AccessReviewPolicy($this->_propDict["policy"]);
                return $this->_propDict["policy"];
            }
        }
        return null;
    }

    /**
    * Sets the policy
    * Resource that enables administrators to manage directory-level access review policies in their tenant.
    *
    * @param AccessReviewPolicy $val The policy
    *
    * @return AccessReviewSet
    */
    public function setPolicy($val)
    {
        $this->_propDict["policy"] = $val;
        return $this;
    }

}
