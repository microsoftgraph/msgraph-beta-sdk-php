<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ComplianceManagementPartner File
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
* ComplianceManagementPartner class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ComplianceManagementPartner extends Entity
{

     /** 
     * Gets the androidEnrollmentAssignments
    * User groups which enroll Android devices through partner.
     *
     * @return ComplianceManagementPartnerAssignment[]|null The androidEnrollmentAssignments
     */
    public function getAndroidEnrollmentAssignments()
    {
        if (array_key_exists('androidEnrollmentAssignments', $this->_propDict) && !is_null($this->_propDict['androidEnrollmentAssignments'])) {
            $androidEnrollmentAssignments = [];
            if (count($this->_propDict['androidEnrollmentAssignments']) > 0 && is_a($this->_propDict['androidEnrollmentAssignments'][0], 'ComplianceManagementPartnerAssignment')) {
                return $this->_propDict['androidEnrollmentAssignments'];
            }
            foreach ($this->_propDict['androidEnrollmentAssignments'] as $singleValue) {
                $androidEnrollmentAssignments []= new ComplianceManagementPartnerAssignment($singleValue);
            }
            $this->_propDict['androidEnrollmentAssignments'] = $androidEnrollmentAssignments;
            return $this->_propDict['androidEnrollmentAssignments'];
        }
        return null;
    }
    
    /** 
    * Sets the androidEnrollmentAssignments
    * User groups which enroll Android devices through partner.
    *
    * @param ComplianceManagementPartnerAssignment[] $val The androidEnrollmentAssignments
    *
    * @return ComplianceManagementPartner
    */
    public function setAndroidEnrollmentAssignments($val)
    {
        $this->_propDict["androidEnrollmentAssignments"] = $val;
        return $this;
    }
    
    /**
    * Gets the androidOnboarded
    * Partner onboarded for Android devices.
    *
    * @return bool|null The androidOnboarded
    */
    public function getAndroidOnboarded()
    {
        if (array_key_exists("androidOnboarded", $this->_propDict)) {
            return $this->_propDict["androidOnboarded"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the androidOnboarded
    * Partner onboarded for Android devices.
    *
    * @param bool $val The androidOnboarded
    *
    * @return ComplianceManagementPartner
    */
    public function setAndroidOnboarded($val)
    {
        $this->_propDict["androidOnboarded"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the displayName
    * Partner display name
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
    * Partner display name
    *
    * @param string $val The displayName
    *
    * @return ComplianceManagementPartner
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    

     /** 
     * Gets the iosEnrollmentAssignments
    * User groups which enroll ios devices through partner.
     *
     * @return ComplianceManagementPartnerAssignment[]|null The iosEnrollmentAssignments
     */
    public function getIosEnrollmentAssignments()
    {
        if (array_key_exists('iosEnrollmentAssignments', $this->_propDict) && !is_null($this->_propDict['iosEnrollmentAssignments'])) {
            $iosEnrollmentAssignments = [];
            if (count($this->_propDict['iosEnrollmentAssignments']) > 0 && is_a($this->_propDict['iosEnrollmentAssignments'][0], 'ComplianceManagementPartnerAssignment')) {
                return $this->_propDict['iosEnrollmentAssignments'];
            }
            foreach ($this->_propDict['iosEnrollmentAssignments'] as $singleValue) {
                $iosEnrollmentAssignments []= new ComplianceManagementPartnerAssignment($singleValue);
            }
            $this->_propDict['iosEnrollmentAssignments'] = $iosEnrollmentAssignments;
            return $this->_propDict['iosEnrollmentAssignments'];
        }
        return null;
    }
    
    /** 
    * Sets the iosEnrollmentAssignments
    * User groups which enroll ios devices through partner.
    *
    * @param ComplianceManagementPartnerAssignment[] $val The iosEnrollmentAssignments
    *
    * @return ComplianceManagementPartner
    */
    public function setIosEnrollmentAssignments($val)
    {
        $this->_propDict["iosEnrollmentAssignments"] = $val;
        return $this;
    }
    
    /**
    * Gets the iosOnboarded
    * Partner onboarded for ios devices.
    *
    * @return bool|null The iosOnboarded
    */
    public function getIosOnboarded()
    {
        if (array_key_exists("iosOnboarded", $this->_propDict)) {
            return $this->_propDict["iosOnboarded"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the iosOnboarded
    * Partner onboarded for ios devices.
    *
    * @param bool $val The iosOnboarded
    *
    * @return ComplianceManagementPartner
    */
    public function setIosOnboarded($val)
    {
        $this->_propDict["iosOnboarded"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the lastHeartbeatDateTime
    * Timestamp of last heartbeat after admin onboarded to the compliance management partner
    *
    * @return \DateTime|null The lastHeartbeatDateTime
    */
    public function getLastHeartbeatDateTime()
    {
        if (array_key_exists("lastHeartbeatDateTime", $this->_propDict) && !is_null($this->_propDict["lastHeartbeatDateTime"])) {
            if (is_a($this->_propDict["lastHeartbeatDateTime"], "\DateTime")) {
                return $this->_propDict["lastHeartbeatDateTime"];
            } else {
                $this->_propDict["lastHeartbeatDateTime"] = new \DateTime($this->_propDict["lastHeartbeatDateTime"]);
                return $this->_propDict["lastHeartbeatDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the lastHeartbeatDateTime
    * Timestamp of last heartbeat after admin onboarded to the compliance management partner
    *
    * @param \DateTime $val The lastHeartbeatDateTime
    *
    * @return ComplianceManagementPartner
    */
    public function setLastHeartbeatDateTime($val)
    {
        $this->_propDict["lastHeartbeatDateTime"] = $val;
        return $this;
    }
    

     /** 
     * Gets the macOsEnrollmentAssignments
    * User groups which enroll Mac devices through partner.
     *
     * @return ComplianceManagementPartnerAssignment[]|null The macOsEnrollmentAssignments
     */
    public function getMacOsEnrollmentAssignments()
    {
        if (array_key_exists('macOsEnrollmentAssignments', $this->_propDict) && !is_null($this->_propDict['macOsEnrollmentAssignments'])) {
            $macOsEnrollmentAssignments = [];
            if (count($this->_propDict['macOsEnrollmentAssignments']) > 0 && is_a($this->_propDict['macOsEnrollmentAssignments'][0], 'ComplianceManagementPartnerAssignment')) {
                return $this->_propDict['macOsEnrollmentAssignments'];
            }
            foreach ($this->_propDict['macOsEnrollmentAssignments'] as $singleValue) {
                $macOsEnrollmentAssignments []= new ComplianceManagementPartnerAssignment($singleValue);
            }
            $this->_propDict['macOsEnrollmentAssignments'] = $macOsEnrollmentAssignments;
            return $this->_propDict['macOsEnrollmentAssignments'];
        }
        return null;
    }
    
    /** 
    * Sets the macOsEnrollmentAssignments
    * User groups which enroll Mac devices through partner.
    *
    * @param ComplianceManagementPartnerAssignment[] $val The macOsEnrollmentAssignments
    *
    * @return ComplianceManagementPartner
    */
    public function setMacOsEnrollmentAssignments($val)
    {
        $this->_propDict["macOsEnrollmentAssignments"] = $val;
        return $this;
    }
    
    /**
    * Gets the macOsOnboarded
    * Partner onboarded for Mac devices.
    *
    * @return bool|null The macOsOnboarded
    */
    public function getMacOsOnboarded()
    {
        if (array_key_exists("macOsOnboarded", $this->_propDict)) {
            return $this->_propDict["macOsOnboarded"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the macOsOnboarded
    * Partner onboarded for Mac devices.
    *
    * @param bool $val The macOsOnboarded
    *
    * @return ComplianceManagementPartner
    */
    public function setMacOsOnboarded($val)
    {
        $this->_propDict["macOsOnboarded"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the partnerState
    * Partner state of this tenant. Possible values are: unknown, unavailable, enabled, terminated, rejected, unresponsive.
    *
    * @return DeviceManagementPartnerTenantState|null The partnerState
    */
    public function getPartnerState()
    {
        if (array_key_exists("partnerState", $this->_propDict) && !is_null($this->_propDict["partnerState"])) {
            if (is_a($this->_propDict["partnerState"], "\Beta\Microsoft\Graph\Model\DeviceManagementPartnerTenantState")) {
                return $this->_propDict["partnerState"];
            } else {
                $this->_propDict["partnerState"] = new DeviceManagementPartnerTenantState($this->_propDict["partnerState"]);
                return $this->_propDict["partnerState"];
            }
        }
        return null;
    }
    
    /**
    * Sets the partnerState
    * Partner state of this tenant. Possible values are: unknown, unavailable, enabled, terminated, rejected, unresponsive.
    *
    * @param DeviceManagementPartnerTenantState $val The partnerState
    *
    * @return ComplianceManagementPartner
    */
    public function setPartnerState($val)
    {
        $this->_propDict["partnerState"] = $val;
        return $this;
    }
    

     /** 
     * Gets the windowsEnrollmentAssignments
    * User groups which enroll Windows devices through partner.
     *
     * @return ComplianceManagementPartnerAssignment[]|null The windowsEnrollmentAssignments
     */
    public function getWindowsEnrollmentAssignments()
    {
        if (array_key_exists('windowsEnrollmentAssignments', $this->_propDict) && !is_null($this->_propDict['windowsEnrollmentAssignments'])) {
            $windowsEnrollmentAssignments = [];
            if (count($this->_propDict['windowsEnrollmentAssignments']) > 0 && is_a($this->_propDict['windowsEnrollmentAssignments'][0], 'ComplianceManagementPartnerAssignment')) {
                return $this->_propDict['windowsEnrollmentAssignments'];
            }
            foreach ($this->_propDict['windowsEnrollmentAssignments'] as $singleValue) {
                $windowsEnrollmentAssignments []= new ComplianceManagementPartnerAssignment($singleValue);
            }
            $this->_propDict['windowsEnrollmentAssignments'] = $windowsEnrollmentAssignments;
            return $this->_propDict['windowsEnrollmentAssignments'];
        }
        return null;
    }
    
    /** 
    * Sets the windowsEnrollmentAssignments
    * User groups which enroll Windows devices through partner.
    *
    * @param ComplianceManagementPartnerAssignment[] $val The windowsEnrollmentAssignments
    *
    * @return ComplianceManagementPartner
    */
    public function setWindowsEnrollmentAssignments($val)
    {
        $this->_propDict["windowsEnrollmentAssignments"] = $val;
        return $this;
    }
    
    /**
    * Gets the windowsOnboarded
    * Partner onboarded for Windows devices.
    *
    * @return bool|null The windowsOnboarded
    */
    public function getWindowsOnboarded()
    {
        if (array_key_exists("windowsOnboarded", $this->_propDict)) {
            return $this->_propDict["windowsOnboarded"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the windowsOnboarded
    * Partner onboarded for Windows devices.
    *
    * @param bool $val The windowsOnboarded
    *
    * @return ComplianceManagementPartner
    */
    public function setWindowsOnboarded($val)
    {
        $this->_propDict["windowsOnboarded"] = boolval($val);
        return $this;
    }
    
}
