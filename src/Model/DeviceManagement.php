<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceManagement File
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
* DeviceManagement class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceManagement extends Entity
{
    /**
    * Gets the deviceComplianceReportSummarizationDateTime
    * The last requested time of device compliance reporting for this account. This property is read-only.
    *
    * @return \DateTime|null The deviceComplianceReportSummarizationDateTime
    */
    public function getDeviceComplianceReportSummarizationDateTime()
    {
        if (array_key_exists("deviceComplianceReportSummarizationDateTime", $this->_propDict) && !is_null($this->_propDict["deviceComplianceReportSummarizationDateTime"])) {
            if (is_a($this->_propDict["deviceComplianceReportSummarizationDateTime"], "\DateTime")) {
                return $this->_propDict["deviceComplianceReportSummarizationDateTime"];
            } else {
                $this->_propDict["deviceComplianceReportSummarizationDateTime"] = new \DateTime($this->_propDict["deviceComplianceReportSummarizationDateTime"]);
                return $this->_propDict["deviceComplianceReportSummarizationDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the deviceComplianceReportSummarizationDateTime
    * The last requested time of device compliance reporting for this account. This property is read-only.
    *
    * @param \DateTime $val The deviceComplianceReportSummarizationDateTime
    *
    * @return DeviceManagement
    */
    public function setDeviceComplianceReportSummarizationDateTime($val)
    {
        $this->_propDict["deviceComplianceReportSummarizationDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the intuneAccountId
    * Intune Account Id for given tenant
    *
    * @return string|null The intuneAccountId
    */
    public function getIntuneAccountId()
    {
        if (array_key_exists("intuneAccountId", $this->_propDict)) {
            return $this->_propDict["intuneAccountId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the intuneAccountId
    * Intune Account Id for given tenant
    *
    * @param string $val The intuneAccountId
    *
    * @return DeviceManagement
    */
    public function setIntuneAccountId($val)
    {
        $this->_propDict["intuneAccountId"] = $val;
        return $this;
    }
    
    /**
    * Gets the lastReportAggregationDateTime
    * The last modified time of reporting for this account. This property is read-only.
    *
    * @return \DateTime|null The lastReportAggregationDateTime
    */
    public function getLastReportAggregationDateTime()
    {
        if (array_key_exists("lastReportAggregationDateTime", $this->_propDict) && !is_null($this->_propDict["lastReportAggregationDateTime"])) {
            if (is_a($this->_propDict["lastReportAggregationDateTime"], "\DateTime")) {
                return $this->_propDict["lastReportAggregationDateTime"];
            } else {
                $this->_propDict["lastReportAggregationDateTime"] = new \DateTime($this->_propDict["lastReportAggregationDateTime"]);
                return $this->_propDict["lastReportAggregationDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the lastReportAggregationDateTime
    * The last modified time of reporting for this account. This property is read-only.
    *
    * @param \DateTime $val The lastReportAggregationDateTime
    *
    * @return DeviceManagement
    */
    public function setLastReportAggregationDateTime($val)
    {
        $this->_propDict["lastReportAggregationDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the legacyPcManangementEnabled
    * The property to enable Non-MDM managed legacy PC management for this account. This property is read-only.
    *
    * @return bool|null The legacyPcManangementEnabled
    */
    public function getLegacyPcManangementEnabled()
    {
        if (array_key_exists("legacyPcManangementEnabled", $this->_propDict)) {
            return $this->_propDict["legacyPcManangementEnabled"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the legacyPcManangementEnabled
    * The property to enable Non-MDM managed legacy PC management for this account. This property is read-only.
    *
    * @param bool $val The legacyPcManangementEnabled
    *
    * @return DeviceManagement
    */
    public function setLegacyPcManangementEnabled($val)
    {
        $this->_propDict["legacyPcManangementEnabled"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the maximumDepTokens
    * Maximum number of DEP tokens allowed per-tenant.
    *
    * @return int|null The maximumDepTokens
    */
    public function getMaximumDepTokens()
    {
        if (array_key_exists("maximumDepTokens", $this->_propDict)) {
            return $this->_propDict["maximumDepTokens"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the maximumDepTokens
    * Maximum number of DEP tokens allowed per-tenant.
    *
    * @param int $val The maximumDepTokens
    *
    * @return DeviceManagement
    */
    public function setMaximumDepTokens($val)
    {
        $this->_propDict["maximumDepTokens"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the settings
    * Account level settings.
    *
    * @return DeviceManagementSettings|null The settings
    */
    public function getSettings()
    {
        if (array_key_exists("settings", $this->_propDict) && !is_null($this->_propDict["settings"])) {
            if (is_a($this->_propDict["settings"], "\Beta\Microsoft\Graph\Model\DeviceManagementSettings")) {
                return $this->_propDict["settings"];
            } else {
                $this->_propDict["settings"] = new DeviceManagementSettings($this->_propDict["settings"]);
                return $this->_propDict["settings"];
            }
        }
        return null;
    }
    
    /**
    * Sets the settings
    * Account level settings.
    *
    * @param DeviceManagementSettings $val The settings
    *
    * @return DeviceManagement
    */
    public function setSettings($val)
    {
        $this->_propDict["settings"] = $val;
        return $this;
    }
    
    /**
    * Gets the unlicensedAdminstratorsEnabled
    * When enabled, users assigned as administrators via Role Assignment Memberships do not require an assigned Intune license. Prior to this, only Intune licensed users were granted permissions with an Intune role unless they were assigned a role via Azure Active Directory. You are limited to 350 unlicensed direct members for each AAD security group in a role assignment, but you can assign multiple AAD security groups to a role if you need to support more than 350 unlicensed administrators. Licensed administrators are unaffected, do not have to be direct members, nor does the 350 member limit apply. This property is read-only.
    *
    * @return bool|null The unlicensedAdminstratorsEnabled
    */
    public function getUnlicensedAdminstratorsEnabled()
    {
        if (array_key_exists("unlicensedAdminstratorsEnabled", $this->_propDict)) {
            return $this->_propDict["unlicensedAdminstratorsEnabled"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the unlicensedAdminstratorsEnabled
    * When enabled, users assigned as administrators via Role Assignment Memberships do not require an assigned Intune license. Prior to this, only Intune licensed users were granted permissions with an Intune role unless they were assigned a role via Azure Active Directory. You are limited to 350 unlicensed direct members for each AAD security group in a role assignment, but you can assign multiple AAD security groups to a role if you need to support more than 350 unlicensed administrators. Licensed administrators are unaffected, do not have to be direct members, nor does the 350 member limit apply. This property is read-only.
    *
    * @param bool $val The unlicensedAdminstratorsEnabled
    *
    * @return DeviceManagement
    */
    public function setUnlicensedAdminstratorsEnabled($val)
    {
        $this->_propDict["unlicensedAdminstratorsEnabled"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the intuneBrand
    * intuneBrand contains data which is used in customizing the appearance of the Company Portal applications as well as the end user web portal.
    *
    * @return IntuneBrand|null The intuneBrand
    */
    public function getIntuneBrand()
    {
        if (array_key_exists("intuneBrand", $this->_propDict) && !is_null($this->_propDict["intuneBrand"])) {
            if (is_a($this->_propDict["intuneBrand"], "\Beta\Microsoft\Graph\Model\IntuneBrand")) {
                return $this->_propDict["intuneBrand"];
            } else {
                $this->_propDict["intuneBrand"] = new IntuneBrand($this->_propDict["intuneBrand"]);
                return $this->_propDict["intuneBrand"];
            }
        }
        return null;
    }
    
    /**
    * Sets the intuneBrand
    * intuneBrand contains data which is used in customizing the appearance of the Company Portal applications as well as the end user web portal.
    *
    * @param IntuneBrand $val The intuneBrand
    *
    * @return DeviceManagement
    */
    public function setIntuneBrand($val)
    {
        $this->_propDict["intuneBrand"] = $val;
        return $this;
    }
    
    /**
    * Gets the accountMoveCompletionDateTime
    * The date &amp; time when tenant data moved between scaleunits.
    *
    * @return \DateTime|null The accountMoveCompletionDateTime
    */
    public function getAccountMoveCompletionDateTime()
    {
        if (array_key_exists("accountMoveCompletionDateTime", $this->_propDict) && !is_null($this->_propDict["accountMoveCompletionDateTime"])) {
            if (is_a($this->_propDict["accountMoveCompletionDateTime"], "\DateTime")) {
                return $this->_propDict["accountMoveCompletionDateTime"];
            } else {
                $this->_propDict["accountMoveCompletionDateTime"] = new \DateTime($this->_propDict["accountMoveCompletionDateTime"]);
                return $this->_propDict["accountMoveCompletionDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the accountMoveCompletionDateTime
    * The date &amp; time when tenant data moved between scaleunits.
    *
    * @param \DateTime $val The accountMoveCompletionDateTime
    *
    * @return DeviceManagement
    */
    public function setAccountMoveCompletionDateTime($val)
    {
        $this->_propDict["accountMoveCompletionDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the adminConsent
    * Admin consent information.
    *
    * @return AdminConsent|null The adminConsent
    */
    public function getAdminConsent()
    {
        if (array_key_exists("adminConsent", $this->_propDict) && !is_null($this->_propDict["adminConsent"])) {
            if (is_a($this->_propDict["adminConsent"], "\Beta\Microsoft\Graph\Model\AdminConsent")) {
                return $this->_propDict["adminConsent"];
            } else {
                $this->_propDict["adminConsent"] = new AdminConsent($this->_propDict["adminConsent"]);
                return $this->_propDict["adminConsent"];
            }
        }
        return null;
    }
    
    /**
    * Sets the adminConsent
    * Admin consent information.
    *
    * @param AdminConsent $val The adminConsent
    *
    * @return DeviceManagement
    */
    public function setAdminConsent($val)
    {
        $this->_propDict["adminConsent"] = $val;
        return $this;
    }
    
    /**
    * Gets the deviceProtectionOverview
    * Device protection overview.
    *
    * @return DeviceProtectionOverview|null The deviceProtectionOverview
    */
    public function getDeviceProtectionOverview()
    {
        if (array_key_exists("deviceProtectionOverview", $this->_propDict) && !is_null($this->_propDict["deviceProtectionOverview"])) {
            if (is_a($this->_propDict["deviceProtectionOverview"], "\Beta\Microsoft\Graph\Model\DeviceProtectionOverview")) {
                return $this->_propDict["deviceProtectionOverview"];
            } else {
                $this->_propDict["deviceProtectionOverview"] = new DeviceProtectionOverview($this->_propDict["deviceProtectionOverview"]);
                return $this->_propDict["deviceProtectionOverview"];
            }
        }
        return null;
    }
    
    /**
    * Sets the deviceProtectionOverview
    * Device protection overview.
    *
    * @param DeviceProtectionOverview $val The deviceProtectionOverview
    *
    * @return DeviceManagement
    */
    public function setDeviceProtectionOverview($val)
    {
        $this->_propDict["deviceProtectionOverview"] = $val;
        return $this;
    }
    
    /**
    * Gets the managedDeviceCleanupSettings
    * Device cleanup rule
    *
    * @return ManagedDeviceCleanupSettings|null The managedDeviceCleanupSettings
    */
    public function getManagedDeviceCleanupSettings()
    {
        if (array_key_exists("managedDeviceCleanupSettings", $this->_propDict) && !is_null($this->_propDict["managedDeviceCleanupSettings"])) {
            if (is_a($this->_propDict["managedDeviceCleanupSettings"], "\Beta\Microsoft\Graph\Model\ManagedDeviceCleanupSettings")) {
                return $this->_propDict["managedDeviceCleanupSettings"];
            } else {
                $this->_propDict["managedDeviceCleanupSettings"] = new ManagedDeviceCleanupSettings($this->_propDict["managedDeviceCleanupSettings"]);
                return $this->_propDict["managedDeviceCleanupSettings"];
            }
        }
        return null;
    }
    
    /**
    * Sets the managedDeviceCleanupSettings
    * Device cleanup rule
    *
    * @param ManagedDeviceCleanupSettings $val The managedDeviceCleanupSettings
    *
    * @return DeviceManagement
    */
    public function setManagedDeviceCleanupSettings($val)
    {
        $this->_propDict["managedDeviceCleanupSettings"] = $val;
        return $this;
    }
    
    /**
    * Gets the subscriptions
    * Tenant's Subscription. Possible values are: none, intune, office365, intunePremium, intune_EDU, intune_SMB.
    *
    * @return DeviceManagementSubscriptions|null The subscriptions
    */
    public function getSubscriptions()
    {
        if (array_key_exists("subscriptions", $this->_propDict) && !is_null($this->_propDict["subscriptions"])) {
            if (is_a($this->_propDict["subscriptions"], "\Beta\Microsoft\Graph\Model\DeviceManagementSubscriptions")) {
                return $this->_propDict["subscriptions"];
            } else {
                $this->_propDict["subscriptions"] = new DeviceManagementSubscriptions($this->_propDict["subscriptions"]);
                return $this->_propDict["subscriptions"];
            }
        }
        return null;
    }
    
    /**
    * Sets the subscriptions
    * Tenant's Subscription. Possible values are: none, intune, office365, intunePremium, intune_EDU, intune_SMB.
    *
    * @param DeviceManagementSubscriptions $val The subscriptions
    *
    * @return DeviceManagement
    */
    public function setSubscriptions($val)
    {
        $this->_propDict["subscriptions"] = $val;
        return $this;
    }
    
    /**
    * Gets the subscriptionState
    * Tenant mobile device management subscription state. Possible values are: pending, active, warning, disabled, deleted, blocked, lockedOut.
    *
    * @return DeviceManagementSubscriptionState|null The subscriptionState
    */
    public function getSubscriptionState()
    {
        if (array_key_exists("subscriptionState", $this->_propDict) && !is_null($this->_propDict["subscriptionState"])) {
            if (is_a($this->_propDict["subscriptionState"], "\Beta\Microsoft\Graph\Model\DeviceManagementSubscriptionState")) {
                return $this->_propDict["subscriptionState"];
            } else {
                $this->_propDict["subscriptionState"] = new DeviceManagementSubscriptionState($this->_propDict["subscriptionState"]);
                return $this->_propDict["subscriptionState"];
            }
        }
        return null;
    }
    
    /**
    * Sets the subscriptionState
    * Tenant mobile device management subscription state. Possible values are: pending, active, warning, disabled, deleted, blocked, lockedOut.
    *
    * @param DeviceManagementSubscriptionState $val The subscriptionState
    *
    * @return DeviceManagement
    */
    public function setSubscriptionState($val)
    {
        $this->_propDict["subscriptionState"] = $val;
        return $this;
    }
    
    /**
    * Gets the userExperienceAnalyticsSettings
    * User experience analytics device settings
    *
    * @return UserExperienceAnalyticsSettings|null The userExperienceAnalyticsSettings
    */
    public function getUserExperienceAnalyticsSettings()
    {
        if (array_key_exists("userExperienceAnalyticsSettings", $this->_propDict) && !is_null($this->_propDict["userExperienceAnalyticsSettings"])) {
            if (is_a($this->_propDict["userExperienceAnalyticsSettings"], "\Beta\Microsoft\Graph\Model\UserExperienceAnalyticsSettings")) {
                return $this->_propDict["userExperienceAnalyticsSettings"];
            } else {
                $this->_propDict["userExperienceAnalyticsSettings"] = new UserExperienceAnalyticsSettings($this->_propDict["userExperienceAnalyticsSettings"]);
                return $this->_propDict["userExperienceAnalyticsSettings"];
            }
        }
        return null;
    }
    
    /**
    * Sets the userExperienceAnalyticsSettings
    * User experience analytics device settings
    *
    * @param UserExperienceAnalyticsSettings $val The userExperienceAnalyticsSettings
    *
    * @return DeviceManagement
    */
    public function setUserExperienceAnalyticsSettings($val)
    {
        $this->_propDict["userExperienceAnalyticsSettings"] = $val;
        return $this;
    }
    
    /**
    * Gets the windowsMalwareOverview
    * Malware overview for windows devices.
    *
    * @return WindowsMalwareOverview|null The windowsMalwareOverview
    */
    public function getWindowsMalwareOverview()
    {
        if (array_key_exists("windowsMalwareOverview", $this->_propDict) && !is_null($this->_propDict["windowsMalwareOverview"])) {
            if (is_a($this->_propDict["windowsMalwareOverview"], "\Beta\Microsoft\Graph\Model\WindowsMalwareOverview")) {
                return $this->_propDict["windowsMalwareOverview"];
            } else {
                $this->_propDict["windowsMalwareOverview"] = new WindowsMalwareOverview($this->_propDict["windowsMalwareOverview"]);
                return $this->_propDict["windowsMalwareOverview"];
            }
        }
        return null;
    }
    
    /**
    * Sets the windowsMalwareOverview
    * Malware overview for windows devices.
    *
    * @param WindowsMalwareOverview $val The windowsMalwareOverview
    *
    * @return DeviceManagement
    */
    public function setWindowsMalwareOverview($val)
    {
        $this->_propDict["windowsMalwareOverview"] = $val;
        return $this;
    }
    

     /** 
     * Gets the androidDeviceOwnerEnrollmentProfiles
    * Android device owner enrollment profile entities.
     *
     * @return AndroidDeviceOwnerEnrollmentProfile[]|null The androidDeviceOwnerEnrollmentProfiles
     */
    public function getAndroidDeviceOwnerEnrollmentProfiles()
    {
        if (array_key_exists('androidDeviceOwnerEnrollmentProfiles', $this->_propDict) && !is_null($this->_propDict['androidDeviceOwnerEnrollmentProfiles'])) {
           $androidDeviceOwnerEnrollmentProfiles = [];
           if (count($this->_propDict['androidDeviceOwnerEnrollmentProfiles']) > 0 && is_a($this->_propDict['androidDeviceOwnerEnrollmentProfiles'][0], 'AndroidDeviceOwnerEnrollmentProfile')) {
              return $this->_propDict['androidDeviceOwnerEnrollmentProfiles'];
           }
           foreach ($this->_propDict['androidDeviceOwnerEnrollmentProfiles'] as $singleValue) {
              $androidDeviceOwnerEnrollmentProfiles []= new AndroidDeviceOwnerEnrollmentProfile($singleValue);
           }
           $this->_propDict['androidDeviceOwnerEnrollmentProfiles'] = $androidDeviceOwnerEnrollmentProfiles;
           return $this->_propDict['androidDeviceOwnerEnrollmentProfiles'];
        }
        return null;
    }
    
    /** 
    * Sets the androidDeviceOwnerEnrollmentProfiles
    * Android device owner enrollment profile entities.
    *
    * @param AndroidDeviceOwnerEnrollmentProfile[] $val The androidDeviceOwnerEnrollmentProfiles
    *
    * @return DeviceManagement
    */
    public function setAndroidDeviceOwnerEnrollmentProfiles($val)
    {
        $this->_propDict["androidDeviceOwnerEnrollmentProfiles"] = $val;
        return $this;
    }
    
    /**
    * Gets the virtualEndpoint
    *
    * @return VirtualEndpoint|null The virtualEndpoint
    */
    public function getVirtualEndpoint()
    {
        if (array_key_exists("virtualEndpoint", $this->_propDict) && !is_null($this->_propDict["virtualEndpoint"])) {
            if (is_a($this->_propDict["virtualEndpoint"], "\Beta\Microsoft\Graph\Model\VirtualEndpoint")) {
                return $this->_propDict["virtualEndpoint"];
            } else {
                $this->_propDict["virtualEndpoint"] = new VirtualEndpoint($this->_propDict["virtualEndpoint"]);
                return $this->_propDict["virtualEndpoint"];
            }
        }
        return null;
    }
    
    /**
    * Sets the virtualEndpoint
    *
    * @param VirtualEndpoint $val The virtualEndpoint
    *
    * @return DeviceManagement
    */
    public function setVirtualEndpoint($val)
    {
        $this->_propDict["virtualEndpoint"] = $val;
        return $this;
    }
    

     /** 
     * Gets the androidForWorkAppConfigurationSchemas
    * Android for Work app configuration schema entities.
     *
     * @return AndroidForWorkAppConfigurationSchema[]|null The androidForWorkAppConfigurationSchemas
     */
    public function getAndroidForWorkAppConfigurationSchemas()
    {
        if (array_key_exists('androidForWorkAppConfigurationSchemas', $this->_propDict) && !is_null($this->_propDict['androidForWorkAppConfigurationSchemas'])) {
           $androidForWorkAppConfigurationSchemas = [];
           if (count($this->_propDict['androidForWorkAppConfigurationSchemas']) > 0 && is_a($this->_propDict['androidForWorkAppConfigurationSchemas'][0], 'AndroidForWorkAppConfigurationSchema')) {
              return $this->_propDict['androidForWorkAppConfigurationSchemas'];
           }
           foreach ($this->_propDict['androidForWorkAppConfigurationSchemas'] as $singleValue) {
              $androidForWorkAppConfigurationSchemas []= new AndroidForWorkAppConfigurationSchema($singleValue);
           }
           $this->_propDict['androidForWorkAppConfigurationSchemas'] = $androidForWorkAppConfigurationSchemas;
           return $this->_propDict['androidForWorkAppConfigurationSchemas'];
        }
        return null;
    }
    
    /** 
    * Sets the androidForWorkAppConfigurationSchemas
    * Android for Work app configuration schema entities.
    *
    * @param AndroidForWorkAppConfigurationSchema[] $val The androidForWorkAppConfigurationSchemas
    *
    * @return DeviceManagement
    */
    public function setAndroidForWorkAppConfigurationSchemas($val)
    {
        $this->_propDict["androidForWorkAppConfigurationSchemas"] = $val;
        return $this;
    }
    

     /** 
     * Gets the androidForWorkEnrollmentProfiles
    * Android for Work enrollment profile entities.
     *
     * @return AndroidForWorkEnrollmentProfile[]|null The androidForWorkEnrollmentProfiles
     */
    public function getAndroidForWorkEnrollmentProfiles()
    {
        if (array_key_exists('androidForWorkEnrollmentProfiles', $this->_propDict) && !is_null($this->_propDict['androidForWorkEnrollmentProfiles'])) {
           $androidForWorkEnrollmentProfiles = [];
           if (count($this->_propDict['androidForWorkEnrollmentProfiles']) > 0 && is_a($this->_propDict['androidForWorkEnrollmentProfiles'][0], 'AndroidForWorkEnrollmentProfile')) {
              return $this->_propDict['androidForWorkEnrollmentProfiles'];
           }
           foreach ($this->_propDict['androidForWorkEnrollmentProfiles'] as $singleValue) {
              $androidForWorkEnrollmentProfiles []= new AndroidForWorkEnrollmentProfile($singleValue);
           }
           $this->_propDict['androidForWorkEnrollmentProfiles'] = $androidForWorkEnrollmentProfiles;
           return $this->_propDict['androidForWorkEnrollmentProfiles'];
        }
        return null;
    }
    
    /** 
    * Sets the androidForWorkEnrollmentProfiles
    * Android for Work enrollment profile entities.
    *
    * @param AndroidForWorkEnrollmentProfile[] $val The androidForWorkEnrollmentProfiles
    *
    * @return DeviceManagement
    */
    public function setAndroidForWorkEnrollmentProfiles($val)
    {
        $this->_propDict["androidForWorkEnrollmentProfiles"] = $val;
        return $this;
    }
    
    /**
    * Gets the androidForWorkSettings
    * The singleton Android for Work settings entity.
    *
    * @return AndroidForWorkSettings|null The androidForWorkSettings
    */
    public function getAndroidForWorkSettings()
    {
        if (array_key_exists("androidForWorkSettings", $this->_propDict) && !is_null($this->_propDict["androidForWorkSettings"])) {
            if (is_a($this->_propDict["androidForWorkSettings"], "\Beta\Microsoft\Graph\Model\AndroidForWorkSettings")) {
                return $this->_propDict["androidForWorkSettings"];
            } else {
                $this->_propDict["androidForWorkSettings"] = new AndroidForWorkSettings($this->_propDict["androidForWorkSettings"]);
                return $this->_propDict["androidForWorkSettings"];
            }
        }
        return null;
    }
    
    /**
    * Sets the androidForWorkSettings
    * The singleton Android for Work settings entity.
    *
    * @param AndroidForWorkSettings $val The androidForWorkSettings
    *
    * @return DeviceManagement
    */
    public function setAndroidForWorkSettings($val)
    {
        $this->_propDict["androidForWorkSettings"] = $val;
        return $this;
    }
    
    /**
    * Gets the androidManagedStoreAccountEnterpriseSettings
    * The singleton Android managed store account enterprise settings entity.
    *
    * @return AndroidManagedStoreAccountEnterpriseSettings|null The androidManagedStoreAccountEnterpriseSettings
    */
    public function getAndroidManagedStoreAccountEnterpriseSettings()
    {
        if (array_key_exists("androidManagedStoreAccountEnterpriseSettings", $this->_propDict) && !is_null($this->_propDict["androidManagedStoreAccountEnterpriseSettings"])) {
            if (is_a($this->_propDict["androidManagedStoreAccountEnterpriseSettings"], "\Beta\Microsoft\Graph\Model\AndroidManagedStoreAccountEnterpriseSettings")) {
                return $this->_propDict["androidManagedStoreAccountEnterpriseSettings"];
            } else {
                $this->_propDict["androidManagedStoreAccountEnterpriseSettings"] = new AndroidManagedStoreAccountEnterpriseSettings($this->_propDict["androidManagedStoreAccountEnterpriseSettings"]);
                return $this->_propDict["androidManagedStoreAccountEnterpriseSettings"];
            }
        }
        return null;
    }
    
    /**
    * Sets the androidManagedStoreAccountEnterpriseSettings
    * The singleton Android managed store account enterprise settings entity.
    *
    * @param AndroidManagedStoreAccountEnterpriseSettings $val The androidManagedStoreAccountEnterpriseSettings
    *
    * @return DeviceManagement
    */
    public function setAndroidManagedStoreAccountEnterpriseSettings($val)
    {
        $this->_propDict["androidManagedStoreAccountEnterpriseSettings"] = $val;
        return $this;
    }
    

     /** 
     * Gets the androidManagedStoreAppConfigurationSchemas
    * Android Enterprise app configuration schema entities.
     *
     * @return AndroidManagedStoreAppConfigurationSchema[]|null The androidManagedStoreAppConfigurationSchemas
     */
    public function getAndroidManagedStoreAppConfigurationSchemas()
    {
        if (array_key_exists('androidManagedStoreAppConfigurationSchemas', $this->_propDict) && !is_null($this->_propDict['androidManagedStoreAppConfigurationSchemas'])) {
           $androidManagedStoreAppConfigurationSchemas = [];
           if (count($this->_propDict['androidManagedStoreAppConfigurationSchemas']) > 0 && is_a($this->_propDict['androidManagedStoreAppConfigurationSchemas'][0], 'AndroidManagedStoreAppConfigurationSchema')) {
              return $this->_propDict['androidManagedStoreAppConfigurationSchemas'];
           }
           foreach ($this->_propDict['androidManagedStoreAppConfigurationSchemas'] as $singleValue) {
              $androidManagedStoreAppConfigurationSchemas []= new AndroidManagedStoreAppConfigurationSchema($singleValue);
           }
           $this->_propDict['androidManagedStoreAppConfigurationSchemas'] = $androidManagedStoreAppConfigurationSchemas;
           return $this->_propDict['androidManagedStoreAppConfigurationSchemas'];
        }
        return null;
    }
    
    /** 
    * Sets the androidManagedStoreAppConfigurationSchemas
    * Android Enterprise app configuration schema entities.
    *
    * @param AndroidManagedStoreAppConfigurationSchema[] $val The androidManagedStoreAppConfigurationSchemas
    *
    * @return DeviceManagement
    */
    public function setAndroidManagedStoreAppConfigurationSchemas($val)
    {
        $this->_propDict["androidManagedStoreAppConfigurationSchemas"] = $val;
        return $this;
    }
    

     /** 
     * Gets the auditEvents
    * The Audit Events
     *
     * @return AuditEvent[]|null The auditEvents
     */
    public function getAuditEvents()
    {
        if (array_key_exists('auditEvents', $this->_propDict) && !is_null($this->_propDict['auditEvents'])) {
           $auditEvents = [];
           if (count($this->_propDict['auditEvents']) > 0 && is_a($this->_propDict['auditEvents'][0], 'AuditEvent')) {
              return $this->_propDict['auditEvents'];
           }
           foreach ($this->_propDict['auditEvents'] as $singleValue) {
              $auditEvents []= new AuditEvent($singleValue);
           }
           $this->_propDict['auditEvents'] = $auditEvents;
           return $this->_propDict['auditEvents'];
        }
        return null;
    }
    
    /** 
    * Sets the auditEvents
    * The Audit Events
    *
    * @param AuditEvent[] $val The auditEvents
    *
    * @return DeviceManagement
    */
    public function setAuditEvents($val)
    {
        $this->_propDict["auditEvents"] = $val;
        return $this;
    }
    

     /** 
     * Gets the assignmentFilters
    * The list of assignment filters
     *
     * @return DeviceAndAppManagementAssignmentFilter[]|null The assignmentFilters
     */
    public function getAssignmentFilters()
    {
        if (array_key_exists('assignmentFilters', $this->_propDict) && !is_null($this->_propDict['assignmentFilters'])) {
           $assignmentFilters = [];
           if (count($this->_propDict['assignmentFilters']) > 0 && is_a($this->_propDict['assignmentFilters'][0], 'DeviceAndAppManagementAssignmentFilter')) {
              return $this->_propDict['assignmentFilters'];
           }
           foreach ($this->_propDict['assignmentFilters'] as $singleValue) {
              $assignmentFilters []= new DeviceAndAppManagementAssignmentFilter($singleValue);
           }
           $this->_propDict['assignmentFilters'] = $assignmentFilters;
           return $this->_propDict['assignmentFilters'];
        }
        return null;
    }
    
    /** 
    * Sets the assignmentFilters
    * The list of assignment filters
    *
    * @param DeviceAndAppManagementAssignmentFilter[] $val The assignmentFilters
    *
    * @return DeviceManagement
    */
    public function setAssignmentFilters($val)
    {
        $this->_propDict["assignmentFilters"] = $val;
        return $this;
    }
    

     /** 
     * Gets the chromeOSOnboardingSettings
    * Collection of ChromeOSOnboardingSettings settings associated with account.
     *
     * @return ChromeOSOnboardingSettings[]|null The chromeOSOnboardingSettings
     */
    public function getChromeOSOnboardingSettings()
    {
        if (array_key_exists('chromeOSOnboardingSettings', $this->_propDict) && !is_null($this->_propDict['chromeOSOnboardingSettings'])) {
           $chromeOSOnboardingSettings = [];
           if (count($this->_propDict['chromeOSOnboardingSettings']) > 0 && is_a($this->_propDict['chromeOSOnboardingSettings'][0], 'ChromeOSOnboardingSettings')) {
              return $this->_propDict['chromeOSOnboardingSettings'];
           }
           foreach ($this->_propDict['chromeOSOnboardingSettings'] as $singleValue) {
              $chromeOSOnboardingSettings []= new ChromeOSOnboardingSettings($singleValue);
           }
           $this->_propDict['chromeOSOnboardingSettings'] = $chromeOSOnboardingSettings;
           return $this->_propDict['chromeOSOnboardingSettings'];
        }
        return null;
    }
    
    /** 
    * Sets the chromeOSOnboardingSettings
    * Collection of ChromeOSOnboardingSettings settings associated with account.
    *
    * @param ChromeOSOnboardingSettings[] $val The chromeOSOnboardingSettings
    *
    * @return DeviceManagement
    */
    public function setChromeOSOnboardingSettings($val)
    {
        $this->_propDict["chromeOSOnboardingSettings"] = $val;
        return $this;
    }
    

     /** 
     * Gets the termsAndConditions
    * The terms and conditions associated with device management of the company.
     *
     * @return TermsAndConditions[]|null The termsAndConditions
     */
    public function getTermsAndConditions()
    {
        if (array_key_exists('termsAndConditions', $this->_propDict) && !is_null($this->_propDict['termsAndConditions'])) {
           $termsAndConditions = [];
           if (count($this->_propDict['termsAndConditions']) > 0 && is_a($this->_propDict['termsAndConditions'][0], 'TermsAndConditions')) {
              return $this->_propDict['termsAndConditions'];
           }
           foreach ($this->_propDict['termsAndConditions'] as $singleValue) {
              $termsAndConditions []= new TermsAndConditions($singleValue);
           }
           $this->_propDict['termsAndConditions'] = $termsAndConditions;
           return $this->_propDict['termsAndConditions'];
        }
        return null;
    }
    
    /** 
    * Sets the termsAndConditions
    * The terms and conditions associated with device management of the company.
    *
    * @param TermsAndConditions[] $val The termsAndConditions
    *
    * @return DeviceManagement
    */
    public function setTermsAndConditions($val)
    {
        $this->_propDict["termsAndConditions"] = $val;
        return $this;
    }
    
    /**
    * Gets the advancedThreatProtectionOnboardingStateSummary
    * The summary state of ATP onboarding state for this account.
    *
    * @return AdvancedThreatProtectionOnboardingStateSummary|null The advancedThreatProtectionOnboardingStateSummary
    */
    public function getAdvancedThreatProtectionOnboardingStateSummary()
    {
        if (array_key_exists("advancedThreatProtectionOnboardingStateSummary", $this->_propDict) && !is_null($this->_propDict["advancedThreatProtectionOnboardingStateSummary"])) {
            if (is_a($this->_propDict["advancedThreatProtectionOnboardingStateSummary"], "\Beta\Microsoft\Graph\Model\AdvancedThreatProtectionOnboardingStateSummary")) {
                return $this->_propDict["advancedThreatProtectionOnboardingStateSummary"];
            } else {
                $this->_propDict["advancedThreatProtectionOnboardingStateSummary"] = new AdvancedThreatProtectionOnboardingStateSummary($this->_propDict["advancedThreatProtectionOnboardingStateSummary"]);
                return $this->_propDict["advancedThreatProtectionOnboardingStateSummary"];
            }
        }
        return null;
    }
    
    /**
    * Sets the advancedThreatProtectionOnboardingStateSummary
    * The summary state of ATP onboarding state for this account.
    *
    * @param AdvancedThreatProtectionOnboardingStateSummary $val The advancedThreatProtectionOnboardingStateSummary
    *
    * @return DeviceManagement
    */
    public function setAdvancedThreatProtectionOnboardingStateSummary($val)
    {
        $this->_propDict["advancedThreatProtectionOnboardingStateSummary"] = $val;
        return $this;
    }
    

     /** 
     * Gets the cartToClassAssociations
    * The Cart To Class Associations.
     *
     * @return CartToClassAssociation[]|null The cartToClassAssociations
     */
    public function getCartToClassAssociations()
    {
        if (array_key_exists('cartToClassAssociations', $this->_propDict) && !is_null($this->_propDict['cartToClassAssociations'])) {
           $cartToClassAssociations = [];
           if (count($this->_propDict['cartToClassAssociations']) > 0 && is_a($this->_propDict['cartToClassAssociations'][0], 'CartToClassAssociation')) {
              return $this->_propDict['cartToClassAssociations'];
           }
           foreach ($this->_propDict['cartToClassAssociations'] as $singleValue) {
              $cartToClassAssociations []= new CartToClassAssociation($singleValue);
           }
           $this->_propDict['cartToClassAssociations'] = $cartToClassAssociations;
           return $this->_propDict['cartToClassAssociations'];
        }
        return null;
    }
    
    /** 
    * Sets the cartToClassAssociations
    * The Cart To Class Associations.
    *
    * @param CartToClassAssociation[] $val The cartToClassAssociations
    *
    * @return DeviceManagement
    */
    public function setCartToClassAssociations($val)
    {
        $this->_propDict["cartToClassAssociations"] = $val;
        return $this;
    }
    

     /** 
     * Gets the deviceCompliancePolicies
    * The device compliance policies.
     *
     * @return DeviceCompliancePolicy[]|null The deviceCompliancePolicies
     */
    public function getDeviceCompliancePolicies()
    {
        if (array_key_exists('deviceCompliancePolicies', $this->_propDict) && !is_null($this->_propDict['deviceCompliancePolicies'])) {
           $deviceCompliancePolicies = [];
           if (count($this->_propDict['deviceCompliancePolicies']) > 0 && is_a($this->_propDict['deviceCompliancePolicies'][0], 'DeviceCompliancePolicy')) {
              return $this->_propDict['deviceCompliancePolicies'];
           }
           foreach ($this->_propDict['deviceCompliancePolicies'] as $singleValue) {
              $deviceCompliancePolicies []= new DeviceCompliancePolicy($singleValue);
           }
           $this->_propDict['deviceCompliancePolicies'] = $deviceCompliancePolicies;
           return $this->_propDict['deviceCompliancePolicies'];
        }
        return null;
    }
    
    /** 
    * Sets the deviceCompliancePolicies
    * The device compliance policies.
    *
    * @param DeviceCompliancePolicy[] $val The deviceCompliancePolicies
    *
    * @return DeviceManagement
    */
    public function setDeviceCompliancePolicies($val)
    {
        $this->_propDict["deviceCompliancePolicies"] = $val;
        return $this;
    }
    
    /**
    * Gets the deviceCompliancePolicyDeviceStateSummary
    * The device compliance state summary for this account.
    *
    * @return DeviceCompliancePolicyDeviceStateSummary|null The deviceCompliancePolicyDeviceStateSummary
    */
    public function getDeviceCompliancePolicyDeviceStateSummary()
    {
        if (array_key_exists("deviceCompliancePolicyDeviceStateSummary", $this->_propDict) && !is_null($this->_propDict["deviceCompliancePolicyDeviceStateSummary"])) {
            if (is_a($this->_propDict["deviceCompliancePolicyDeviceStateSummary"], "\Beta\Microsoft\Graph\Model\DeviceCompliancePolicyDeviceStateSummary")) {
                return $this->_propDict["deviceCompliancePolicyDeviceStateSummary"];
            } else {
                $this->_propDict["deviceCompliancePolicyDeviceStateSummary"] = new DeviceCompliancePolicyDeviceStateSummary($this->_propDict["deviceCompliancePolicyDeviceStateSummary"]);
                return $this->_propDict["deviceCompliancePolicyDeviceStateSummary"];
            }
        }
        return null;
    }
    
    /**
    * Sets the deviceCompliancePolicyDeviceStateSummary
    * The device compliance state summary for this account.
    *
    * @param DeviceCompliancePolicyDeviceStateSummary $val The deviceCompliancePolicyDeviceStateSummary
    *
    * @return DeviceManagement
    */
    public function setDeviceCompliancePolicyDeviceStateSummary($val)
    {
        $this->_propDict["deviceCompliancePolicyDeviceStateSummary"] = $val;
        return $this;
    }
    

     /** 
     * Gets the deviceCompliancePolicySettingStateSummaries
    * The summary states of compliance policy settings for this account.
     *
     * @return DeviceCompliancePolicySettingStateSummary[]|null The deviceCompliancePolicySettingStateSummaries
     */
    public function getDeviceCompliancePolicySettingStateSummaries()
    {
        if (array_key_exists('deviceCompliancePolicySettingStateSummaries', $this->_propDict) && !is_null($this->_propDict['deviceCompliancePolicySettingStateSummaries'])) {
           $deviceCompliancePolicySettingStateSummaries = [];
           if (count($this->_propDict['deviceCompliancePolicySettingStateSummaries']) > 0 && is_a($this->_propDict['deviceCompliancePolicySettingStateSummaries'][0], 'DeviceCompliancePolicySettingStateSummary')) {
              return $this->_propDict['deviceCompliancePolicySettingStateSummaries'];
           }
           foreach ($this->_propDict['deviceCompliancePolicySettingStateSummaries'] as $singleValue) {
              $deviceCompliancePolicySettingStateSummaries []= new DeviceCompliancePolicySettingStateSummary($singleValue);
           }
           $this->_propDict['deviceCompliancePolicySettingStateSummaries'] = $deviceCompliancePolicySettingStateSummaries;
           return $this->_propDict['deviceCompliancePolicySettingStateSummaries'];
        }
        return null;
    }
    
    /** 
    * Sets the deviceCompliancePolicySettingStateSummaries
    * The summary states of compliance policy settings for this account.
    *
    * @param DeviceCompliancePolicySettingStateSummary[] $val The deviceCompliancePolicySettingStateSummaries
    *
    * @return DeviceManagement
    */
    public function setDeviceCompliancePolicySettingStateSummaries($val)
    {
        $this->_propDict["deviceCompliancePolicySettingStateSummaries"] = $val;
        return $this;
    }
    

     /** 
     * Gets the deviceConfigurationConflictSummary
    * Summary of policies in conflict state for this account.
     *
     * @return DeviceConfigurationConflictSummary[]|null The deviceConfigurationConflictSummary
     */
    public function getDeviceConfigurationConflictSummary()
    {
        if (array_key_exists('deviceConfigurationConflictSummary', $this->_propDict) && !is_null($this->_propDict['deviceConfigurationConflictSummary'])) {
           $deviceConfigurationConflictSummary = [];
           if (count($this->_propDict['deviceConfigurationConflictSummary']) > 0 && is_a($this->_propDict['deviceConfigurationConflictSummary'][0], 'DeviceConfigurationConflictSummary')) {
              return $this->_propDict['deviceConfigurationConflictSummary'];
           }
           foreach ($this->_propDict['deviceConfigurationConflictSummary'] as $singleValue) {
              $deviceConfigurationConflictSummary []= new DeviceConfigurationConflictSummary($singleValue);
           }
           $this->_propDict['deviceConfigurationConflictSummary'] = $deviceConfigurationConflictSummary;
           return $this->_propDict['deviceConfigurationConflictSummary'];
        }
        return null;
    }
    
    /** 
    * Sets the deviceConfigurationConflictSummary
    * Summary of policies in conflict state for this account.
    *
    * @param DeviceConfigurationConflictSummary[] $val The deviceConfigurationConflictSummary
    *
    * @return DeviceManagement
    */
    public function setDeviceConfigurationConflictSummary($val)
    {
        $this->_propDict["deviceConfigurationConflictSummary"] = $val;
        return $this;
    }
    
    /**
    * Gets the deviceConfigurationDeviceStateSummaries
    * The device configuration device state summary for this account.
    *
    * @return DeviceConfigurationDeviceStateSummary|null The deviceConfigurationDeviceStateSummaries
    */
    public function getDeviceConfigurationDeviceStateSummaries()
    {
        if (array_key_exists("deviceConfigurationDeviceStateSummaries", $this->_propDict) && !is_null($this->_propDict["deviceConfigurationDeviceStateSummaries"])) {
            if (is_a($this->_propDict["deviceConfigurationDeviceStateSummaries"], "\Beta\Microsoft\Graph\Model\DeviceConfigurationDeviceStateSummary")) {
                return $this->_propDict["deviceConfigurationDeviceStateSummaries"];
            } else {
                $this->_propDict["deviceConfigurationDeviceStateSummaries"] = new DeviceConfigurationDeviceStateSummary($this->_propDict["deviceConfigurationDeviceStateSummaries"]);
                return $this->_propDict["deviceConfigurationDeviceStateSummaries"];
            }
        }
        return null;
    }
    
    /**
    * Sets the deviceConfigurationDeviceStateSummaries
    * The device configuration device state summary for this account.
    *
    * @param DeviceConfigurationDeviceStateSummary $val The deviceConfigurationDeviceStateSummaries
    *
    * @return DeviceManagement
    */
    public function setDeviceConfigurationDeviceStateSummaries($val)
    {
        $this->_propDict["deviceConfigurationDeviceStateSummaries"] = $val;
        return $this;
    }
    

     /** 
     * Gets the deviceConfigurationRestrictedAppsViolations
    * Restricted apps violations for this account.
     *
     * @return RestrictedAppsViolation[]|null The deviceConfigurationRestrictedAppsViolations
     */
    public function getDeviceConfigurationRestrictedAppsViolations()
    {
        if (array_key_exists('deviceConfigurationRestrictedAppsViolations', $this->_propDict) && !is_null($this->_propDict['deviceConfigurationRestrictedAppsViolations'])) {
           $deviceConfigurationRestrictedAppsViolations = [];
           if (count($this->_propDict['deviceConfigurationRestrictedAppsViolations']) > 0 && is_a($this->_propDict['deviceConfigurationRestrictedAppsViolations'][0], 'RestrictedAppsViolation')) {
              return $this->_propDict['deviceConfigurationRestrictedAppsViolations'];
           }
           foreach ($this->_propDict['deviceConfigurationRestrictedAppsViolations'] as $singleValue) {
              $deviceConfigurationRestrictedAppsViolations []= new RestrictedAppsViolation($singleValue);
           }
           $this->_propDict['deviceConfigurationRestrictedAppsViolations'] = $deviceConfigurationRestrictedAppsViolations;
           return $this->_propDict['deviceConfigurationRestrictedAppsViolations'];
        }
        return null;
    }
    
    /** 
    * Sets the deviceConfigurationRestrictedAppsViolations
    * Restricted apps violations for this account.
    *
    * @param RestrictedAppsViolation[] $val The deviceConfigurationRestrictedAppsViolations
    *
    * @return DeviceManagement
    */
    public function setDeviceConfigurationRestrictedAppsViolations($val)
    {
        $this->_propDict["deviceConfigurationRestrictedAppsViolations"] = $val;
        return $this;
    }
    

     /** 
     * Gets the deviceConfigurations
    * The device configurations.
     *
     * @return DeviceConfiguration[]|null The deviceConfigurations
     */
    public function getDeviceConfigurations()
    {
        if (array_key_exists('deviceConfigurations', $this->_propDict) && !is_null($this->_propDict['deviceConfigurations'])) {
           $deviceConfigurations = [];
           if (count($this->_propDict['deviceConfigurations']) > 0 && is_a($this->_propDict['deviceConfigurations'][0], 'DeviceConfiguration')) {
              return $this->_propDict['deviceConfigurations'];
           }
           foreach ($this->_propDict['deviceConfigurations'] as $singleValue) {
              $deviceConfigurations []= new DeviceConfiguration($singleValue);
           }
           $this->_propDict['deviceConfigurations'] = $deviceConfigurations;
           return $this->_propDict['deviceConfigurations'];
        }
        return null;
    }
    
    /** 
    * Sets the deviceConfigurations
    * The device configurations.
    *
    * @param DeviceConfiguration[] $val The deviceConfigurations
    *
    * @return DeviceManagement
    */
    public function setDeviceConfigurations($val)
    {
        $this->_propDict["deviceConfigurations"] = $val;
        return $this;
    }
    

     /** 
     * Gets the deviceConfigurationsAllManagedDeviceCertificateStates
    * Summary of all certificates for all devices.
     *
     * @return ManagedAllDeviceCertificateState[]|null The deviceConfigurationsAllManagedDeviceCertificateStates
     */
    public function getDeviceConfigurationsAllManagedDeviceCertificateStates()
    {
        if (array_key_exists('deviceConfigurationsAllManagedDeviceCertificateStates', $this->_propDict) && !is_null($this->_propDict['deviceConfigurationsAllManagedDeviceCertificateStates'])) {
           $deviceConfigurationsAllManagedDeviceCertificateStates = [];
           if (count($this->_propDict['deviceConfigurationsAllManagedDeviceCertificateStates']) > 0 && is_a($this->_propDict['deviceConfigurationsAllManagedDeviceCertificateStates'][0], 'ManagedAllDeviceCertificateState')) {
              return $this->_propDict['deviceConfigurationsAllManagedDeviceCertificateStates'];
           }
           foreach ($this->_propDict['deviceConfigurationsAllManagedDeviceCertificateStates'] as $singleValue) {
              $deviceConfigurationsAllManagedDeviceCertificateStates []= new ManagedAllDeviceCertificateState($singleValue);
           }
           $this->_propDict['deviceConfigurationsAllManagedDeviceCertificateStates'] = $deviceConfigurationsAllManagedDeviceCertificateStates;
           return $this->_propDict['deviceConfigurationsAllManagedDeviceCertificateStates'];
        }
        return null;
    }
    
    /** 
    * Sets the deviceConfigurationsAllManagedDeviceCertificateStates
    * Summary of all certificates for all devices.
    *
    * @param ManagedAllDeviceCertificateState[] $val The deviceConfigurationsAllManagedDeviceCertificateStates
    *
    * @return DeviceManagement
    */
    public function setDeviceConfigurationsAllManagedDeviceCertificateStates($val)
    {
        $this->_propDict["deviceConfigurationsAllManagedDeviceCertificateStates"] = $val;
        return $this;
    }
    
    /**
    * Gets the deviceConfigurationUserStateSummaries
    * The device configuration user state summary for this account.
    *
    * @return DeviceConfigurationUserStateSummary|null The deviceConfigurationUserStateSummaries
    */
    public function getDeviceConfigurationUserStateSummaries()
    {
        if (array_key_exists("deviceConfigurationUserStateSummaries", $this->_propDict) && !is_null($this->_propDict["deviceConfigurationUserStateSummaries"])) {
            if (is_a($this->_propDict["deviceConfigurationUserStateSummaries"], "\Beta\Microsoft\Graph\Model\DeviceConfigurationUserStateSummary")) {
                return $this->_propDict["deviceConfigurationUserStateSummaries"];
            } else {
                $this->_propDict["deviceConfigurationUserStateSummaries"] = new DeviceConfigurationUserStateSummary($this->_propDict["deviceConfigurationUserStateSummaries"]);
                return $this->_propDict["deviceConfigurationUserStateSummaries"];
            }
        }
        return null;
    }
    
    /**
    * Sets the deviceConfigurationUserStateSummaries
    * The device configuration user state summary for this account.
    *
    * @param DeviceConfigurationUserStateSummary $val The deviceConfigurationUserStateSummaries
    *
    * @return DeviceManagement
    */
    public function setDeviceConfigurationUserStateSummaries($val)
    {
        $this->_propDict["deviceConfigurationUserStateSummaries"] = $val;
        return $this;
    }
    

     /** 
     * Gets the iosUpdateStatuses
    * The IOS software update installation statuses for this account.
     *
     * @return IosUpdateDeviceStatus[]|null The iosUpdateStatuses
     */
    public function getIosUpdateStatuses()
    {
        if (array_key_exists('iosUpdateStatuses', $this->_propDict) && !is_null($this->_propDict['iosUpdateStatuses'])) {
           $iosUpdateStatuses = [];
           if (count($this->_propDict['iosUpdateStatuses']) > 0 && is_a($this->_propDict['iosUpdateStatuses'][0], 'IosUpdateDeviceStatus')) {
              return $this->_propDict['iosUpdateStatuses'];
           }
           foreach ($this->_propDict['iosUpdateStatuses'] as $singleValue) {
              $iosUpdateStatuses []= new IosUpdateDeviceStatus($singleValue);
           }
           $this->_propDict['iosUpdateStatuses'] = $iosUpdateStatuses;
           return $this->_propDict['iosUpdateStatuses'];
        }
        return null;
    }
    
    /** 
    * Sets the iosUpdateStatuses
    * The IOS software update installation statuses for this account.
    *
    * @param IosUpdateDeviceStatus[] $val The iosUpdateStatuses
    *
    * @return DeviceManagement
    */
    public function setIosUpdateStatuses($val)
    {
        $this->_propDict["iosUpdateStatuses"] = $val;
        return $this;
    }
    

     /** 
     * Gets the macOSSoftwareUpdateAccountSummaries
    * The MacOS software update account summaries for this account.
     *
     * @return MacOSSoftwareUpdateAccountSummary[]|null The macOSSoftwareUpdateAccountSummaries
     */
    public function getMacOSSoftwareUpdateAccountSummaries()
    {
        if (array_key_exists('macOSSoftwareUpdateAccountSummaries', $this->_propDict) && !is_null($this->_propDict['macOSSoftwareUpdateAccountSummaries'])) {
           $macOSSoftwareUpdateAccountSummaries = [];
           if (count($this->_propDict['macOSSoftwareUpdateAccountSummaries']) > 0 && is_a($this->_propDict['macOSSoftwareUpdateAccountSummaries'][0], 'MacOSSoftwareUpdateAccountSummary')) {
              return $this->_propDict['macOSSoftwareUpdateAccountSummaries'];
           }
           foreach ($this->_propDict['macOSSoftwareUpdateAccountSummaries'] as $singleValue) {
              $macOSSoftwareUpdateAccountSummaries []= new MacOSSoftwareUpdateAccountSummary($singleValue);
           }
           $this->_propDict['macOSSoftwareUpdateAccountSummaries'] = $macOSSoftwareUpdateAccountSummaries;
           return $this->_propDict['macOSSoftwareUpdateAccountSummaries'];
        }
        return null;
    }
    
    /** 
    * Sets the macOSSoftwareUpdateAccountSummaries
    * The MacOS software update account summaries for this account.
    *
    * @param MacOSSoftwareUpdateAccountSummary[] $val The macOSSoftwareUpdateAccountSummaries
    *
    * @return DeviceManagement
    */
    public function setMacOSSoftwareUpdateAccountSummaries($val)
    {
        $this->_propDict["macOSSoftwareUpdateAccountSummaries"] = $val;
        return $this;
    }
    

     /** 
     * Gets the managedDeviceEncryptionStates
    * Encryption report for devices in this account
     *
     * @return ManagedDeviceEncryptionState[]|null The managedDeviceEncryptionStates
     */
    public function getManagedDeviceEncryptionStates()
    {
        if (array_key_exists('managedDeviceEncryptionStates', $this->_propDict) && !is_null($this->_propDict['managedDeviceEncryptionStates'])) {
           $managedDeviceEncryptionStates = [];
           if (count($this->_propDict['managedDeviceEncryptionStates']) > 0 && is_a($this->_propDict['managedDeviceEncryptionStates'][0], 'ManagedDeviceEncryptionState')) {
              return $this->_propDict['managedDeviceEncryptionStates'];
           }
           foreach ($this->_propDict['managedDeviceEncryptionStates'] as $singleValue) {
              $managedDeviceEncryptionStates []= new ManagedDeviceEncryptionState($singleValue);
           }
           $this->_propDict['managedDeviceEncryptionStates'] = $managedDeviceEncryptionStates;
           return $this->_propDict['managedDeviceEncryptionStates'];
        }
        return null;
    }
    
    /** 
    * Sets the managedDeviceEncryptionStates
    * Encryption report for devices in this account
    *
    * @param ManagedDeviceEncryptionState[] $val The managedDeviceEncryptionStates
    *
    * @return DeviceManagement
    */
    public function setManagedDeviceEncryptionStates($val)
    {
        $this->_propDict["managedDeviceEncryptionStates"] = $val;
        return $this;
    }
    

     /** 
     * Gets the ndesConnectors
    * The collection of Ndes connectors for this account.
     *
     * @return NdesConnector[]|null The ndesConnectors
     */
    public function getNdesConnectors()
    {
        if (array_key_exists('ndesConnectors', $this->_propDict) && !is_null($this->_propDict['ndesConnectors'])) {
           $ndesConnectors = [];
           if (count($this->_propDict['ndesConnectors']) > 0 && is_a($this->_propDict['ndesConnectors'][0], 'NdesConnector')) {
              return $this->_propDict['ndesConnectors'];
           }
           foreach ($this->_propDict['ndesConnectors'] as $singleValue) {
              $ndesConnectors []= new NdesConnector($singleValue);
           }
           $this->_propDict['ndesConnectors'] = $ndesConnectors;
           return $this->_propDict['ndesConnectors'];
        }
        return null;
    }
    
    /** 
    * Sets the ndesConnectors
    * The collection of Ndes connectors for this account.
    *
    * @param NdesConnector[] $val The ndesConnectors
    *
    * @return DeviceManagement
    */
    public function setNdesConnectors($val)
    {
        $this->_propDict["ndesConnectors"] = $val;
        return $this;
    }
    
    /**
    * Gets the softwareUpdateStatusSummary
    * The software update status summary.
    *
    * @return SoftwareUpdateStatusSummary|null The softwareUpdateStatusSummary
    */
    public function getSoftwareUpdateStatusSummary()
    {
        if (array_key_exists("softwareUpdateStatusSummary", $this->_propDict) && !is_null($this->_propDict["softwareUpdateStatusSummary"])) {
            if (is_a($this->_propDict["softwareUpdateStatusSummary"], "\Beta\Microsoft\Graph\Model\SoftwareUpdateStatusSummary")) {
                return $this->_propDict["softwareUpdateStatusSummary"];
            } else {
                $this->_propDict["softwareUpdateStatusSummary"] = new SoftwareUpdateStatusSummary($this->_propDict["softwareUpdateStatusSummary"]);
                return $this->_propDict["softwareUpdateStatusSummary"];
            }
        }
        return null;
    }
    
    /**
    * Sets the softwareUpdateStatusSummary
    * The software update status summary.
    *
    * @param SoftwareUpdateStatusSummary $val The softwareUpdateStatusSummary
    *
    * @return DeviceManagement
    */
    public function setSoftwareUpdateStatusSummary($val)
    {
        $this->_propDict["softwareUpdateStatusSummary"] = $val;
        return $this;
    }
    

     /** 
     * Gets the complianceCategories
    * List of all compliance categories
     *
     * @return DeviceManagementConfigurationCategory[]|null The complianceCategories
     */
    public function getComplianceCategories()
    {
        if (array_key_exists('complianceCategories', $this->_propDict) && !is_null($this->_propDict['complianceCategories'])) {
           $complianceCategories = [];
           if (count($this->_propDict['complianceCategories']) > 0 && is_a($this->_propDict['complianceCategories'][0], 'DeviceManagementConfigurationCategory')) {
              return $this->_propDict['complianceCategories'];
           }
           foreach ($this->_propDict['complianceCategories'] as $singleValue) {
              $complianceCategories []= new DeviceManagementConfigurationCategory($singleValue);
           }
           $this->_propDict['complianceCategories'] = $complianceCategories;
           return $this->_propDict['complianceCategories'];
        }
        return null;
    }
    
    /** 
    * Sets the complianceCategories
    * List of all compliance categories
    *
    * @param DeviceManagementConfigurationCategory[] $val The complianceCategories
    *
    * @return DeviceManagement
    */
    public function setComplianceCategories($val)
    {
        $this->_propDict["complianceCategories"] = $val;
        return $this;
    }
    

     /** 
     * Gets the compliancePolicies
    * List of all compliance policies
     *
     * @return DeviceManagementCompliancePolicy[]|null The compliancePolicies
     */
    public function getCompliancePolicies()
    {
        if (array_key_exists('compliancePolicies', $this->_propDict) && !is_null($this->_propDict['compliancePolicies'])) {
           $compliancePolicies = [];
           if (count($this->_propDict['compliancePolicies']) > 0 && is_a($this->_propDict['compliancePolicies'][0], 'DeviceManagementCompliancePolicy')) {
              return $this->_propDict['compliancePolicies'];
           }
           foreach ($this->_propDict['compliancePolicies'] as $singleValue) {
              $compliancePolicies []= new DeviceManagementCompliancePolicy($singleValue);
           }
           $this->_propDict['compliancePolicies'] = $compliancePolicies;
           return $this->_propDict['compliancePolicies'];
        }
        return null;
    }
    
    /** 
    * Sets the compliancePolicies
    * List of all compliance policies
    *
    * @param DeviceManagementCompliancePolicy[] $val The compliancePolicies
    *
    * @return DeviceManagement
    */
    public function setCompliancePolicies($val)
    {
        $this->_propDict["compliancePolicies"] = $val;
        return $this;
    }
    

     /** 
     * Gets the complianceSettings
    * List of all ComplianceSettings
     *
     * @return DeviceManagementConfigurationSettingDefinition[]|null The complianceSettings
     */
    public function getComplianceSettings()
    {
        if (array_key_exists('complianceSettings', $this->_propDict) && !is_null($this->_propDict['complianceSettings'])) {
           $complianceSettings = [];
           if (count($this->_propDict['complianceSettings']) > 0 && is_a($this->_propDict['complianceSettings'][0], 'DeviceManagementConfigurationSettingDefinition')) {
              return $this->_propDict['complianceSettings'];
           }
           foreach ($this->_propDict['complianceSettings'] as $singleValue) {
              $complianceSettings []= new DeviceManagementConfigurationSettingDefinition($singleValue);
           }
           $this->_propDict['complianceSettings'] = $complianceSettings;
           return $this->_propDict['complianceSettings'];
        }
        return null;
    }
    
    /** 
    * Sets the complianceSettings
    * List of all ComplianceSettings
    *
    * @param DeviceManagementConfigurationSettingDefinition[] $val The complianceSettings
    *
    * @return DeviceManagement
    */
    public function setComplianceSettings($val)
    {
        $this->_propDict["complianceSettings"] = $val;
        return $this;
    }
    

     /** 
     * Gets the configurationCategories
    * List of all Configuration Categories
     *
     * @return DeviceManagementConfigurationCategory[]|null The configurationCategories
     */
    public function getConfigurationCategories()
    {
        if (array_key_exists('configurationCategories', $this->_propDict) && !is_null($this->_propDict['configurationCategories'])) {
           $configurationCategories = [];
           if (count($this->_propDict['configurationCategories']) > 0 && is_a($this->_propDict['configurationCategories'][0], 'DeviceManagementConfigurationCategory')) {
              return $this->_propDict['configurationCategories'];
           }
           foreach ($this->_propDict['configurationCategories'] as $singleValue) {
              $configurationCategories []= new DeviceManagementConfigurationCategory($singleValue);
           }
           $this->_propDict['configurationCategories'] = $configurationCategories;
           return $this->_propDict['configurationCategories'];
        }
        return null;
    }
    
    /** 
    * Sets the configurationCategories
    * List of all Configuration Categories
    *
    * @param DeviceManagementConfigurationCategory[] $val The configurationCategories
    *
    * @return DeviceManagement
    */
    public function setConfigurationCategories($val)
    {
        $this->_propDict["configurationCategories"] = $val;
        return $this;
    }
    

     /** 
     * Gets the configurationPolicies
    * List of all Configuration policies
     *
     * @return DeviceManagementConfigurationPolicy[]|null The configurationPolicies
     */
    public function getConfigurationPolicies()
    {
        if (array_key_exists('configurationPolicies', $this->_propDict) && !is_null($this->_propDict['configurationPolicies'])) {
           $configurationPolicies = [];
           if (count($this->_propDict['configurationPolicies']) > 0 && is_a($this->_propDict['configurationPolicies'][0], 'DeviceManagementConfigurationPolicy')) {
              return $this->_propDict['configurationPolicies'];
           }
           foreach ($this->_propDict['configurationPolicies'] as $singleValue) {
              $configurationPolicies []= new DeviceManagementConfigurationPolicy($singleValue);
           }
           $this->_propDict['configurationPolicies'] = $configurationPolicies;
           return $this->_propDict['configurationPolicies'];
        }
        return null;
    }
    
    /** 
    * Sets the configurationPolicies
    * List of all Configuration policies
    *
    * @param DeviceManagementConfigurationPolicy[] $val The configurationPolicies
    *
    * @return DeviceManagement
    */
    public function setConfigurationPolicies($val)
    {
        $this->_propDict["configurationPolicies"] = $val;
        return $this;
    }
    

     /** 
     * Gets the configurationPolicyTemplates
    * List of all templates
     *
     * @return DeviceManagementConfigurationPolicyTemplate[]|null The configurationPolicyTemplates
     */
    public function getConfigurationPolicyTemplates()
    {
        if (array_key_exists('configurationPolicyTemplates', $this->_propDict) && !is_null($this->_propDict['configurationPolicyTemplates'])) {
           $configurationPolicyTemplates = [];
           if (count($this->_propDict['configurationPolicyTemplates']) > 0 && is_a($this->_propDict['configurationPolicyTemplates'][0], 'DeviceManagementConfigurationPolicyTemplate')) {
              return $this->_propDict['configurationPolicyTemplates'];
           }
           foreach ($this->_propDict['configurationPolicyTemplates'] as $singleValue) {
              $configurationPolicyTemplates []= new DeviceManagementConfigurationPolicyTemplate($singleValue);
           }
           $this->_propDict['configurationPolicyTemplates'] = $configurationPolicyTemplates;
           return $this->_propDict['configurationPolicyTemplates'];
        }
        return null;
    }
    
    /** 
    * Sets the configurationPolicyTemplates
    * List of all templates
    *
    * @param DeviceManagementConfigurationPolicyTemplate[] $val The configurationPolicyTemplates
    *
    * @return DeviceManagement
    */
    public function setConfigurationPolicyTemplates($val)
    {
        $this->_propDict["configurationPolicyTemplates"] = $val;
        return $this;
    }
    

     /** 
     * Gets the configurationSettings
    * List of all ConfigurationSettings
     *
     * @return DeviceManagementConfigurationSettingDefinition[]|null The configurationSettings
     */
    public function getConfigurationSettings()
    {
        if (array_key_exists('configurationSettings', $this->_propDict) && !is_null($this->_propDict['configurationSettings'])) {
           $configurationSettings = [];
           if (count($this->_propDict['configurationSettings']) > 0 && is_a($this->_propDict['configurationSettings'][0], 'DeviceManagementConfigurationSettingDefinition')) {
              return $this->_propDict['configurationSettings'];
           }
           foreach ($this->_propDict['configurationSettings'] as $singleValue) {
              $configurationSettings []= new DeviceManagementConfigurationSettingDefinition($singleValue);
           }
           $this->_propDict['configurationSettings'] = $configurationSettings;
           return $this->_propDict['configurationSettings'];
        }
        return null;
    }
    
    /** 
    * Sets the configurationSettings
    * List of all ConfigurationSettings
    *
    * @param DeviceManagementConfigurationSettingDefinition[] $val The configurationSettings
    *
    * @return DeviceManagement
    */
    public function setConfigurationSettings($val)
    {
        $this->_propDict["configurationSettings"] = $val;
        return $this;
    }
    

     /** 
     * Gets the reusablePolicySettings
    * List of all reusable settings that can be referred in a policy
     *
     * @return DeviceManagementReusablePolicySetting[]|null The reusablePolicySettings
     */
    public function getReusablePolicySettings()
    {
        if (array_key_exists('reusablePolicySettings', $this->_propDict) && !is_null($this->_propDict['reusablePolicySettings'])) {
           $reusablePolicySettings = [];
           if (count($this->_propDict['reusablePolicySettings']) > 0 && is_a($this->_propDict['reusablePolicySettings'][0], 'DeviceManagementReusablePolicySetting')) {
              return $this->_propDict['reusablePolicySettings'];
           }
           foreach ($this->_propDict['reusablePolicySettings'] as $singleValue) {
              $reusablePolicySettings []= new DeviceManagementReusablePolicySetting($singleValue);
           }
           $this->_propDict['reusablePolicySettings'] = $reusablePolicySettings;
           return $this->_propDict['reusablePolicySettings'];
        }
        return null;
    }
    
    /** 
    * Sets the reusablePolicySettings
    * List of all reusable settings that can be referred in a policy
    *
    * @param DeviceManagementReusablePolicySetting[] $val The reusablePolicySettings
    *
    * @return DeviceManagement
    */
    public function setReusablePolicySettings($val)
    {
        $this->_propDict["reusablePolicySettings"] = $val;
        return $this;
    }
    

     /** 
     * Gets the reusableSettings
    * List of all reusable settings
     *
     * @return DeviceManagementConfigurationSettingDefinition[]|null The reusableSettings
     */
    public function getReusableSettings()
    {
        if (array_key_exists('reusableSettings', $this->_propDict) && !is_null($this->_propDict['reusableSettings'])) {
           $reusableSettings = [];
           if (count($this->_propDict['reusableSettings']) > 0 && is_a($this->_propDict['reusableSettings'][0], 'DeviceManagementConfigurationSettingDefinition')) {
              return $this->_propDict['reusableSettings'];
           }
           foreach ($this->_propDict['reusableSettings'] as $singleValue) {
              $reusableSettings []= new DeviceManagementConfigurationSettingDefinition($singleValue);
           }
           $this->_propDict['reusableSettings'] = $reusableSettings;
           return $this->_propDict['reusableSettings'];
        }
        return null;
    }
    
    /** 
    * Sets the reusableSettings
    * List of all reusable settings
    *
    * @param DeviceManagementConfigurationSettingDefinition[] $val The reusableSettings
    *
    * @return DeviceManagement
    */
    public function setReusableSettings($val)
    {
        $this->_propDict["reusableSettings"] = $val;
        return $this;
    }
    

     /** 
     * Gets the templateSettings
    * List of all TemplateSettings
     *
     * @return DeviceManagementConfigurationSettingTemplate[]|null The templateSettings
     */
    public function getTemplateSettings()
    {
        if (array_key_exists('templateSettings', $this->_propDict) && !is_null($this->_propDict['templateSettings'])) {
           $templateSettings = [];
           if (count($this->_propDict['templateSettings']) > 0 && is_a($this->_propDict['templateSettings'][0], 'DeviceManagementConfigurationSettingTemplate')) {
              return $this->_propDict['templateSettings'];
           }
           foreach ($this->_propDict['templateSettings'] as $singleValue) {
              $templateSettings []= new DeviceManagementConfigurationSettingTemplate($singleValue);
           }
           $this->_propDict['templateSettings'] = $templateSettings;
           return $this->_propDict['templateSettings'];
        }
        return null;
    }
    
    /** 
    * Sets the templateSettings
    * List of all TemplateSettings
    *
    * @param DeviceManagementConfigurationSettingTemplate[] $val The templateSettings
    *
    * @return DeviceManagement
    */
    public function setTemplateSettings($val)
    {
        $this->_propDict["templateSettings"] = $val;
        return $this;
    }
    

     /** 
     * Gets the complianceManagementPartners
    * The list of Compliance Management Partners configured by the tenant.
     *
     * @return ComplianceManagementPartner[]|null The complianceManagementPartners
     */
    public function getComplianceManagementPartners()
    {
        if (array_key_exists('complianceManagementPartners', $this->_propDict) && !is_null($this->_propDict['complianceManagementPartners'])) {
           $complianceManagementPartners = [];
           if (count($this->_propDict['complianceManagementPartners']) > 0 && is_a($this->_propDict['complianceManagementPartners'][0], 'ComplianceManagementPartner')) {
              return $this->_propDict['complianceManagementPartners'];
           }
           foreach ($this->_propDict['complianceManagementPartners'] as $singleValue) {
              $complianceManagementPartners []= new ComplianceManagementPartner($singleValue);
           }
           $this->_propDict['complianceManagementPartners'] = $complianceManagementPartners;
           return $this->_propDict['complianceManagementPartners'];
        }
        return null;
    }
    
    /** 
    * Sets the complianceManagementPartners
    * The list of Compliance Management Partners configured by the tenant.
    *
    * @param ComplianceManagementPartner[] $val The complianceManagementPartners
    *
    * @return DeviceManagement
    */
    public function setComplianceManagementPartners($val)
    {
        $this->_propDict["complianceManagementPartners"] = $val;
        return $this;
    }
    
    /**
    * Gets the conditionalAccessSettings
    * The Exchange on premises conditional access settings. On premises conditional access will require devices to be both enrolled and compliant for mail access
    *
    * @return OnPremisesConditionalAccessSettings|null The conditionalAccessSettings
    */
    public function getConditionalAccessSettings()
    {
        if (array_key_exists("conditionalAccessSettings", $this->_propDict) && !is_null($this->_propDict["conditionalAccessSettings"])) {
            if (is_a($this->_propDict["conditionalAccessSettings"], "\Beta\Microsoft\Graph\Model\OnPremisesConditionalAccessSettings")) {
                return $this->_propDict["conditionalAccessSettings"];
            } else {
                $this->_propDict["conditionalAccessSettings"] = new OnPremisesConditionalAccessSettings($this->_propDict["conditionalAccessSettings"]);
                return $this->_propDict["conditionalAccessSettings"];
            }
        }
        return null;
    }
    
    /**
    * Sets the conditionalAccessSettings
    * The Exchange on premises conditional access settings. On premises conditional access will require devices to be both enrolled and compliant for mail access
    *
    * @param OnPremisesConditionalAccessSettings $val The conditionalAccessSettings
    *
    * @return DeviceManagement
    */
    public function setConditionalAccessSettings($val)
    {
        $this->_propDict["conditionalAccessSettings"] = $val;
        return $this;
    }
    

     /** 
     * Gets the deviceCategories
    * The list of device categories with the tenant.
     *
     * @return DeviceCategory[]|null The deviceCategories
     */
    public function getDeviceCategories()
    {
        if (array_key_exists('deviceCategories', $this->_propDict) && !is_null($this->_propDict['deviceCategories'])) {
           $deviceCategories = [];
           if (count($this->_propDict['deviceCategories']) > 0 && is_a($this->_propDict['deviceCategories'][0], 'DeviceCategory')) {
              return $this->_propDict['deviceCategories'];
           }
           foreach ($this->_propDict['deviceCategories'] as $singleValue) {
              $deviceCategories []= new DeviceCategory($singleValue);
           }
           $this->_propDict['deviceCategories'] = $deviceCategories;
           return $this->_propDict['deviceCategories'];
        }
        return null;
    }
    
    /** 
    * Sets the deviceCategories
    * The list of device categories with the tenant.
    *
    * @param DeviceCategory[] $val The deviceCategories
    *
    * @return DeviceManagement
    */
    public function setDeviceCategories($val)
    {
        $this->_propDict["deviceCategories"] = $val;
        return $this;
    }
    

     /** 
     * Gets the deviceEnrollmentConfigurations
    * The list of device enrollment configurations
     *
     * @return DeviceEnrollmentConfiguration[]|null The deviceEnrollmentConfigurations
     */
    public function getDeviceEnrollmentConfigurations()
    {
        if (array_key_exists('deviceEnrollmentConfigurations', $this->_propDict) && !is_null($this->_propDict['deviceEnrollmentConfigurations'])) {
           $deviceEnrollmentConfigurations = [];
           if (count($this->_propDict['deviceEnrollmentConfigurations']) > 0 && is_a($this->_propDict['deviceEnrollmentConfigurations'][0], 'DeviceEnrollmentConfiguration')) {
              return $this->_propDict['deviceEnrollmentConfigurations'];
           }
           foreach ($this->_propDict['deviceEnrollmentConfigurations'] as $singleValue) {
              $deviceEnrollmentConfigurations []= new DeviceEnrollmentConfiguration($singleValue);
           }
           $this->_propDict['deviceEnrollmentConfigurations'] = $deviceEnrollmentConfigurations;
           return $this->_propDict['deviceEnrollmentConfigurations'];
        }
        return null;
    }
    
    /** 
    * Sets the deviceEnrollmentConfigurations
    * The list of device enrollment configurations
    *
    * @param DeviceEnrollmentConfiguration[] $val The deviceEnrollmentConfigurations
    *
    * @return DeviceManagement
    */
    public function setDeviceEnrollmentConfigurations($val)
    {
        $this->_propDict["deviceEnrollmentConfigurations"] = $val;
        return $this;
    }
    

     /** 
     * Gets the deviceManagementPartners
    * The list of Device Management Partners configured by the tenant.
     *
     * @return DeviceManagementPartner[]|null The deviceManagementPartners
     */
    public function getDeviceManagementPartners()
    {
        if (array_key_exists('deviceManagementPartners', $this->_propDict) && !is_null($this->_propDict['deviceManagementPartners'])) {
           $deviceManagementPartners = [];
           if (count($this->_propDict['deviceManagementPartners']) > 0 && is_a($this->_propDict['deviceManagementPartners'][0], 'DeviceManagementPartner')) {
              return $this->_propDict['deviceManagementPartners'];
           }
           foreach ($this->_propDict['deviceManagementPartners'] as $singleValue) {
              $deviceManagementPartners []= new DeviceManagementPartner($singleValue);
           }
           $this->_propDict['deviceManagementPartners'] = $deviceManagementPartners;
           return $this->_propDict['deviceManagementPartners'];
        }
        return null;
    }
    
    /** 
    * Sets the deviceManagementPartners
    * The list of Device Management Partners configured by the tenant.
    *
    * @param DeviceManagementPartner[] $val The deviceManagementPartners
    *
    * @return DeviceManagement
    */
    public function setDeviceManagementPartners($val)
    {
        $this->_propDict["deviceManagementPartners"] = $val;
        return $this;
    }
    

     /** 
     * Gets the exchangeConnectors
    * The list of Exchange Connectors configured by the tenant.
     *
     * @return DeviceManagementExchangeConnector[]|null The exchangeConnectors
     */
    public function getExchangeConnectors()
    {
        if (array_key_exists('exchangeConnectors', $this->_propDict) && !is_null($this->_propDict['exchangeConnectors'])) {
           $exchangeConnectors = [];
           if (count($this->_propDict['exchangeConnectors']) > 0 && is_a($this->_propDict['exchangeConnectors'][0], 'DeviceManagementExchangeConnector')) {
              return $this->_propDict['exchangeConnectors'];
           }
           foreach ($this->_propDict['exchangeConnectors'] as $singleValue) {
              $exchangeConnectors []= new DeviceManagementExchangeConnector($singleValue);
           }
           $this->_propDict['exchangeConnectors'] = $exchangeConnectors;
           return $this->_propDict['exchangeConnectors'];
        }
        return null;
    }
    
    /** 
    * Sets the exchangeConnectors
    * The list of Exchange Connectors configured by the tenant.
    *
    * @param DeviceManagementExchangeConnector[] $val The exchangeConnectors
    *
    * @return DeviceManagement
    */
    public function setExchangeConnectors($val)
    {
        $this->_propDict["exchangeConnectors"] = $val;
        return $this;
    }
    

     /** 
     * Gets the exchangeOnPremisesPolicies
    * The list of Exchange On Premisis policies configured by the tenant.
     *
     * @return DeviceManagementExchangeOnPremisesPolicy[]|null The exchangeOnPremisesPolicies
     */
    public function getExchangeOnPremisesPolicies()
    {
        if (array_key_exists('exchangeOnPremisesPolicies', $this->_propDict) && !is_null($this->_propDict['exchangeOnPremisesPolicies'])) {
           $exchangeOnPremisesPolicies = [];
           if (count($this->_propDict['exchangeOnPremisesPolicies']) > 0 && is_a($this->_propDict['exchangeOnPremisesPolicies'][0], 'DeviceManagementExchangeOnPremisesPolicy')) {
              return $this->_propDict['exchangeOnPremisesPolicies'];
           }
           foreach ($this->_propDict['exchangeOnPremisesPolicies'] as $singleValue) {
              $exchangeOnPremisesPolicies []= new DeviceManagementExchangeOnPremisesPolicy($singleValue);
           }
           $this->_propDict['exchangeOnPremisesPolicies'] = $exchangeOnPremisesPolicies;
           return $this->_propDict['exchangeOnPremisesPolicies'];
        }
        return null;
    }
    
    /** 
    * Sets the exchangeOnPremisesPolicies
    * The list of Exchange On Premisis policies configured by the tenant.
    *
    * @param DeviceManagementExchangeOnPremisesPolicy[] $val The exchangeOnPremisesPolicies
    *
    * @return DeviceManagement
    */
    public function setExchangeOnPremisesPolicies($val)
    {
        $this->_propDict["exchangeOnPremisesPolicies"] = $val;
        return $this;
    }
    
    /**
    * Gets the exchangeOnPremisesPolicy
    * The policy which controls mobile device access to Exchange On Premises
    *
    * @return DeviceManagementExchangeOnPremisesPolicy|null The exchangeOnPremisesPolicy
    */
    public function getExchangeOnPremisesPolicy()
    {
        if (array_key_exists("exchangeOnPremisesPolicy", $this->_propDict) && !is_null($this->_propDict["exchangeOnPremisesPolicy"])) {
            if (is_a($this->_propDict["exchangeOnPremisesPolicy"], "\Beta\Microsoft\Graph\Model\DeviceManagementExchangeOnPremisesPolicy")) {
                return $this->_propDict["exchangeOnPremisesPolicy"];
            } else {
                $this->_propDict["exchangeOnPremisesPolicy"] = new DeviceManagementExchangeOnPremisesPolicy($this->_propDict["exchangeOnPremisesPolicy"]);
                return $this->_propDict["exchangeOnPremisesPolicy"];
            }
        }
        return null;
    }
    
    /**
    * Sets the exchangeOnPremisesPolicy
    * The policy which controls mobile device access to Exchange On Premises
    *
    * @param DeviceManagementExchangeOnPremisesPolicy $val The exchangeOnPremisesPolicy
    *
    * @return DeviceManagement
    */
    public function setExchangeOnPremisesPolicy($val)
    {
        $this->_propDict["exchangeOnPremisesPolicy"] = $val;
        return $this;
    }
    

     /** 
     * Gets the mobileThreatDefenseConnectors
    * The list of Mobile threat Defense connectors configured by the tenant.
     *
     * @return MobileThreatDefenseConnector[]|null The mobileThreatDefenseConnectors
     */
    public function getMobileThreatDefenseConnectors()
    {
        if (array_key_exists('mobileThreatDefenseConnectors', $this->_propDict) && !is_null($this->_propDict['mobileThreatDefenseConnectors'])) {
           $mobileThreatDefenseConnectors = [];
           if (count($this->_propDict['mobileThreatDefenseConnectors']) > 0 && is_a($this->_propDict['mobileThreatDefenseConnectors'][0], 'MobileThreatDefenseConnector')) {
              return $this->_propDict['mobileThreatDefenseConnectors'];
           }
           foreach ($this->_propDict['mobileThreatDefenseConnectors'] as $singleValue) {
              $mobileThreatDefenseConnectors []= new MobileThreatDefenseConnector($singleValue);
           }
           $this->_propDict['mobileThreatDefenseConnectors'] = $mobileThreatDefenseConnectors;
           return $this->_propDict['mobileThreatDefenseConnectors'];
        }
        return null;
    }
    
    /** 
    * Sets the mobileThreatDefenseConnectors
    * The list of Mobile threat Defense connectors configured by the tenant.
    *
    * @param MobileThreatDefenseConnector[] $val The mobileThreatDefenseConnectors
    *
    * @return DeviceManagement
    */
    public function setMobileThreatDefenseConnectors($val)
    {
        $this->_propDict["mobileThreatDefenseConnectors"] = $val;
        return $this;
    }
    

     /** 
     * Gets the categories
    * The available categories
     *
     * @return DeviceManagementSettingCategory[]|null The categories
     */
    public function getCategories()
    {
        if (array_key_exists('categories', $this->_propDict) && !is_null($this->_propDict['categories'])) {
           $categories = [];
           if (count($this->_propDict['categories']) > 0 && is_a($this->_propDict['categories'][0], 'DeviceManagementSettingCategory')) {
              return $this->_propDict['categories'];
           }
           foreach ($this->_propDict['categories'] as $singleValue) {
              $categories []= new DeviceManagementSettingCategory($singleValue);
           }
           $this->_propDict['categories'] = $categories;
           return $this->_propDict['categories'];
        }
        return null;
    }
    
    /** 
    * Sets the categories
    * The available categories
    *
    * @param DeviceManagementSettingCategory[] $val The categories
    *
    * @return DeviceManagement
    */
    public function setCategories($val)
    {
        $this->_propDict["categories"] = $val;
        return $this;
    }
    

     /** 
     * Gets the intents
    * The device management intents
     *
     * @return DeviceManagementIntent[]|null The intents
     */
    public function getIntents()
    {
        if (array_key_exists('intents', $this->_propDict) && !is_null($this->_propDict['intents'])) {
           $intents = [];
           if (count($this->_propDict['intents']) > 0 && is_a($this->_propDict['intents'][0], 'DeviceManagementIntent')) {
              return $this->_propDict['intents'];
           }
           foreach ($this->_propDict['intents'] as $singleValue) {
              $intents []= new DeviceManagementIntent($singleValue);
           }
           $this->_propDict['intents'] = $intents;
           return $this->_propDict['intents'];
        }
        return null;
    }
    
    /** 
    * Sets the intents
    * The device management intents
    *
    * @param DeviceManagementIntent[] $val The intents
    *
    * @return DeviceManagement
    */
    public function setIntents($val)
    {
        $this->_propDict["intents"] = $val;
        return $this;
    }
    

     /** 
     * Gets the settingDefinitions
    * The device management intent setting definitions
     *
     * @return DeviceManagementSettingDefinition[]|null The settingDefinitions
     */
    public function getSettingDefinitions()
    {
        if (array_key_exists('settingDefinitions', $this->_propDict) && !is_null($this->_propDict['settingDefinitions'])) {
           $settingDefinitions = [];
           if (count($this->_propDict['settingDefinitions']) > 0 && is_a($this->_propDict['settingDefinitions'][0], 'DeviceManagementSettingDefinition')) {
              return $this->_propDict['settingDefinitions'];
           }
           foreach ($this->_propDict['settingDefinitions'] as $singleValue) {
              $settingDefinitions []= new DeviceManagementSettingDefinition($singleValue);
           }
           $this->_propDict['settingDefinitions'] = $settingDefinitions;
           return $this->_propDict['settingDefinitions'];
        }
        return null;
    }
    
    /** 
    * Sets the settingDefinitions
    * The device management intent setting definitions
    *
    * @param DeviceManagementSettingDefinition[] $val The settingDefinitions
    *
    * @return DeviceManagement
    */
    public function setSettingDefinitions($val)
    {
        $this->_propDict["settingDefinitions"] = $val;
        return $this;
    }
    

     /** 
     * Gets the templates
    * The available templates
     *
     * @return DeviceManagementTemplate[]|null The templates
     */
    public function getTemplates()
    {
        if (array_key_exists('templates', $this->_propDict) && !is_null($this->_propDict['templates'])) {
           $templates = [];
           if (count($this->_propDict['templates']) > 0 && is_a($this->_propDict['templates'][0], 'DeviceManagementTemplate')) {
              return $this->_propDict['templates'];
           }
           foreach ($this->_propDict['templates'] as $singleValue) {
              $templates []= new DeviceManagementTemplate($singleValue);
           }
           $this->_propDict['templates'] = $templates;
           return $this->_propDict['templates'];
        }
        return null;
    }
    
    /** 
    * Sets the templates
    * The available templates
    *
    * @param DeviceManagementTemplate[] $val The templates
    *
    * @return DeviceManagement
    */
    public function setTemplates($val)
    {
        $this->_propDict["templates"] = $val;
        return $this;
    }
    
    /**
    * Gets the applePushNotificationCertificate
    * Apple push notification certificate.
    *
    * @return ApplePushNotificationCertificate|null The applePushNotificationCertificate
    */
    public function getApplePushNotificationCertificate()
    {
        if (array_key_exists("applePushNotificationCertificate", $this->_propDict) && !is_null($this->_propDict["applePushNotificationCertificate"])) {
            if (is_a($this->_propDict["applePushNotificationCertificate"], "\Beta\Microsoft\Graph\Model\ApplePushNotificationCertificate")) {
                return $this->_propDict["applePushNotificationCertificate"];
            } else {
                $this->_propDict["applePushNotificationCertificate"] = new ApplePushNotificationCertificate($this->_propDict["applePushNotificationCertificate"]);
                return $this->_propDict["applePushNotificationCertificate"];
            }
        }
        return null;
    }
    
    /**
    * Sets the applePushNotificationCertificate
    * Apple push notification certificate.
    *
    * @param ApplePushNotificationCertificate $val The applePushNotificationCertificate
    *
    * @return DeviceManagement
    */
    public function setApplePushNotificationCertificate($val)
    {
        $this->_propDict["applePushNotificationCertificate"] = $val;
        return $this;
    }
    

     /** 
     * Gets the cloudPCConnectivityIssues
    * The list of CloudPC Connectivity Issue.
     *
     * @return CloudPCConnectivityIssue[]|null The cloudPCConnectivityIssues
     */
    public function getCloudPCConnectivityIssues()
    {
        if (array_key_exists('cloudPCConnectivityIssues', $this->_propDict) && !is_null($this->_propDict['cloudPCConnectivityIssues'])) {
           $cloudPCConnectivityIssues = [];
           if (count($this->_propDict['cloudPCConnectivityIssues']) > 0 && is_a($this->_propDict['cloudPCConnectivityIssues'][0], 'CloudPCConnectivityIssue')) {
              return $this->_propDict['cloudPCConnectivityIssues'];
           }
           foreach ($this->_propDict['cloudPCConnectivityIssues'] as $singleValue) {
              $cloudPCConnectivityIssues []= new CloudPCConnectivityIssue($singleValue);
           }
           $this->_propDict['cloudPCConnectivityIssues'] = $cloudPCConnectivityIssues;
           return $this->_propDict['cloudPCConnectivityIssues'];
        }
        return null;
    }
    
    /** 
    * Sets the cloudPCConnectivityIssues
    * The list of CloudPC Connectivity Issue.
    *
    * @param CloudPCConnectivityIssue[] $val The cloudPCConnectivityIssues
    *
    * @return DeviceManagement
    */
    public function setCloudPCConnectivityIssues($val)
    {
        $this->_propDict["cloudPCConnectivityIssues"] = $val;
        return $this;
    }
    

     /** 
     * Gets the comanagedDevices
    * The list of co-managed devices report
     *
     * @return ManagedDevice[]|null The comanagedDevices
     */
    public function getComanagedDevices()
    {
        if (array_key_exists('comanagedDevices', $this->_propDict) && !is_null($this->_propDict['comanagedDevices'])) {
           $comanagedDevices = [];
           if (count($this->_propDict['comanagedDevices']) > 0 && is_a($this->_propDict['comanagedDevices'][0], 'ManagedDevice')) {
              return $this->_propDict['comanagedDevices'];
           }
           foreach ($this->_propDict['comanagedDevices'] as $singleValue) {
              $comanagedDevices []= new ManagedDevice($singleValue);
           }
           $this->_propDict['comanagedDevices'] = $comanagedDevices;
           return $this->_propDict['comanagedDevices'];
        }
        return null;
    }
    
    /** 
    * Sets the comanagedDevices
    * The list of co-managed devices report
    *
    * @param ManagedDevice[] $val The comanagedDevices
    *
    * @return DeviceManagement
    */
    public function setComanagedDevices($val)
    {
        $this->_propDict["comanagedDevices"] = $val;
        return $this;
    }
    

     /** 
     * Gets the comanagementEligibleDevices
    * The list of co-management eligible devices report
     *
     * @return ComanagementEligibleDevice[]|null The comanagementEligibleDevices
     */
    public function getComanagementEligibleDevices()
    {
        if (array_key_exists('comanagementEligibleDevices', $this->_propDict) && !is_null($this->_propDict['comanagementEligibleDevices'])) {
           $comanagementEligibleDevices = [];
           if (count($this->_propDict['comanagementEligibleDevices']) > 0 && is_a($this->_propDict['comanagementEligibleDevices'][0], 'ComanagementEligibleDevice')) {
              return $this->_propDict['comanagementEligibleDevices'];
           }
           foreach ($this->_propDict['comanagementEligibleDevices'] as $singleValue) {
              $comanagementEligibleDevices []= new ComanagementEligibleDevice($singleValue);
           }
           $this->_propDict['comanagementEligibleDevices'] = $comanagementEligibleDevices;
           return $this->_propDict['comanagementEligibleDevices'];
        }
        return null;
    }
    
    /** 
    * Sets the comanagementEligibleDevices
    * The list of co-management eligible devices report
    *
    * @param ComanagementEligibleDevice[] $val The comanagementEligibleDevices
    *
    * @return DeviceManagement
    */
    public function setComanagementEligibleDevices($val)
    {
        $this->_propDict["comanagementEligibleDevices"] = $val;
        return $this;
    }
    

     /** 
     * Gets the dataSharingConsents
    * Data sharing consents.
     *
     * @return DataSharingConsent[]|null The dataSharingConsents
     */
    public function getDataSharingConsents()
    {
        if (array_key_exists('dataSharingConsents', $this->_propDict) && !is_null($this->_propDict['dataSharingConsents'])) {
           $dataSharingConsents = [];
           if (count($this->_propDict['dataSharingConsents']) > 0 && is_a($this->_propDict['dataSharingConsents'][0], 'DataSharingConsent')) {
              return $this->_propDict['dataSharingConsents'];
           }
           foreach ($this->_propDict['dataSharingConsents'] as $singleValue) {
              $dataSharingConsents []= new DataSharingConsent($singleValue);
           }
           $this->_propDict['dataSharingConsents'] = $dataSharingConsents;
           return $this->_propDict['dataSharingConsents'];
        }
        return null;
    }
    
    /** 
    * Sets the dataSharingConsents
    * Data sharing consents.
    *
    * @param DataSharingConsent[] $val The dataSharingConsents
    *
    * @return DeviceManagement
    */
    public function setDataSharingConsents($val)
    {
        $this->_propDict["dataSharingConsents"] = $val;
        return $this;
    }
    

     /** 
     * Gets the detectedApps
    * The list of detected apps associated with a device.
     *
     * @return DetectedApp[]|null The detectedApps
     */
    public function getDetectedApps()
    {
        if (array_key_exists('detectedApps', $this->_propDict) && !is_null($this->_propDict['detectedApps'])) {
           $detectedApps = [];
           if (count($this->_propDict['detectedApps']) > 0 && is_a($this->_propDict['detectedApps'][0], 'DetectedApp')) {
              return $this->_propDict['detectedApps'];
           }
           foreach ($this->_propDict['detectedApps'] as $singleValue) {
              $detectedApps []= new DetectedApp($singleValue);
           }
           $this->_propDict['detectedApps'] = $detectedApps;
           return $this->_propDict['detectedApps'];
        }
        return null;
    }
    
    /** 
    * Sets the detectedApps
    * The list of detected apps associated with a device.
    *
    * @param DetectedApp[] $val The detectedApps
    *
    * @return DeviceManagement
    */
    public function setDetectedApps($val)
    {
        $this->_propDict["detectedApps"] = $val;
        return $this;
    }
    

     /** 
     * Gets the deviceComplianceScripts
    * The list of device compliance scripts associated with the tenant.
     *
     * @return DeviceComplianceScript[]|null The deviceComplianceScripts
     */
    public function getDeviceComplianceScripts()
    {
        if (array_key_exists('deviceComplianceScripts', $this->_propDict) && !is_null($this->_propDict['deviceComplianceScripts'])) {
           $deviceComplianceScripts = [];
           if (count($this->_propDict['deviceComplianceScripts']) > 0 && is_a($this->_propDict['deviceComplianceScripts'][0], 'DeviceComplianceScript')) {
              return $this->_propDict['deviceComplianceScripts'];
           }
           foreach ($this->_propDict['deviceComplianceScripts'] as $singleValue) {
              $deviceComplianceScripts []= new DeviceComplianceScript($singleValue);
           }
           $this->_propDict['deviceComplianceScripts'] = $deviceComplianceScripts;
           return $this->_propDict['deviceComplianceScripts'];
        }
        return null;
    }
    
    /** 
    * Sets the deviceComplianceScripts
    * The list of device compliance scripts associated with the tenant.
    *
    * @param DeviceComplianceScript[] $val The deviceComplianceScripts
    *
    * @return DeviceManagement
    */
    public function setDeviceComplianceScripts($val)
    {
        $this->_propDict["deviceComplianceScripts"] = $val;
        return $this;
    }
    

     /** 
     * Gets the deviceCustomAttributeShellScripts
    * The list of device custom attribute shell scripts associated with the tenant.
     *
     * @return DeviceCustomAttributeShellScript[]|null The deviceCustomAttributeShellScripts
     */
    public function getDeviceCustomAttributeShellScripts()
    {
        if (array_key_exists('deviceCustomAttributeShellScripts', $this->_propDict) && !is_null($this->_propDict['deviceCustomAttributeShellScripts'])) {
           $deviceCustomAttributeShellScripts = [];
           if (count($this->_propDict['deviceCustomAttributeShellScripts']) > 0 && is_a($this->_propDict['deviceCustomAttributeShellScripts'][0], 'DeviceCustomAttributeShellScript')) {
              return $this->_propDict['deviceCustomAttributeShellScripts'];
           }
           foreach ($this->_propDict['deviceCustomAttributeShellScripts'] as $singleValue) {
              $deviceCustomAttributeShellScripts []= new DeviceCustomAttributeShellScript($singleValue);
           }
           $this->_propDict['deviceCustomAttributeShellScripts'] = $deviceCustomAttributeShellScripts;
           return $this->_propDict['deviceCustomAttributeShellScripts'];
        }
        return null;
    }
    
    /** 
    * Sets the deviceCustomAttributeShellScripts
    * The list of device custom attribute shell scripts associated with the tenant.
    *
    * @param DeviceCustomAttributeShellScript[] $val The deviceCustomAttributeShellScripts
    *
    * @return DeviceManagement
    */
    public function setDeviceCustomAttributeShellScripts($val)
    {
        $this->_propDict["deviceCustomAttributeShellScripts"] = $val;
        return $this;
    }
    

     /** 
     * Gets the deviceHealthScripts
    * The list of device health scripts associated with the tenant.
     *
     * @return DeviceHealthScript[]|null The deviceHealthScripts
     */
    public function getDeviceHealthScripts()
    {
        if (array_key_exists('deviceHealthScripts', $this->_propDict) && !is_null($this->_propDict['deviceHealthScripts'])) {
           $deviceHealthScripts = [];
           if (count($this->_propDict['deviceHealthScripts']) > 0 && is_a($this->_propDict['deviceHealthScripts'][0], 'DeviceHealthScript')) {
              return $this->_propDict['deviceHealthScripts'];
           }
           foreach ($this->_propDict['deviceHealthScripts'] as $singleValue) {
              $deviceHealthScripts []= new DeviceHealthScript($singleValue);
           }
           $this->_propDict['deviceHealthScripts'] = $deviceHealthScripts;
           return $this->_propDict['deviceHealthScripts'];
        }
        return null;
    }
    
    /** 
    * Sets the deviceHealthScripts
    * The list of device health scripts associated with the tenant.
    *
    * @param DeviceHealthScript[] $val The deviceHealthScripts
    *
    * @return DeviceManagement
    */
    public function setDeviceHealthScripts($val)
    {
        $this->_propDict["deviceHealthScripts"] = $val;
        return $this;
    }
    

     /** 
     * Gets the deviceManagementScripts
    * The list of device management scripts associated with the tenant.
     *
     * @return DeviceManagementScript[]|null The deviceManagementScripts
     */
    public function getDeviceManagementScripts()
    {
        if (array_key_exists('deviceManagementScripts', $this->_propDict) && !is_null($this->_propDict['deviceManagementScripts'])) {
           $deviceManagementScripts = [];
           if (count($this->_propDict['deviceManagementScripts']) > 0 && is_a($this->_propDict['deviceManagementScripts'][0], 'DeviceManagementScript')) {
              return $this->_propDict['deviceManagementScripts'];
           }
           foreach ($this->_propDict['deviceManagementScripts'] as $singleValue) {
              $deviceManagementScripts []= new DeviceManagementScript($singleValue);
           }
           $this->_propDict['deviceManagementScripts'] = $deviceManagementScripts;
           return $this->_propDict['deviceManagementScripts'];
        }
        return null;
    }
    
    /** 
    * Sets the deviceManagementScripts
    * The list of device management scripts associated with the tenant.
    *
    * @param DeviceManagementScript[] $val The deviceManagementScripts
    *
    * @return DeviceManagement
    */
    public function setDeviceManagementScripts($val)
    {
        $this->_propDict["deviceManagementScripts"] = $val;
        return $this;
    }
    

     /** 
     * Gets the deviceShellScripts
    * The list of device shell scripts associated with the tenant.
     *
     * @return DeviceShellScript[]|null The deviceShellScripts
     */
    public function getDeviceShellScripts()
    {
        if (array_key_exists('deviceShellScripts', $this->_propDict) && !is_null($this->_propDict['deviceShellScripts'])) {
           $deviceShellScripts = [];
           if (count($this->_propDict['deviceShellScripts']) > 0 && is_a($this->_propDict['deviceShellScripts'][0], 'DeviceShellScript')) {
              return $this->_propDict['deviceShellScripts'];
           }
           foreach ($this->_propDict['deviceShellScripts'] as $singleValue) {
              $deviceShellScripts []= new DeviceShellScript($singleValue);
           }
           $this->_propDict['deviceShellScripts'] = $deviceShellScripts;
           return $this->_propDict['deviceShellScripts'];
        }
        return null;
    }
    
    /** 
    * Sets the deviceShellScripts
    * The list of device shell scripts associated with the tenant.
    *
    * @param DeviceShellScript[] $val The deviceShellScripts
    *
    * @return DeviceManagement
    */
    public function setDeviceShellScripts($val)
    {
        $this->_propDict["deviceShellScripts"] = $val;
        return $this;
    }
    
    /**
    * Gets the managedDeviceOverview
    * Device overview
    *
    * @return ManagedDeviceOverview|null The managedDeviceOverview
    */
    public function getManagedDeviceOverview()
    {
        if (array_key_exists("managedDeviceOverview", $this->_propDict) && !is_null($this->_propDict["managedDeviceOverview"])) {
            if (is_a($this->_propDict["managedDeviceOverview"], "\Beta\Microsoft\Graph\Model\ManagedDeviceOverview")) {
                return $this->_propDict["managedDeviceOverview"];
            } else {
                $this->_propDict["managedDeviceOverview"] = new ManagedDeviceOverview($this->_propDict["managedDeviceOverview"]);
                return $this->_propDict["managedDeviceOverview"];
            }
        }
        return null;
    }
    
    /**
    * Sets the managedDeviceOverview
    * Device overview
    *
    * @param ManagedDeviceOverview $val The managedDeviceOverview
    *
    * @return DeviceManagement
    */
    public function setManagedDeviceOverview($val)
    {
        $this->_propDict["managedDeviceOverview"] = $val;
        return $this;
    }
    

     /** 
     * Gets the managedDevices
    * The list of managed devices.
     *
     * @return ManagedDevice[]|null The managedDevices
     */
    public function getManagedDevices()
    {
        if (array_key_exists('managedDevices', $this->_propDict) && !is_null($this->_propDict['managedDevices'])) {
           $managedDevices = [];
           if (count($this->_propDict['managedDevices']) > 0 && is_a($this->_propDict['managedDevices'][0], 'ManagedDevice')) {
              return $this->_propDict['managedDevices'];
           }
           foreach ($this->_propDict['managedDevices'] as $singleValue) {
              $managedDevices []= new ManagedDevice($singleValue);
           }
           $this->_propDict['managedDevices'] = $managedDevices;
           return $this->_propDict['managedDevices'];
        }
        return null;
    }
    
    /** 
    * Sets the managedDevices
    * The list of managed devices.
    *
    * @param ManagedDevice[] $val The managedDevices
    *
    * @return DeviceManagement
    */
    public function setManagedDevices($val)
    {
        $this->_propDict["managedDevices"] = $val;
        return $this;
    }
    

     /** 
     * Gets the mobileAppTroubleshootingEvents
    * The collection property of MobileAppTroubleshootingEvent.
     *
     * @return MobileAppTroubleshootingEvent[]|null The mobileAppTroubleshootingEvents
     */
    public function getMobileAppTroubleshootingEvents()
    {
        if (array_key_exists('mobileAppTroubleshootingEvents', $this->_propDict) && !is_null($this->_propDict['mobileAppTroubleshootingEvents'])) {
           $mobileAppTroubleshootingEvents = [];
           if (count($this->_propDict['mobileAppTroubleshootingEvents']) > 0 && is_a($this->_propDict['mobileAppTroubleshootingEvents'][0], 'MobileAppTroubleshootingEvent')) {
              return $this->_propDict['mobileAppTroubleshootingEvents'];
           }
           foreach ($this->_propDict['mobileAppTroubleshootingEvents'] as $singleValue) {
              $mobileAppTroubleshootingEvents []= new MobileAppTroubleshootingEvent($singleValue);
           }
           $this->_propDict['mobileAppTroubleshootingEvents'] = $mobileAppTroubleshootingEvents;
           return $this->_propDict['mobileAppTroubleshootingEvents'];
        }
        return null;
    }
    
    /** 
    * Sets the mobileAppTroubleshootingEvents
    * The collection property of MobileAppTroubleshootingEvent.
    *
    * @param MobileAppTroubleshootingEvent[] $val The mobileAppTroubleshootingEvents
    *
    * @return DeviceManagement
    */
    public function setMobileAppTroubleshootingEvents($val)
    {
        $this->_propDict["mobileAppTroubleshootingEvents"] = $val;
        return $this;
    }
    

     /** 
     * Gets the remoteActionAudits
    * The list of device remote action audits with the tenant.
     *
     * @return RemoteActionAudit[]|null The remoteActionAudits
     */
    public function getRemoteActionAudits()
    {
        if (array_key_exists('remoteActionAudits', $this->_propDict) && !is_null($this->_propDict['remoteActionAudits'])) {
           $remoteActionAudits = [];
           if (count($this->_propDict['remoteActionAudits']) > 0 && is_a($this->_propDict['remoteActionAudits'][0], 'RemoteActionAudit')) {
              return $this->_propDict['remoteActionAudits'];
           }
           foreach ($this->_propDict['remoteActionAudits'] as $singleValue) {
              $remoteActionAudits []= new RemoteActionAudit($singleValue);
           }
           $this->_propDict['remoteActionAudits'] = $remoteActionAudits;
           return $this->_propDict['remoteActionAudits'];
        }
        return null;
    }
    
    /** 
    * Sets the remoteActionAudits
    * The list of device remote action audits with the tenant.
    *
    * @param RemoteActionAudit[] $val The remoteActionAudits
    *
    * @return DeviceManagement
    */
    public function setRemoteActionAudits($val)
    {
        $this->_propDict["remoteActionAudits"] = $val;
        return $this;
    }
    

     /** 
     * Gets the userExperienceAnalyticsAppHealthApplicationPerformance
    * User experience analytics appHealth Application Performance
     *
     * @return UserExperienceAnalyticsAppHealthApplicationPerformance[]|null The userExperienceAnalyticsAppHealthApplicationPerformance
     */
    public function getUserExperienceAnalyticsAppHealthApplicationPerformance()
    {
        if (array_key_exists('userExperienceAnalyticsAppHealthApplicationPerformance', $this->_propDict) && !is_null($this->_propDict['userExperienceAnalyticsAppHealthApplicationPerformance'])) {
           $userExperienceAnalyticsAppHealthApplicationPerformance = [];
           if (count($this->_propDict['userExperienceAnalyticsAppHealthApplicationPerformance']) > 0 && is_a($this->_propDict['userExperienceAnalyticsAppHealthApplicationPerformance'][0], 'UserExperienceAnalyticsAppHealthApplicationPerformance')) {
              return $this->_propDict['userExperienceAnalyticsAppHealthApplicationPerformance'];
           }
           foreach ($this->_propDict['userExperienceAnalyticsAppHealthApplicationPerformance'] as $singleValue) {
              $userExperienceAnalyticsAppHealthApplicationPerformance []= new UserExperienceAnalyticsAppHealthApplicationPerformance($singleValue);
           }
           $this->_propDict['userExperienceAnalyticsAppHealthApplicationPerformance'] = $userExperienceAnalyticsAppHealthApplicationPerformance;
           return $this->_propDict['userExperienceAnalyticsAppHealthApplicationPerformance'];
        }
        return null;
    }
    
    /** 
    * Sets the userExperienceAnalyticsAppHealthApplicationPerformance
    * User experience analytics appHealth Application Performance
    *
    * @param UserExperienceAnalyticsAppHealthApplicationPerformance[] $val The userExperienceAnalyticsAppHealthApplicationPerformance
    *
    * @return DeviceManagement
    */
    public function setUserExperienceAnalyticsAppHealthApplicationPerformance($val)
    {
        $this->_propDict["userExperienceAnalyticsAppHealthApplicationPerformance"] = $val;
        return $this;
    }
    

     /** 
     * Gets the userExperienceAnalyticsAppHealthApplicationPerformanceByAppVersion
    * User experience analytics appHealth Application Performance by App Version
     *
     * @return UserExperienceAnalyticsAppHealthAppPerformanceByAppVersion[]|null The userExperienceAnalyticsAppHealthApplicationPerformanceByAppVersion
     */
    public function getUserExperienceAnalyticsAppHealthApplicationPerformanceByAppVersion()
    {
        if (array_key_exists('userExperienceAnalyticsAppHealthApplicationPerformanceByAppVersion', $this->_propDict) && !is_null($this->_propDict['userExperienceAnalyticsAppHealthApplicationPerformanceByAppVersion'])) {
           $userExperienceAnalyticsAppHealthApplicationPerformanceByAppVersion = [];
           if (count($this->_propDict['userExperienceAnalyticsAppHealthApplicationPerformanceByAppVersion']) > 0 && is_a($this->_propDict['userExperienceAnalyticsAppHealthApplicationPerformanceByAppVersion'][0], 'UserExperienceAnalyticsAppHealthAppPerformanceByAppVersion')) {
              return $this->_propDict['userExperienceAnalyticsAppHealthApplicationPerformanceByAppVersion'];
           }
           foreach ($this->_propDict['userExperienceAnalyticsAppHealthApplicationPerformanceByAppVersion'] as $singleValue) {
              $userExperienceAnalyticsAppHealthApplicationPerformanceByAppVersion []= new UserExperienceAnalyticsAppHealthAppPerformanceByAppVersion($singleValue);
           }
           $this->_propDict['userExperienceAnalyticsAppHealthApplicationPerformanceByAppVersion'] = $userExperienceAnalyticsAppHealthApplicationPerformanceByAppVersion;
           return $this->_propDict['userExperienceAnalyticsAppHealthApplicationPerformanceByAppVersion'];
        }
        return null;
    }
    
    /** 
    * Sets the userExperienceAnalyticsAppHealthApplicationPerformanceByAppVersion
    * User experience analytics appHealth Application Performance by App Version
    *
    * @param UserExperienceAnalyticsAppHealthAppPerformanceByAppVersion[] $val The userExperienceAnalyticsAppHealthApplicationPerformanceByAppVersion
    *
    * @return DeviceManagement
    */
    public function setUserExperienceAnalyticsAppHealthApplicationPerformanceByAppVersion($val)
    {
        $this->_propDict["userExperienceAnalyticsAppHealthApplicationPerformanceByAppVersion"] = $val;
        return $this;
    }
    

     /** 
     * Gets the userExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDetails
    * User experience analytics appHealth Application Performance by App Version details
     *
     * @return UserExperienceAnalyticsAppHealthAppPerformanceByAppVersionDetails[]|null The userExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDetails
     */
    public function getUserExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDetails()
    {
        if (array_key_exists('userExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDetails', $this->_propDict) && !is_null($this->_propDict['userExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDetails'])) {
           $userExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDetails = [];
           if (count($this->_propDict['userExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDetails']) > 0 && is_a($this->_propDict['userExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDetails'][0], 'UserExperienceAnalyticsAppHealthAppPerformanceByAppVersionDetails')) {
              return $this->_propDict['userExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDetails'];
           }
           foreach ($this->_propDict['userExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDetails'] as $singleValue) {
              $userExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDetails []= new UserExperienceAnalyticsAppHealthAppPerformanceByAppVersionDetails($singleValue);
           }
           $this->_propDict['userExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDetails'] = $userExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDetails;
           return $this->_propDict['userExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDetails'];
        }
        return null;
    }
    
    /** 
    * Sets the userExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDetails
    * User experience analytics appHealth Application Performance by App Version details
    *
    * @param UserExperienceAnalyticsAppHealthAppPerformanceByAppVersionDetails[] $val The userExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDetails
    *
    * @return DeviceManagement
    */
    public function setUserExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDetails($val)
    {
        $this->_propDict["userExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDetails"] = $val;
        return $this;
    }
    

     /** 
     * Gets the userExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDeviceId
    * User experience analytics appHealth Application Performance by App Version Device Id
     *
     * @return UserExperienceAnalyticsAppHealthAppPerformanceByAppVersionDeviceId[]|null The userExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDeviceId
     */
    public function getUserExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDeviceId()
    {
        if (array_key_exists('userExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDeviceId', $this->_propDict) && !is_null($this->_propDict['userExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDeviceId'])) {
           $userExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDeviceId = [];
           if (count($this->_propDict['userExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDeviceId']) > 0 && is_a($this->_propDict['userExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDeviceId'][0], 'UserExperienceAnalyticsAppHealthAppPerformanceByAppVersionDeviceId')) {
              return $this->_propDict['userExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDeviceId'];
           }
           foreach ($this->_propDict['userExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDeviceId'] as $singleValue) {
              $userExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDeviceId []= new UserExperienceAnalyticsAppHealthAppPerformanceByAppVersionDeviceId($singleValue);
           }
           $this->_propDict['userExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDeviceId'] = $userExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDeviceId;
           return $this->_propDict['userExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDeviceId'];
        }
        return null;
    }
    
    /** 
    * Sets the userExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDeviceId
    * User experience analytics appHealth Application Performance by App Version Device Id
    *
    * @param UserExperienceAnalyticsAppHealthAppPerformanceByAppVersionDeviceId[] $val The userExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDeviceId
    *
    * @return DeviceManagement
    */
    public function setUserExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDeviceId($val)
    {
        $this->_propDict["userExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDeviceId"] = $val;
        return $this;
    }
    

     /** 
     * Gets the userExperienceAnalyticsAppHealthApplicationPerformanceByOSVersion
    * User experience analytics appHealth Application Performance by OS Version
     *
     * @return UserExperienceAnalyticsAppHealthAppPerformanceByOSVersion[]|null The userExperienceAnalyticsAppHealthApplicationPerformanceByOSVersion
     */
    public function getUserExperienceAnalyticsAppHealthApplicationPerformanceByOSVersion()
    {
        if (array_key_exists('userExperienceAnalyticsAppHealthApplicationPerformanceByOSVersion', $this->_propDict) && !is_null($this->_propDict['userExperienceAnalyticsAppHealthApplicationPerformanceByOSVersion'])) {
           $userExperienceAnalyticsAppHealthApplicationPerformanceByOSVersion = [];
           if (count($this->_propDict['userExperienceAnalyticsAppHealthApplicationPerformanceByOSVersion']) > 0 && is_a($this->_propDict['userExperienceAnalyticsAppHealthApplicationPerformanceByOSVersion'][0], 'UserExperienceAnalyticsAppHealthAppPerformanceByOSVersion')) {
              return $this->_propDict['userExperienceAnalyticsAppHealthApplicationPerformanceByOSVersion'];
           }
           foreach ($this->_propDict['userExperienceAnalyticsAppHealthApplicationPerformanceByOSVersion'] as $singleValue) {
              $userExperienceAnalyticsAppHealthApplicationPerformanceByOSVersion []= new UserExperienceAnalyticsAppHealthAppPerformanceByOSVersion($singleValue);
           }
           $this->_propDict['userExperienceAnalyticsAppHealthApplicationPerformanceByOSVersion'] = $userExperienceAnalyticsAppHealthApplicationPerformanceByOSVersion;
           return $this->_propDict['userExperienceAnalyticsAppHealthApplicationPerformanceByOSVersion'];
        }
        return null;
    }
    
    /** 
    * Sets the userExperienceAnalyticsAppHealthApplicationPerformanceByOSVersion
    * User experience analytics appHealth Application Performance by OS Version
    *
    * @param UserExperienceAnalyticsAppHealthAppPerformanceByOSVersion[] $val The userExperienceAnalyticsAppHealthApplicationPerformanceByOSVersion
    *
    * @return DeviceManagement
    */
    public function setUserExperienceAnalyticsAppHealthApplicationPerformanceByOSVersion($val)
    {
        $this->_propDict["userExperienceAnalyticsAppHealthApplicationPerformanceByOSVersion"] = $val;
        return $this;
    }
    

     /** 
     * Gets the userExperienceAnalyticsAppHealthDeviceModelPerformance
    * User experience analytics appHealth Model Performance
     *
     * @return UserExperienceAnalyticsAppHealthDeviceModelPerformance[]|null The userExperienceAnalyticsAppHealthDeviceModelPerformance
     */
    public function getUserExperienceAnalyticsAppHealthDeviceModelPerformance()
    {
        if (array_key_exists('userExperienceAnalyticsAppHealthDeviceModelPerformance', $this->_propDict) && !is_null($this->_propDict['userExperienceAnalyticsAppHealthDeviceModelPerformance'])) {
           $userExperienceAnalyticsAppHealthDeviceModelPerformance = [];
           if (count($this->_propDict['userExperienceAnalyticsAppHealthDeviceModelPerformance']) > 0 && is_a($this->_propDict['userExperienceAnalyticsAppHealthDeviceModelPerformance'][0], 'UserExperienceAnalyticsAppHealthDeviceModelPerformance')) {
              return $this->_propDict['userExperienceAnalyticsAppHealthDeviceModelPerformance'];
           }
           foreach ($this->_propDict['userExperienceAnalyticsAppHealthDeviceModelPerformance'] as $singleValue) {
              $userExperienceAnalyticsAppHealthDeviceModelPerformance []= new UserExperienceAnalyticsAppHealthDeviceModelPerformance($singleValue);
           }
           $this->_propDict['userExperienceAnalyticsAppHealthDeviceModelPerformance'] = $userExperienceAnalyticsAppHealthDeviceModelPerformance;
           return $this->_propDict['userExperienceAnalyticsAppHealthDeviceModelPerformance'];
        }
        return null;
    }
    
    /** 
    * Sets the userExperienceAnalyticsAppHealthDeviceModelPerformance
    * User experience analytics appHealth Model Performance
    *
    * @param UserExperienceAnalyticsAppHealthDeviceModelPerformance[] $val The userExperienceAnalyticsAppHealthDeviceModelPerformance
    *
    * @return DeviceManagement
    */
    public function setUserExperienceAnalyticsAppHealthDeviceModelPerformance($val)
    {
        $this->_propDict["userExperienceAnalyticsAppHealthDeviceModelPerformance"] = $val;
        return $this;
    }
    

     /** 
     * Gets the userExperienceAnalyticsAppHealthDevicePerformance
    * User experience analytics appHealth Device Performance
     *
     * @return UserExperienceAnalyticsAppHealthDevicePerformance[]|null The userExperienceAnalyticsAppHealthDevicePerformance
     */
    public function getUserExperienceAnalyticsAppHealthDevicePerformance()
    {
        if (array_key_exists('userExperienceAnalyticsAppHealthDevicePerformance', $this->_propDict) && !is_null($this->_propDict['userExperienceAnalyticsAppHealthDevicePerformance'])) {
           $userExperienceAnalyticsAppHealthDevicePerformance = [];
           if (count($this->_propDict['userExperienceAnalyticsAppHealthDevicePerformance']) > 0 && is_a($this->_propDict['userExperienceAnalyticsAppHealthDevicePerformance'][0], 'UserExperienceAnalyticsAppHealthDevicePerformance')) {
              return $this->_propDict['userExperienceAnalyticsAppHealthDevicePerformance'];
           }
           foreach ($this->_propDict['userExperienceAnalyticsAppHealthDevicePerformance'] as $singleValue) {
              $userExperienceAnalyticsAppHealthDevicePerformance []= new UserExperienceAnalyticsAppHealthDevicePerformance($singleValue);
           }
           $this->_propDict['userExperienceAnalyticsAppHealthDevicePerformance'] = $userExperienceAnalyticsAppHealthDevicePerformance;
           return $this->_propDict['userExperienceAnalyticsAppHealthDevicePerformance'];
        }
        return null;
    }
    
    /** 
    * Sets the userExperienceAnalyticsAppHealthDevicePerformance
    * User experience analytics appHealth Device Performance
    *
    * @param UserExperienceAnalyticsAppHealthDevicePerformance[] $val The userExperienceAnalyticsAppHealthDevicePerformance
    *
    * @return DeviceManagement
    */
    public function setUserExperienceAnalyticsAppHealthDevicePerformance($val)
    {
        $this->_propDict["userExperienceAnalyticsAppHealthDevicePerformance"] = $val;
        return $this;
    }
    

     /** 
     * Gets the userExperienceAnalyticsAppHealthDevicePerformanceDetails
    * User experience analytics device performance details
     *
     * @return UserExperienceAnalyticsAppHealthDevicePerformanceDetails[]|null The userExperienceAnalyticsAppHealthDevicePerformanceDetails
     */
    public function getUserExperienceAnalyticsAppHealthDevicePerformanceDetails()
    {
        if (array_key_exists('userExperienceAnalyticsAppHealthDevicePerformanceDetails', $this->_propDict) && !is_null($this->_propDict['userExperienceAnalyticsAppHealthDevicePerformanceDetails'])) {
           $userExperienceAnalyticsAppHealthDevicePerformanceDetails = [];
           if (count($this->_propDict['userExperienceAnalyticsAppHealthDevicePerformanceDetails']) > 0 && is_a($this->_propDict['userExperienceAnalyticsAppHealthDevicePerformanceDetails'][0], 'UserExperienceAnalyticsAppHealthDevicePerformanceDetails')) {
              return $this->_propDict['userExperienceAnalyticsAppHealthDevicePerformanceDetails'];
           }
           foreach ($this->_propDict['userExperienceAnalyticsAppHealthDevicePerformanceDetails'] as $singleValue) {
              $userExperienceAnalyticsAppHealthDevicePerformanceDetails []= new UserExperienceAnalyticsAppHealthDevicePerformanceDetails($singleValue);
           }
           $this->_propDict['userExperienceAnalyticsAppHealthDevicePerformanceDetails'] = $userExperienceAnalyticsAppHealthDevicePerformanceDetails;
           return $this->_propDict['userExperienceAnalyticsAppHealthDevicePerformanceDetails'];
        }
        return null;
    }
    
    /** 
    * Sets the userExperienceAnalyticsAppHealthDevicePerformanceDetails
    * User experience analytics device performance details
    *
    * @param UserExperienceAnalyticsAppHealthDevicePerformanceDetails[] $val The userExperienceAnalyticsAppHealthDevicePerformanceDetails
    *
    * @return DeviceManagement
    */
    public function setUserExperienceAnalyticsAppHealthDevicePerformanceDetails($val)
    {
        $this->_propDict["userExperienceAnalyticsAppHealthDevicePerformanceDetails"] = $val;
        return $this;
    }
    

     /** 
     * Gets the userExperienceAnalyticsAppHealthOSVersionPerformance
    * User experience analytics appHealth OS version Performance
     *
     * @return UserExperienceAnalyticsAppHealthOSVersionPerformance[]|null The userExperienceAnalyticsAppHealthOSVersionPerformance
     */
    public function getUserExperienceAnalyticsAppHealthOSVersionPerformance()
    {
        if (array_key_exists('userExperienceAnalyticsAppHealthOSVersionPerformance', $this->_propDict) && !is_null($this->_propDict['userExperienceAnalyticsAppHealthOSVersionPerformance'])) {
           $userExperienceAnalyticsAppHealthOSVersionPerformance = [];
           if (count($this->_propDict['userExperienceAnalyticsAppHealthOSVersionPerformance']) > 0 && is_a($this->_propDict['userExperienceAnalyticsAppHealthOSVersionPerformance'][0], 'UserExperienceAnalyticsAppHealthOSVersionPerformance')) {
              return $this->_propDict['userExperienceAnalyticsAppHealthOSVersionPerformance'];
           }
           foreach ($this->_propDict['userExperienceAnalyticsAppHealthOSVersionPerformance'] as $singleValue) {
              $userExperienceAnalyticsAppHealthOSVersionPerformance []= new UserExperienceAnalyticsAppHealthOSVersionPerformance($singleValue);
           }
           $this->_propDict['userExperienceAnalyticsAppHealthOSVersionPerformance'] = $userExperienceAnalyticsAppHealthOSVersionPerformance;
           return $this->_propDict['userExperienceAnalyticsAppHealthOSVersionPerformance'];
        }
        return null;
    }
    
    /** 
    * Sets the userExperienceAnalyticsAppHealthOSVersionPerformance
    * User experience analytics appHealth OS version Performance
    *
    * @param UserExperienceAnalyticsAppHealthOSVersionPerformance[] $val The userExperienceAnalyticsAppHealthOSVersionPerformance
    *
    * @return DeviceManagement
    */
    public function setUserExperienceAnalyticsAppHealthOSVersionPerformance($val)
    {
        $this->_propDict["userExperienceAnalyticsAppHealthOSVersionPerformance"] = $val;
        return $this;
    }
    
    /**
    * Gets the userExperienceAnalyticsAppHealthOverview
    * User experience analytics appHealth overview
    *
    * @return UserExperienceAnalyticsCategory|null The userExperienceAnalyticsAppHealthOverview
    */
    public function getUserExperienceAnalyticsAppHealthOverview()
    {
        if (array_key_exists("userExperienceAnalyticsAppHealthOverview", $this->_propDict) && !is_null($this->_propDict["userExperienceAnalyticsAppHealthOverview"])) {
            if (is_a($this->_propDict["userExperienceAnalyticsAppHealthOverview"], "\Beta\Microsoft\Graph\Model\UserExperienceAnalyticsCategory")) {
                return $this->_propDict["userExperienceAnalyticsAppHealthOverview"];
            } else {
                $this->_propDict["userExperienceAnalyticsAppHealthOverview"] = new UserExperienceAnalyticsCategory($this->_propDict["userExperienceAnalyticsAppHealthOverview"]);
                return $this->_propDict["userExperienceAnalyticsAppHealthOverview"];
            }
        }
        return null;
    }
    
    /**
    * Sets the userExperienceAnalyticsAppHealthOverview
    * User experience analytics appHealth overview
    *
    * @param UserExperienceAnalyticsCategory $val The userExperienceAnalyticsAppHealthOverview
    *
    * @return DeviceManagement
    */
    public function setUserExperienceAnalyticsAppHealthOverview($val)
    {
        $this->_propDict["userExperienceAnalyticsAppHealthOverview"] = $val;
        return $this;
    }
    

     /** 
     * Gets the userExperienceAnalyticsBaselines
    * User experience analytics baselines
     *
     * @return UserExperienceAnalyticsBaseline[]|null The userExperienceAnalyticsBaselines
     */
    public function getUserExperienceAnalyticsBaselines()
    {
        if (array_key_exists('userExperienceAnalyticsBaselines', $this->_propDict) && !is_null($this->_propDict['userExperienceAnalyticsBaselines'])) {
           $userExperienceAnalyticsBaselines = [];
           if (count($this->_propDict['userExperienceAnalyticsBaselines']) > 0 && is_a($this->_propDict['userExperienceAnalyticsBaselines'][0], 'UserExperienceAnalyticsBaseline')) {
              return $this->_propDict['userExperienceAnalyticsBaselines'];
           }
           foreach ($this->_propDict['userExperienceAnalyticsBaselines'] as $singleValue) {
              $userExperienceAnalyticsBaselines []= new UserExperienceAnalyticsBaseline($singleValue);
           }
           $this->_propDict['userExperienceAnalyticsBaselines'] = $userExperienceAnalyticsBaselines;
           return $this->_propDict['userExperienceAnalyticsBaselines'];
        }
        return null;
    }
    
    /** 
    * Sets the userExperienceAnalyticsBaselines
    * User experience analytics baselines
    *
    * @param UserExperienceAnalyticsBaseline[] $val The userExperienceAnalyticsBaselines
    *
    * @return DeviceManagement
    */
    public function setUserExperienceAnalyticsBaselines($val)
    {
        $this->_propDict["userExperienceAnalyticsBaselines"] = $val;
        return $this;
    }
    

     /** 
     * Gets the userExperienceAnalyticsBatteryHealthAppImpact
    * User Experience Analytics Battery Health App Impact
     *
     * @return UserExperienceAnalyticsBatteryHealthAppImpact[]|null The userExperienceAnalyticsBatteryHealthAppImpact
     */
    public function getUserExperienceAnalyticsBatteryHealthAppImpact()
    {
        if (array_key_exists('userExperienceAnalyticsBatteryHealthAppImpact', $this->_propDict) && !is_null($this->_propDict['userExperienceAnalyticsBatteryHealthAppImpact'])) {
           $userExperienceAnalyticsBatteryHealthAppImpact = [];
           if (count($this->_propDict['userExperienceAnalyticsBatteryHealthAppImpact']) > 0 && is_a($this->_propDict['userExperienceAnalyticsBatteryHealthAppImpact'][0], 'UserExperienceAnalyticsBatteryHealthAppImpact')) {
              return $this->_propDict['userExperienceAnalyticsBatteryHealthAppImpact'];
           }
           foreach ($this->_propDict['userExperienceAnalyticsBatteryHealthAppImpact'] as $singleValue) {
              $userExperienceAnalyticsBatteryHealthAppImpact []= new UserExperienceAnalyticsBatteryHealthAppImpact($singleValue);
           }
           $this->_propDict['userExperienceAnalyticsBatteryHealthAppImpact'] = $userExperienceAnalyticsBatteryHealthAppImpact;
           return $this->_propDict['userExperienceAnalyticsBatteryHealthAppImpact'];
        }
        return null;
    }
    
    /** 
    * Sets the userExperienceAnalyticsBatteryHealthAppImpact
    * User Experience Analytics Battery Health App Impact
    *
    * @param UserExperienceAnalyticsBatteryHealthAppImpact[] $val The userExperienceAnalyticsBatteryHealthAppImpact
    *
    * @return DeviceManagement
    */
    public function setUserExperienceAnalyticsBatteryHealthAppImpact($val)
    {
        $this->_propDict["userExperienceAnalyticsBatteryHealthAppImpact"] = $val;
        return $this;
    }
    
    /**
    * Gets the userExperienceAnalyticsBatteryHealthCapacityDetails
    * User Experience Analytics Battery Health Capacity Details
    *
    * @return UserExperienceAnalyticsBatteryHealthCapacityDetails|null The userExperienceAnalyticsBatteryHealthCapacityDetails
    */
    public function getUserExperienceAnalyticsBatteryHealthCapacityDetails()
    {
        if (array_key_exists("userExperienceAnalyticsBatteryHealthCapacityDetails", $this->_propDict) && !is_null($this->_propDict["userExperienceAnalyticsBatteryHealthCapacityDetails"])) {
            if (is_a($this->_propDict["userExperienceAnalyticsBatteryHealthCapacityDetails"], "\Beta\Microsoft\Graph\Model\UserExperienceAnalyticsBatteryHealthCapacityDetails")) {
                return $this->_propDict["userExperienceAnalyticsBatteryHealthCapacityDetails"];
            } else {
                $this->_propDict["userExperienceAnalyticsBatteryHealthCapacityDetails"] = new UserExperienceAnalyticsBatteryHealthCapacityDetails($this->_propDict["userExperienceAnalyticsBatteryHealthCapacityDetails"]);
                return $this->_propDict["userExperienceAnalyticsBatteryHealthCapacityDetails"];
            }
        }
        return null;
    }
    
    /**
    * Sets the userExperienceAnalyticsBatteryHealthCapacityDetails
    * User Experience Analytics Battery Health Capacity Details
    *
    * @param UserExperienceAnalyticsBatteryHealthCapacityDetails $val The userExperienceAnalyticsBatteryHealthCapacityDetails
    *
    * @return DeviceManagement
    */
    public function setUserExperienceAnalyticsBatteryHealthCapacityDetails($val)
    {
        $this->_propDict["userExperienceAnalyticsBatteryHealthCapacityDetails"] = $val;
        return $this;
    }
    

     /** 
     * Gets the userExperienceAnalyticsBatteryHealthDeviceAppImpact
    * User Experience Analytics Battery Health Device App Impact
     *
     * @return UserExperienceAnalyticsBatteryHealthDeviceAppImpact[]|null The userExperienceAnalyticsBatteryHealthDeviceAppImpact
     */
    public function getUserExperienceAnalyticsBatteryHealthDeviceAppImpact()
    {
        if (array_key_exists('userExperienceAnalyticsBatteryHealthDeviceAppImpact', $this->_propDict) && !is_null($this->_propDict['userExperienceAnalyticsBatteryHealthDeviceAppImpact'])) {
           $userExperienceAnalyticsBatteryHealthDeviceAppImpact = [];
           if (count($this->_propDict['userExperienceAnalyticsBatteryHealthDeviceAppImpact']) > 0 && is_a($this->_propDict['userExperienceAnalyticsBatteryHealthDeviceAppImpact'][0], 'UserExperienceAnalyticsBatteryHealthDeviceAppImpact')) {
              return $this->_propDict['userExperienceAnalyticsBatteryHealthDeviceAppImpact'];
           }
           foreach ($this->_propDict['userExperienceAnalyticsBatteryHealthDeviceAppImpact'] as $singleValue) {
              $userExperienceAnalyticsBatteryHealthDeviceAppImpact []= new UserExperienceAnalyticsBatteryHealthDeviceAppImpact($singleValue);
           }
           $this->_propDict['userExperienceAnalyticsBatteryHealthDeviceAppImpact'] = $userExperienceAnalyticsBatteryHealthDeviceAppImpact;
           return $this->_propDict['userExperienceAnalyticsBatteryHealthDeviceAppImpact'];
        }
        return null;
    }
    
    /** 
    * Sets the userExperienceAnalyticsBatteryHealthDeviceAppImpact
    * User Experience Analytics Battery Health Device App Impact
    *
    * @param UserExperienceAnalyticsBatteryHealthDeviceAppImpact[] $val The userExperienceAnalyticsBatteryHealthDeviceAppImpact
    *
    * @return DeviceManagement
    */
    public function setUserExperienceAnalyticsBatteryHealthDeviceAppImpact($val)
    {
        $this->_propDict["userExperienceAnalyticsBatteryHealthDeviceAppImpact"] = $val;
        return $this;
    }
    

     /** 
     * Gets the userExperienceAnalyticsBatteryHealthDevicePerformance
    * User Experience Analytics Battery Health Device Performance
     *
     * @return UserExperienceAnalyticsBatteryHealthDevicePerformance[]|null The userExperienceAnalyticsBatteryHealthDevicePerformance
     */
    public function getUserExperienceAnalyticsBatteryHealthDevicePerformance()
    {
        if (array_key_exists('userExperienceAnalyticsBatteryHealthDevicePerformance', $this->_propDict) && !is_null($this->_propDict['userExperienceAnalyticsBatteryHealthDevicePerformance'])) {
           $userExperienceAnalyticsBatteryHealthDevicePerformance = [];
           if (count($this->_propDict['userExperienceAnalyticsBatteryHealthDevicePerformance']) > 0 && is_a($this->_propDict['userExperienceAnalyticsBatteryHealthDevicePerformance'][0], 'UserExperienceAnalyticsBatteryHealthDevicePerformance')) {
              return $this->_propDict['userExperienceAnalyticsBatteryHealthDevicePerformance'];
           }
           foreach ($this->_propDict['userExperienceAnalyticsBatteryHealthDevicePerformance'] as $singleValue) {
              $userExperienceAnalyticsBatteryHealthDevicePerformance []= new UserExperienceAnalyticsBatteryHealthDevicePerformance($singleValue);
           }
           $this->_propDict['userExperienceAnalyticsBatteryHealthDevicePerformance'] = $userExperienceAnalyticsBatteryHealthDevicePerformance;
           return $this->_propDict['userExperienceAnalyticsBatteryHealthDevicePerformance'];
        }
        return null;
    }
    
    /** 
    * Sets the userExperienceAnalyticsBatteryHealthDevicePerformance
    * User Experience Analytics Battery Health Device Performance
    *
    * @param UserExperienceAnalyticsBatteryHealthDevicePerformance[] $val The userExperienceAnalyticsBatteryHealthDevicePerformance
    *
    * @return DeviceManagement
    */
    public function setUserExperienceAnalyticsBatteryHealthDevicePerformance($val)
    {
        $this->_propDict["userExperienceAnalyticsBatteryHealthDevicePerformance"] = $val;
        return $this;
    }
    

     /** 
     * Gets the userExperienceAnalyticsBatteryHealthDeviceRuntimeHistory
    * User Experience Analytics Battery Health Device Runtime History
     *
     * @return UserExperienceAnalyticsBatteryHealthDeviceRuntimeHistory[]|null The userExperienceAnalyticsBatteryHealthDeviceRuntimeHistory
     */
    public function getUserExperienceAnalyticsBatteryHealthDeviceRuntimeHistory()
    {
        if (array_key_exists('userExperienceAnalyticsBatteryHealthDeviceRuntimeHistory', $this->_propDict) && !is_null($this->_propDict['userExperienceAnalyticsBatteryHealthDeviceRuntimeHistory'])) {
           $userExperienceAnalyticsBatteryHealthDeviceRuntimeHistory = [];
           if (count($this->_propDict['userExperienceAnalyticsBatteryHealthDeviceRuntimeHistory']) > 0 && is_a($this->_propDict['userExperienceAnalyticsBatteryHealthDeviceRuntimeHistory'][0], 'UserExperienceAnalyticsBatteryHealthDeviceRuntimeHistory')) {
              return $this->_propDict['userExperienceAnalyticsBatteryHealthDeviceRuntimeHistory'];
           }
           foreach ($this->_propDict['userExperienceAnalyticsBatteryHealthDeviceRuntimeHistory'] as $singleValue) {
              $userExperienceAnalyticsBatteryHealthDeviceRuntimeHistory []= new UserExperienceAnalyticsBatteryHealthDeviceRuntimeHistory($singleValue);
           }
           $this->_propDict['userExperienceAnalyticsBatteryHealthDeviceRuntimeHistory'] = $userExperienceAnalyticsBatteryHealthDeviceRuntimeHistory;
           return $this->_propDict['userExperienceAnalyticsBatteryHealthDeviceRuntimeHistory'];
        }
        return null;
    }
    
    /** 
    * Sets the userExperienceAnalyticsBatteryHealthDeviceRuntimeHistory
    * User Experience Analytics Battery Health Device Runtime History
    *
    * @param UserExperienceAnalyticsBatteryHealthDeviceRuntimeHistory[] $val The userExperienceAnalyticsBatteryHealthDeviceRuntimeHistory
    *
    * @return DeviceManagement
    */
    public function setUserExperienceAnalyticsBatteryHealthDeviceRuntimeHistory($val)
    {
        $this->_propDict["userExperienceAnalyticsBatteryHealthDeviceRuntimeHistory"] = $val;
        return $this;
    }
    

     /** 
     * Gets the userExperienceAnalyticsBatteryHealthModelPerformance
    * User Experience Analytics Battery Health Model Performance
     *
     * @return UserExperienceAnalyticsBatteryHealthModelPerformance[]|null The userExperienceAnalyticsBatteryHealthModelPerformance
     */
    public function getUserExperienceAnalyticsBatteryHealthModelPerformance()
    {
        if (array_key_exists('userExperienceAnalyticsBatteryHealthModelPerformance', $this->_propDict) && !is_null($this->_propDict['userExperienceAnalyticsBatteryHealthModelPerformance'])) {
           $userExperienceAnalyticsBatteryHealthModelPerformance = [];
           if (count($this->_propDict['userExperienceAnalyticsBatteryHealthModelPerformance']) > 0 && is_a($this->_propDict['userExperienceAnalyticsBatteryHealthModelPerformance'][0], 'UserExperienceAnalyticsBatteryHealthModelPerformance')) {
              return $this->_propDict['userExperienceAnalyticsBatteryHealthModelPerformance'];
           }
           foreach ($this->_propDict['userExperienceAnalyticsBatteryHealthModelPerformance'] as $singleValue) {
              $userExperienceAnalyticsBatteryHealthModelPerformance []= new UserExperienceAnalyticsBatteryHealthModelPerformance($singleValue);
           }
           $this->_propDict['userExperienceAnalyticsBatteryHealthModelPerformance'] = $userExperienceAnalyticsBatteryHealthModelPerformance;
           return $this->_propDict['userExperienceAnalyticsBatteryHealthModelPerformance'];
        }
        return null;
    }
    
    /** 
    * Sets the userExperienceAnalyticsBatteryHealthModelPerformance
    * User Experience Analytics Battery Health Model Performance
    *
    * @param UserExperienceAnalyticsBatteryHealthModelPerformance[] $val The userExperienceAnalyticsBatteryHealthModelPerformance
    *
    * @return DeviceManagement
    */
    public function setUserExperienceAnalyticsBatteryHealthModelPerformance($val)
    {
        $this->_propDict["userExperienceAnalyticsBatteryHealthModelPerformance"] = $val;
        return $this;
    }
    

     /** 
     * Gets the userExperienceAnalyticsBatteryHealthOsPerformance
    * User Experience Analytics Battery Health Os Performance
     *
     * @return UserExperienceAnalyticsBatteryHealthOsPerformance[]|null The userExperienceAnalyticsBatteryHealthOsPerformance
     */
    public function getUserExperienceAnalyticsBatteryHealthOsPerformance()
    {
        if (array_key_exists('userExperienceAnalyticsBatteryHealthOsPerformance', $this->_propDict) && !is_null($this->_propDict['userExperienceAnalyticsBatteryHealthOsPerformance'])) {
           $userExperienceAnalyticsBatteryHealthOsPerformance = [];
           if (count($this->_propDict['userExperienceAnalyticsBatteryHealthOsPerformance']) > 0 && is_a($this->_propDict['userExperienceAnalyticsBatteryHealthOsPerformance'][0], 'UserExperienceAnalyticsBatteryHealthOsPerformance')) {
              return $this->_propDict['userExperienceAnalyticsBatteryHealthOsPerformance'];
           }
           foreach ($this->_propDict['userExperienceAnalyticsBatteryHealthOsPerformance'] as $singleValue) {
              $userExperienceAnalyticsBatteryHealthOsPerformance []= new UserExperienceAnalyticsBatteryHealthOsPerformance($singleValue);
           }
           $this->_propDict['userExperienceAnalyticsBatteryHealthOsPerformance'] = $userExperienceAnalyticsBatteryHealthOsPerformance;
           return $this->_propDict['userExperienceAnalyticsBatteryHealthOsPerformance'];
        }
        return null;
    }
    
    /** 
    * Sets the userExperienceAnalyticsBatteryHealthOsPerformance
    * User Experience Analytics Battery Health Os Performance
    *
    * @param UserExperienceAnalyticsBatteryHealthOsPerformance[] $val The userExperienceAnalyticsBatteryHealthOsPerformance
    *
    * @return DeviceManagement
    */
    public function setUserExperienceAnalyticsBatteryHealthOsPerformance($val)
    {
        $this->_propDict["userExperienceAnalyticsBatteryHealthOsPerformance"] = $val;
        return $this;
    }
    
    /**
    * Gets the userExperienceAnalyticsBatteryHealthRuntimeDetails
    * User Experience Analytics Battery Health Runtime Details
    *
    * @return UserExperienceAnalyticsBatteryHealthRuntimeDetails|null The userExperienceAnalyticsBatteryHealthRuntimeDetails
    */
    public function getUserExperienceAnalyticsBatteryHealthRuntimeDetails()
    {
        if (array_key_exists("userExperienceAnalyticsBatteryHealthRuntimeDetails", $this->_propDict) && !is_null($this->_propDict["userExperienceAnalyticsBatteryHealthRuntimeDetails"])) {
            if (is_a($this->_propDict["userExperienceAnalyticsBatteryHealthRuntimeDetails"], "\Beta\Microsoft\Graph\Model\UserExperienceAnalyticsBatteryHealthRuntimeDetails")) {
                return $this->_propDict["userExperienceAnalyticsBatteryHealthRuntimeDetails"];
            } else {
                $this->_propDict["userExperienceAnalyticsBatteryHealthRuntimeDetails"] = new UserExperienceAnalyticsBatteryHealthRuntimeDetails($this->_propDict["userExperienceAnalyticsBatteryHealthRuntimeDetails"]);
                return $this->_propDict["userExperienceAnalyticsBatteryHealthRuntimeDetails"];
            }
        }
        return null;
    }
    
    /**
    * Sets the userExperienceAnalyticsBatteryHealthRuntimeDetails
    * User Experience Analytics Battery Health Runtime Details
    *
    * @param UserExperienceAnalyticsBatteryHealthRuntimeDetails $val The userExperienceAnalyticsBatteryHealthRuntimeDetails
    *
    * @return DeviceManagement
    */
    public function setUserExperienceAnalyticsBatteryHealthRuntimeDetails($val)
    {
        $this->_propDict["userExperienceAnalyticsBatteryHealthRuntimeDetails"] = $val;
        return $this;
    }
    

     /** 
     * Gets the userExperienceAnalyticsCategories
    * User experience analytics categories
     *
     * @return UserExperienceAnalyticsCategory[]|null The userExperienceAnalyticsCategories
     */
    public function getUserExperienceAnalyticsCategories()
    {
        if (array_key_exists('userExperienceAnalyticsCategories', $this->_propDict) && !is_null($this->_propDict['userExperienceAnalyticsCategories'])) {
           $userExperienceAnalyticsCategories = [];
           if (count($this->_propDict['userExperienceAnalyticsCategories']) > 0 && is_a($this->_propDict['userExperienceAnalyticsCategories'][0], 'UserExperienceAnalyticsCategory')) {
              return $this->_propDict['userExperienceAnalyticsCategories'];
           }
           foreach ($this->_propDict['userExperienceAnalyticsCategories'] as $singleValue) {
              $userExperienceAnalyticsCategories []= new UserExperienceAnalyticsCategory($singleValue);
           }
           $this->_propDict['userExperienceAnalyticsCategories'] = $userExperienceAnalyticsCategories;
           return $this->_propDict['userExperienceAnalyticsCategories'];
        }
        return null;
    }
    
    /** 
    * Sets the userExperienceAnalyticsCategories
    * User experience analytics categories
    *
    * @param UserExperienceAnalyticsCategory[] $val The userExperienceAnalyticsCategories
    *
    * @return DeviceManagement
    */
    public function setUserExperienceAnalyticsCategories($val)
    {
        $this->_propDict["userExperienceAnalyticsCategories"] = $val;
        return $this;
    }
    

     /** 
     * Gets the userExperienceAnalyticsDeviceMetricHistory
    * User experience analytics device metric history
     *
     * @return UserExperienceAnalyticsMetricHistory[]|null The userExperienceAnalyticsDeviceMetricHistory
     */
    public function getUserExperienceAnalyticsDeviceMetricHistory()
    {
        if (array_key_exists('userExperienceAnalyticsDeviceMetricHistory', $this->_propDict) && !is_null($this->_propDict['userExperienceAnalyticsDeviceMetricHistory'])) {
           $userExperienceAnalyticsDeviceMetricHistory = [];
           if (count($this->_propDict['userExperienceAnalyticsDeviceMetricHistory']) > 0 && is_a($this->_propDict['userExperienceAnalyticsDeviceMetricHistory'][0], 'UserExperienceAnalyticsMetricHistory')) {
              return $this->_propDict['userExperienceAnalyticsDeviceMetricHistory'];
           }
           foreach ($this->_propDict['userExperienceAnalyticsDeviceMetricHistory'] as $singleValue) {
              $userExperienceAnalyticsDeviceMetricHistory []= new UserExperienceAnalyticsMetricHistory($singleValue);
           }
           $this->_propDict['userExperienceAnalyticsDeviceMetricHistory'] = $userExperienceAnalyticsDeviceMetricHistory;
           return $this->_propDict['userExperienceAnalyticsDeviceMetricHistory'];
        }
        return null;
    }
    
    /** 
    * Sets the userExperienceAnalyticsDeviceMetricHistory
    * User experience analytics device metric history
    *
    * @param UserExperienceAnalyticsMetricHistory[] $val The userExperienceAnalyticsDeviceMetricHistory
    *
    * @return DeviceManagement
    */
    public function setUserExperienceAnalyticsDeviceMetricHistory($val)
    {
        $this->_propDict["userExperienceAnalyticsDeviceMetricHistory"] = $val;
        return $this;
    }
    

     /** 
     * Gets the userExperienceAnalyticsDevicePerformance
    * User experience analytics device performance
     *
     * @return UserExperienceAnalyticsDevicePerformance[]|null The userExperienceAnalyticsDevicePerformance
     */
    public function getUserExperienceAnalyticsDevicePerformance()
    {
        if (array_key_exists('userExperienceAnalyticsDevicePerformance', $this->_propDict) && !is_null($this->_propDict['userExperienceAnalyticsDevicePerformance'])) {
           $userExperienceAnalyticsDevicePerformance = [];
           if (count($this->_propDict['userExperienceAnalyticsDevicePerformance']) > 0 && is_a($this->_propDict['userExperienceAnalyticsDevicePerformance'][0], 'UserExperienceAnalyticsDevicePerformance')) {
              return $this->_propDict['userExperienceAnalyticsDevicePerformance'];
           }
           foreach ($this->_propDict['userExperienceAnalyticsDevicePerformance'] as $singleValue) {
              $userExperienceAnalyticsDevicePerformance []= new UserExperienceAnalyticsDevicePerformance($singleValue);
           }
           $this->_propDict['userExperienceAnalyticsDevicePerformance'] = $userExperienceAnalyticsDevicePerformance;
           return $this->_propDict['userExperienceAnalyticsDevicePerformance'];
        }
        return null;
    }
    
    /** 
    * Sets the userExperienceAnalyticsDevicePerformance
    * User experience analytics device performance
    *
    * @param UserExperienceAnalyticsDevicePerformance[] $val The userExperienceAnalyticsDevicePerformance
    *
    * @return DeviceManagement
    */
    public function setUserExperienceAnalyticsDevicePerformance($val)
    {
        $this->_propDict["userExperienceAnalyticsDevicePerformance"] = $val;
        return $this;
    }
    

     /** 
     * Gets the userExperienceAnalyticsDeviceScores
    * User experience analytics device scores
     *
     * @return UserExperienceAnalyticsDeviceScores[]|null The userExperienceAnalyticsDeviceScores
     */
    public function getUserExperienceAnalyticsDeviceScores()
    {
        if (array_key_exists('userExperienceAnalyticsDeviceScores', $this->_propDict) && !is_null($this->_propDict['userExperienceAnalyticsDeviceScores'])) {
           $userExperienceAnalyticsDeviceScores = [];
           if (count($this->_propDict['userExperienceAnalyticsDeviceScores']) > 0 && is_a($this->_propDict['userExperienceAnalyticsDeviceScores'][0], 'UserExperienceAnalyticsDeviceScores')) {
              return $this->_propDict['userExperienceAnalyticsDeviceScores'];
           }
           foreach ($this->_propDict['userExperienceAnalyticsDeviceScores'] as $singleValue) {
              $userExperienceAnalyticsDeviceScores []= new UserExperienceAnalyticsDeviceScores($singleValue);
           }
           $this->_propDict['userExperienceAnalyticsDeviceScores'] = $userExperienceAnalyticsDeviceScores;
           return $this->_propDict['userExperienceAnalyticsDeviceScores'];
        }
        return null;
    }
    
    /** 
    * Sets the userExperienceAnalyticsDeviceScores
    * User experience analytics device scores
    *
    * @param UserExperienceAnalyticsDeviceScores[] $val The userExperienceAnalyticsDeviceScores
    *
    * @return DeviceManagement
    */
    public function setUserExperienceAnalyticsDeviceScores($val)
    {
        $this->_propDict["userExperienceAnalyticsDeviceScores"] = $val;
        return $this;
    }
    

     /** 
     * Gets the userExperienceAnalyticsDeviceStartupHistory
    * User experience analytics device Startup History
     *
     * @return UserExperienceAnalyticsDeviceStartupHistory[]|null The userExperienceAnalyticsDeviceStartupHistory
     */
    public function getUserExperienceAnalyticsDeviceStartupHistory()
    {
        if (array_key_exists('userExperienceAnalyticsDeviceStartupHistory', $this->_propDict) && !is_null($this->_propDict['userExperienceAnalyticsDeviceStartupHistory'])) {
           $userExperienceAnalyticsDeviceStartupHistory = [];
           if (count($this->_propDict['userExperienceAnalyticsDeviceStartupHistory']) > 0 && is_a($this->_propDict['userExperienceAnalyticsDeviceStartupHistory'][0], 'UserExperienceAnalyticsDeviceStartupHistory')) {
              return $this->_propDict['userExperienceAnalyticsDeviceStartupHistory'];
           }
           foreach ($this->_propDict['userExperienceAnalyticsDeviceStartupHistory'] as $singleValue) {
              $userExperienceAnalyticsDeviceStartupHistory []= new UserExperienceAnalyticsDeviceStartupHistory($singleValue);
           }
           $this->_propDict['userExperienceAnalyticsDeviceStartupHistory'] = $userExperienceAnalyticsDeviceStartupHistory;
           return $this->_propDict['userExperienceAnalyticsDeviceStartupHistory'];
        }
        return null;
    }
    
    /** 
    * Sets the userExperienceAnalyticsDeviceStartupHistory
    * User experience analytics device Startup History
    *
    * @param UserExperienceAnalyticsDeviceStartupHistory[] $val The userExperienceAnalyticsDeviceStartupHistory
    *
    * @return DeviceManagement
    */
    public function setUserExperienceAnalyticsDeviceStartupHistory($val)
    {
        $this->_propDict["userExperienceAnalyticsDeviceStartupHistory"] = $val;
        return $this;
    }
    

     /** 
     * Gets the userExperienceAnalyticsDeviceStartupProcesses
    * User experience analytics device Startup Processes
     *
     * @return UserExperienceAnalyticsDeviceStartupProcess[]|null The userExperienceAnalyticsDeviceStartupProcesses
     */
    public function getUserExperienceAnalyticsDeviceStartupProcesses()
    {
        if (array_key_exists('userExperienceAnalyticsDeviceStartupProcesses', $this->_propDict) && !is_null($this->_propDict['userExperienceAnalyticsDeviceStartupProcesses'])) {
           $userExperienceAnalyticsDeviceStartupProcesses = [];
           if (count($this->_propDict['userExperienceAnalyticsDeviceStartupProcesses']) > 0 && is_a($this->_propDict['userExperienceAnalyticsDeviceStartupProcesses'][0], 'UserExperienceAnalyticsDeviceStartupProcess')) {
              return $this->_propDict['userExperienceAnalyticsDeviceStartupProcesses'];
           }
           foreach ($this->_propDict['userExperienceAnalyticsDeviceStartupProcesses'] as $singleValue) {
              $userExperienceAnalyticsDeviceStartupProcesses []= new UserExperienceAnalyticsDeviceStartupProcess($singleValue);
           }
           $this->_propDict['userExperienceAnalyticsDeviceStartupProcesses'] = $userExperienceAnalyticsDeviceStartupProcesses;
           return $this->_propDict['userExperienceAnalyticsDeviceStartupProcesses'];
        }
        return null;
    }
    
    /** 
    * Sets the userExperienceAnalyticsDeviceStartupProcesses
    * User experience analytics device Startup Processes
    *
    * @param UserExperienceAnalyticsDeviceStartupProcess[] $val The userExperienceAnalyticsDeviceStartupProcesses
    *
    * @return DeviceManagement
    */
    public function setUserExperienceAnalyticsDeviceStartupProcesses($val)
    {
        $this->_propDict["userExperienceAnalyticsDeviceStartupProcesses"] = $val;
        return $this;
    }
    

     /** 
     * Gets the userExperienceAnalyticsDeviceStartupProcessPerformance
    * User experience analytics device Startup Process Performance
     *
     * @return UserExperienceAnalyticsDeviceStartupProcessPerformance[]|null The userExperienceAnalyticsDeviceStartupProcessPerformance
     */
    public function getUserExperienceAnalyticsDeviceStartupProcessPerformance()
    {
        if (array_key_exists('userExperienceAnalyticsDeviceStartupProcessPerformance', $this->_propDict) && !is_null($this->_propDict['userExperienceAnalyticsDeviceStartupProcessPerformance'])) {
           $userExperienceAnalyticsDeviceStartupProcessPerformance = [];
           if (count($this->_propDict['userExperienceAnalyticsDeviceStartupProcessPerformance']) > 0 && is_a($this->_propDict['userExperienceAnalyticsDeviceStartupProcessPerformance'][0], 'UserExperienceAnalyticsDeviceStartupProcessPerformance')) {
              return $this->_propDict['userExperienceAnalyticsDeviceStartupProcessPerformance'];
           }
           foreach ($this->_propDict['userExperienceAnalyticsDeviceStartupProcessPerformance'] as $singleValue) {
              $userExperienceAnalyticsDeviceStartupProcessPerformance []= new UserExperienceAnalyticsDeviceStartupProcessPerformance($singleValue);
           }
           $this->_propDict['userExperienceAnalyticsDeviceStartupProcessPerformance'] = $userExperienceAnalyticsDeviceStartupProcessPerformance;
           return $this->_propDict['userExperienceAnalyticsDeviceStartupProcessPerformance'];
        }
        return null;
    }
    
    /** 
    * Sets the userExperienceAnalyticsDeviceStartupProcessPerformance
    * User experience analytics device Startup Process Performance
    *
    * @param UserExperienceAnalyticsDeviceStartupProcessPerformance[] $val The userExperienceAnalyticsDeviceStartupProcessPerformance
    *
    * @return DeviceManagement
    */
    public function setUserExperienceAnalyticsDeviceStartupProcessPerformance($val)
    {
        $this->_propDict["userExperienceAnalyticsDeviceStartupProcessPerformance"] = $val;
        return $this;
    }
    

     /** 
     * Gets the userExperienceAnalyticsDevicesWithoutCloudIdentity
    * User experience analytics devices without cloud identity.
     *
     * @return UserExperienceAnalyticsDeviceWithoutCloudIdentity[]|null The userExperienceAnalyticsDevicesWithoutCloudIdentity
     */
    public function getUserExperienceAnalyticsDevicesWithoutCloudIdentity()
    {
        if (array_key_exists('userExperienceAnalyticsDevicesWithoutCloudIdentity', $this->_propDict) && !is_null($this->_propDict['userExperienceAnalyticsDevicesWithoutCloudIdentity'])) {
           $userExperienceAnalyticsDevicesWithoutCloudIdentity = [];
           if (count($this->_propDict['userExperienceAnalyticsDevicesWithoutCloudIdentity']) > 0 && is_a($this->_propDict['userExperienceAnalyticsDevicesWithoutCloudIdentity'][0], 'UserExperienceAnalyticsDeviceWithoutCloudIdentity')) {
              return $this->_propDict['userExperienceAnalyticsDevicesWithoutCloudIdentity'];
           }
           foreach ($this->_propDict['userExperienceAnalyticsDevicesWithoutCloudIdentity'] as $singleValue) {
              $userExperienceAnalyticsDevicesWithoutCloudIdentity []= new UserExperienceAnalyticsDeviceWithoutCloudIdentity($singleValue);
           }
           $this->_propDict['userExperienceAnalyticsDevicesWithoutCloudIdentity'] = $userExperienceAnalyticsDevicesWithoutCloudIdentity;
           return $this->_propDict['userExperienceAnalyticsDevicesWithoutCloudIdentity'];
        }
        return null;
    }
    
    /** 
    * Sets the userExperienceAnalyticsDevicesWithoutCloudIdentity
    * User experience analytics devices without cloud identity.
    *
    * @param UserExperienceAnalyticsDeviceWithoutCloudIdentity[] $val The userExperienceAnalyticsDevicesWithoutCloudIdentity
    *
    * @return DeviceManagement
    */
    public function setUserExperienceAnalyticsDevicesWithoutCloudIdentity($val)
    {
        $this->_propDict["userExperienceAnalyticsDevicesWithoutCloudIdentity"] = $val;
        return $this;
    }
    

     /** 
     * Gets the userExperienceAnalyticsImpactingProcess
    * User experience analytics impacting process
     *
     * @return UserExperienceAnalyticsImpactingProcess[]|null The userExperienceAnalyticsImpactingProcess
     */
    public function getUserExperienceAnalyticsImpactingProcess()
    {
        if (array_key_exists('userExperienceAnalyticsImpactingProcess', $this->_propDict) && !is_null($this->_propDict['userExperienceAnalyticsImpactingProcess'])) {
           $userExperienceAnalyticsImpactingProcess = [];
           if (count($this->_propDict['userExperienceAnalyticsImpactingProcess']) > 0 && is_a($this->_propDict['userExperienceAnalyticsImpactingProcess'][0], 'UserExperienceAnalyticsImpactingProcess')) {
              return $this->_propDict['userExperienceAnalyticsImpactingProcess'];
           }
           foreach ($this->_propDict['userExperienceAnalyticsImpactingProcess'] as $singleValue) {
              $userExperienceAnalyticsImpactingProcess []= new UserExperienceAnalyticsImpactingProcess($singleValue);
           }
           $this->_propDict['userExperienceAnalyticsImpactingProcess'] = $userExperienceAnalyticsImpactingProcess;
           return $this->_propDict['userExperienceAnalyticsImpactingProcess'];
        }
        return null;
    }
    
    /** 
    * Sets the userExperienceAnalyticsImpactingProcess
    * User experience analytics impacting process
    *
    * @param UserExperienceAnalyticsImpactingProcess[] $val The userExperienceAnalyticsImpactingProcess
    *
    * @return DeviceManagement
    */
    public function setUserExperienceAnalyticsImpactingProcess($val)
    {
        $this->_propDict["userExperienceAnalyticsImpactingProcess"] = $val;
        return $this;
    }
    

     /** 
     * Gets the userExperienceAnalyticsMetricHistory
    * User experience analytics metric history
     *
     * @return UserExperienceAnalyticsMetricHistory[]|null The userExperienceAnalyticsMetricHistory
     */
    public function getUserExperienceAnalyticsMetricHistory()
    {
        if (array_key_exists('userExperienceAnalyticsMetricHistory', $this->_propDict) && !is_null($this->_propDict['userExperienceAnalyticsMetricHistory'])) {
           $userExperienceAnalyticsMetricHistory = [];
           if (count($this->_propDict['userExperienceAnalyticsMetricHistory']) > 0 && is_a($this->_propDict['userExperienceAnalyticsMetricHistory'][0], 'UserExperienceAnalyticsMetricHistory')) {
              return $this->_propDict['userExperienceAnalyticsMetricHistory'];
           }
           foreach ($this->_propDict['userExperienceAnalyticsMetricHistory'] as $singleValue) {
              $userExperienceAnalyticsMetricHistory []= new UserExperienceAnalyticsMetricHistory($singleValue);
           }
           $this->_propDict['userExperienceAnalyticsMetricHistory'] = $userExperienceAnalyticsMetricHistory;
           return $this->_propDict['userExperienceAnalyticsMetricHistory'];
        }
        return null;
    }
    
    /** 
    * Sets the userExperienceAnalyticsMetricHistory
    * User experience analytics metric history
    *
    * @param UserExperienceAnalyticsMetricHistory[] $val The userExperienceAnalyticsMetricHistory
    *
    * @return DeviceManagement
    */
    public function setUserExperienceAnalyticsMetricHistory($val)
    {
        $this->_propDict["userExperienceAnalyticsMetricHistory"] = $val;
        return $this;
    }
    

     /** 
     * Gets the userExperienceAnalyticsModelScores
    * User experience analytics model scores
     *
     * @return UserExperienceAnalyticsModelScores[]|null The userExperienceAnalyticsModelScores
     */
    public function getUserExperienceAnalyticsModelScores()
    {
        if (array_key_exists('userExperienceAnalyticsModelScores', $this->_propDict) && !is_null($this->_propDict['userExperienceAnalyticsModelScores'])) {
           $userExperienceAnalyticsModelScores = [];
           if (count($this->_propDict['userExperienceAnalyticsModelScores']) > 0 && is_a($this->_propDict['userExperienceAnalyticsModelScores'][0], 'UserExperienceAnalyticsModelScores')) {
              return $this->_propDict['userExperienceAnalyticsModelScores'];
           }
           foreach ($this->_propDict['userExperienceAnalyticsModelScores'] as $singleValue) {
              $userExperienceAnalyticsModelScores []= new UserExperienceAnalyticsModelScores($singleValue);
           }
           $this->_propDict['userExperienceAnalyticsModelScores'] = $userExperienceAnalyticsModelScores;
           return $this->_propDict['userExperienceAnalyticsModelScores'];
        }
        return null;
    }
    
    /** 
    * Sets the userExperienceAnalyticsModelScores
    * User experience analytics model scores
    *
    * @param UserExperienceAnalyticsModelScores[] $val The userExperienceAnalyticsModelScores
    *
    * @return DeviceManagement
    */
    public function setUserExperienceAnalyticsModelScores($val)
    {
        $this->_propDict["userExperienceAnalyticsModelScores"] = $val;
        return $this;
    }
    

     /** 
     * Gets the userExperienceAnalyticsNotAutopilotReadyDevice
    * User experience analytics devices not Windows Autopilot ready.
     *
     * @return UserExperienceAnalyticsNotAutopilotReadyDevice[]|null The userExperienceAnalyticsNotAutopilotReadyDevice
     */
    public function getUserExperienceAnalyticsNotAutopilotReadyDevice()
    {
        if (array_key_exists('userExperienceAnalyticsNotAutopilotReadyDevice', $this->_propDict) && !is_null($this->_propDict['userExperienceAnalyticsNotAutopilotReadyDevice'])) {
           $userExperienceAnalyticsNotAutopilotReadyDevice = [];
           if (count($this->_propDict['userExperienceAnalyticsNotAutopilotReadyDevice']) > 0 && is_a($this->_propDict['userExperienceAnalyticsNotAutopilotReadyDevice'][0], 'UserExperienceAnalyticsNotAutopilotReadyDevice')) {
              return $this->_propDict['userExperienceAnalyticsNotAutopilotReadyDevice'];
           }
           foreach ($this->_propDict['userExperienceAnalyticsNotAutopilotReadyDevice'] as $singleValue) {
              $userExperienceAnalyticsNotAutopilotReadyDevice []= new UserExperienceAnalyticsNotAutopilotReadyDevice($singleValue);
           }
           $this->_propDict['userExperienceAnalyticsNotAutopilotReadyDevice'] = $userExperienceAnalyticsNotAutopilotReadyDevice;
           return $this->_propDict['userExperienceAnalyticsNotAutopilotReadyDevice'];
        }
        return null;
    }
    
    /** 
    * Sets the userExperienceAnalyticsNotAutopilotReadyDevice
    * User experience analytics devices not Windows Autopilot ready.
    *
    * @param UserExperienceAnalyticsNotAutopilotReadyDevice[] $val The userExperienceAnalyticsNotAutopilotReadyDevice
    *
    * @return DeviceManagement
    */
    public function setUserExperienceAnalyticsNotAutopilotReadyDevice($val)
    {
        $this->_propDict["userExperienceAnalyticsNotAutopilotReadyDevice"] = $val;
        return $this;
    }
    
    /**
    * Gets the userExperienceAnalyticsOverview
    * User experience analytics overview
    *
    * @return UserExperienceAnalyticsOverview|null The userExperienceAnalyticsOverview
    */
    public function getUserExperienceAnalyticsOverview()
    {
        if (array_key_exists("userExperienceAnalyticsOverview", $this->_propDict) && !is_null($this->_propDict["userExperienceAnalyticsOverview"])) {
            if (is_a($this->_propDict["userExperienceAnalyticsOverview"], "\Beta\Microsoft\Graph\Model\UserExperienceAnalyticsOverview")) {
                return $this->_propDict["userExperienceAnalyticsOverview"];
            } else {
                $this->_propDict["userExperienceAnalyticsOverview"] = new UserExperienceAnalyticsOverview($this->_propDict["userExperienceAnalyticsOverview"]);
                return $this->_propDict["userExperienceAnalyticsOverview"];
            }
        }
        return null;
    }
    
    /**
    * Sets the userExperienceAnalyticsOverview
    * User experience analytics overview
    *
    * @param UserExperienceAnalyticsOverview $val The userExperienceAnalyticsOverview
    *
    * @return DeviceManagement
    */
    public function setUserExperienceAnalyticsOverview($val)
    {
        $this->_propDict["userExperienceAnalyticsOverview"] = $val;
        return $this;
    }
    
    /**
    * Gets the userExperienceAnalyticsRegressionSummary
    * User experience analytics regression summary
    *
    * @return UserExperienceAnalyticsRegressionSummary|null The userExperienceAnalyticsRegressionSummary
    */
    public function getUserExperienceAnalyticsRegressionSummary()
    {
        if (array_key_exists("userExperienceAnalyticsRegressionSummary", $this->_propDict) && !is_null($this->_propDict["userExperienceAnalyticsRegressionSummary"])) {
            if (is_a($this->_propDict["userExperienceAnalyticsRegressionSummary"], "\Beta\Microsoft\Graph\Model\UserExperienceAnalyticsRegressionSummary")) {
                return $this->_propDict["userExperienceAnalyticsRegressionSummary"];
            } else {
                $this->_propDict["userExperienceAnalyticsRegressionSummary"] = new UserExperienceAnalyticsRegressionSummary($this->_propDict["userExperienceAnalyticsRegressionSummary"]);
                return $this->_propDict["userExperienceAnalyticsRegressionSummary"];
            }
        }
        return null;
    }
    
    /**
    * Sets the userExperienceAnalyticsRegressionSummary
    * User experience analytics regression summary
    *
    * @param UserExperienceAnalyticsRegressionSummary $val The userExperienceAnalyticsRegressionSummary
    *
    * @return DeviceManagement
    */
    public function setUserExperienceAnalyticsRegressionSummary($val)
    {
        $this->_propDict["userExperienceAnalyticsRegressionSummary"] = $val;
        return $this;
    }
    

     /** 
     * Gets the userExperienceAnalyticsRemoteConnection
    * User experience analytics remote connection
     *
     * @return UserExperienceAnalyticsRemoteConnection[]|null The userExperienceAnalyticsRemoteConnection
     */
    public function getUserExperienceAnalyticsRemoteConnection()
    {
        if (array_key_exists('userExperienceAnalyticsRemoteConnection', $this->_propDict) && !is_null($this->_propDict['userExperienceAnalyticsRemoteConnection'])) {
           $userExperienceAnalyticsRemoteConnection = [];
           if (count($this->_propDict['userExperienceAnalyticsRemoteConnection']) > 0 && is_a($this->_propDict['userExperienceAnalyticsRemoteConnection'][0], 'UserExperienceAnalyticsRemoteConnection')) {
              return $this->_propDict['userExperienceAnalyticsRemoteConnection'];
           }
           foreach ($this->_propDict['userExperienceAnalyticsRemoteConnection'] as $singleValue) {
              $userExperienceAnalyticsRemoteConnection []= new UserExperienceAnalyticsRemoteConnection($singleValue);
           }
           $this->_propDict['userExperienceAnalyticsRemoteConnection'] = $userExperienceAnalyticsRemoteConnection;
           return $this->_propDict['userExperienceAnalyticsRemoteConnection'];
        }
        return null;
    }
    
    /** 
    * Sets the userExperienceAnalyticsRemoteConnection
    * User experience analytics remote connection
    *
    * @param UserExperienceAnalyticsRemoteConnection[] $val The userExperienceAnalyticsRemoteConnection
    *
    * @return DeviceManagement
    */
    public function setUserExperienceAnalyticsRemoteConnection($val)
    {
        $this->_propDict["userExperienceAnalyticsRemoteConnection"] = $val;
        return $this;
    }
    

     /** 
     * Gets the userExperienceAnalyticsResourcePerformance
    * User experience analytics resource performance
     *
     * @return UserExperienceAnalyticsResourcePerformance[]|null The userExperienceAnalyticsResourcePerformance
     */
    public function getUserExperienceAnalyticsResourcePerformance()
    {
        if (array_key_exists('userExperienceAnalyticsResourcePerformance', $this->_propDict) && !is_null($this->_propDict['userExperienceAnalyticsResourcePerformance'])) {
           $userExperienceAnalyticsResourcePerformance = [];
           if (count($this->_propDict['userExperienceAnalyticsResourcePerformance']) > 0 && is_a($this->_propDict['userExperienceAnalyticsResourcePerformance'][0], 'UserExperienceAnalyticsResourcePerformance')) {
              return $this->_propDict['userExperienceAnalyticsResourcePerformance'];
           }
           foreach ($this->_propDict['userExperienceAnalyticsResourcePerformance'] as $singleValue) {
              $userExperienceAnalyticsResourcePerformance []= new UserExperienceAnalyticsResourcePerformance($singleValue);
           }
           $this->_propDict['userExperienceAnalyticsResourcePerformance'] = $userExperienceAnalyticsResourcePerformance;
           return $this->_propDict['userExperienceAnalyticsResourcePerformance'];
        }
        return null;
    }
    
    /** 
    * Sets the userExperienceAnalyticsResourcePerformance
    * User experience analytics resource performance
    *
    * @param UserExperienceAnalyticsResourcePerformance[] $val The userExperienceAnalyticsResourcePerformance
    *
    * @return DeviceManagement
    */
    public function setUserExperienceAnalyticsResourcePerformance($val)
    {
        $this->_propDict["userExperienceAnalyticsResourcePerformance"] = $val;
        return $this;
    }
    

     /** 
     * Gets the userExperienceAnalyticsScoreHistory
    * User experience analytics device Startup Score History
     *
     * @return UserExperienceAnalyticsScoreHistory[]|null The userExperienceAnalyticsScoreHistory
     */
    public function getUserExperienceAnalyticsScoreHistory()
    {
        if (array_key_exists('userExperienceAnalyticsScoreHistory', $this->_propDict) && !is_null($this->_propDict['userExperienceAnalyticsScoreHistory'])) {
           $userExperienceAnalyticsScoreHistory = [];
           if (count($this->_propDict['userExperienceAnalyticsScoreHistory']) > 0 && is_a($this->_propDict['userExperienceAnalyticsScoreHistory'][0], 'UserExperienceAnalyticsScoreHistory')) {
              return $this->_propDict['userExperienceAnalyticsScoreHistory'];
           }
           foreach ($this->_propDict['userExperienceAnalyticsScoreHistory'] as $singleValue) {
              $userExperienceAnalyticsScoreHistory []= new UserExperienceAnalyticsScoreHistory($singleValue);
           }
           $this->_propDict['userExperienceAnalyticsScoreHistory'] = $userExperienceAnalyticsScoreHistory;
           return $this->_propDict['userExperienceAnalyticsScoreHistory'];
        }
        return null;
    }
    
    /** 
    * Sets the userExperienceAnalyticsScoreHistory
    * User experience analytics device Startup Score History
    *
    * @param UserExperienceAnalyticsScoreHistory[] $val The userExperienceAnalyticsScoreHistory
    *
    * @return DeviceManagement
    */
    public function setUserExperienceAnalyticsScoreHistory($val)
    {
        $this->_propDict["userExperienceAnalyticsScoreHistory"] = $val;
        return $this;
    }
    
    /**
    * Gets the userExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric
    * User experience analytics work from anywhere hardware readiness metrics.
    *
    * @return UserExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric|null The userExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric
    */
    public function getUserExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric()
    {
        if (array_key_exists("userExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric", $this->_propDict) && !is_null($this->_propDict["userExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric"])) {
            if (is_a($this->_propDict["userExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric"], "\Beta\Microsoft\Graph\Model\UserExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric")) {
                return $this->_propDict["userExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric"];
            } else {
                $this->_propDict["userExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric"] = new UserExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric($this->_propDict["userExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric"]);
                return $this->_propDict["userExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric"];
            }
        }
        return null;
    }
    
    /**
    * Sets the userExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric
    * User experience analytics work from anywhere hardware readiness metrics.
    *
    * @param UserExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric $val The userExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric
    *
    * @return DeviceManagement
    */
    public function setUserExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric($val)
    {
        $this->_propDict["userExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric"] = $val;
        return $this;
    }
    

     /** 
     * Gets the userExperienceAnalyticsWorkFromAnywhereMetrics
    * User experience analytics work from anywhere metrics.
     *
     * @return UserExperienceAnalyticsWorkFromAnywhereMetric[]|null The userExperienceAnalyticsWorkFromAnywhereMetrics
     */
    public function getUserExperienceAnalyticsWorkFromAnywhereMetrics()
    {
        if (array_key_exists('userExperienceAnalyticsWorkFromAnywhereMetrics', $this->_propDict) && !is_null($this->_propDict['userExperienceAnalyticsWorkFromAnywhereMetrics'])) {
           $userExperienceAnalyticsWorkFromAnywhereMetrics = [];
           if (count($this->_propDict['userExperienceAnalyticsWorkFromAnywhereMetrics']) > 0 && is_a($this->_propDict['userExperienceAnalyticsWorkFromAnywhereMetrics'][0], 'UserExperienceAnalyticsWorkFromAnywhereMetric')) {
              return $this->_propDict['userExperienceAnalyticsWorkFromAnywhereMetrics'];
           }
           foreach ($this->_propDict['userExperienceAnalyticsWorkFromAnywhereMetrics'] as $singleValue) {
              $userExperienceAnalyticsWorkFromAnywhereMetrics []= new UserExperienceAnalyticsWorkFromAnywhereMetric($singleValue);
           }
           $this->_propDict['userExperienceAnalyticsWorkFromAnywhereMetrics'] = $userExperienceAnalyticsWorkFromAnywhereMetrics;
           return $this->_propDict['userExperienceAnalyticsWorkFromAnywhereMetrics'];
        }
        return null;
    }
    
    /** 
    * Sets the userExperienceAnalyticsWorkFromAnywhereMetrics
    * User experience analytics work from anywhere metrics.
    *
    * @param UserExperienceAnalyticsWorkFromAnywhereMetric[] $val The userExperienceAnalyticsWorkFromAnywhereMetrics
    *
    * @return DeviceManagement
    */
    public function setUserExperienceAnalyticsWorkFromAnywhereMetrics($val)
    {
        $this->_propDict["userExperienceAnalyticsWorkFromAnywhereMetrics"] = $val;
        return $this;
    }
    

     /** 
     * Gets the windowsMalwareInformation
    * The list of affected malware in the tenant.
     *
     * @return WindowsMalwareInformation[]|null The windowsMalwareInformation
     */
    public function getWindowsMalwareInformation()
    {
        if (array_key_exists('windowsMalwareInformation', $this->_propDict) && !is_null($this->_propDict['windowsMalwareInformation'])) {
           $windowsMalwareInformation = [];
           if (count($this->_propDict['windowsMalwareInformation']) > 0 && is_a($this->_propDict['windowsMalwareInformation'][0], 'WindowsMalwareInformation')) {
              return $this->_propDict['windowsMalwareInformation'];
           }
           foreach ($this->_propDict['windowsMalwareInformation'] as $singleValue) {
              $windowsMalwareInformation []= new WindowsMalwareInformation($singleValue);
           }
           $this->_propDict['windowsMalwareInformation'] = $windowsMalwareInformation;
           return $this->_propDict['windowsMalwareInformation'];
        }
        return null;
    }
    
    /** 
    * Sets the windowsMalwareInformation
    * The list of affected malware in the tenant.
    *
    * @param WindowsMalwareInformation[] $val The windowsMalwareInformation
    *
    * @return DeviceManagement
    */
    public function setWindowsMalwareInformation($val)
    {
        $this->_propDict["windowsMalwareInformation"] = $val;
        return $this;
    }
    

     /** 
     * Gets the derivedCredentials
    * Collection of Derived credential settings associated with account.
     *
     * @return DeviceManagementDerivedCredentialSettings[]|null The derivedCredentials
     */
    public function getDerivedCredentials()
    {
        if (array_key_exists('derivedCredentials', $this->_propDict) && !is_null($this->_propDict['derivedCredentials'])) {
           $derivedCredentials = [];
           if (count($this->_propDict['derivedCredentials']) > 0 && is_a($this->_propDict['derivedCredentials'][0], 'DeviceManagementDerivedCredentialSettings')) {
              return $this->_propDict['derivedCredentials'];
           }
           foreach ($this->_propDict['derivedCredentials'] as $singleValue) {
              $derivedCredentials []= new DeviceManagementDerivedCredentialSettings($singleValue);
           }
           $this->_propDict['derivedCredentials'] = $derivedCredentials;
           return $this->_propDict['derivedCredentials'];
        }
        return null;
    }
    
    /** 
    * Sets the derivedCredentials
    * Collection of Derived credential settings associated with account.
    *
    * @param DeviceManagementDerivedCredentialSettings[] $val The derivedCredentials
    *
    * @return DeviceManagement
    */
    public function setDerivedCredentials($val)
    {
        $this->_propDict["derivedCredentials"] = $val;
        return $this;
    }
    

     /** 
     * Gets the resourceAccessProfiles
    * Collection of resource access settings associated with account.
     *
     * @return DeviceManagementResourceAccessProfileBase[]|null The resourceAccessProfiles
     */
    public function getResourceAccessProfiles()
    {
        if (array_key_exists('resourceAccessProfiles', $this->_propDict) && !is_null($this->_propDict['resourceAccessProfiles'])) {
           $resourceAccessProfiles = [];
           if (count($this->_propDict['resourceAccessProfiles']) > 0 && is_a($this->_propDict['resourceAccessProfiles'][0], 'DeviceManagementResourceAccessProfileBase')) {
              return $this->_propDict['resourceAccessProfiles'];
           }
           foreach ($this->_propDict['resourceAccessProfiles'] as $singleValue) {
              $resourceAccessProfiles []= new DeviceManagementResourceAccessProfileBase($singleValue);
           }
           $this->_propDict['resourceAccessProfiles'] = $resourceAccessProfiles;
           return $this->_propDict['resourceAccessProfiles'];
        }
        return null;
    }
    
    /** 
    * Sets the resourceAccessProfiles
    * Collection of resource access settings associated with account.
    *
    * @param DeviceManagementResourceAccessProfileBase[] $val The resourceAccessProfiles
    *
    * @return DeviceManagement
    */
    public function setResourceAccessProfiles($val)
    {
        $this->_propDict["resourceAccessProfiles"] = $val;
        return $this;
    }
    

     /** 
     * Gets the appleUserInitiatedEnrollmentProfiles
    * Apple user initiated enrollment profiles
     *
     * @return AppleUserInitiatedEnrollmentProfile[]|null The appleUserInitiatedEnrollmentProfiles
     */
    public function getAppleUserInitiatedEnrollmentProfiles()
    {
        if (array_key_exists('appleUserInitiatedEnrollmentProfiles', $this->_propDict) && !is_null($this->_propDict['appleUserInitiatedEnrollmentProfiles'])) {
           $appleUserInitiatedEnrollmentProfiles = [];
           if (count($this->_propDict['appleUserInitiatedEnrollmentProfiles']) > 0 && is_a($this->_propDict['appleUserInitiatedEnrollmentProfiles'][0], 'AppleUserInitiatedEnrollmentProfile')) {
              return $this->_propDict['appleUserInitiatedEnrollmentProfiles'];
           }
           foreach ($this->_propDict['appleUserInitiatedEnrollmentProfiles'] as $singleValue) {
              $appleUserInitiatedEnrollmentProfiles []= new AppleUserInitiatedEnrollmentProfile($singleValue);
           }
           $this->_propDict['appleUserInitiatedEnrollmentProfiles'] = $appleUserInitiatedEnrollmentProfiles;
           return $this->_propDict['appleUserInitiatedEnrollmentProfiles'];
        }
        return null;
    }
    
    /** 
    * Sets the appleUserInitiatedEnrollmentProfiles
    * Apple user initiated enrollment profiles
    *
    * @param AppleUserInitiatedEnrollmentProfile[] $val The appleUserInitiatedEnrollmentProfiles
    *
    * @return DeviceManagement
    */
    public function setAppleUserInitiatedEnrollmentProfiles($val)
    {
        $this->_propDict["appleUserInitiatedEnrollmentProfiles"] = $val;
        return $this;
    }
    

     /** 
     * Gets the depOnboardingSettings
    * This collections of multiple DEP tokens per-tenant.
     *
     * @return DepOnboardingSetting[]|null The depOnboardingSettings
     */
    public function getDepOnboardingSettings()
    {
        if (array_key_exists('depOnboardingSettings', $this->_propDict) && !is_null($this->_propDict['depOnboardingSettings'])) {
           $depOnboardingSettings = [];
           if (count($this->_propDict['depOnboardingSettings']) > 0 && is_a($this->_propDict['depOnboardingSettings'][0], 'DepOnboardingSetting')) {
              return $this->_propDict['depOnboardingSettings'];
           }
           foreach ($this->_propDict['depOnboardingSettings'] as $singleValue) {
              $depOnboardingSettings []= new DepOnboardingSetting($singleValue);
           }
           $this->_propDict['depOnboardingSettings'] = $depOnboardingSettings;
           return $this->_propDict['depOnboardingSettings'];
        }
        return null;
    }
    
    /** 
    * Sets the depOnboardingSettings
    * This collections of multiple DEP tokens per-tenant.
    *
    * @param DepOnboardingSetting[] $val The depOnboardingSettings
    *
    * @return DeviceManagement
    */
    public function setDepOnboardingSettings($val)
    {
        $this->_propDict["depOnboardingSettings"] = $val;
        return $this;
    }
    

     /** 
     * Gets the importedDeviceIdentities
    * The imported device identities.
     *
     * @return ImportedDeviceIdentity[]|null The importedDeviceIdentities
     */
    public function getImportedDeviceIdentities()
    {
        if (array_key_exists('importedDeviceIdentities', $this->_propDict) && !is_null($this->_propDict['importedDeviceIdentities'])) {
           $importedDeviceIdentities = [];
           if (count($this->_propDict['importedDeviceIdentities']) > 0 && is_a($this->_propDict['importedDeviceIdentities'][0], 'ImportedDeviceIdentity')) {
              return $this->_propDict['importedDeviceIdentities'];
           }
           foreach ($this->_propDict['importedDeviceIdentities'] as $singleValue) {
              $importedDeviceIdentities []= new ImportedDeviceIdentity($singleValue);
           }
           $this->_propDict['importedDeviceIdentities'] = $importedDeviceIdentities;
           return $this->_propDict['importedDeviceIdentities'];
        }
        return null;
    }
    
    /** 
    * Sets the importedDeviceIdentities
    * The imported device identities.
    *
    * @param ImportedDeviceIdentity[] $val The importedDeviceIdentities
    *
    * @return DeviceManagement
    */
    public function setImportedDeviceIdentities($val)
    {
        $this->_propDict["importedDeviceIdentities"] = $val;
        return $this;
    }
    

     /** 
     * Gets the importedWindowsAutopilotDeviceIdentities
    * Collection of imported Windows autopilot devices.
     *
     * @return ImportedWindowsAutopilotDeviceIdentity[]|null The importedWindowsAutopilotDeviceIdentities
     */
    public function getImportedWindowsAutopilotDeviceIdentities()
    {
        if (array_key_exists('importedWindowsAutopilotDeviceIdentities', $this->_propDict) && !is_null($this->_propDict['importedWindowsAutopilotDeviceIdentities'])) {
           $importedWindowsAutopilotDeviceIdentities = [];
           if (count($this->_propDict['importedWindowsAutopilotDeviceIdentities']) > 0 && is_a($this->_propDict['importedWindowsAutopilotDeviceIdentities'][0], 'ImportedWindowsAutopilotDeviceIdentity')) {
              return $this->_propDict['importedWindowsAutopilotDeviceIdentities'];
           }
           foreach ($this->_propDict['importedWindowsAutopilotDeviceIdentities'] as $singleValue) {
              $importedWindowsAutopilotDeviceIdentities []= new ImportedWindowsAutopilotDeviceIdentity($singleValue);
           }
           $this->_propDict['importedWindowsAutopilotDeviceIdentities'] = $importedWindowsAutopilotDeviceIdentities;
           return $this->_propDict['importedWindowsAutopilotDeviceIdentities'];
        }
        return null;
    }
    
    /** 
    * Sets the importedWindowsAutopilotDeviceIdentities
    * Collection of imported Windows autopilot devices.
    *
    * @param ImportedWindowsAutopilotDeviceIdentity[] $val The importedWindowsAutopilotDeviceIdentities
    *
    * @return DeviceManagement
    */
    public function setImportedWindowsAutopilotDeviceIdentities($val)
    {
        $this->_propDict["importedWindowsAutopilotDeviceIdentities"] = $val;
        return $this;
    }
    

     /** 
     * Gets the windowsAutopilotDeploymentProfiles
    * Windows auto pilot deployment profiles
     *
     * @return WindowsAutopilotDeploymentProfile[]|null The windowsAutopilotDeploymentProfiles
     */
    public function getWindowsAutopilotDeploymentProfiles()
    {
        if (array_key_exists('windowsAutopilotDeploymentProfiles', $this->_propDict) && !is_null($this->_propDict['windowsAutopilotDeploymentProfiles'])) {
           $windowsAutopilotDeploymentProfiles = [];
           if (count($this->_propDict['windowsAutopilotDeploymentProfiles']) > 0 && is_a($this->_propDict['windowsAutopilotDeploymentProfiles'][0], 'WindowsAutopilotDeploymentProfile')) {
              return $this->_propDict['windowsAutopilotDeploymentProfiles'];
           }
           foreach ($this->_propDict['windowsAutopilotDeploymentProfiles'] as $singleValue) {
              $windowsAutopilotDeploymentProfiles []= new WindowsAutopilotDeploymentProfile($singleValue);
           }
           $this->_propDict['windowsAutopilotDeploymentProfiles'] = $windowsAutopilotDeploymentProfiles;
           return $this->_propDict['windowsAutopilotDeploymentProfiles'];
        }
        return null;
    }
    
    /** 
    * Sets the windowsAutopilotDeploymentProfiles
    * Windows auto pilot deployment profiles
    *
    * @param WindowsAutopilotDeploymentProfile[] $val The windowsAutopilotDeploymentProfiles
    *
    * @return DeviceManagement
    */
    public function setWindowsAutopilotDeploymentProfiles($val)
    {
        $this->_propDict["windowsAutopilotDeploymentProfiles"] = $val;
        return $this;
    }
    

     /** 
     * Gets the windowsAutopilotDeviceIdentities
    * The Windows autopilot device identities contained collection.
     *
     * @return WindowsAutopilotDeviceIdentity[]|null The windowsAutopilotDeviceIdentities
     */
    public function getWindowsAutopilotDeviceIdentities()
    {
        if (array_key_exists('windowsAutopilotDeviceIdentities', $this->_propDict) && !is_null($this->_propDict['windowsAutopilotDeviceIdentities'])) {
           $windowsAutopilotDeviceIdentities = [];
           if (count($this->_propDict['windowsAutopilotDeviceIdentities']) > 0 && is_a($this->_propDict['windowsAutopilotDeviceIdentities'][0], 'WindowsAutopilotDeviceIdentity')) {
              return $this->_propDict['windowsAutopilotDeviceIdentities'];
           }
           foreach ($this->_propDict['windowsAutopilotDeviceIdentities'] as $singleValue) {
              $windowsAutopilotDeviceIdentities []= new WindowsAutopilotDeviceIdentity($singleValue);
           }
           $this->_propDict['windowsAutopilotDeviceIdentities'] = $windowsAutopilotDeviceIdentities;
           return $this->_propDict['windowsAutopilotDeviceIdentities'];
        }
        return null;
    }
    
    /** 
    * Sets the windowsAutopilotDeviceIdentities
    * The Windows autopilot device identities contained collection.
    *
    * @param WindowsAutopilotDeviceIdentity[] $val The windowsAutopilotDeviceIdentities
    *
    * @return DeviceManagement
    */
    public function setWindowsAutopilotDeviceIdentities($val)
    {
        $this->_propDict["windowsAutopilotDeviceIdentities"] = $val;
        return $this;
    }
    
    /**
    * Gets the windowsAutopilotSettings
    * The Windows autopilot account settings.
    *
    * @return WindowsAutopilotSettings|null The windowsAutopilotSettings
    */
    public function getWindowsAutopilotSettings()
    {
        if (array_key_exists("windowsAutopilotSettings", $this->_propDict) && !is_null($this->_propDict["windowsAutopilotSettings"])) {
            if (is_a($this->_propDict["windowsAutopilotSettings"], "\Beta\Microsoft\Graph\Model\WindowsAutopilotSettings")) {
                return $this->_propDict["windowsAutopilotSettings"];
            } else {
                $this->_propDict["windowsAutopilotSettings"] = new WindowsAutopilotSettings($this->_propDict["windowsAutopilotSettings"]);
                return $this->_propDict["windowsAutopilotSettings"];
            }
        }
        return null;
    }
    
    /**
    * Sets the windowsAutopilotSettings
    * The Windows autopilot account settings.
    *
    * @param WindowsAutopilotSettings $val The windowsAutopilotSettings
    *
    * @return DeviceManagement
    */
    public function setWindowsAutopilotSettings($val)
    {
        $this->_propDict["windowsAutopilotSettings"] = $val;
        return $this;
    }
    

     /** 
     * Gets the managementConditions
    * The management conditions associated with device management of the company.
     *
     * @return ManagementCondition[]|null The managementConditions
     */
    public function getManagementConditions()
    {
        if (array_key_exists('managementConditions', $this->_propDict) && !is_null($this->_propDict['managementConditions'])) {
           $managementConditions = [];
           if (count($this->_propDict['managementConditions']) > 0 && is_a($this->_propDict['managementConditions'][0], 'ManagementCondition')) {
              return $this->_propDict['managementConditions'];
           }
           foreach ($this->_propDict['managementConditions'] as $singleValue) {
              $managementConditions []= new ManagementCondition($singleValue);
           }
           $this->_propDict['managementConditions'] = $managementConditions;
           return $this->_propDict['managementConditions'];
        }
        return null;
    }
    
    /** 
    * Sets the managementConditions
    * The management conditions associated with device management of the company.
    *
    * @param ManagementCondition[] $val The managementConditions
    *
    * @return DeviceManagement
    */
    public function setManagementConditions($val)
    {
        $this->_propDict["managementConditions"] = $val;
        return $this;
    }
    

     /** 
     * Gets the managementConditionStatements
    * The management condition statements associated with device management of the company.
     *
     * @return ManagementConditionStatement[]|null The managementConditionStatements
     */
    public function getManagementConditionStatements()
    {
        if (array_key_exists('managementConditionStatements', $this->_propDict) && !is_null($this->_propDict['managementConditionStatements'])) {
           $managementConditionStatements = [];
           if (count($this->_propDict['managementConditionStatements']) > 0 && is_a($this->_propDict['managementConditionStatements'][0], 'ManagementConditionStatement')) {
              return $this->_propDict['managementConditionStatements'];
           }
           foreach ($this->_propDict['managementConditionStatements'] as $singleValue) {
              $managementConditionStatements []= new ManagementConditionStatement($singleValue);
           }
           $this->_propDict['managementConditionStatements'] = $managementConditionStatements;
           return $this->_propDict['managementConditionStatements'];
        }
        return null;
    }
    
    /** 
    * Sets the managementConditionStatements
    * The management condition statements associated with device management of the company.
    *
    * @param ManagementConditionStatement[] $val The managementConditionStatements
    *
    * @return DeviceManagement
    */
    public function setManagementConditionStatements($val)
    {
        $this->_propDict["managementConditionStatements"] = $val;
        return $this;
    }
    

     /** 
     * Gets the groupPolicyMigrationReports
    * A list of Group Policy migration reports.
     *
     * @return GroupPolicyMigrationReport[]|null The groupPolicyMigrationReports
     */
    public function getGroupPolicyMigrationReports()
    {
        if (array_key_exists('groupPolicyMigrationReports', $this->_propDict) && !is_null($this->_propDict['groupPolicyMigrationReports'])) {
           $groupPolicyMigrationReports = [];
           if (count($this->_propDict['groupPolicyMigrationReports']) > 0 && is_a($this->_propDict['groupPolicyMigrationReports'][0], 'GroupPolicyMigrationReport')) {
              return $this->_propDict['groupPolicyMigrationReports'];
           }
           foreach ($this->_propDict['groupPolicyMigrationReports'] as $singleValue) {
              $groupPolicyMigrationReports []= new GroupPolicyMigrationReport($singleValue);
           }
           $this->_propDict['groupPolicyMigrationReports'] = $groupPolicyMigrationReports;
           return $this->_propDict['groupPolicyMigrationReports'];
        }
        return null;
    }
    
    /** 
    * Sets the groupPolicyMigrationReports
    * A list of Group Policy migration reports.
    *
    * @param GroupPolicyMigrationReport[] $val The groupPolicyMigrationReports
    *
    * @return DeviceManagement
    */
    public function setGroupPolicyMigrationReports($val)
    {
        $this->_propDict["groupPolicyMigrationReports"] = $val;
        return $this;
    }
    

     /** 
     * Gets the groupPolicyObjectFiles
    * A list of Group Policy Object files uploaded.
     *
     * @return GroupPolicyObjectFile[]|null The groupPolicyObjectFiles
     */
    public function getGroupPolicyObjectFiles()
    {
        if (array_key_exists('groupPolicyObjectFiles', $this->_propDict) && !is_null($this->_propDict['groupPolicyObjectFiles'])) {
           $groupPolicyObjectFiles = [];
           if (count($this->_propDict['groupPolicyObjectFiles']) > 0 && is_a($this->_propDict['groupPolicyObjectFiles'][0], 'GroupPolicyObjectFile')) {
              return $this->_propDict['groupPolicyObjectFiles'];
           }
           foreach ($this->_propDict['groupPolicyObjectFiles'] as $singleValue) {
              $groupPolicyObjectFiles []= new GroupPolicyObjectFile($singleValue);
           }
           $this->_propDict['groupPolicyObjectFiles'] = $groupPolicyObjectFiles;
           return $this->_propDict['groupPolicyObjectFiles'];
        }
        return null;
    }
    
    /** 
    * Sets the groupPolicyObjectFiles
    * A list of Group Policy Object files uploaded.
    *
    * @param GroupPolicyObjectFile[] $val The groupPolicyObjectFiles
    *
    * @return DeviceManagement
    */
    public function setGroupPolicyObjectFiles($val)
    {
        $this->_propDict["groupPolicyObjectFiles"] = $val;
        return $this;
    }
    

     /** 
     * Gets the groupPolicyCategories
    * The available group policy categories for this account.
     *
     * @return GroupPolicyCategory[]|null The groupPolicyCategories
     */
    public function getGroupPolicyCategories()
    {
        if (array_key_exists('groupPolicyCategories', $this->_propDict) && !is_null($this->_propDict['groupPolicyCategories'])) {
           $groupPolicyCategories = [];
           if (count($this->_propDict['groupPolicyCategories']) > 0 && is_a($this->_propDict['groupPolicyCategories'][0], 'GroupPolicyCategory')) {
              return $this->_propDict['groupPolicyCategories'];
           }
           foreach ($this->_propDict['groupPolicyCategories'] as $singleValue) {
              $groupPolicyCategories []= new GroupPolicyCategory($singleValue);
           }
           $this->_propDict['groupPolicyCategories'] = $groupPolicyCategories;
           return $this->_propDict['groupPolicyCategories'];
        }
        return null;
    }
    
    /** 
    * Sets the groupPolicyCategories
    * The available group policy categories for this account.
    *
    * @param GroupPolicyCategory[] $val The groupPolicyCategories
    *
    * @return DeviceManagement
    */
    public function setGroupPolicyCategories($val)
    {
        $this->_propDict["groupPolicyCategories"] = $val;
        return $this;
    }
    

     /** 
     * Gets the groupPolicyConfigurations
    * The group policy configurations created by this account.
     *
     * @return GroupPolicyConfiguration[]|null The groupPolicyConfigurations
     */
    public function getGroupPolicyConfigurations()
    {
        if (array_key_exists('groupPolicyConfigurations', $this->_propDict) && !is_null($this->_propDict['groupPolicyConfigurations'])) {
           $groupPolicyConfigurations = [];
           if (count($this->_propDict['groupPolicyConfigurations']) > 0 && is_a($this->_propDict['groupPolicyConfigurations'][0], 'GroupPolicyConfiguration')) {
              return $this->_propDict['groupPolicyConfigurations'];
           }
           foreach ($this->_propDict['groupPolicyConfigurations'] as $singleValue) {
              $groupPolicyConfigurations []= new GroupPolicyConfiguration($singleValue);
           }
           $this->_propDict['groupPolicyConfigurations'] = $groupPolicyConfigurations;
           return $this->_propDict['groupPolicyConfigurations'];
        }
        return null;
    }
    
    /** 
    * Sets the groupPolicyConfigurations
    * The group policy configurations created by this account.
    *
    * @param GroupPolicyConfiguration[] $val The groupPolicyConfigurations
    *
    * @return DeviceManagement
    */
    public function setGroupPolicyConfigurations($val)
    {
        $this->_propDict["groupPolicyConfigurations"] = $val;
        return $this;
    }
    

     /** 
     * Gets the groupPolicyDefinitionFiles
    * The available group policy definition files for this account.
     *
     * @return GroupPolicyDefinitionFile[]|null The groupPolicyDefinitionFiles
     */
    public function getGroupPolicyDefinitionFiles()
    {
        if (array_key_exists('groupPolicyDefinitionFiles', $this->_propDict) && !is_null($this->_propDict['groupPolicyDefinitionFiles'])) {
           $groupPolicyDefinitionFiles = [];
           if (count($this->_propDict['groupPolicyDefinitionFiles']) > 0 && is_a($this->_propDict['groupPolicyDefinitionFiles'][0], 'GroupPolicyDefinitionFile')) {
              return $this->_propDict['groupPolicyDefinitionFiles'];
           }
           foreach ($this->_propDict['groupPolicyDefinitionFiles'] as $singleValue) {
              $groupPolicyDefinitionFiles []= new GroupPolicyDefinitionFile($singleValue);
           }
           $this->_propDict['groupPolicyDefinitionFiles'] = $groupPolicyDefinitionFiles;
           return $this->_propDict['groupPolicyDefinitionFiles'];
        }
        return null;
    }
    
    /** 
    * Sets the groupPolicyDefinitionFiles
    * The available group policy definition files for this account.
    *
    * @param GroupPolicyDefinitionFile[] $val The groupPolicyDefinitionFiles
    *
    * @return DeviceManagement
    */
    public function setGroupPolicyDefinitionFiles($val)
    {
        $this->_propDict["groupPolicyDefinitionFiles"] = $val;
        return $this;
    }
    

     /** 
     * Gets the groupPolicyDefinitions
    * The available group policy definitions for this account.
     *
     * @return GroupPolicyDefinition[]|null The groupPolicyDefinitions
     */
    public function getGroupPolicyDefinitions()
    {
        if (array_key_exists('groupPolicyDefinitions', $this->_propDict) && !is_null($this->_propDict['groupPolicyDefinitions'])) {
           $groupPolicyDefinitions = [];
           if (count($this->_propDict['groupPolicyDefinitions']) > 0 && is_a($this->_propDict['groupPolicyDefinitions'][0], 'GroupPolicyDefinition')) {
              return $this->_propDict['groupPolicyDefinitions'];
           }
           foreach ($this->_propDict['groupPolicyDefinitions'] as $singleValue) {
              $groupPolicyDefinitions []= new GroupPolicyDefinition($singleValue);
           }
           $this->_propDict['groupPolicyDefinitions'] = $groupPolicyDefinitions;
           return $this->_propDict['groupPolicyDefinitions'];
        }
        return null;
    }
    
    /** 
    * Sets the groupPolicyDefinitions
    * The available group policy definitions for this account.
    *
    * @param GroupPolicyDefinition[] $val The groupPolicyDefinitions
    *
    * @return DeviceManagement
    */
    public function setGroupPolicyDefinitions($val)
    {
        $this->_propDict["groupPolicyDefinitions"] = $val;
        return $this;
    }
    

     /** 
     * Gets the groupPolicyUploadedDefinitionFiles
    * The available group policy uploaded definition files for this account.
     *
     * @return GroupPolicyUploadedDefinitionFile[]|null The groupPolicyUploadedDefinitionFiles
     */
    public function getGroupPolicyUploadedDefinitionFiles()
    {
        if (array_key_exists('groupPolicyUploadedDefinitionFiles', $this->_propDict) && !is_null($this->_propDict['groupPolicyUploadedDefinitionFiles'])) {
           $groupPolicyUploadedDefinitionFiles = [];
           if (count($this->_propDict['groupPolicyUploadedDefinitionFiles']) > 0 && is_a($this->_propDict['groupPolicyUploadedDefinitionFiles'][0], 'GroupPolicyUploadedDefinitionFile')) {
              return $this->_propDict['groupPolicyUploadedDefinitionFiles'];
           }
           foreach ($this->_propDict['groupPolicyUploadedDefinitionFiles'] as $singleValue) {
              $groupPolicyUploadedDefinitionFiles []= new GroupPolicyUploadedDefinitionFile($singleValue);
           }
           $this->_propDict['groupPolicyUploadedDefinitionFiles'] = $groupPolicyUploadedDefinitionFiles;
           return $this->_propDict['groupPolicyUploadedDefinitionFiles'];
        }
        return null;
    }
    
    /** 
    * Sets the groupPolicyUploadedDefinitionFiles
    * The available group policy uploaded definition files for this account.
    *
    * @param GroupPolicyUploadedDefinitionFile[] $val The groupPolicyUploadedDefinitionFiles
    *
    * @return DeviceManagement
    */
    public function setGroupPolicyUploadedDefinitionFiles($val)
    {
        $this->_propDict["groupPolicyUploadedDefinitionFiles"] = $val;
        return $this;
    }
    

     /** 
     * Gets the microsoftTunnelConfigurations
    * Collection of MicrosoftTunnelConfiguration settings associated with account.
     *
     * @return MicrosoftTunnelConfiguration[]|null The microsoftTunnelConfigurations
     */
    public function getMicrosoftTunnelConfigurations()
    {
        if (array_key_exists('microsoftTunnelConfigurations', $this->_propDict) && !is_null($this->_propDict['microsoftTunnelConfigurations'])) {
           $microsoftTunnelConfigurations = [];
           if (count($this->_propDict['microsoftTunnelConfigurations']) > 0 && is_a($this->_propDict['microsoftTunnelConfigurations'][0], 'MicrosoftTunnelConfiguration')) {
              return $this->_propDict['microsoftTunnelConfigurations'];
           }
           foreach ($this->_propDict['microsoftTunnelConfigurations'] as $singleValue) {
              $microsoftTunnelConfigurations []= new MicrosoftTunnelConfiguration($singleValue);
           }
           $this->_propDict['microsoftTunnelConfigurations'] = $microsoftTunnelConfigurations;
           return $this->_propDict['microsoftTunnelConfigurations'];
        }
        return null;
    }
    
    /** 
    * Sets the microsoftTunnelConfigurations
    * Collection of MicrosoftTunnelConfiguration settings associated with account.
    *
    * @param MicrosoftTunnelConfiguration[] $val The microsoftTunnelConfigurations
    *
    * @return DeviceManagement
    */
    public function setMicrosoftTunnelConfigurations($val)
    {
        $this->_propDict["microsoftTunnelConfigurations"] = $val;
        return $this;
    }
    

     /** 
     * Gets the microsoftTunnelHealthThresholds
    * Collection of MicrosoftTunnelHealthThreshold settings associated with account.
     *
     * @return MicrosoftTunnelHealthThreshold[]|null The microsoftTunnelHealthThresholds
     */
    public function getMicrosoftTunnelHealthThresholds()
    {
        if (array_key_exists('microsoftTunnelHealthThresholds', $this->_propDict) && !is_null($this->_propDict['microsoftTunnelHealthThresholds'])) {
           $microsoftTunnelHealthThresholds = [];
           if (count($this->_propDict['microsoftTunnelHealthThresholds']) > 0 && is_a($this->_propDict['microsoftTunnelHealthThresholds'][0], 'MicrosoftTunnelHealthThreshold')) {
              return $this->_propDict['microsoftTunnelHealthThresholds'];
           }
           foreach ($this->_propDict['microsoftTunnelHealthThresholds'] as $singleValue) {
              $microsoftTunnelHealthThresholds []= new MicrosoftTunnelHealthThreshold($singleValue);
           }
           $this->_propDict['microsoftTunnelHealthThresholds'] = $microsoftTunnelHealthThresholds;
           return $this->_propDict['microsoftTunnelHealthThresholds'];
        }
        return null;
    }
    
    /** 
    * Sets the microsoftTunnelHealthThresholds
    * Collection of MicrosoftTunnelHealthThreshold settings associated with account.
    *
    * @param MicrosoftTunnelHealthThreshold[] $val The microsoftTunnelHealthThresholds
    *
    * @return DeviceManagement
    */
    public function setMicrosoftTunnelHealthThresholds($val)
    {
        $this->_propDict["microsoftTunnelHealthThresholds"] = $val;
        return $this;
    }
    

     /** 
     * Gets the microsoftTunnelServerLogCollectionResponses
    * Collection of MicrosoftTunnelServerLogCollectionResponse settings associated with account.
     *
     * @return MicrosoftTunnelServerLogCollectionResponse[]|null The microsoftTunnelServerLogCollectionResponses
     */
    public function getMicrosoftTunnelServerLogCollectionResponses()
    {
        if (array_key_exists('microsoftTunnelServerLogCollectionResponses', $this->_propDict) && !is_null($this->_propDict['microsoftTunnelServerLogCollectionResponses'])) {
           $microsoftTunnelServerLogCollectionResponses = [];
           if (count($this->_propDict['microsoftTunnelServerLogCollectionResponses']) > 0 && is_a($this->_propDict['microsoftTunnelServerLogCollectionResponses'][0], 'MicrosoftTunnelServerLogCollectionResponse')) {
              return $this->_propDict['microsoftTunnelServerLogCollectionResponses'];
           }
           foreach ($this->_propDict['microsoftTunnelServerLogCollectionResponses'] as $singleValue) {
              $microsoftTunnelServerLogCollectionResponses []= new MicrosoftTunnelServerLogCollectionResponse($singleValue);
           }
           $this->_propDict['microsoftTunnelServerLogCollectionResponses'] = $microsoftTunnelServerLogCollectionResponses;
           return $this->_propDict['microsoftTunnelServerLogCollectionResponses'];
        }
        return null;
    }
    
    /** 
    * Sets the microsoftTunnelServerLogCollectionResponses
    * Collection of MicrosoftTunnelServerLogCollectionResponse settings associated with account.
    *
    * @param MicrosoftTunnelServerLogCollectionResponse[] $val The microsoftTunnelServerLogCollectionResponses
    *
    * @return DeviceManagement
    */
    public function setMicrosoftTunnelServerLogCollectionResponses($val)
    {
        $this->_propDict["microsoftTunnelServerLogCollectionResponses"] = $val;
        return $this;
    }
    

     /** 
     * Gets the microsoftTunnelSites
    * Collection of MicrosoftTunnelSite settings associated with account.
     *
     * @return MicrosoftTunnelSite[]|null The microsoftTunnelSites
     */
    public function getMicrosoftTunnelSites()
    {
        if (array_key_exists('microsoftTunnelSites', $this->_propDict) && !is_null($this->_propDict['microsoftTunnelSites'])) {
           $microsoftTunnelSites = [];
           if (count($this->_propDict['microsoftTunnelSites']) > 0 && is_a($this->_propDict['microsoftTunnelSites'][0], 'MicrosoftTunnelSite')) {
              return $this->_propDict['microsoftTunnelSites'];
           }
           foreach ($this->_propDict['microsoftTunnelSites'] as $singleValue) {
              $microsoftTunnelSites []= new MicrosoftTunnelSite($singleValue);
           }
           $this->_propDict['microsoftTunnelSites'] = $microsoftTunnelSites;
           return $this->_propDict['microsoftTunnelSites'];
        }
        return null;
    }
    
    /** 
    * Sets the microsoftTunnelSites
    * Collection of MicrosoftTunnelSite settings associated with account.
    *
    * @param MicrosoftTunnelSite[] $val The microsoftTunnelSites
    *
    * @return DeviceManagement
    */
    public function setMicrosoftTunnelSites($val)
    {
        $this->_propDict["microsoftTunnelSites"] = $val;
        return $this;
    }
    

     /** 
     * Gets the notificationMessageTemplates
    * The Notification Message Templates.
     *
     * @return NotificationMessageTemplate[]|null The notificationMessageTemplates
     */
    public function getNotificationMessageTemplates()
    {
        if (array_key_exists('notificationMessageTemplates', $this->_propDict) && !is_null($this->_propDict['notificationMessageTemplates'])) {
           $notificationMessageTemplates = [];
           if (count($this->_propDict['notificationMessageTemplates']) > 0 && is_a($this->_propDict['notificationMessageTemplates'][0], 'NotificationMessageTemplate')) {
              return $this->_propDict['notificationMessageTemplates'];
           }
           foreach ($this->_propDict['notificationMessageTemplates'] as $singleValue) {
              $notificationMessageTemplates []= new NotificationMessageTemplate($singleValue);
           }
           $this->_propDict['notificationMessageTemplates'] = $notificationMessageTemplates;
           return $this->_propDict['notificationMessageTemplates'];
        }
        return null;
    }
    
    /** 
    * Sets the notificationMessageTemplates
    * The Notification Message Templates.
    *
    * @param NotificationMessageTemplate[] $val The notificationMessageTemplates
    *
    * @return DeviceManagement
    */
    public function setNotificationMessageTemplates($val)
    {
        $this->_propDict["notificationMessageTemplates"] = $val;
        return $this;
    }
    

     /** 
     * Gets the domainJoinConnectors
    * A list of connector objects.
     *
     * @return DeviceManagementDomainJoinConnector[]|null The domainJoinConnectors
     */
    public function getDomainJoinConnectors()
    {
        if (array_key_exists('domainJoinConnectors', $this->_propDict) && !is_null($this->_propDict['domainJoinConnectors'])) {
           $domainJoinConnectors = [];
           if (count($this->_propDict['domainJoinConnectors']) > 0 && is_a($this->_propDict['domainJoinConnectors'][0], 'DeviceManagementDomainJoinConnector')) {
              return $this->_propDict['domainJoinConnectors'];
           }
           foreach ($this->_propDict['domainJoinConnectors'] as $singleValue) {
              $domainJoinConnectors []= new DeviceManagementDomainJoinConnector($singleValue);
           }
           $this->_propDict['domainJoinConnectors'] = $domainJoinConnectors;
           return $this->_propDict['domainJoinConnectors'];
        }
        return null;
    }
    
    /** 
    * Sets the domainJoinConnectors
    * A list of connector objects.
    *
    * @param DeviceManagementDomainJoinConnector[] $val The domainJoinConnectors
    *
    * @return DeviceManagement
    */
    public function setDomainJoinConnectors($val)
    {
        $this->_propDict["domainJoinConnectors"] = $val;
        return $this;
    }
    

     /** 
     * Gets the configManagerCollections
    * A list of ConfigManagerCollection
     *
     * @return ConfigManagerCollection[]|null The configManagerCollections
     */
    public function getConfigManagerCollections()
    {
        if (array_key_exists('configManagerCollections', $this->_propDict) && !is_null($this->_propDict['configManagerCollections'])) {
           $configManagerCollections = [];
           if (count($this->_propDict['configManagerCollections']) > 0 && is_a($this->_propDict['configManagerCollections'][0], 'ConfigManagerCollection')) {
              return $this->_propDict['configManagerCollections'];
           }
           foreach ($this->_propDict['configManagerCollections'] as $singleValue) {
              $configManagerCollections []= new ConfigManagerCollection($singleValue);
           }
           $this->_propDict['configManagerCollections'] = $configManagerCollections;
           return $this->_propDict['configManagerCollections'];
        }
        return null;
    }
    
    /** 
    * Sets the configManagerCollections
    * A list of ConfigManagerCollection
    *
    * @param ConfigManagerCollection[] $val The configManagerCollections
    *
    * @return DeviceManagement
    */
    public function setConfigManagerCollections($val)
    {
        $this->_propDict["configManagerCollections"] = $val;
        return $this;
    }
    

     /** 
     * Gets the resourceOperations
    * The Resource Operations.
     *
     * @return ResourceOperation[]|null The resourceOperations
     */
    public function getResourceOperations()
    {
        if (array_key_exists('resourceOperations', $this->_propDict) && !is_null($this->_propDict['resourceOperations'])) {
           $resourceOperations = [];
           if (count($this->_propDict['resourceOperations']) > 0 && is_a($this->_propDict['resourceOperations'][0], 'ResourceOperation')) {
              return $this->_propDict['resourceOperations'];
           }
           foreach ($this->_propDict['resourceOperations'] as $singleValue) {
              $resourceOperations []= new ResourceOperation($singleValue);
           }
           $this->_propDict['resourceOperations'] = $resourceOperations;
           return $this->_propDict['resourceOperations'];
        }
        return null;
    }
    
    /** 
    * Sets the resourceOperations
    * The Resource Operations.
    *
    * @param ResourceOperation[] $val The resourceOperations
    *
    * @return DeviceManagement
    */
    public function setResourceOperations($val)
    {
        $this->_propDict["resourceOperations"] = $val;
        return $this;
    }
    

     /** 
     * Gets the roleAssignments
    * The Role Assignments.
     *
     * @return DeviceAndAppManagementRoleAssignment[]|null The roleAssignments
     */
    public function getRoleAssignments()
    {
        if (array_key_exists('roleAssignments', $this->_propDict) && !is_null($this->_propDict['roleAssignments'])) {
           $roleAssignments = [];
           if (count($this->_propDict['roleAssignments']) > 0 && is_a($this->_propDict['roleAssignments'][0], 'DeviceAndAppManagementRoleAssignment')) {
              return $this->_propDict['roleAssignments'];
           }
           foreach ($this->_propDict['roleAssignments'] as $singleValue) {
              $roleAssignments []= new DeviceAndAppManagementRoleAssignment($singleValue);
           }
           $this->_propDict['roleAssignments'] = $roleAssignments;
           return $this->_propDict['roleAssignments'];
        }
        return null;
    }
    
    /** 
    * Sets the roleAssignments
    * The Role Assignments.
    *
    * @param DeviceAndAppManagementRoleAssignment[] $val The roleAssignments
    *
    * @return DeviceManagement
    */
    public function setRoleAssignments($val)
    {
        $this->_propDict["roleAssignments"] = $val;
        return $this;
    }
    

     /** 
     * Gets the roleDefinitions
    * The Role Definitions.
     *
     * @return RoleDefinition[]|null The roleDefinitions
     */
    public function getRoleDefinitions()
    {
        if (array_key_exists('roleDefinitions', $this->_propDict) && !is_null($this->_propDict['roleDefinitions'])) {
           $roleDefinitions = [];
           if (count($this->_propDict['roleDefinitions']) > 0 && is_a($this->_propDict['roleDefinitions'][0], 'RoleDefinition')) {
              return $this->_propDict['roleDefinitions'];
           }
           foreach ($this->_propDict['roleDefinitions'] as $singleValue) {
              $roleDefinitions []= new RoleDefinition($singleValue);
           }
           $this->_propDict['roleDefinitions'] = $roleDefinitions;
           return $this->_propDict['roleDefinitions'];
        }
        return null;
    }
    
    /** 
    * Sets the roleDefinitions
    * The Role Definitions.
    *
    * @param RoleDefinition[] $val The roleDefinitions
    *
    * @return DeviceManagement
    */
    public function setRoleDefinitions($val)
    {
        $this->_propDict["roleDefinitions"] = $val;
        return $this;
    }
    

     /** 
     * Gets the roleScopeTags
    * The Role Scope Tags.
     *
     * @return RoleScopeTag[]|null The roleScopeTags
     */
    public function getRoleScopeTags()
    {
        if (array_key_exists('roleScopeTags', $this->_propDict) && !is_null($this->_propDict['roleScopeTags'])) {
           $roleScopeTags = [];
           if (count($this->_propDict['roleScopeTags']) > 0 && is_a($this->_propDict['roleScopeTags'][0], 'RoleScopeTag')) {
              return $this->_propDict['roleScopeTags'];
           }
           foreach ($this->_propDict['roleScopeTags'] as $singleValue) {
              $roleScopeTags []= new RoleScopeTag($singleValue);
           }
           $this->_propDict['roleScopeTags'] = $roleScopeTags;
           return $this->_propDict['roleScopeTags'];
        }
        return null;
    }
    
    /** 
    * Sets the roleScopeTags
    * The Role Scope Tags.
    *
    * @param RoleScopeTag[] $val The roleScopeTags
    *
    * @return DeviceManagement
    */
    public function setRoleScopeTags($val)
    {
        $this->_propDict["roleScopeTags"] = $val;
        return $this;
    }
    

     /** 
     * Gets the remoteAssistancePartners
    * The remote assist partners.
     *
     * @return RemoteAssistancePartner[]|null The remoteAssistancePartners
     */
    public function getRemoteAssistancePartners()
    {
        if (array_key_exists('remoteAssistancePartners', $this->_propDict) && !is_null($this->_propDict['remoteAssistancePartners'])) {
           $remoteAssistancePartners = [];
           if (count($this->_propDict['remoteAssistancePartners']) > 0 && is_a($this->_propDict['remoteAssistancePartners'][0], 'RemoteAssistancePartner')) {
              return $this->_propDict['remoteAssistancePartners'];
           }
           foreach ($this->_propDict['remoteAssistancePartners'] as $singleValue) {
              $remoteAssistancePartners []= new RemoteAssistancePartner($singleValue);
           }
           $this->_propDict['remoteAssistancePartners'] = $remoteAssistancePartners;
           return $this->_propDict['remoteAssistancePartners'];
        }
        return null;
    }
    
    /** 
    * Sets the remoteAssistancePartners
    * The remote assist partners.
    *
    * @param RemoteAssistancePartner[] $val The remoteAssistancePartners
    *
    * @return DeviceManagement
    */
    public function setRemoteAssistancePartners($val)
    {
        $this->_propDict["remoteAssistancePartners"] = $val;
        return $this;
    }
    
    /**
    * Gets the remoteAssistanceSettings
    * The remote assistance settings singleton
    *
    * @return RemoteAssistanceSettings|null The remoteAssistanceSettings
    */
    public function getRemoteAssistanceSettings()
    {
        if (array_key_exists("remoteAssistanceSettings", $this->_propDict) && !is_null($this->_propDict["remoteAssistanceSettings"])) {
            if (is_a($this->_propDict["remoteAssistanceSettings"], "\Beta\Microsoft\Graph\Model\RemoteAssistanceSettings")) {
                return $this->_propDict["remoteAssistanceSettings"];
            } else {
                $this->_propDict["remoteAssistanceSettings"] = new RemoteAssistanceSettings($this->_propDict["remoteAssistanceSettings"]);
                return $this->_propDict["remoteAssistanceSettings"];
            }
        }
        return null;
    }
    
    /**
    * Sets the remoteAssistanceSettings
    * The remote assistance settings singleton
    *
    * @param RemoteAssistanceSettings $val The remoteAssistanceSettings
    *
    * @return DeviceManagement
    */
    public function setRemoteAssistanceSettings($val)
    {
        $this->_propDict["remoteAssistanceSettings"] = $val;
        return $this;
    }
    
    /**
    * Gets the reports
    * Reports singleton
    *
    * @return DeviceManagementReports|null The reports
    */
    public function getReports()
    {
        if (array_key_exists("reports", $this->_propDict) && !is_null($this->_propDict["reports"])) {
            if (is_a($this->_propDict["reports"], "\Beta\Microsoft\Graph\Model\DeviceManagementReports")) {
                return $this->_propDict["reports"];
            } else {
                $this->_propDict["reports"] = new DeviceManagementReports($this->_propDict["reports"]);
                return $this->_propDict["reports"];
            }
        }
        return null;
    }
    
    /**
    * Sets the reports
    * Reports singleton
    *
    * @param DeviceManagementReports $val The reports
    *
    * @return DeviceManagement
    */
    public function setReports($val)
    {
        $this->_propDict["reports"] = $val;
        return $this;
    }
    

     /** 
     * Gets the embeddedSIMActivationCodePools
    * The embedded SIM activation code pools created by this account.
     *
     * @return EmbeddedSIMActivationCodePool[]|null The embeddedSIMActivationCodePools
     */
    public function getEmbeddedSIMActivationCodePools()
    {
        if (array_key_exists('embeddedSIMActivationCodePools', $this->_propDict) && !is_null($this->_propDict['embeddedSIMActivationCodePools'])) {
           $embeddedSIMActivationCodePools = [];
           if (count($this->_propDict['embeddedSIMActivationCodePools']) > 0 && is_a($this->_propDict['embeddedSIMActivationCodePools'][0], 'EmbeddedSIMActivationCodePool')) {
              return $this->_propDict['embeddedSIMActivationCodePools'];
           }
           foreach ($this->_propDict['embeddedSIMActivationCodePools'] as $singleValue) {
              $embeddedSIMActivationCodePools []= new EmbeddedSIMActivationCodePool($singleValue);
           }
           $this->_propDict['embeddedSIMActivationCodePools'] = $embeddedSIMActivationCodePools;
           return $this->_propDict['embeddedSIMActivationCodePools'];
        }
        return null;
    }
    
    /** 
    * Sets the embeddedSIMActivationCodePools
    * The embedded SIM activation code pools created by this account.
    *
    * @param EmbeddedSIMActivationCodePool[] $val The embeddedSIMActivationCodePools
    *
    * @return DeviceManagement
    */
    public function setEmbeddedSIMActivationCodePools($val)
    {
        $this->_propDict["embeddedSIMActivationCodePools"] = $val;
        return $this;
    }
    

     /** 
     * Gets the telecomExpenseManagementPartners
    * The telecom expense management partners.
     *
     * @return TelecomExpenseManagementPartner[]|null The telecomExpenseManagementPartners
     */
    public function getTelecomExpenseManagementPartners()
    {
        if (array_key_exists('telecomExpenseManagementPartners', $this->_propDict) && !is_null($this->_propDict['telecomExpenseManagementPartners'])) {
           $telecomExpenseManagementPartners = [];
           if (count($this->_propDict['telecomExpenseManagementPartners']) > 0 && is_a($this->_propDict['telecomExpenseManagementPartners'][0], 'TelecomExpenseManagementPartner')) {
              return $this->_propDict['telecomExpenseManagementPartners'];
           }
           foreach ($this->_propDict['telecomExpenseManagementPartners'] as $singleValue) {
              $telecomExpenseManagementPartners []= new TelecomExpenseManagementPartner($singleValue);
           }
           $this->_propDict['telecomExpenseManagementPartners'] = $telecomExpenseManagementPartners;
           return $this->_propDict['telecomExpenseManagementPartners'];
        }
        return null;
    }
    
    /** 
    * Sets the telecomExpenseManagementPartners
    * The telecom expense management partners.
    *
    * @param TelecomExpenseManagementPartner[] $val The telecomExpenseManagementPartners
    *
    * @return DeviceManagement
    */
    public function setTelecomExpenseManagementPartners($val)
    {
        $this->_propDict["telecomExpenseManagementPartners"] = $val;
        return $this;
    }
    

     /** 
     * Gets the autopilotEvents
    * The list of autopilot events for the tenant.
     *
     * @return DeviceManagementAutopilotEvent[]|null The autopilotEvents
     */
    public function getAutopilotEvents()
    {
        if (array_key_exists('autopilotEvents', $this->_propDict) && !is_null($this->_propDict['autopilotEvents'])) {
           $autopilotEvents = [];
           if (count($this->_propDict['autopilotEvents']) > 0 && is_a($this->_propDict['autopilotEvents'][0], 'DeviceManagementAutopilotEvent')) {
              return $this->_propDict['autopilotEvents'];
           }
           foreach ($this->_propDict['autopilotEvents'] as $singleValue) {
              $autopilotEvents []= new DeviceManagementAutopilotEvent($singleValue);
           }
           $this->_propDict['autopilotEvents'] = $autopilotEvents;
           return $this->_propDict['autopilotEvents'];
        }
        return null;
    }
    
    /** 
    * Sets the autopilotEvents
    * The list of autopilot events for the tenant.
    *
    * @param DeviceManagementAutopilotEvent[] $val The autopilotEvents
    *
    * @return DeviceManagement
    */
    public function setAutopilotEvents($val)
    {
        $this->_propDict["autopilotEvents"] = $val;
        return $this;
    }
    

     /** 
     * Gets the troubleshootingEvents
    * The list of troubleshooting events for the tenant.
     *
     * @return DeviceManagementTroubleshootingEvent[]|null The troubleshootingEvents
     */
    public function getTroubleshootingEvents()
    {
        if (array_key_exists('troubleshootingEvents', $this->_propDict) && !is_null($this->_propDict['troubleshootingEvents'])) {
           $troubleshootingEvents = [];
           if (count($this->_propDict['troubleshootingEvents']) > 0 && is_a($this->_propDict['troubleshootingEvents'][0], 'DeviceManagementTroubleshootingEvent')) {
              return $this->_propDict['troubleshootingEvents'];
           }
           foreach ($this->_propDict['troubleshootingEvents'] as $singleValue) {
              $troubleshootingEvents []= new DeviceManagementTroubleshootingEvent($singleValue);
           }
           $this->_propDict['troubleshootingEvents'] = $troubleshootingEvents;
           return $this->_propDict['troubleshootingEvents'];
        }
        return null;
    }
    
    /** 
    * Sets the troubleshootingEvents
    * The list of troubleshooting events for the tenant.
    *
    * @param DeviceManagementTroubleshootingEvent[] $val The troubleshootingEvents
    *
    * @return DeviceManagement
    */
    public function setTroubleshootingEvents($val)
    {
        $this->_propDict["troubleshootingEvents"] = $val;
        return $this;
    }
    

     /** 
     * Gets the windowsDriverUpdateProfiles
    * A collection of windows driver update profiles
     *
     * @return WindowsDriverUpdateProfile[]|null The windowsDriverUpdateProfiles
     */
    public function getWindowsDriverUpdateProfiles()
    {
        if (array_key_exists('windowsDriverUpdateProfiles', $this->_propDict) && !is_null($this->_propDict['windowsDriverUpdateProfiles'])) {
           $windowsDriverUpdateProfiles = [];
           if (count($this->_propDict['windowsDriverUpdateProfiles']) > 0 && is_a($this->_propDict['windowsDriverUpdateProfiles'][0], 'WindowsDriverUpdateProfile')) {
              return $this->_propDict['windowsDriverUpdateProfiles'];
           }
           foreach ($this->_propDict['windowsDriverUpdateProfiles'] as $singleValue) {
              $windowsDriverUpdateProfiles []= new WindowsDriverUpdateProfile($singleValue);
           }
           $this->_propDict['windowsDriverUpdateProfiles'] = $windowsDriverUpdateProfiles;
           return $this->_propDict['windowsDriverUpdateProfiles'];
        }
        return null;
    }
    
    /** 
    * Sets the windowsDriverUpdateProfiles
    * A collection of windows driver update profiles
    *
    * @param WindowsDriverUpdateProfile[] $val The windowsDriverUpdateProfiles
    *
    * @return DeviceManagement
    */
    public function setWindowsDriverUpdateProfiles($val)
    {
        $this->_propDict["windowsDriverUpdateProfiles"] = $val;
        return $this;
    }
    

     /** 
     * Gets the windowsFeatureUpdateProfiles
    * A collection of windows feature update profiles
     *
     * @return WindowsFeatureUpdateProfile[]|null The windowsFeatureUpdateProfiles
     */
    public function getWindowsFeatureUpdateProfiles()
    {
        if (array_key_exists('windowsFeatureUpdateProfiles', $this->_propDict) && !is_null($this->_propDict['windowsFeatureUpdateProfiles'])) {
           $windowsFeatureUpdateProfiles = [];
           if (count($this->_propDict['windowsFeatureUpdateProfiles']) > 0 && is_a($this->_propDict['windowsFeatureUpdateProfiles'][0], 'WindowsFeatureUpdateProfile')) {
              return $this->_propDict['windowsFeatureUpdateProfiles'];
           }
           foreach ($this->_propDict['windowsFeatureUpdateProfiles'] as $singleValue) {
              $windowsFeatureUpdateProfiles []= new WindowsFeatureUpdateProfile($singleValue);
           }
           $this->_propDict['windowsFeatureUpdateProfiles'] = $windowsFeatureUpdateProfiles;
           return $this->_propDict['windowsFeatureUpdateProfiles'];
        }
        return null;
    }
    
    /** 
    * Sets the windowsFeatureUpdateProfiles
    * A collection of windows feature update profiles
    *
    * @param WindowsFeatureUpdateProfile[] $val The windowsFeatureUpdateProfiles
    *
    * @return DeviceManagement
    */
    public function setWindowsFeatureUpdateProfiles($val)
    {
        $this->_propDict["windowsFeatureUpdateProfiles"] = $val;
        return $this;
    }
    

     /** 
     * Gets the windowsQualityUpdateProfiles
    * A collection of windows quality update profiles
     *
     * @return WindowsQualityUpdateProfile[]|null The windowsQualityUpdateProfiles
     */
    public function getWindowsQualityUpdateProfiles()
    {
        if (array_key_exists('windowsQualityUpdateProfiles', $this->_propDict) && !is_null($this->_propDict['windowsQualityUpdateProfiles'])) {
           $windowsQualityUpdateProfiles = [];
           if (count($this->_propDict['windowsQualityUpdateProfiles']) > 0 && is_a($this->_propDict['windowsQualityUpdateProfiles'][0], 'WindowsQualityUpdateProfile')) {
              return $this->_propDict['windowsQualityUpdateProfiles'];
           }
           foreach ($this->_propDict['windowsQualityUpdateProfiles'] as $singleValue) {
              $windowsQualityUpdateProfiles []= new WindowsQualityUpdateProfile($singleValue);
           }
           $this->_propDict['windowsQualityUpdateProfiles'] = $windowsQualityUpdateProfiles;
           return $this->_propDict['windowsQualityUpdateProfiles'];
        }
        return null;
    }
    
    /** 
    * Sets the windowsQualityUpdateProfiles
    * A collection of windows quality update profiles
    *
    * @param WindowsQualityUpdateProfile[] $val The windowsQualityUpdateProfiles
    *
    * @return DeviceManagement
    */
    public function setWindowsQualityUpdateProfiles($val)
    {
        $this->_propDict["windowsQualityUpdateProfiles"] = $val;
        return $this;
    }
    

     /** 
     * Gets the windowsUpdateCatalogItems
    * A collection of windows update catalog items (fetaure updates item , quality updates item)
     *
     * @return WindowsUpdateCatalogItem[]|null The windowsUpdateCatalogItems
     */
    public function getWindowsUpdateCatalogItems()
    {
        if (array_key_exists('windowsUpdateCatalogItems', $this->_propDict) && !is_null($this->_propDict['windowsUpdateCatalogItems'])) {
           $windowsUpdateCatalogItems = [];
           if (count($this->_propDict['windowsUpdateCatalogItems']) > 0 && is_a($this->_propDict['windowsUpdateCatalogItems'][0], 'WindowsUpdateCatalogItem')) {
              return $this->_propDict['windowsUpdateCatalogItems'];
           }
           foreach ($this->_propDict['windowsUpdateCatalogItems'] as $singleValue) {
              $windowsUpdateCatalogItems []= new WindowsUpdateCatalogItem($singleValue);
           }
           $this->_propDict['windowsUpdateCatalogItems'] = $windowsUpdateCatalogItems;
           return $this->_propDict['windowsUpdateCatalogItems'];
        }
        return null;
    }
    
    /** 
    * Sets the windowsUpdateCatalogItems
    * A collection of windows update catalog items (fetaure updates item , quality updates item)
    *
    * @param WindowsUpdateCatalogItem[] $val The windowsUpdateCatalogItems
    *
    * @return DeviceManagement
    */
    public function setWindowsUpdateCatalogItems($val)
    {
        $this->_propDict["windowsUpdateCatalogItems"] = $val;
        return $this;
    }
    

     /** 
     * Gets the intuneBrandingProfiles
    * Intune branding profiles targeted to AAD groups
     *
     * @return IntuneBrandingProfile[]|null The intuneBrandingProfiles
     */
    public function getIntuneBrandingProfiles()
    {
        if (array_key_exists('intuneBrandingProfiles', $this->_propDict) && !is_null($this->_propDict['intuneBrandingProfiles'])) {
           $intuneBrandingProfiles = [];
           if (count($this->_propDict['intuneBrandingProfiles']) > 0 && is_a($this->_propDict['intuneBrandingProfiles'][0], 'IntuneBrandingProfile')) {
              return $this->_propDict['intuneBrandingProfiles'];
           }
           foreach ($this->_propDict['intuneBrandingProfiles'] as $singleValue) {
              $intuneBrandingProfiles []= new IntuneBrandingProfile($singleValue);
           }
           $this->_propDict['intuneBrandingProfiles'] = $intuneBrandingProfiles;
           return $this->_propDict['intuneBrandingProfiles'];
        }
        return null;
    }
    
    /** 
    * Sets the intuneBrandingProfiles
    * Intune branding profiles targeted to AAD groups
    *
    * @param IntuneBrandingProfile[] $val The intuneBrandingProfiles
    *
    * @return DeviceManagement
    */
    public function setIntuneBrandingProfiles($val)
    {
        $this->_propDict["intuneBrandingProfiles"] = $val;
        return $this;
    }
    

     /** 
     * Gets the windowsInformationProtectionAppLearningSummaries
    * The windows information protection app learning summaries.
     *
     * @return WindowsInformationProtectionAppLearningSummary[]|null The windowsInformationProtectionAppLearningSummaries
     */
    public function getWindowsInformationProtectionAppLearningSummaries()
    {
        if (array_key_exists('windowsInformationProtectionAppLearningSummaries', $this->_propDict) && !is_null($this->_propDict['windowsInformationProtectionAppLearningSummaries'])) {
           $windowsInformationProtectionAppLearningSummaries = [];
           if (count($this->_propDict['windowsInformationProtectionAppLearningSummaries']) > 0 && is_a($this->_propDict['windowsInformationProtectionAppLearningSummaries'][0], 'WindowsInformationProtectionAppLearningSummary')) {
              return $this->_propDict['windowsInformationProtectionAppLearningSummaries'];
           }
           foreach ($this->_propDict['windowsInformationProtectionAppLearningSummaries'] as $singleValue) {
              $windowsInformationProtectionAppLearningSummaries []= new WindowsInformationProtectionAppLearningSummary($singleValue);
           }
           $this->_propDict['windowsInformationProtectionAppLearningSummaries'] = $windowsInformationProtectionAppLearningSummaries;
           return $this->_propDict['windowsInformationProtectionAppLearningSummaries'];
        }
        return null;
    }
    
    /** 
    * Sets the windowsInformationProtectionAppLearningSummaries
    * The windows information protection app learning summaries.
    *
    * @param WindowsInformationProtectionAppLearningSummary[] $val The windowsInformationProtectionAppLearningSummaries
    *
    * @return DeviceManagement
    */
    public function setWindowsInformationProtectionAppLearningSummaries($val)
    {
        $this->_propDict["windowsInformationProtectionAppLearningSummaries"] = $val;
        return $this;
    }
    

     /** 
     * Gets the windowsInformationProtectionNetworkLearningSummaries
    * The windows information protection network learning summaries.
     *
     * @return WindowsInformationProtectionNetworkLearningSummary[]|null The windowsInformationProtectionNetworkLearningSummaries
     */
    public function getWindowsInformationProtectionNetworkLearningSummaries()
    {
        if (array_key_exists('windowsInformationProtectionNetworkLearningSummaries', $this->_propDict) && !is_null($this->_propDict['windowsInformationProtectionNetworkLearningSummaries'])) {
           $windowsInformationProtectionNetworkLearningSummaries = [];
           if (count($this->_propDict['windowsInformationProtectionNetworkLearningSummaries']) > 0 && is_a($this->_propDict['windowsInformationProtectionNetworkLearningSummaries'][0], 'WindowsInformationProtectionNetworkLearningSummary')) {
              return $this->_propDict['windowsInformationProtectionNetworkLearningSummaries'];
           }
           foreach ($this->_propDict['windowsInformationProtectionNetworkLearningSummaries'] as $singleValue) {
              $windowsInformationProtectionNetworkLearningSummaries []= new WindowsInformationProtectionNetworkLearningSummary($singleValue);
           }
           $this->_propDict['windowsInformationProtectionNetworkLearningSummaries'] = $windowsInformationProtectionNetworkLearningSummaries;
           return $this->_propDict['windowsInformationProtectionNetworkLearningSummaries'];
        }
        return null;
    }
    
    /** 
    * Sets the windowsInformationProtectionNetworkLearningSummaries
    * The windows information protection network learning summaries.
    *
    * @param WindowsInformationProtectionNetworkLearningSummary[] $val The windowsInformationProtectionNetworkLearningSummaries
    *
    * @return DeviceManagement
    */
    public function setWindowsInformationProtectionNetworkLearningSummaries($val)
    {
        $this->_propDict["windowsInformationProtectionNetworkLearningSummaries"] = $val;
        return $this;
    }
    

     /** 
     * Gets the certificateConnectorDetails
    * Collection of certificate connector details, each associated with a corresponding Intune Certificate Connector.
     *
     * @return CertificateConnectorDetails[]|null The certificateConnectorDetails
     */
    public function getCertificateConnectorDetails()
    {
        if (array_key_exists('certificateConnectorDetails', $this->_propDict) && !is_null($this->_propDict['certificateConnectorDetails'])) {
           $certificateConnectorDetails = [];
           if (count($this->_propDict['certificateConnectorDetails']) > 0 && is_a($this->_propDict['certificateConnectorDetails'][0], 'CertificateConnectorDetails')) {
              return $this->_propDict['certificateConnectorDetails'];
           }
           foreach ($this->_propDict['certificateConnectorDetails'] as $singleValue) {
              $certificateConnectorDetails []= new CertificateConnectorDetails($singleValue);
           }
           $this->_propDict['certificateConnectorDetails'] = $certificateConnectorDetails;
           return $this->_propDict['certificateConnectorDetails'];
        }
        return null;
    }
    
    /** 
    * Sets the certificateConnectorDetails
    * Collection of certificate connector details, each associated with a corresponding Intune Certificate Connector.
    *
    * @param CertificateConnectorDetails[] $val The certificateConnectorDetails
    *
    * @return DeviceManagement
    */
    public function setCertificateConnectorDetails($val)
    {
        $this->_propDict["certificateConnectorDetails"] = $val;
        return $this;
    }
    

     /** 
     * Gets the userPfxCertificates
    * Collection of PFX certificates associated with a user.
     *
     * @return UserPFXCertificate[]|null The userPfxCertificates
     */
    public function getUserPfxCertificates()
    {
        if (array_key_exists('userPfxCertificates', $this->_propDict) && !is_null($this->_propDict['userPfxCertificates'])) {
           $userPfxCertificates = [];
           if (count($this->_propDict['userPfxCertificates']) > 0 && is_a($this->_propDict['userPfxCertificates'][0], 'UserPFXCertificate')) {
              return $this->_propDict['userPfxCertificates'];
           }
           foreach ($this->_propDict['userPfxCertificates'] as $singleValue) {
              $userPfxCertificates []= new UserPFXCertificate($singleValue);
           }
           $this->_propDict['userPfxCertificates'] = $userPfxCertificates;
           return $this->_propDict['userPfxCertificates'];
        }
        return null;
    }
    
    /** 
    * Sets the userPfxCertificates
    * Collection of PFX certificates associated with a user.
    *
    * @param UserPFXCertificate[] $val The userPfxCertificates
    *
    * @return DeviceManagement
    */
    public function setUserPfxCertificates($val)
    {
        $this->_propDict["userPfxCertificates"] = $val;
        return $this;
    }
    
}
