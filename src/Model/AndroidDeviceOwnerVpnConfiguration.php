<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AndroidDeviceOwnerVpnConfiguration File
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
* AndroidDeviceOwnerVpnConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AndroidDeviceOwnerVpnConfiguration extends VpnConfiguration
{
    /**
    * Gets the alwaysOn
    * Whether or not to enable always-on VPN connection.
    *
    * @return bool|null The alwaysOn
    */
    public function getAlwaysOn()
    {
        if (array_key_exists("alwaysOn", $this->_propDict)) {
            return $this->_propDict["alwaysOn"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the alwaysOn
    * Whether or not to enable always-on VPN connection.
    *
    * @param bool $val The alwaysOn
    *
    * @return AndroidDeviceOwnerVpnConfiguration
    */
    public function setAlwaysOn($val)
    {
        $this->_propDict["alwaysOn"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the alwaysOnLockdown
    * If always-on VPN connection is enabled, whether or not to lock network traffic when that VPN is disconnected.
    *
    * @return bool|null The alwaysOnLockdown
    */
    public function getAlwaysOnLockdown()
    {
        if (array_key_exists("alwaysOnLockdown", $this->_propDict)) {
            return $this->_propDict["alwaysOnLockdown"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the alwaysOnLockdown
    * If always-on VPN connection is enabled, whether or not to lock network traffic when that VPN is disconnected.
    *
    * @param bool $val The alwaysOnLockdown
    *
    * @return AndroidDeviceOwnerVpnConfiguration
    */
    public function setAlwaysOnLockdown($val)
    {
        $this->_propDict["alwaysOnLockdown"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the connectionType
    * Connection type. Possible values are: ciscoAnyConnect, pulseSecure, f5EdgeClient, dellSonicWallMobileConnect, checkPointCapsuleVpn, citrix, microsoftTunnel, netMotionMobility, microsoftProtect.
    *
    * @return AndroidVpnConnectionType|null The connectionType
    */
    public function getConnectionType()
    {
        if (array_key_exists("connectionType", $this->_propDict) && !is_null($this->_propDict["connectionType"])) {
            if (is_a($this->_propDict["connectionType"], "\Beta\Microsoft\Graph\Model\AndroidVpnConnectionType")) {
                return $this->_propDict["connectionType"];
            } else {
                $this->_propDict["connectionType"] = new AndroidVpnConnectionType($this->_propDict["connectionType"]);
                return $this->_propDict["connectionType"];
            }
        }
        return null;
    }
    
    /**
    * Sets the connectionType
    * Connection type. Possible values are: ciscoAnyConnect, pulseSecure, f5EdgeClient, dellSonicWallMobileConnect, checkPointCapsuleVpn, citrix, microsoftTunnel, netMotionMobility, microsoftProtect.
    *
    * @param AndroidVpnConnectionType $val The connectionType
    *
    * @return AndroidDeviceOwnerVpnConfiguration
    */
    public function setConnectionType($val)
    {
        $this->_propDict["connectionType"] = $val;
        return $this;
    }
    

     /** 
     * Gets the customData
    * Custom data to define key/value pairs specific to a VPN provider. This collection can contain a maximum of 25 elements.
     *
     * @return KeyValue[]|null The customData
     */
    public function getCustomData()
    {
        if (array_key_exists('customData', $this->_propDict) && !is_null($this->_propDict['customData'])) {
           $customData = [];
           if (count($this->_propDict['customData']) > 0 && is_a($this->_propDict['customData'][0], 'KeyValue')) {
              return $this->_propDict['customData'];
           }
           foreach ($this->_propDict['customData'] as $singleValue) {
              $customData []= new KeyValue($singleValue);
           }
           $this->_propDict['customData'] = $customData;
           return $this->_propDict['customData'];
        }
        return null;
    }
    
    /** 
    * Sets the customData
    * Custom data to define key/value pairs specific to a VPN provider. This collection can contain a maximum of 25 elements.
    *
    * @param KeyValue[] $val The customData
    *
    * @return AndroidDeviceOwnerVpnConfiguration
    */
    public function setCustomData($val)
    {
        $this->_propDict["customData"] = $val;
        return $this;
    }
    

     /** 
     * Gets the customKeyValueData
    * Custom data to define key/value pairs specific to a VPN provider. This collection can contain a maximum of 25 elements.
     *
     * @return KeyValuePair[]|null The customKeyValueData
     */
    public function getCustomKeyValueData()
    {
        if (array_key_exists('customKeyValueData', $this->_propDict) && !is_null($this->_propDict['customKeyValueData'])) {
           $customKeyValueData = [];
           if (count($this->_propDict['customKeyValueData']) > 0 && is_a($this->_propDict['customKeyValueData'][0], 'KeyValuePair')) {
              return $this->_propDict['customKeyValueData'];
           }
           foreach ($this->_propDict['customKeyValueData'] as $singleValue) {
              $customKeyValueData []= new KeyValuePair($singleValue);
           }
           $this->_propDict['customKeyValueData'] = $customKeyValueData;
           return $this->_propDict['customKeyValueData'];
        }
        return null;
    }
    
    /** 
    * Sets the customKeyValueData
    * Custom data to define key/value pairs specific to a VPN provider. This collection can contain a maximum of 25 elements.
    *
    * @param KeyValuePair[] $val The customKeyValueData
    *
    * @return AndroidDeviceOwnerVpnConfiguration
    */
    public function setCustomKeyValueData($val)
    {
        $this->_propDict["customKeyValueData"] = $val;
        return $this;
    }
    
    /**
    * Gets the microsoftTunnelSiteId
    * Microsoft Tunnel site ID.
    *
    * @return string|null The microsoftTunnelSiteId
    */
    public function getMicrosoftTunnelSiteId()
    {
        if (array_key_exists("microsoftTunnelSiteId", $this->_propDict)) {
            return $this->_propDict["microsoftTunnelSiteId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the microsoftTunnelSiteId
    * Microsoft Tunnel site ID.
    *
    * @param string $val The microsoftTunnelSiteId
    *
    * @return AndroidDeviceOwnerVpnConfiguration
    */
    public function setMicrosoftTunnelSiteId($val)
    {
        $this->_propDict["microsoftTunnelSiteId"] = $val;
        return $this;
    }
    
    /**
    * Gets the proxyServer
    * Proxy server.
    *
    * @return VpnProxyServer|null The proxyServer
    */
    public function getProxyServer()
    {
        if (array_key_exists("proxyServer", $this->_propDict) && !is_null($this->_propDict["proxyServer"])) {
            if (is_a($this->_propDict["proxyServer"], "\Beta\Microsoft\Graph\Model\VpnProxyServer")) {
                return $this->_propDict["proxyServer"];
            } else {
                $this->_propDict["proxyServer"] = new VpnProxyServer($this->_propDict["proxyServer"]);
                return $this->_propDict["proxyServer"];
            }
        }
        return null;
    }
    
    /**
    * Sets the proxyServer
    * Proxy server.
    *
    * @param VpnProxyServer $val The proxyServer
    *
    * @return AndroidDeviceOwnerVpnConfiguration
    */
    public function setProxyServer($val)
    {
        $this->_propDict["proxyServer"] = $val;
        return $this;
    }
    

     /** 
     * Gets the targetedMobileApps
    * Targeted mobile apps. This collection can contain a maximum of 500 elements.
     *
     * @return AppListItem[]|null The targetedMobileApps
     */
    public function getTargetedMobileApps()
    {
        if (array_key_exists('targetedMobileApps', $this->_propDict) && !is_null($this->_propDict['targetedMobileApps'])) {
           $targetedMobileApps = [];
           if (count($this->_propDict['targetedMobileApps']) > 0 && is_a($this->_propDict['targetedMobileApps'][0], 'AppListItem')) {
              return $this->_propDict['targetedMobileApps'];
           }
           foreach ($this->_propDict['targetedMobileApps'] as $singleValue) {
              $targetedMobileApps []= new AppListItem($singleValue);
           }
           $this->_propDict['targetedMobileApps'] = $targetedMobileApps;
           return $this->_propDict['targetedMobileApps'];
        }
        return null;
    }
    
    /** 
    * Sets the targetedMobileApps
    * Targeted mobile apps. This collection can contain a maximum of 500 elements.
    *
    * @param AppListItem[] $val The targetedMobileApps
    *
    * @return AndroidDeviceOwnerVpnConfiguration
    */
    public function setTargetedMobileApps($val)
    {
        $this->_propDict["targetedMobileApps"] = $val;
        return $this;
    }
    
    /**
    * Gets the targetedPackageIds
    * Targeted App package IDs.
    *
    * @return string|null The targetedPackageIds
    */
    public function getTargetedPackageIds()
    {
        if (array_key_exists("targetedPackageIds", $this->_propDict)) {
            return $this->_propDict["targetedPackageIds"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the targetedPackageIds
    * Targeted App package IDs.
    *
    * @param string $val The targetedPackageIds
    *
    * @return AndroidDeviceOwnerVpnConfiguration
    */
    public function setTargetedPackageIds($val)
    {
        $this->_propDict["targetedPackageIds"] = $val;
        return $this;
    }
    
    /**
    * Gets the derivedCredentialSettings
    * Tenant level settings for the Derived Credentials to be used for authentication.
    *
    * @return DeviceManagementDerivedCredentialSettings|null The derivedCredentialSettings
    */
    public function getDerivedCredentialSettings()
    {
        if (array_key_exists("derivedCredentialSettings", $this->_propDict) && !is_null($this->_propDict["derivedCredentialSettings"])) {
            if (is_a($this->_propDict["derivedCredentialSettings"], "\Beta\Microsoft\Graph\Model\DeviceManagementDerivedCredentialSettings")) {
                return $this->_propDict["derivedCredentialSettings"];
            } else {
                $this->_propDict["derivedCredentialSettings"] = new DeviceManagementDerivedCredentialSettings($this->_propDict["derivedCredentialSettings"]);
                return $this->_propDict["derivedCredentialSettings"];
            }
        }
        return null;
    }
    
    /**
    * Sets the derivedCredentialSettings
    * Tenant level settings for the Derived Credentials to be used for authentication.
    *
    * @param DeviceManagementDerivedCredentialSettings $val The derivedCredentialSettings
    *
    * @return AndroidDeviceOwnerVpnConfiguration
    */
    public function setDerivedCredentialSettings($val)
    {
        $this->_propDict["derivedCredentialSettings"] = $val;
        return $this;
    }
    
    /**
    * Gets the identityCertificate
    * Identity certificate for client authentication when authentication method is certificate.
    *
    * @return AndroidDeviceOwnerCertificateProfileBase|null The identityCertificate
    */
    public function getIdentityCertificate()
    {
        if (array_key_exists("identityCertificate", $this->_propDict) && !is_null($this->_propDict["identityCertificate"])) {
            if (is_a($this->_propDict["identityCertificate"], "\Beta\Microsoft\Graph\Model\AndroidDeviceOwnerCertificateProfileBase")) {
                return $this->_propDict["identityCertificate"];
            } else {
                $this->_propDict["identityCertificate"] = new AndroidDeviceOwnerCertificateProfileBase($this->_propDict["identityCertificate"]);
                return $this->_propDict["identityCertificate"];
            }
        }
        return null;
    }
    
    /**
    * Sets the identityCertificate
    * Identity certificate for client authentication when authentication method is certificate.
    *
    * @param AndroidDeviceOwnerCertificateProfileBase $val The identityCertificate
    *
    * @return AndroidDeviceOwnerVpnConfiguration
    */
    public function setIdentityCertificate($val)
    {
        $this->_propDict["identityCertificate"] = $val;
        return $this;
    }
    
}
