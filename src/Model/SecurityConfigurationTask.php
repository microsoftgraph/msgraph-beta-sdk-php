<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SecurityConfigurationTask File
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
* SecurityConfigurationTask class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class SecurityConfigurationTask extends DeviceAppManagementTask
{
    /**
    * Gets the applicablePlatform
    * The applicable platform. Possible values are: unknown, macOS, windows10AndLater, windows10AndWindowsServer.
    *
    * @return EndpointSecurityConfigurationApplicablePlatform|null The applicablePlatform
    */
    public function getApplicablePlatform()
    {
        if (array_key_exists("applicablePlatform", $this->_propDict) && !is_null($this->_propDict["applicablePlatform"])) {
            if (is_a($this->_propDict["applicablePlatform"], "\Beta\Microsoft\Graph\Model\EndpointSecurityConfigurationApplicablePlatform")) {
                return $this->_propDict["applicablePlatform"];
            } else {
                $this->_propDict["applicablePlatform"] = new EndpointSecurityConfigurationApplicablePlatform($this->_propDict["applicablePlatform"]);
                return $this->_propDict["applicablePlatform"];
            }
        }
        return null;
    }
    
    /**
    * Sets the applicablePlatform
    * The applicable platform. Possible values are: unknown, macOS, windows10AndLater, windows10AndWindowsServer.
    *
    * @param EndpointSecurityConfigurationApplicablePlatform $val The applicablePlatform
    *
    * @return SecurityConfigurationTask
    */
    public function setApplicablePlatform($val)
    {
        $this->_propDict["applicablePlatform"] = $val;
        return $this;
    }
    
    /**
    * Gets the endpointSecurityPolicy
    * The endpoint security policy type. Possible values are: unknown, antivirus, diskEncryption, firewall, endpointDetectionAndResponse, attackSurfaceReduction, accountProtection.
    *
    * @return EndpointSecurityConfigurationType|null The endpointSecurityPolicy
    */
    public function getEndpointSecurityPolicy()
    {
        if (array_key_exists("endpointSecurityPolicy", $this->_propDict) && !is_null($this->_propDict["endpointSecurityPolicy"])) {
            if (is_a($this->_propDict["endpointSecurityPolicy"], "\Beta\Microsoft\Graph\Model\EndpointSecurityConfigurationType")) {
                return $this->_propDict["endpointSecurityPolicy"];
            } else {
                $this->_propDict["endpointSecurityPolicy"] = new EndpointSecurityConfigurationType($this->_propDict["endpointSecurityPolicy"]);
                return $this->_propDict["endpointSecurityPolicy"];
            }
        }
        return null;
    }
    
    /**
    * Sets the endpointSecurityPolicy
    * The endpoint security policy type. Possible values are: unknown, antivirus, diskEncryption, firewall, endpointDetectionAndResponse, attackSurfaceReduction, accountProtection.
    *
    * @param EndpointSecurityConfigurationType $val The endpointSecurityPolicy
    *
    * @return SecurityConfigurationTask
    */
    public function setEndpointSecurityPolicy($val)
    {
        $this->_propDict["endpointSecurityPolicy"] = $val;
        return $this;
    }
    
    /**
    * Gets the endpointSecurityPolicyProfile
    * The endpoint security policy profile. Possible values are: unknown, antivirus, windowsSecurity, bitLocker, fileVault, firewall, firewallRules, endpointDetectionAndResponse, deviceControl, appAndBrowserIsolation, exploitProtection, webProtection, applicationControl, attackSurfaceReductionRules, accountProtection.
    *
    * @return EndpointSecurityConfigurationProfileType|null The endpointSecurityPolicyProfile
    */
    public function getEndpointSecurityPolicyProfile()
    {
        if (array_key_exists("endpointSecurityPolicyProfile", $this->_propDict) && !is_null($this->_propDict["endpointSecurityPolicyProfile"])) {
            if (is_a($this->_propDict["endpointSecurityPolicyProfile"], "\Beta\Microsoft\Graph\Model\EndpointSecurityConfigurationProfileType")) {
                return $this->_propDict["endpointSecurityPolicyProfile"];
            } else {
                $this->_propDict["endpointSecurityPolicyProfile"] = new EndpointSecurityConfigurationProfileType($this->_propDict["endpointSecurityPolicyProfile"]);
                return $this->_propDict["endpointSecurityPolicyProfile"];
            }
        }
        return null;
    }
    
    /**
    * Sets the endpointSecurityPolicyProfile
    * The endpoint security policy profile. Possible values are: unknown, antivirus, windowsSecurity, bitLocker, fileVault, firewall, firewallRules, endpointDetectionAndResponse, deviceControl, appAndBrowserIsolation, exploitProtection, webProtection, applicationControl, attackSurfaceReductionRules, accountProtection.
    *
    * @param EndpointSecurityConfigurationProfileType $val The endpointSecurityPolicyProfile
    *
    * @return SecurityConfigurationTask
    */
    public function setEndpointSecurityPolicyProfile($val)
    {
        $this->_propDict["endpointSecurityPolicyProfile"] = $val;
        return $this;
    }
    
    /**
    * Gets the insights
    * Information about the mitigation.
    *
    * @return string|null The insights
    */
    public function getInsights()
    {
        if (array_key_exists("insights", $this->_propDict)) {
            return $this->_propDict["insights"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the insights
    * Information about the mitigation.
    *
    * @param string $val The insights
    *
    * @return SecurityConfigurationTask
    */
    public function setInsights($val)
    {
        $this->_propDict["insights"] = $val;
        return $this;
    }
    

     /** 
     * Gets the intendedSettings
    * The intended settings and their values.
     *
     * @return KeyValuePair[]|null The intendedSettings
     */
    public function getIntendedSettings()
    {
        if (array_key_exists('intendedSettings', $this->_propDict) && !is_null($this->_propDict['intendedSettings'])) {
           $intendedSettings = [];
           if (count($this->_propDict['intendedSettings']) > 0 && is_a($this->_propDict['intendedSettings'][0], 'KeyValuePair')) {
              return $this->_propDict['intendedSettings'];
           }
           foreach ($this->_propDict['intendedSettings'] as $singleValue) {
              $intendedSettings []= new KeyValuePair($singleValue);
           }
           $this->_propDict['intendedSettings'] = $intendedSettings;
           return $this->_propDict['intendedSettings'];
        }
        return null;
    }
    
    /** 
    * Sets the intendedSettings
    * The intended settings and their values.
    *
    * @param KeyValuePair[] $val The intendedSettings
    *
    * @return SecurityConfigurationTask
    */
    public function setIntendedSettings($val)
    {
        $this->_propDict["intendedSettings"] = $val;
        return $this;
    }
    
    /**
    * Gets the managedDeviceCount
    * The number of vulnerable devices.
    *
    * @return int|null The managedDeviceCount
    */
    public function getManagedDeviceCount()
    {
        if (array_key_exists("managedDeviceCount", $this->_propDict)) {
            return $this->_propDict["managedDeviceCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the managedDeviceCount
    * The number of vulnerable devices.
    *
    * @param int $val The managedDeviceCount
    *
    * @return SecurityConfigurationTask
    */
    public function setManagedDeviceCount($val)
    {
        $this->_propDict["managedDeviceCount"] = intval($val);
        return $this;
    }
    

     /** 
     * Gets the managedDevices
    * The vulnerable managed devices.
     *
     * @return VulnerableManagedDevice[]|null The managedDevices
     */
    public function getManagedDevices()
    {
        if (array_key_exists('managedDevices', $this->_propDict) && !is_null($this->_propDict['managedDevices'])) {
           $managedDevices = [];
           if (count($this->_propDict['managedDevices']) > 0 && is_a($this->_propDict['managedDevices'][0], 'VulnerableManagedDevice')) {
              return $this->_propDict['managedDevices'];
           }
           foreach ($this->_propDict['managedDevices'] as $singleValue) {
              $managedDevices []= new VulnerableManagedDevice($singleValue);
           }
           $this->_propDict['managedDevices'] = $managedDevices;
           return $this->_propDict['managedDevices'];
        }
        return null;
    }
    
    /** 
    * Sets the managedDevices
    * The vulnerable managed devices.
    *
    * @param VulnerableManagedDevice[] $val The managedDevices
    *
    * @return SecurityConfigurationTask
    */
    public function setManagedDevices($val)
    {
        $this->_propDict["managedDevices"] = $val;
        return $this;
    }
    
}
