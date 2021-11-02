<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceAppManagement File
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
* DeviceAppManagement class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceAppManagement extends Entity
{
    /**
    * Gets the isEnabledForMicrosoftStoreForBusiness
    * Whether the account is enabled for syncing applications from the Microsoft Store for Business.
    *
    * @return bool|null The isEnabledForMicrosoftStoreForBusiness
    */
    public function getIsEnabledForMicrosoftStoreForBusiness()
    {
        if (array_key_exists("isEnabledForMicrosoftStoreForBusiness", $this->_propDict)) {
            return $this->_propDict["isEnabledForMicrosoftStoreForBusiness"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isEnabledForMicrosoftStoreForBusiness
    * Whether the account is enabled for syncing applications from the Microsoft Store for Business.
    *
    * @param bool $val The isEnabledForMicrosoftStoreForBusiness
    *
    * @return DeviceAppManagement
    */
    public function setIsEnabledForMicrosoftStoreForBusiness($val)
    {
        $this->_propDict["isEnabledForMicrosoftStoreForBusiness"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the microsoftStoreForBusinessLanguage
    * The locale information used to sync applications from the Microsoft Store for Business. Cultures that are specific to a country/region. The names of these cultures follow RFC 4646 (Windows Vista and later). The format is -&amp;lt;country/regioncode2&amp;gt;, where  is a lowercase two-letter code derived from ISO 639-1 and &amp;lt;country/regioncode2&amp;gt; is an uppercase two-letter code derived from ISO 3166. For example, en-US for English (United States) is a specific culture.
    *
    * @return string|null The microsoftStoreForBusinessLanguage
    */
    public function getMicrosoftStoreForBusinessLanguage()
    {
        if (array_key_exists("microsoftStoreForBusinessLanguage", $this->_propDict)) {
            return $this->_propDict["microsoftStoreForBusinessLanguage"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the microsoftStoreForBusinessLanguage
    * The locale information used to sync applications from the Microsoft Store for Business. Cultures that are specific to a country/region. The names of these cultures follow RFC 4646 (Windows Vista and later). The format is -&amp;lt;country/regioncode2&amp;gt;, where  is a lowercase two-letter code derived from ISO 639-1 and &amp;lt;country/regioncode2&amp;gt; is an uppercase two-letter code derived from ISO 3166. For example, en-US for English (United States) is a specific culture.
    *
    * @param string $val The microsoftStoreForBusinessLanguage
    *
    * @return DeviceAppManagement
    */
    public function setMicrosoftStoreForBusinessLanguage($val)
    {
        $this->_propDict["microsoftStoreForBusinessLanguage"] = $val;
        return $this;
    }
    
    /**
    * Gets the microsoftStoreForBusinessLastCompletedApplicationSyncTime
    * The last time an application sync from the Microsoft Store for Business was completed.
    *
    * @return \DateTime|null The microsoftStoreForBusinessLastCompletedApplicationSyncTime
    */
    public function getMicrosoftStoreForBusinessLastCompletedApplicationSyncTime()
    {
        if (array_key_exists("microsoftStoreForBusinessLastCompletedApplicationSyncTime", $this->_propDict) && !is_null($this->_propDict["microsoftStoreForBusinessLastCompletedApplicationSyncTime"])) {
            if (is_a($this->_propDict["microsoftStoreForBusinessLastCompletedApplicationSyncTime"], "\DateTime")) {
                return $this->_propDict["microsoftStoreForBusinessLastCompletedApplicationSyncTime"];
            } else {
                $this->_propDict["microsoftStoreForBusinessLastCompletedApplicationSyncTime"] = new \DateTime($this->_propDict["microsoftStoreForBusinessLastCompletedApplicationSyncTime"]);
                return $this->_propDict["microsoftStoreForBusinessLastCompletedApplicationSyncTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the microsoftStoreForBusinessLastCompletedApplicationSyncTime
    * The last time an application sync from the Microsoft Store for Business was completed.
    *
    * @param \DateTime $val The microsoftStoreForBusinessLastCompletedApplicationSyncTime
    *
    * @return DeviceAppManagement
    */
    public function setMicrosoftStoreForBusinessLastCompletedApplicationSyncTime($val)
    {
        $this->_propDict["microsoftStoreForBusinessLastCompletedApplicationSyncTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the microsoftStoreForBusinessLastSuccessfulSyncDateTime
    * The last time the apps from the Microsoft Store for Business were synced successfully for the account.
    *
    * @return \DateTime|null The microsoftStoreForBusinessLastSuccessfulSyncDateTime
    */
    public function getMicrosoftStoreForBusinessLastSuccessfulSyncDateTime()
    {
        if (array_key_exists("microsoftStoreForBusinessLastSuccessfulSyncDateTime", $this->_propDict) && !is_null($this->_propDict["microsoftStoreForBusinessLastSuccessfulSyncDateTime"])) {
            if (is_a($this->_propDict["microsoftStoreForBusinessLastSuccessfulSyncDateTime"], "\DateTime")) {
                return $this->_propDict["microsoftStoreForBusinessLastSuccessfulSyncDateTime"];
            } else {
                $this->_propDict["microsoftStoreForBusinessLastSuccessfulSyncDateTime"] = new \DateTime($this->_propDict["microsoftStoreForBusinessLastSuccessfulSyncDateTime"]);
                return $this->_propDict["microsoftStoreForBusinessLastSuccessfulSyncDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the microsoftStoreForBusinessLastSuccessfulSyncDateTime
    * The last time the apps from the Microsoft Store for Business were synced successfully for the account.
    *
    * @param \DateTime $val The microsoftStoreForBusinessLastSuccessfulSyncDateTime
    *
    * @return DeviceAppManagement
    */
    public function setMicrosoftStoreForBusinessLastSuccessfulSyncDateTime($val)
    {
        $this->_propDict["microsoftStoreForBusinessLastSuccessfulSyncDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the microsoftStoreForBusinessPortalSelection
    * The end user portal information is used to sync applications from the Microsoft Store for Business to Intune Company Portal. There are three options to pick from ['Company portal only', 'Company portal and private store', 'Private store only']. Possible values are: none, companyPortal, privateStore.
    *
    * @return MicrosoftStoreForBusinessPortalSelectionOptions|null The microsoftStoreForBusinessPortalSelection
    */
    public function getMicrosoftStoreForBusinessPortalSelection()
    {
        if (array_key_exists("microsoftStoreForBusinessPortalSelection", $this->_propDict) && !is_null($this->_propDict["microsoftStoreForBusinessPortalSelection"])) {
            if (is_a($this->_propDict["microsoftStoreForBusinessPortalSelection"], "\Beta\Microsoft\Graph\Model\MicrosoftStoreForBusinessPortalSelectionOptions")) {
                return $this->_propDict["microsoftStoreForBusinessPortalSelection"];
            } else {
                $this->_propDict["microsoftStoreForBusinessPortalSelection"] = new MicrosoftStoreForBusinessPortalSelectionOptions($this->_propDict["microsoftStoreForBusinessPortalSelection"]);
                return $this->_propDict["microsoftStoreForBusinessPortalSelection"];
            }
        }
        return null;
    }
    
    /**
    * Sets the microsoftStoreForBusinessPortalSelection
    * The end user portal information is used to sync applications from the Microsoft Store for Business to Intune Company Portal. There are three options to pick from ['Company portal only', 'Company portal and private store', 'Private store only']. Possible values are: none, companyPortal, privateStore.
    *
    * @param MicrosoftStoreForBusinessPortalSelectionOptions $val The microsoftStoreForBusinessPortalSelection
    *
    * @return DeviceAppManagement
    */
    public function setMicrosoftStoreForBusinessPortalSelection($val)
    {
        $this->_propDict["microsoftStoreForBusinessPortalSelection"] = $val;
        return $this;
    }
    

     /** 
     * Gets the managedEBookCategories
    * The mobile eBook categories.
     *
     * @return ManagedEBookCategory[]|null The managedEBookCategories
     */
    public function getManagedEBookCategories()
    {
        if (array_key_exists('managedEBookCategories', $this->_propDict) && !is_null($this->_propDict['managedEBookCategories'])) {
           $managedEBookCategories = [];
           if (count($this->_propDict['managedEBookCategories']) > 0 && is_a($this->_propDict['managedEBookCategories'][0], 'ManagedEBookCategory')) {
              return $this->_propDict['managedEBookCategories'];
           }
           foreach ($this->_propDict['managedEBookCategories'] as $singleValue) {
              $managedEBookCategories []= new ManagedEBookCategory($singleValue);
           }
           $this->_propDict['managedEBookCategories'] = $managedEBookCategories;
           return $this->_propDict['managedEBookCategories'];
        }
        return null;
    }
    
    /** 
    * Sets the managedEBookCategories
    * The mobile eBook categories.
    *
    * @param ManagedEBookCategory[] $val The managedEBookCategories
    *
    * @return DeviceAppManagement
    */
    public function setManagedEBookCategories($val)
    {
        $this->_propDict["managedEBookCategories"] = $val;
        return $this;
    }
    

     /** 
     * Gets the enterpriseCodeSigningCertificates
    * The Windows Enterprise Code Signing Certificate.
     *
     * @return EnterpriseCodeSigningCertificate[]|null The enterpriseCodeSigningCertificates
     */
    public function getEnterpriseCodeSigningCertificates()
    {
        if (array_key_exists('enterpriseCodeSigningCertificates', $this->_propDict) && !is_null($this->_propDict['enterpriseCodeSigningCertificates'])) {
           $enterpriseCodeSigningCertificates = [];
           if (count($this->_propDict['enterpriseCodeSigningCertificates']) > 0 && is_a($this->_propDict['enterpriseCodeSigningCertificates'][0], 'EnterpriseCodeSigningCertificate')) {
              return $this->_propDict['enterpriseCodeSigningCertificates'];
           }
           foreach ($this->_propDict['enterpriseCodeSigningCertificates'] as $singleValue) {
              $enterpriseCodeSigningCertificates []= new EnterpriseCodeSigningCertificate($singleValue);
           }
           $this->_propDict['enterpriseCodeSigningCertificates'] = $enterpriseCodeSigningCertificates;
           return $this->_propDict['enterpriseCodeSigningCertificates'];
        }
        return null;
    }
    
    /** 
    * Sets the enterpriseCodeSigningCertificates
    * The Windows Enterprise Code Signing Certificate.
    *
    * @param EnterpriseCodeSigningCertificate[] $val The enterpriseCodeSigningCertificates
    *
    * @return DeviceAppManagement
    */
    public function setEnterpriseCodeSigningCertificates($val)
    {
        $this->_propDict["enterpriseCodeSigningCertificates"] = $val;
        return $this;
    }
    

     /** 
     * Gets the iosLobAppProvisioningConfigurations
    * The IOS Lob App Provisioning Configurations.
     *
     * @return IosLobAppProvisioningConfiguration[]|null The iosLobAppProvisioningConfigurations
     */
    public function getIosLobAppProvisioningConfigurations()
    {
        if (array_key_exists('iosLobAppProvisioningConfigurations', $this->_propDict) && !is_null($this->_propDict['iosLobAppProvisioningConfigurations'])) {
           $iosLobAppProvisioningConfigurations = [];
           if (count($this->_propDict['iosLobAppProvisioningConfigurations']) > 0 && is_a($this->_propDict['iosLobAppProvisioningConfigurations'][0], 'IosLobAppProvisioningConfiguration')) {
              return $this->_propDict['iosLobAppProvisioningConfigurations'];
           }
           foreach ($this->_propDict['iosLobAppProvisioningConfigurations'] as $singleValue) {
              $iosLobAppProvisioningConfigurations []= new IosLobAppProvisioningConfiguration($singleValue);
           }
           $this->_propDict['iosLobAppProvisioningConfigurations'] = $iosLobAppProvisioningConfigurations;
           return $this->_propDict['iosLobAppProvisioningConfigurations'];
        }
        return null;
    }
    
    /** 
    * Sets the iosLobAppProvisioningConfigurations
    * The IOS Lob App Provisioning Configurations.
    *
    * @param IosLobAppProvisioningConfiguration[] $val The iosLobAppProvisioningConfigurations
    *
    * @return DeviceAppManagement
    */
    public function setIosLobAppProvisioningConfigurations($val)
    {
        $this->_propDict["iosLobAppProvisioningConfigurations"] = $val;
        return $this;
    }
    

     /** 
     * Gets the mobileAppCategories
    * The mobile app categories.
     *
     * @return MobileAppCategory[]|null The mobileAppCategories
     */
    public function getMobileAppCategories()
    {
        if (array_key_exists('mobileAppCategories', $this->_propDict) && !is_null($this->_propDict['mobileAppCategories'])) {
           $mobileAppCategories = [];
           if (count($this->_propDict['mobileAppCategories']) > 0 && is_a($this->_propDict['mobileAppCategories'][0], 'MobileAppCategory')) {
              return $this->_propDict['mobileAppCategories'];
           }
           foreach ($this->_propDict['mobileAppCategories'] as $singleValue) {
              $mobileAppCategories []= new MobileAppCategory($singleValue);
           }
           $this->_propDict['mobileAppCategories'] = $mobileAppCategories;
           return $this->_propDict['mobileAppCategories'];
        }
        return null;
    }
    
    /** 
    * Sets the mobileAppCategories
    * The mobile app categories.
    *
    * @param MobileAppCategory[] $val The mobileAppCategories
    *
    * @return DeviceAppManagement
    */
    public function setMobileAppCategories($val)
    {
        $this->_propDict["mobileAppCategories"] = $val;
        return $this;
    }
    

     /** 
     * Gets the mobileAppConfigurations
    * The Managed Device Mobile Application Configurations.
     *
     * @return ManagedDeviceMobileAppConfiguration[]|null The mobileAppConfigurations
     */
    public function getMobileAppConfigurations()
    {
        if (array_key_exists('mobileAppConfigurations', $this->_propDict) && !is_null($this->_propDict['mobileAppConfigurations'])) {
           $mobileAppConfigurations = [];
           if (count($this->_propDict['mobileAppConfigurations']) > 0 && is_a($this->_propDict['mobileAppConfigurations'][0], 'ManagedDeviceMobileAppConfiguration')) {
              return $this->_propDict['mobileAppConfigurations'];
           }
           foreach ($this->_propDict['mobileAppConfigurations'] as $singleValue) {
              $mobileAppConfigurations []= new ManagedDeviceMobileAppConfiguration($singleValue);
           }
           $this->_propDict['mobileAppConfigurations'] = $mobileAppConfigurations;
           return $this->_propDict['mobileAppConfigurations'];
        }
        return null;
    }
    
    /** 
    * Sets the mobileAppConfigurations
    * The Managed Device Mobile Application Configurations.
    *
    * @param ManagedDeviceMobileAppConfiguration[] $val The mobileAppConfigurations
    *
    * @return DeviceAppManagement
    */
    public function setMobileAppConfigurations($val)
    {
        $this->_propDict["mobileAppConfigurations"] = $val;
        return $this;
    }
    

     /** 
     * Gets the mobileApps
    * The mobile apps.
     *
     * @return MobileApp[]|null The mobileApps
     */
    public function getMobileApps()
    {
        if (array_key_exists('mobileApps', $this->_propDict) && !is_null($this->_propDict['mobileApps'])) {
           $mobileApps = [];
           if (count($this->_propDict['mobileApps']) > 0 && is_a($this->_propDict['mobileApps'][0], 'MobileApp')) {
              return $this->_propDict['mobileApps'];
           }
           foreach ($this->_propDict['mobileApps'] as $singleValue) {
              $mobileApps []= new MobileApp($singleValue);
           }
           $this->_propDict['mobileApps'] = $mobileApps;
           return $this->_propDict['mobileApps'];
        }
        return null;
    }
    
    /** 
    * Sets the mobileApps
    * The mobile apps.
    *
    * @param MobileApp[] $val The mobileApps
    *
    * @return DeviceAppManagement
    */
    public function setMobileApps($val)
    {
        $this->_propDict["mobileApps"] = $val;
        return $this;
    }
    
    /**
    * Gets the symantecCodeSigningCertificate
    * The WinPhone Symantec Code Signing Certificate.
    *
    * @return SymantecCodeSigningCertificate|null The symantecCodeSigningCertificate
    */
    public function getSymantecCodeSigningCertificate()
    {
        if (array_key_exists("symantecCodeSigningCertificate", $this->_propDict) && !is_null($this->_propDict["symantecCodeSigningCertificate"])) {
            if (is_a($this->_propDict["symantecCodeSigningCertificate"], "\Beta\Microsoft\Graph\Model\SymantecCodeSigningCertificate")) {
                return $this->_propDict["symantecCodeSigningCertificate"];
            } else {
                $this->_propDict["symantecCodeSigningCertificate"] = new SymantecCodeSigningCertificate($this->_propDict["symantecCodeSigningCertificate"]);
                return $this->_propDict["symantecCodeSigningCertificate"];
            }
        }
        return null;
    }
    
    /**
    * Sets the symantecCodeSigningCertificate
    * The WinPhone Symantec Code Signing Certificate.
    *
    * @param SymantecCodeSigningCertificate $val The symantecCodeSigningCertificate
    *
    * @return DeviceAppManagement
    */
    public function setSymantecCodeSigningCertificate($val)
    {
        $this->_propDict["symantecCodeSigningCertificate"] = $val;
        return $this;
    }
    

     /** 
     * Gets the managedEBooks
    * The Managed eBook.
     *
     * @return ManagedEBook[]|null The managedEBooks
     */
    public function getManagedEBooks()
    {
        if (array_key_exists('managedEBooks', $this->_propDict) && !is_null($this->_propDict['managedEBooks'])) {
           $managedEBooks = [];
           if (count($this->_propDict['managedEBooks']) > 0 && is_a($this->_propDict['managedEBooks'][0], 'ManagedEBook')) {
              return $this->_propDict['managedEBooks'];
           }
           foreach ($this->_propDict['managedEBooks'] as $singleValue) {
              $managedEBooks []= new ManagedEBook($singleValue);
           }
           $this->_propDict['managedEBooks'] = $managedEBooks;
           return $this->_propDict['managedEBooks'];
        }
        return null;
    }
    
    /** 
    * Sets the managedEBooks
    * The Managed eBook.
    *
    * @param ManagedEBook[] $val The managedEBooks
    *
    * @return DeviceAppManagement
    */
    public function setManagedEBooks($val)
    {
        $this->_propDict["managedEBooks"] = $val;
        return $this;
    }
    

     /** 
     * Gets the policySets
    * The PolicySet of Policies and Applications
     *
     * @return PolicySet[]|null The policySets
     */
    public function getPolicySets()
    {
        if (array_key_exists('policySets', $this->_propDict) && !is_null($this->_propDict['policySets'])) {
           $policySets = [];
           if (count($this->_propDict['policySets']) > 0 && is_a($this->_propDict['policySets'][0], 'PolicySet')) {
              return $this->_propDict['policySets'];
           }
           foreach ($this->_propDict['policySets'] as $singleValue) {
              $policySets []= new PolicySet($singleValue);
           }
           $this->_propDict['policySets'] = $policySets;
           return $this->_propDict['policySets'];
        }
        return null;
    }
    
    /** 
    * Sets the policySets
    * The PolicySet of Policies and Applications
    *
    * @param PolicySet[] $val The policySets
    *
    * @return DeviceAppManagement
    */
    public function setPolicySets($val)
    {
        $this->_propDict["policySets"] = $val;
        return $this;
    }
    

     /** 
     * Gets the sideLoadingKeys
    * Side Loading Keys that are required for the Windows 8 and 8.1 Apps installation.
     *
     * @return SideLoadingKey[]|null The sideLoadingKeys
     */
    public function getSideLoadingKeys()
    {
        if (array_key_exists('sideLoadingKeys', $this->_propDict) && !is_null($this->_propDict['sideLoadingKeys'])) {
           $sideLoadingKeys = [];
           if (count($this->_propDict['sideLoadingKeys']) > 0 && is_a($this->_propDict['sideLoadingKeys'][0], 'SideLoadingKey')) {
              return $this->_propDict['sideLoadingKeys'];
           }
           foreach ($this->_propDict['sideLoadingKeys'] as $singleValue) {
              $sideLoadingKeys []= new SideLoadingKey($singleValue);
           }
           $this->_propDict['sideLoadingKeys'] = $sideLoadingKeys;
           return $this->_propDict['sideLoadingKeys'];
        }
        return null;
    }
    
    /** 
    * Sets the sideLoadingKeys
    * Side Loading Keys that are required for the Windows 8 and 8.1 Apps installation.
    *
    * @param SideLoadingKey[] $val The sideLoadingKeys
    *
    * @return DeviceAppManagement
    */
    public function setSideLoadingKeys($val)
    {
        $this->_propDict["sideLoadingKeys"] = $val;
        return $this;
    }
    

     /** 
     * Gets the vppTokens
    * List of Vpp tokens for this organization.
     *
     * @return VppToken[]|null The vppTokens
     */
    public function getVppTokens()
    {
        if (array_key_exists('vppTokens', $this->_propDict) && !is_null($this->_propDict['vppTokens'])) {
           $vppTokens = [];
           if (count($this->_propDict['vppTokens']) > 0 && is_a($this->_propDict['vppTokens'][0], 'VppToken')) {
              return $this->_propDict['vppTokens'];
           }
           foreach ($this->_propDict['vppTokens'] as $singleValue) {
              $vppTokens []= new VppToken($singleValue);
           }
           $this->_propDict['vppTokens'] = $vppTokens;
           return $this->_propDict['vppTokens'];
        }
        return null;
    }
    
    /** 
    * Sets the vppTokens
    * List of Vpp tokens for this organization.
    *
    * @param VppToken[] $val The vppTokens
    *
    * @return DeviceAppManagement
    */
    public function setVppTokens($val)
    {
        $this->_propDict["vppTokens"] = $val;
        return $this;
    }
    
    /**
    * Gets the windowsManagementApp
    * Windows management app.
    *
    * @return WindowsManagementApp|null The windowsManagementApp
    */
    public function getWindowsManagementApp()
    {
        if (array_key_exists("windowsManagementApp", $this->_propDict) && !is_null($this->_propDict["windowsManagementApp"])) {
            if (is_a($this->_propDict["windowsManagementApp"], "\Beta\Microsoft\Graph\Model\WindowsManagementApp")) {
                return $this->_propDict["windowsManagementApp"];
            } else {
                $this->_propDict["windowsManagementApp"] = new WindowsManagementApp($this->_propDict["windowsManagementApp"]);
                return $this->_propDict["windowsManagementApp"];
            }
        }
        return null;
    }
    
    /**
    * Sets the windowsManagementApp
    * Windows management app.
    *
    * @param WindowsManagementApp $val The windowsManagementApp
    *
    * @return DeviceAppManagement
    */
    public function setWindowsManagementApp($val)
    {
        $this->_propDict["windowsManagementApp"] = $val;
        return $this;
    }
    

     /** 
     * Gets the androidManagedAppProtections
    * Android managed app policies.
     *
     * @return AndroidManagedAppProtection[]|null The androidManagedAppProtections
     */
    public function getAndroidManagedAppProtections()
    {
        if (array_key_exists('androidManagedAppProtections', $this->_propDict) && !is_null($this->_propDict['androidManagedAppProtections'])) {
           $androidManagedAppProtections = [];
           if (count($this->_propDict['androidManagedAppProtections']) > 0 && is_a($this->_propDict['androidManagedAppProtections'][0], 'AndroidManagedAppProtection')) {
              return $this->_propDict['androidManagedAppProtections'];
           }
           foreach ($this->_propDict['androidManagedAppProtections'] as $singleValue) {
              $androidManagedAppProtections []= new AndroidManagedAppProtection($singleValue);
           }
           $this->_propDict['androidManagedAppProtections'] = $androidManagedAppProtections;
           return $this->_propDict['androidManagedAppProtections'];
        }
        return null;
    }
    
    /** 
    * Sets the androidManagedAppProtections
    * Android managed app policies.
    *
    * @param AndroidManagedAppProtection[] $val The androidManagedAppProtections
    *
    * @return DeviceAppManagement
    */
    public function setAndroidManagedAppProtections($val)
    {
        $this->_propDict["androidManagedAppProtections"] = $val;
        return $this;
    }
    

     /** 
     * Gets the defaultManagedAppProtections
    * Default managed app policies.
     *
     * @return DefaultManagedAppProtection[]|null The defaultManagedAppProtections
     */
    public function getDefaultManagedAppProtections()
    {
        if (array_key_exists('defaultManagedAppProtections', $this->_propDict) && !is_null($this->_propDict['defaultManagedAppProtections'])) {
           $defaultManagedAppProtections = [];
           if (count($this->_propDict['defaultManagedAppProtections']) > 0 && is_a($this->_propDict['defaultManagedAppProtections'][0], 'DefaultManagedAppProtection')) {
              return $this->_propDict['defaultManagedAppProtections'];
           }
           foreach ($this->_propDict['defaultManagedAppProtections'] as $singleValue) {
              $defaultManagedAppProtections []= new DefaultManagedAppProtection($singleValue);
           }
           $this->_propDict['defaultManagedAppProtections'] = $defaultManagedAppProtections;
           return $this->_propDict['defaultManagedAppProtections'];
        }
        return null;
    }
    
    /** 
    * Sets the defaultManagedAppProtections
    * Default managed app policies.
    *
    * @param DefaultManagedAppProtection[] $val The defaultManagedAppProtections
    *
    * @return DeviceAppManagement
    */
    public function setDefaultManagedAppProtections($val)
    {
        $this->_propDict["defaultManagedAppProtections"] = $val;
        return $this;
    }
    

     /** 
     * Gets the iosManagedAppProtections
    * iOS managed app policies.
     *
     * @return IosManagedAppProtection[]|null The iosManagedAppProtections
     */
    public function getIosManagedAppProtections()
    {
        if (array_key_exists('iosManagedAppProtections', $this->_propDict) && !is_null($this->_propDict['iosManagedAppProtections'])) {
           $iosManagedAppProtections = [];
           if (count($this->_propDict['iosManagedAppProtections']) > 0 && is_a($this->_propDict['iosManagedAppProtections'][0], 'IosManagedAppProtection')) {
              return $this->_propDict['iosManagedAppProtections'];
           }
           foreach ($this->_propDict['iosManagedAppProtections'] as $singleValue) {
              $iosManagedAppProtections []= new IosManagedAppProtection($singleValue);
           }
           $this->_propDict['iosManagedAppProtections'] = $iosManagedAppProtections;
           return $this->_propDict['iosManagedAppProtections'];
        }
        return null;
    }
    
    /** 
    * Sets the iosManagedAppProtections
    * iOS managed app policies.
    *
    * @param IosManagedAppProtection[] $val The iosManagedAppProtections
    *
    * @return DeviceAppManagement
    */
    public function setIosManagedAppProtections($val)
    {
        $this->_propDict["iosManagedAppProtections"] = $val;
        return $this;
    }
    

     /** 
     * Gets the managedAppPolicies
    * Managed app policies.
     *
     * @return ManagedAppPolicy[]|null The managedAppPolicies
     */
    public function getManagedAppPolicies()
    {
        if (array_key_exists('managedAppPolicies', $this->_propDict) && !is_null($this->_propDict['managedAppPolicies'])) {
           $managedAppPolicies = [];
           if (count($this->_propDict['managedAppPolicies']) > 0 && is_a($this->_propDict['managedAppPolicies'][0], 'ManagedAppPolicy')) {
              return $this->_propDict['managedAppPolicies'];
           }
           foreach ($this->_propDict['managedAppPolicies'] as $singleValue) {
              $managedAppPolicies []= new ManagedAppPolicy($singleValue);
           }
           $this->_propDict['managedAppPolicies'] = $managedAppPolicies;
           return $this->_propDict['managedAppPolicies'];
        }
        return null;
    }
    
    /** 
    * Sets the managedAppPolicies
    * Managed app policies.
    *
    * @param ManagedAppPolicy[] $val The managedAppPolicies
    *
    * @return DeviceAppManagement
    */
    public function setManagedAppPolicies($val)
    {
        $this->_propDict["managedAppPolicies"] = $val;
        return $this;
    }
    

     /** 
     * Gets the managedAppRegistrations
    * The managed app registrations.
     *
     * @return ManagedAppRegistration[]|null The managedAppRegistrations
     */
    public function getManagedAppRegistrations()
    {
        if (array_key_exists('managedAppRegistrations', $this->_propDict) && !is_null($this->_propDict['managedAppRegistrations'])) {
           $managedAppRegistrations = [];
           if (count($this->_propDict['managedAppRegistrations']) > 0 && is_a($this->_propDict['managedAppRegistrations'][0], 'ManagedAppRegistration')) {
              return $this->_propDict['managedAppRegistrations'];
           }
           foreach ($this->_propDict['managedAppRegistrations'] as $singleValue) {
              $managedAppRegistrations []= new ManagedAppRegistration($singleValue);
           }
           $this->_propDict['managedAppRegistrations'] = $managedAppRegistrations;
           return $this->_propDict['managedAppRegistrations'];
        }
        return null;
    }
    
    /** 
    * Sets the managedAppRegistrations
    * The managed app registrations.
    *
    * @param ManagedAppRegistration[] $val The managedAppRegistrations
    *
    * @return DeviceAppManagement
    */
    public function setManagedAppRegistrations($val)
    {
        $this->_propDict["managedAppRegistrations"] = $val;
        return $this;
    }
    

     /** 
     * Gets the managedAppStatuses
    * The managed app statuses.
     *
     * @return ManagedAppStatus[]|null The managedAppStatuses
     */
    public function getManagedAppStatuses()
    {
        if (array_key_exists('managedAppStatuses', $this->_propDict) && !is_null($this->_propDict['managedAppStatuses'])) {
           $managedAppStatuses = [];
           if (count($this->_propDict['managedAppStatuses']) > 0 && is_a($this->_propDict['managedAppStatuses'][0], 'ManagedAppStatus')) {
              return $this->_propDict['managedAppStatuses'];
           }
           foreach ($this->_propDict['managedAppStatuses'] as $singleValue) {
              $managedAppStatuses []= new ManagedAppStatus($singleValue);
           }
           $this->_propDict['managedAppStatuses'] = $managedAppStatuses;
           return $this->_propDict['managedAppStatuses'];
        }
        return null;
    }
    
    /** 
    * Sets the managedAppStatuses
    * The managed app statuses.
    *
    * @param ManagedAppStatus[] $val The managedAppStatuses
    *
    * @return DeviceAppManagement
    */
    public function setManagedAppStatuses($val)
    {
        $this->_propDict["managedAppStatuses"] = $val;
        return $this;
    }
    

     /** 
     * Gets the mdmWindowsInformationProtectionPolicies
    * Windows information protection for apps running on devices which are MDM enrolled.
     *
     * @return MdmWindowsInformationProtectionPolicy[]|null The mdmWindowsInformationProtectionPolicies
     */
    public function getMdmWindowsInformationProtectionPolicies()
    {
        if (array_key_exists('mdmWindowsInformationProtectionPolicies', $this->_propDict) && !is_null($this->_propDict['mdmWindowsInformationProtectionPolicies'])) {
           $mdmWindowsInformationProtectionPolicies = [];
           if (count($this->_propDict['mdmWindowsInformationProtectionPolicies']) > 0 && is_a($this->_propDict['mdmWindowsInformationProtectionPolicies'][0], 'MdmWindowsInformationProtectionPolicy')) {
              return $this->_propDict['mdmWindowsInformationProtectionPolicies'];
           }
           foreach ($this->_propDict['mdmWindowsInformationProtectionPolicies'] as $singleValue) {
              $mdmWindowsInformationProtectionPolicies []= new MdmWindowsInformationProtectionPolicy($singleValue);
           }
           $this->_propDict['mdmWindowsInformationProtectionPolicies'] = $mdmWindowsInformationProtectionPolicies;
           return $this->_propDict['mdmWindowsInformationProtectionPolicies'];
        }
        return null;
    }
    
    /** 
    * Sets the mdmWindowsInformationProtectionPolicies
    * Windows information protection for apps running on devices which are MDM enrolled.
    *
    * @param MdmWindowsInformationProtectionPolicy[] $val The mdmWindowsInformationProtectionPolicies
    *
    * @return DeviceAppManagement
    */
    public function setMdmWindowsInformationProtectionPolicies($val)
    {
        $this->_propDict["mdmWindowsInformationProtectionPolicies"] = $val;
        return $this;
    }
    

     /** 
     * Gets the targetedManagedAppConfigurations
    * Targeted managed app configurations.
     *
     * @return TargetedManagedAppConfiguration[]|null The targetedManagedAppConfigurations
     */
    public function getTargetedManagedAppConfigurations()
    {
        if (array_key_exists('targetedManagedAppConfigurations', $this->_propDict) && !is_null($this->_propDict['targetedManagedAppConfigurations'])) {
           $targetedManagedAppConfigurations = [];
           if (count($this->_propDict['targetedManagedAppConfigurations']) > 0 && is_a($this->_propDict['targetedManagedAppConfigurations'][0], 'TargetedManagedAppConfiguration')) {
              return $this->_propDict['targetedManagedAppConfigurations'];
           }
           foreach ($this->_propDict['targetedManagedAppConfigurations'] as $singleValue) {
              $targetedManagedAppConfigurations []= new TargetedManagedAppConfiguration($singleValue);
           }
           $this->_propDict['targetedManagedAppConfigurations'] = $targetedManagedAppConfigurations;
           return $this->_propDict['targetedManagedAppConfigurations'];
        }
        return null;
    }
    
    /** 
    * Sets the targetedManagedAppConfigurations
    * Targeted managed app configurations.
    *
    * @param TargetedManagedAppConfiguration[] $val The targetedManagedAppConfigurations
    *
    * @return DeviceAppManagement
    */
    public function setTargetedManagedAppConfigurations($val)
    {
        $this->_propDict["targetedManagedAppConfigurations"] = $val;
        return $this;
    }
    

     /** 
     * Gets the windowsInformationProtectionDeviceRegistrations
    * Windows information protection device registrations that are not MDM enrolled.
     *
     * @return WindowsInformationProtectionDeviceRegistration[]|null The windowsInformationProtectionDeviceRegistrations
     */
    public function getWindowsInformationProtectionDeviceRegistrations()
    {
        if (array_key_exists('windowsInformationProtectionDeviceRegistrations', $this->_propDict) && !is_null($this->_propDict['windowsInformationProtectionDeviceRegistrations'])) {
           $windowsInformationProtectionDeviceRegistrations = [];
           if (count($this->_propDict['windowsInformationProtectionDeviceRegistrations']) > 0 && is_a($this->_propDict['windowsInformationProtectionDeviceRegistrations'][0], 'WindowsInformationProtectionDeviceRegistration')) {
              return $this->_propDict['windowsInformationProtectionDeviceRegistrations'];
           }
           foreach ($this->_propDict['windowsInformationProtectionDeviceRegistrations'] as $singleValue) {
              $windowsInformationProtectionDeviceRegistrations []= new WindowsInformationProtectionDeviceRegistration($singleValue);
           }
           $this->_propDict['windowsInformationProtectionDeviceRegistrations'] = $windowsInformationProtectionDeviceRegistrations;
           return $this->_propDict['windowsInformationProtectionDeviceRegistrations'];
        }
        return null;
    }
    
    /** 
    * Sets the windowsInformationProtectionDeviceRegistrations
    * Windows information protection device registrations that are not MDM enrolled.
    *
    * @param WindowsInformationProtectionDeviceRegistration[] $val The windowsInformationProtectionDeviceRegistrations
    *
    * @return DeviceAppManagement
    */
    public function setWindowsInformationProtectionDeviceRegistrations($val)
    {
        $this->_propDict["windowsInformationProtectionDeviceRegistrations"] = $val;
        return $this;
    }
    

     /** 
     * Gets the windowsInformationProtectionPolicies
    * Windows information protection for apps running on devices which are not MDM enrolled.
     *
     * @return WindowsInformationProtectionPolicy[]|null The windowsInformationProtectionPolicies
     */
    public function getWindowsInformationProtectionPolicies()
    {
        if (array_key_exists('windowsInformationProtectionPolicies', $this->_propDict) && !is_null($this->_propDict['windowsInformationProtectionPolicies'])) {
           $windowsInformationProtectionPolicies = [];
           if (count($this->_propDict['windowsInformationProtectionPolicies']) > 0 && is_a($this->_propDict['windowsInformationProtectionPolicies'][0], 'WindowsInformationProtectionPolicy')) {
              return $this->_propDict['windowsInformationProtectionPolicies'];
           }
           foreach ($this->_propDict['windowsInformationProtectionPolicies'] as $singleValue) {
              $windowsInformationProtectionPolicies []= new WindowsInformationProtectionPolicy($singleValue);
           }
           $this->_propDict['windowsInformationProtectionPolicies'] = $windowsInformationProtectionPolicies;
           return $this->_propDict['windowsInformationProtectionPolicies'];
        }
        return null;
    }
    
    /** 
    * Sets the windowsInformationProtectionPolicies
    * Windows information protection for apps running on devices which are not MDM enrolled.
    *
    * @param WindowsInformationProtectionPolicy[] $val The windowsInformationProtectionPolicies
    *
    * @return DeviceAppManagement
    */
    public function setWindowsInformationProtectionPolicies($val)
    {
        $this->_propDict["windowsInformationProtectionPolicies"] = $val;
        return $this;
    }
    

     /** 
     * Gets the windowsInformationProtectionWipeActions
    * Windows information protection wipe actions.
     *
     * @return WindowsInformationProtectionWipeAction[]|null The windowsInformationProtectionWipeActions
     */
    public function getWindowsInformationProtectionWipeActions()
    {
        if (array_key_exists('windowsInformationProtectionWipeActions', $this->_propDict) && !is_null($this->_propDict['windowsInformationProtectionWipeActions'])) {
           $windowsInformationProtectionWipeActions = [];
           if (count($this->_propDict['windowsInformationProtectionWipeActions']) > 0 && is_a($this->_propDict['windowsInformationProtectionWipeActions'][0], 'WindowsInformationProtectionWipeAction')) {
              return $this->_propDict['windowsInformationProtectionWipeActions'];
           }
           foreach ($this->_propDict['windowsInformationProtectionWipeActions'] as $singleValue) {
              $windowsInformationProtectionWipeActions []= new WindowsInformationProtectionWipeAction($singleValue);
           }
           $this->_propDict['windowsInformationProtectionWipeActions'] = $windowsInformationProtectionWipeActions;
           return $this->_propDict['windowsInformationProtectionWipeActions'];
        }
        return null;
    }
    
    /** 
    * Sets the windowsInformationProtectionWipeActions
    * Windows information protection wipe actions.
    *
    * @param WindowsInformationProtectionWipeAction[] $val The windowsInformationProtectionWipeActions
    *
    * @return DeviceAppManagement
    */
    public function setWindowsInformationProtectionWipeActions($val)
    {
        $this->_propDict["windowsInformationProtectionWipeActions"] = $val;
        return $this;
    }
    

     /** 
     * Gets the deviceAppManagementTasks
    * Device app management tasks.
     *
     * @return DeviceAppManagementTask[]|null The deviceAppManagementTasks
     */
    public function getDeviceAppManagementTasks()
    {
        if (array_key_exists('deviceAppManagementTasks', $this->_propDict) && !is_null($this->_propDict['deviceAppManagementTasks'])) {
           $deviceAppManagementTasks = [];
           if (count($this->_propDict['deviceAppManagementTasks']) > 0 && is_a($this->_propDict['deviceAppManagementTasks'][0], 'DeviceAppManagementTask')) {
              return $this->_propDict['deviceAppManagementTasks'];
           }
           foreach ($this->_propDict['deviceAppManagementTasks'] as $singleValue) {
              $deviceAppManagementTasks []= new DeviceAppManagementTask($singleValue);
           }
           $this->_propDict['deviceAppManagementTasks'] = $deviceAppManagementTasks;
           return $this->_propDict['deviceAppManagementTasks'];
        }
        return null;
    }
    
    /** 
    * Sets the deviceAppManagementTasks
    * Device app management tasks.
    *
    * @param DeviceAppManagementTask[] $val The deviceAppManagementTasks
    *
    * @return DeviceAppManagement
    */
    public function setDeviceAppManagementTasks($val)
    {
        $this->_propDict["deviceAppManagementTasks"] = $val;
        return $this;
    }
    

     /** 
     * Gets the wdacSupplementalPolicies
    * The collection of Windows Defender Application Control Supplemental Policies.
     *
     * @return WindowsDefenderApplicationControlSupplementalPolicy[]|null The wdacSupplementalPolicies
     */
    public function getWdacSupplementalPolicies()
    {
        if (array_key_exists('wdacSupplementalPolicies', $this->_propDict) && !is_null($this->_propDict['wdacSupplementalPolicies'])) {
           $wdacSupplementalPolicies = [];
           if (count($this->_propDict['wdacSupplementalPolicies']) > 0 && is_a($this->_propDict['wdacSupplementalPolicies'][0], 'WindowsDefenderApplicationControlSupplementalPolicy')) {
              return $this->_propDict['wdacSupplementalPolicies'];
           }
           foreach ($this->_propDict['wdacSupplementalPolicies'] as $singleValue) {
              $wdacSupplementalPolicies []= new WindowsDefenderApplicationControlSupplementalPolicy($singleValue);
           }
           $this->_propDict['wdacSupplementalPolicies'] = $wdacSupplementalPolicies;
           return $this->_propDict['wdacSupplementalPolicies'];
        }
        return null;
    }
    
    /** 
    * Sets the wdacSupplementalPolicies
    * The collection of Windows Defender Application Control Supplemental Policies.
    *
    * @param WindowsDefenderApplicationControlSupplementalPolicy[] $val The wdacSupplementalPolicies
    *
    * @return DeviceAppManagement
    */
    public function setWdacSupplementalPolicies($val)
    {
        $this->_propDict["wdacSupplementalPolicies"] = $val;
        return $this;
    }
    
}
