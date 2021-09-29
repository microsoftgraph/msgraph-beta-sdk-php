<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TenantStatusInformation File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\ManagedTenants\Model;
/**
* TenantStatusInformation class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class TenantStatusInformation extends \Beta\Microsoft\Graph\Model\Entity
{

    /**
    * Gets the delegatedPrivilegeStatus
    * The status of the delegated admin privilege relationship between the managing entity and the managed tenant. Possible values are: none, delegatedAdminPrivileges, unknownFutureValue. Optional. Read-only.
    *
    * @return DelegatedPrivilegeStatus|null The delegatedPrivilegeStatus
    */
    public function getDelegatedPrivilegeStatus()
    {
        if (array_key_exists("delegatedPrivilegeStatus", $this->_propDict) && !is_null($this->_propDict["delegatedPrivilegeStatus"])) {
     
            if (is_a($this->_propDict["delegatedPrivilegeStatus"], "\Beta\Microsoft\Graph\ManagedTenants\Model\DelegatedPrivilegeStatus")) {
                return $this->_propDict["delegatedPrivilegeStatus"];
            } else {
                $this->_propDict["delegatedPrivilegeStatus"] = new DelegatedPrivilegeStatus($this->_propDict["delegatedPrivilegeStatus"]);
                return $this->_propDict["delegatedPrivilegeStatus"];
            }
        }
        return null;
    }

    /**
    * Sets the delegatedPrivilegeStatus
    * The status of the delegated admin privilege relationship between the managing entity and the managed tenant. Possible values are: none, delegatedAdminPrivileges, unknownFutureValue. Optional. Read-only.
    *
    * @param DelegatedPrivilegeStatus $val The value to assign to the delegatedPrivilegeStatus
    *
    * @return TenantStatusInformation The TenantStatusInformation
    */
    public function setDelegatedPrivilegeStatus($val)
    {
        $this->_propDict["delegatedPrivilegeStatus"] = $val;
         return $this;
    }

    /**
    * Gets the lastDelegatedPrivilegeRefreshDateTime
    * The date and time the delegated admin privileges status was updated. Optional. Read-only.
    *
    * @return \DateTime|null The lastDelegatedPrivilegeRefreshDateTime
    */
    public function getLastDelegatedPrivilegeRefreshDateTime()
    {
        if (array_key_exists("lastDelegatedPrivilegeRefreshDateTime", $this->_propDict) && !is_null($this->_propDict["lastDelegatedPrivilegeRefreshDateTime"])) {
     
            if (is_a($this->_propDict["lastDelegatedPrivilegeRefreshDateTime"], "\DateTime")) {
                return $this->_propDict["lastDelegatedPrivilegeRefreshDateTime"];
            } else {
                $this->_propDict["lastDelegatedPrivilegeRefreshDateTime"] = new \DateTime($this->_propDict["lastDelegatedPrivilegeRefreshDateTime"]);
                return $this->_propDict["lastDelegatedPrivilegeRefreshDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the lastDelegatedPrivilegeRefreshDateTime
    * The date and time the delegated admin privileges status was updated. Optional. Read-only.
    *
    * @param \DateTime $val The value to assign to the lastDelegatedPrivilegeRefreshDateTime
    *
    * @return TenantStatusInformation The TenantStatusInformation
    */
    public function setLastDelegatedPrivilegeRefreshDateTime($val)
    {
        $this->_propDict["lastDelegatedPrivilegeRefreshDateTime"] = $val;
         return $this;
    }
    /**
    * Gets the offboardedByUserId
    * The identifier for the account that offboarded the managed tenant. Optional. Read-only.
    *
    * @return string|null The offboardedByUserId
    */
    public function getOffboardedByUserId()
    {
        if (array_key_exists("offboardedByUserId", $this->_propDict)) {
            return $this->_propDict["offboardedByUserId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the offboardedByUserId
    * The identifier for the account that offboarded the managed tenant. Optional. Read-only.
    *
    * @param string $val The value of the offboardedByUserId
    *
    * @return TenantStatusInformation
    */
    public function setOffboardedByUserId($val)
    {
        $this->_propDict["offboardedByUserId"] = $val;
        return $this;
    }

    /**
    * Gets the offboardedDateTime
    * The date and time when the managed tenant was offboarded. Optional. Read-only.
    *
    * @return \DateTime|null The offboardedDateTime
    */
    public function getOffboardedDateTime()
    {
        if (array_key_exists("offboardedDateTime", $this->_propDict) && !is_null($this->_propDict["offboardedDateTime"])) {
     
            if (is_a($this->_propDict["offboardedDateTime"], "\DateTime")) {
                return $this->_propDict["offboardedDateTime"];
            } else {
                $this->_propDict["offboardedDateTime"] = new \DateTime($this->_propDict["offboardedDateTime"]);
                return $this->_propDict["offboardedDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the offboardedDateTime
    * The date and time when the managed tenant was offboarded. Optional. Read-only.
    *
    * @param \DateTime $val The value to assign to the offboardedDateTime
    *
    * @return TenantStatusInformation The TenantStatusInformation
    */
    public function setOffboardedDateTime($val)
    {
        $this->_propDict["offboardedDateTime"] = $val;
         return $this;
    }
    /**
    * Gets the onboardedByUserId
    * The identifier for the account that onboarded the managed tenant. Optional. Read-only.
    *
    * @return string|null The onboardedByUserId
    */
    public function getOnboardedByUserId()
    {
        if (array_key_exists("onboardedByUserId", $this->_propDict)) {
            return $this->_propDict["onboardedByUserId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the onboardedByUserId
    * The identifier for the account that onboarded the managed tenant. Optional. Read-only.
    *
    * @param string $val The value of the onboardedByUserId
    *
    * @return TenantStatusInformation
    */
    public function setOnboardedByUserId($val)
    {
        $this->_propDict["onboardedByUserId"] = $val;
        return $this;
    }

    /**
    * Gets the onboardedDateTime
    * The date and time when the managed tenant was onboarded. Optional. Read-only.
    *
    * @return \DateTime|null The onboardedDateTime
    */
    public function getOnboardedDateTime()
    {
        if (array_key_exists("onboardedDateTime", $this->_propDict) && !is_null($this->_propDict["onboardedDateTime"])) {
     
            if (is_a($this->_propDict["onboardedDateTime"], "\DateTime")) {
                return $this->_propDict["onboardedDateTime"];
            } else {
                $this->_propDict["onboardedDateTime"] = new \DateTime($this->_propDict["onboardedDateTime"]);
                return $this->_propDict["onboardedDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the onboardedDateTime
    * The date and time when the managed tenant was onboarded. Optional. Read-only.
    *
    * @param \DateTime $val The value to assign to the onboardedDateTime
    *
    * @return TenantStatusInformation The TenantStatusInformation
    */
    public function setOnboardedDateTime($val)
    {
        $this->_propDict["onboardedDateTime"] = $val;
         return $this;
    }

    /**
    * Gets the onboardingStatus
    * The onboarding status for the managed tenant.. Possible values are: ineligible, inProcess, active, inactive, unknownFutureValue. Optional. Read-only.
    *
    * @return TenantOnboardingStatus|null The onboardingStatus
    */
    public function getOnboardingStatus()
    {
        if (array_key_exists("onboardingStatus", $this->_propDict) && !is_null($this->_propDict["onboardingStatus"])) {
     
            if (is_a($this->_propDict["onboardingStatus"], "\Beta\Microsoft\Graph\ManagedTenants\Model\TenantOnboardingStatus")) {
                return $this->_propDict["onboardingStatus"];
            } else {
                $this->_propDict["onboardingStatus"] = new TenantOnboardingStatus($this->_propDict["onboardingStatus"]);
                return $this->_propDict["onboardingStatus"];
            }
        }
        return null;
    }

    /**
    * Sets the onboardingStatus
    * The onboarding status for the managed tenant.. Possible values are: ineligible, inProcess, active, inactive, unknownFutureValue. Optional. Read-only.
    *
    * @param TenantOnboardingStatus $val The value to assign to the onboardingStatus
    *
    * @return TenantStatusInformation The TenantStatusInformation
    */
    public function setOnboardingStatus($val)
    {
        $this->_propDict["onboardingStatus"] = $val;
         return $this;
    }

    /**
    * Gets the workloadStatuses
    * The collection of workload statues for the managed tenant. Optional. Read-only.
    *
    * @return WorkloadStatus[]|null The workloadStatuses
    */
    public function getWorkloadStatuses()
    {
        if (array_key_exists("workloadStatuses", $this->_propDict) && !is_null($this->_propDict["workloadStatuses"])) {
       
            if (count($this->_propDict['workloadStatuses']) > 0 && is_a($this->_propDict['workloadStatuses'][0], 'WorkloadStatus')) {
               return $this->_propDict['workloadStatuses'];
            }
            $workloadStatuses = [];
            foreach ($this->_propDict['workloadStatuses'] as $singleValue) {
               $workloadStatuses []= new WorkloadStatus($singleValue);
            }
            $this->_propDict['workloadStatuses'] = $workloadStatuses;
            return $this->_propDict['workloadStatuses'];
            }
        return null;
    }

    /**
    * Sets the workloadStatuses
    * The collection of workload statues for the managed tenant. Optional. Read-only.
    *
    * @param WorkloadStatus[] $val The value to assign to the workloadStatuses
    *
    * @return TenantStatusInformation The TenantStatusInformation
    */
    public function setWorkloadStatuses($val)
    {
        $this->_propDict["workloadStatuses"] = $val;
         return $this;
    }
}
