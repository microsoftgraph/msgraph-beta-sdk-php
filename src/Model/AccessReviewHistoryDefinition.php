<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AccessReviewHistoryDefinition File
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
* AccessReviewHistoryDefinition class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AccessReviewHistoryDefinition extends Entity
{
    /**
    * Gets the createdBy
    * User who created this review history definition.
    *
    * @return UserIdentity|null The createdBy
    */
    public function getCreatedBy()
    {
        if (array_key_exists("createdBy", $this->_propDict) && !is_null($this->_propDict["createdBy"])) {
            if (is_a($this->_propDict["createdBy"], "\Beta\Microsoft\Graph\Model\UserIdentity")) {
                return $this->_propDict["createdBy"];
            } else {
                $this->_propDict["createdBy"] = new UserIdentity($this->_propDict["createdBy"]);
                return $this->_propDict["createdBy"];
            }
        }
        return null;
    }

    /**
    * Sets the createdBy
    * User who created this review history definition.
    *
    * @param UserIdentity $val The createdBy
    *
    * @return AccessReviewHistoryDefinition
    */
    public function setCreatedBy($val)
    {
        $this->_propDict["createdBy"] = $val;
        return $this;
    }

    /**
    * Gets the createdDateTime
    * Timestamp when the access review definition was created.
    *
    * @return \DateTime|null The createdDateTime
    */
    public function getCreatedDateTime()
    {
        if (array_key_exists("createdDateTime", $this->_propDict) && !is_null($this->_propDict["createdDateTime"])) {
            if (is_a($this->_propDict["createdDateTime"], "\DateTime")) {
                return $this->_propDict["createdDateTime"];
            } else {
                $this->_propDict["createdDateTime"] = new \DateTime($this->_propDict["createdDateTime"]);
                return $this->_propDict["createdDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the createdDateTime
    * Timestamp when the access review definition was created.
    *
    * @param \DateTime $val The createdDateTime
    *
    * @return AccessReviewHistoryDefinition
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
        return $this;
    }


     /**
     * Gets the decisions
    * Determines which review decisions will be included in the fetched review history data if specified. Optional on create. All decisions will be included by default if no decisions are provided on create. Possible values are: approve, deny, dontKnow, notReviewed, and notNotified.
     *
     * @return AccessReviewHistoryDecisionFilter[]|null The decisions
     */
    public function getDecisions()
    {
        if (array_key_exists('decisions', $this->_propDict) && !is_null($this->_propDict['decisions'])) {
            $decisions = [];
            if (count($this->_propDict['decisions']) > 0 && is_a($this->_propDict['decisions'][0], 'AccessReviewHistoryDecisionFilter')) {
                return $this->_propDict['decisions'];
            }
            foreach ($this->_propDict['decisions'] as $singleValue) {
                $decisions []= new AccessReviewHistoryDecisionFilter($singleValue);
            }
            $this->_propDict['decisions'] = $decisions;
            return $this->_propDict['decisions'];
        }
        return null;
    }

    /**
    * Sets the decisions
    * Determines which review decisions will be included in the fetched review history data if specified. Optional on create. All decisions will be included by default if no decisions are provided on create. Possible values are: approve, deny, dontKnow, notReviewed, and notNotified.
    *
    * @param AccessReviewHistoryDecisionFilter[] $val The decisions
    *
    * @return AccessReviewHistoryDefinition
    */
    public function setDecisions($val)
    {
        $this->_propDict["decisions"] = $val;
        return $this;
    }

    /**
    * Gets the displayName
    * Name for the access review history data collection. Required.
    *
    * @return string|null The displayName
    */
    public function getDisplayName()
    {
        if (array_key_exists("displayName", $this->_propDict)) {
            return $this->_propDict["displayName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the displayName
    * Name for the access review history data collection. Required.
    *
    * @param string $val The displayName
    *
    * @return AccessReviewHistoryDefinition
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }

    /**
    * Gets the downloadUri
    *
    * @return string|null The downloadUri
    */
    public function getDownloadUri()
    {
        if (array_key_exists("downloadUri", $this->_propDict)) {
            return $this->_propDict["downloadUri"];
        } else {
            return null;
        }
    }

    /**
    * Sets the downloadUri
    *
    * @param string $val The downloadUri
    *
    * @return AccessReviewHistoryDefinition
    */
    public function setDownloadUri($val)
    {
        $this->_propDict["downloadUri"] = $val;
        return $this;
    }

    /**
    * Gets the fulfilledDateTime
    *
    * @return \DateTime|null The fulfilledDateTime
    */
    public function getFulfilledDateTime()
    {
        if (array_key_exists("fulfilledDateTime", $this->_propDict) && !is_null($this->_propDict["fulfilledDateTime"])) {
            if (is_a($this->_propDict["fulfilledDateTime"], "\DateTime")) {
                return $this->_propDict["fulfilledDateTime"];
            } else {
                $this->_propDict["fulfilledDateTime"] = new \DateTime($this->_propDict["fulfilledDateTime"]);
                return $this->_propDict["fulfilledDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the fulfilledDateTime
    *
    * @param \DateTime $val The fulfilledDateTime
    *
    * @return AccessReviewHistoryDefinition
    */
    public function setFulfilledDateTime($val)
    {
        $this->_propDict["fulfilledDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the reviewHistoryPeriodEndDateTime
    * A timestamp. Reviews ending on or before this date will be included in the fetched history data. Only required if scheduleSettings is not defined.
    *
    * @return \DateTime|null The reviewHistoryPeriodEndDateTime
    */
    public function getReviewHistoryPeriodEndDateTime()
    {
        if (array_key_exists("reviewHistoryPeriodEndDateTime", $this->_propDict) && !is_null($this->_propDict["reviewHistoryPeriodEndDateTime"])) {
            if (is_a($this->_propDict["reviewHistoryPeriodEndDateTime"], "\DateTime")) {
                return $this->_propDict["reviewHistoryPeriodEndDateTime"];
            } else {
                $this->_propDict["reviewHistoryPeriodEndDateTime"] = new \DateTime($this->_propDict["reviewHistoryPeriodEndDateTime"]);
                return $this->_propDict["reviewHistoryPeriodEndDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the reviewHistoryPeriodEndDateTime
    * A timestamp. Reviews ending on or before this date will be included in the fetched history data. Only required if scheduleSettings is not defined.
    *
    * @param \DateTime $val The reviewHistoryPeriodEndDateTime
    *
    * @return AccessReviewHistoryDefinition
    */
    public function setReviewHistoryPeriodEndDateTime($val)
    {
        $this->_propDict["reviewHistoryPeriodEndDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the reviewHistoryPeriodStartDateTime
    * A timestamp. Reviews starting on or before this date will be included in the fetched history data. Only required if scheduleSettings is not defined.
    *
    * @return \DateTime|null The reviewHistoryPeriodStartDateTime
    */
    public function getReviewHistoryPeriodStartDateTime()
    {
        if (array_key_exists("reviewHistoryPeriodStartDateTime", $this->_propDict) && !is_null($this->_propDict["reviewHistoryPeriodStartDateTime"])) {
            if (is_a($this->_propDict["reviewHistoryPeriodStartDateTime"], "\DateTime")) {
                return $this->_propDict["reviewHistoryPeriodStartDateTime"];
            } else {
                $this->_propDict["reviewHistoryPeriodStartDateTime"] = new \DateTime($this->_propDict["reviewHistoryPeriodStartDateTime"]);
                return $this->_propDict["reviewHistoryPeriodStartDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the reviewHistoryPeriodStartDateTime
    * A timestamp. Reviews starting on or before this date will be included in the fetched history data. Only required if scheduleSettings is not defined.
    *
    * @param \DateTime $val The reviewHistoryPeriodStartDateTime
    *
    * @return AccessReviewHistoryDefinition
    */
    public function setReviewHistoryPeriodStartDateTime($val)
    {
        $this->_propDict["reviewHistoryPeriodStartDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the scheduleSettings
    * The settings for a recurring access review history definition series. Only required if reviewHistoryPeriodStartDateTime or reviewHistoryPeriodEndDateTime are not defined.
    *
    * @return AccessReviewHistoryScheduleSettings|null The scheduleSettings
    */
    public function getScheduleSettings()
    {
        if (array_key_exists("scheduleSettings", $this->_propDict) && !is_null($this->_propDict["scheduleSettings"])) {
            if (is_a($this->_propDict["scheduleSettings"], "\Beta\Microsoft\Graph\Model\AccessReviewHistoryScheduleSettings")) {
                return $this->_propDict["scheduleSettings"];
            } else {
                $this->_propDict["scheduleSettings"] = new AccessReviewHistoryScheduleSettings($this->_propDict["scheduleSettings"]);
                return $this->_propDict["scheduleSettings"];
            }
        }
        return null;
    }

    /**
    * Sets the scheduleSettings
    * The settings for a recurring access review history definition series. Only required if reviewHistoryPeriodStartDateTime or reviewHistoryPeriodEndDateTime are not defined.
    *
    * @param AccessReviewHistoryScheduleSettings $val The scheduleSettings
    *
    * @return AccessReviewHistoryDefinition
    */
    public function setScheduleSettings($val)
    {
        $this->_propDict["scheduleSettings"] = $val;
        return $this;
    }


     /**
     * Gets the scopes
    * Used to scope what reviews are included in the fetched history data. Fetches reviews whose scope matches with this provided scope. Required.
     *
     * @return AccessReviewScope[]|null The scopes
     */
    public function getScopes()
    {
        if (array_key_exists('scopes', $this->_propDict) && !is_null($this->_propDict['scopes'])) {
            $scopes = [];
            if (count($this->_propDict['scopes']) > 0 && is_a($this->_propDict['scopes'][0], 'AccessReviewScope')) {
                return $this->_propDict['scopes'];
            }
            foreach ($this->_propDict['scopes'] as $singleValue) {
                $scopes []= new AccessReviewScope($singleValue);
            }
            $this->_propDict['scopes'] = $scopes;
            return $this->_propDict['scopes'];
        }
        return null;
    }

    /**
    * Sets the scopes
    * Used to scope what reviews are included in the fetched history data. Fetches reviews whose scope matches with this provided scope. Required.
    *
    * @param AccessReviewScope[] $val The scopes
    *
    * @return AccessReviewHistoryDefinition
    */
    public function setScopes($val)
    {
        $this->_propDict["scopes"] = $val;
        return $this;
    }

    /**
    * Gets the status
    * Represents the status of the review history data collection. The possible values are: done, inProgress, error, requested, unknownFutureValue.
    *
    * @return AccessReviewHistoryStatus|null The status
    */
    public function getStatus()
    {
        if (array_key_exists("status", $this->_propDict) && !is_null($this->_propDict["status"])) {
            if (is_a($this->_propDict["status"], "\Beta\Microsoft\Graph\Model\AccessReviewHistoryStatus")) {
                return $this->_propDict["status"];
            } else {
                $this->_propDict["status"] = new AccessReviewHistoryStatus($this->_propDict["status"]);
                return $this->_propDict["status"];
            }
        }
        return null;
    }

    /**
    * Sets the status
    * Represents the status of the review history data collection. The possible values are: done, inProgress, error, requested, unknownFutureValue.
    *
    * @param AccessReviewHistoryStatus $val The status
    *
    * @return AccessReviewHistoryDefinition
    */
    public function setStatus($val)
    {
        $this->_propDict["status"] = $val;
        return $this;
    }


     /**
     * Gets the instances
    * If the accessReviewHistoryDefinition is a recurring definition, instances represent each recurrence. A definition that does not recur will have exactly one instance.
     *
     * @return AccessReviewHistoryInstance[]|null The instances
     */
    public function getInstances()
    {
        if (array_key_exists('instances', $this->_propDict) && !is_null($this->_propDict['instances'])) {
            $instances = [];
            if (count($this->_propDict['instances']) > 0 && is_a($this->_propDict['instances'][0], 'AccessReviewHistoryInstance')) {
                return $this->_propDict['instances'];
            }
            foreach ($this->_propDict['instances'] as $singleValue) {
                $instances []= new AccessReviewHistoryInstance($singleValue);
            }
            $this->_propDict['instances'] = $instances;
            return $this->_propDict['instances'];
        }
        return null;
    }

    /**
    * Sets the instances
    * If the accessReviewHistoryDefinition is a recurring definition, instances represent each recurrence. A definition that does not recur will have exactly one instance.
    *
    * @param AccessReviewHistoryInstance[] $val The instances
    *
    * @return AccessReviewHistoryDefinition
    */
    public function setInstances($val)
    {
        $this->_propDict["instances"] = $val;
        return $this;
    }

}
