<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Security File
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
* Security class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Security extends Entity
{

     /** 
     * Gets the providerStatus
     *
     * @return SecurityProviderStatus[]|null The providerStatus
     */
    public function getProviderStatus()
    {
        if (array_key_exists('providerStatus', $this->_propDict) && !is_null($this->_propDict['providerStatus'])) {
            $providerStatus = [];
            if (count($this->_propDict['providerStatus']) > 0 && is_a($this->_propDict['providerStatus'][0], 'SecurityProviderStatus')) {
                return $this->_propDict['providerStatus'];
            }
            foreach ($this->_propDict['providerStatus'] as $singleValue) {
                $providerStatus []= new SecurityProviderStatus($singleValue);
            }
            $this->_propDict['providerStatus'] = $providerStatus;
            return $this->_propDict['providerStatus'];
        }
        return null;
    }
    
    /** 
    * Sets the providerStatus
    *
    * @param SecurityProviderStatus[] $val The providerStatus
    *
    * @return Security
    */
    public function setProviderStatus($val)
    {
        $this->_propDict["providerStatus"] = $val;
        return $this;
    }
    

     /** 
     * Gets the incidents
     *
     * @return Incident[]|null The incidents
     */
    public function getIncidents()
    {
        if (array_key_exists('incidents', $this->_propDict) && !is_null($this->_propDict['incidents'])) {
            $incidents = [];
            if (count($this->_propDict['incidents']) > 0 && is_a($this->_propDict['incidents'][0], 'Incident')) {
                return $this->_propDict['incidents'];
            }
            foreach ($this->_propDict['incidents'] as $singleValue) {
                $incidents []= new Incident($singleValue);
            }
            $this->_propDict['incidents'] = $incidents;
            return $this->_propDict['incidents'];
        }
        return null;
    }
    
    /** 
    * Sets the incidents
    *
    * @param Incident[] $val The incidents
    *
    * @return Security
    */
    public function setIncidents($val)
    {
        $this->_propDict["incidents"] = $val;
        return $this;
    }
    
    /**
    * Gets the attackSimulation
    * Provides tenants capability to launch a simulated and realistic phishing attack and learn from it.
    *
    * @return AttackSimulationRoot|null The attackSimulation
    */
    public function getAttackSimulation()
    {
        if (array_key_exists("attackSimulation", $this->_propDict) && !is_null($this->_propDict["attackSimulation"])) {
            if (is_a($this->_propDict["attackSimulation"], "\Beta\Microsoft\Graph\Model\AttackSimulationRoot")) {
                return $this->_propDict["attackSimulation"];
            } else {
                $this->_propDict["attackSimulation"] = new AttackSimulationRoot($this->_propDict["attackSimulation"]);
                return $this->_propDict["attackSimulation"];
            }
        }
        return null;
    }
    
    /**
    * Sets the attackSimulation
    * Provides tenants capability to launch a simulated and realistic phishing attack and learn from it.
    *
    * @param AttackSimulationRoot $val The attackSimulation
    *
    * @return Security
    */
    public function setAttackSimulation($val)
    {
        $this->_propDict["attackSimulation"] = $val;
        return $this;
    }
    

     /** 
     * Gets the alerts
    * Read-only. Nullable.
     *
     * @return Alert[]|null The alerts
     */
    public function getAlerts()
    {
        if (array_key_exists('alerts', $this->_propDict) && !is_null($this->_propDict['alerts'])) {
            $alerts = [];
            if (count($this->_propDict['alerts']) > 0 && is_a($this->_propDict['alerts'][0], 'Alert')) {
                return $this->_propDict['alerts'];
            }
            foreach ($this->_propDict['alerts'] as $singleValue) {
                $alerts []= new Alert($singleValue);
            }
            $this->_propDict['alerts'] = $alerts;
            return $this->_propDict['alerts'];
        }
        return null;
    }
    
    /** 
    * Sets the alerts
    * Read-only. Nullable.
    *
    * @param Alert[] $val The alerts
    *
    * @return Security
    */
    public function setAlerts($val)
    {
        $this->_propDict["alerts"] = $val;
        return $this;
    }
    

     /** 
     * Gets the cloudAppSecurityProfiles
     *
     * @return CloudAppSecurityProfile[]|null The cloudAppSecurityProfiles
     */
    public function getCloudAppSecurityProfiles()
    {
        if (array_key_exists('cloudAppSecurityProfiles', $this->_propDict) && !is_null($this->_propDict['cloudAppSecurityProfiles'])) {
            $cloudAppSecurityProfiles = [];
            if (count($this->_propDict['cloudAppSecurityProfiles']) > 0 && is_a($this->_propDict['cloudAppSecurityProfiles'][0], 'CloudAppSecurityProfile')) {
                return $this->_propDict['cloudAppSecurityProfiles'];
            }
            foreach ($this->_propDict['cloudAppSecurityProfiles'] as $singleValue) {
                $cloudAppSecurityProfiles []= new CloudAppSecurityProfile($singleValue);
            }
            $this->_propDict['cloudAppSecurityProfiles'] = $cloudAppSecurityProfiles;
            return $this->_propDict['cloudAppSecurityProfiles'];
        }
        return null;
    }
    
    /** 
    * Sets the cloudAppSecurityProfiles
    *
    * @param CloudAppSecurityProfile[] $val The cloudAppSecurityProfiles
    *
    * @return Security
    */
    public function setCloudAppSecurityProfiles($val)
    {
        $this->_propDict["cloudAppSecurityProfiles"] = $val;
        return $this;
    }
    

     /** 
     * Gets the domainSecurityProfiles
     *
     * @return DomainSecurityProfile[]|null The domainSecurityProfiles
     */
    public function getDomainSecurityProfiles()
    {
        if (array_key_exists('domainSecurityProfiles', $this->_propDict) && !is_null($this->_propDict['domainSecurityProfiles'])) {
            $domainSecurityProfiles = [];
            if (count($this->_propDict['domainSecurityProfiles']) > 0 && is_a($this->_propDict['domainSecurityProfiles'][0], 'DomainSecurityProfile')) {
                return $this->_propDict['domainSecurityProfiles'];
            }
            foreach ($this->_propDict['domainSecurityProfiles'] as $singleValue) {
                $domainSecurityProfiles []= new DomainSecurityProfile($singleValue);
            }
            $this->_propDict['domainSecurityProfiles'] = $domainSecurityProfiles;
            return $this->_propDict['domainSecurityProfiles'];
        }
        return null;
    }
    
    /** 
    * Sets the domainSecurityProfiles
    *
    * @param DomainSecurityProfile[] $val The domainSecurityProfiles
    *
    * @return Security
    */
    public function setDomainSecurityProfiles($val)
    {
        $this->_propDict["domainSecurityProfiles"] = $val;
        return $this;
    }
    

     /** 
     * Gets the fileSecurityProfiles
     *
     * @return FileSecurityProfile[]|null The fileSecurityProfiles
     */
    public function getFileSecurityProfiles()
    {
        if (array_key_exists('fileSecurityProfiles', $this->_propDict) && !is_null($this->_propDict['fileSecurityProfiles'])) {
            $fileSecurityProfiles = [];
            if (count($this->_propDict['fileSecurityProfiles']) > 0 && is_a($this->_propDict['fileSecurityProfiles'][0], 'FileSecurityProfile')) {
                return $this->_propDict['fileSecurityProfiles'];
            }
            foreach ($this->_propDict['fileSecurityProfiles'] as $singleValue) {
                $fileSecurityProfiles []= new FileSecurityProfile($singleValue);
            }
            $this->_propDict['fileSecurityProfiles'] = $fileSecurityProfiles;
            return $this->_propDict['fileSecurityProfiles'];
        }
        return null;
    }
    
    /** 
    * Sets the fileSecurityProfiles
    *
    * @param FileSecurityProfile[] $val The fileSecurityProfiles
    *
    * @return Security
    */
    public function setFileSecurityProfiles($val)
    {
        $this->_propDict["fileSecurityProfiles"] = $val;
        return $this;
    }
    

     /** 
     * Gets the hostSecurityProfiles
     *
     * @return HostSecurityProfile[]|null The hostSecurityProfiles
     */
    public function getHostSecurityProfiles()
    {
        if (array_key_exists('hostSecurityProfiles', $this->_propDict) && !is_null($this->_propDict['hostSecurityProfiles'])) {
            $hostSecurityProfiles = [];
            if (count($this->_propDict['hostSecurityProfiles']) > 0 && is_a($this->_propDict['hostSecurityProfiles'][0], 'HostSecurityProfile')) {
                return $this->_propDict['hostSecurityProfiles'];
            }
            foreach ($this->_propDict['hostSecurityProfiles'] as $singleValue) {
                $hostSecurityProfiles []= new HostSecurityProfile($singleValue);
            }
            $this->_propDict['hostSecurityProfiles'] = $hostSecurityProfiles;
            return $this->_propDict['hostSecurityProfiles'];
        }
        return null;
    }
    
    /** 
    * Sets the hostSecurityProfiles
    *
    * @param HostSecurityProfile[] $val The hostSecurityProfiles
    *
    * @return Security
    */
    public function setHostSecurityProfiles($val)
    {
        $this->_propDict["hostSecurityProfiles"] = $val;
        return $this;
    }
    

     /** 
     * Gets the ipSecurityProfiles
     *
     * @return IpSecurityProfile[]|null The ipSecurityProfiles
     */
    public function getIpSecurityProfiles()
    {
        if (array_key_exists('ipSecurityProfiles', $this->_propDict) && !is_null($this->_propDict['ipSecurityProfiles'])) {
            $ipSecurityProfiles = [];
            if (count($this->_propDict['ipSecurityProfiles']) > 0 && is_a($this->_propDict['ipSecurityProfiles'][0], 'IpSecurityProfile')) {
                return $this->_propDict['ipSecurityProfiles'];
            }
            foreach ($this->_propDict['ipSecurityProfiles'] as $singleValue) {
                $ipSecurityProfiles []= new IpSecurityProfile($singleValue);
            }
            $this->_propDict['ipSecurityProfiles'] = $ipSecurityProfiles;
            return $this->_propDict['ipSecurityProfiles'];
        }
        return null;
    }
    
    /** 
    * Sets the ipSecurityProfiles
    *
    * @param IpSecurityProfile[] $val The ipSecurityProfiles
    *
    * @return Security
    */
    public function setIpSecurityProfiles($val)
    {
        $this->_propDict["ipSecurityProfiles"] = $val;
        return $this;
    }
    

     /** 
     * Gets the providerTenantSettings
     *
     * @return ProviderTenantSetting[]|null The providerTenantSettings
     */
    public function getProviderTenantSettings()
    {
        if (array_key_exists('providerTenantSettings', $this->_propDict) && !is_null($this->_propDict['providerTenantSettings'])) {
            $providerTenantSettings = [];
            if (count($this->_propDict['providerTenantSettings']) > 0 && is_a($this->_propDict['providerTenantSettings'][0], 'ProviderTenantSetting')) {
                return $this->_propDict['providerTenantSettings'];
            }
            foreach ($this->_propDict['providerTenantSettings'] as $singleValue) {
                $providerTenantSettings []= new ProviderTenantSetting($singleValue);
            }
            $this->_propDict['providerTenantSettings'] = $providerTenantSettings;
            return $this->_propDict['providerTenantSettings'];
        }
        return null;
    }
    
    /** 
    * Sets the providerTenantSettings
    *
    * @param ProviderTenantSetting[] $val The providerTenantSettings
    *
    * @return Security
    */
    public function setProviderTenantSettings($val)
    {
        $this->_propDict["providerTenantSettings"] = $val;
        return $this;
    }
    

     /** 
     * Gets the secureScoreControlProfiles
     *
     * @return SecureScoreControlProfile[]|null The secureScoreControlProfiles
     */
    public function getSecureScoreControlProfiles()
    {
        if (array_key_exists('secureScoreControlProfiles', $this->_propDict) && !is_null($this->_propDict['secureScoreControlProfiles'])) {
            $secureScoreControlProfiles = [];
            if (count($this->_propDict['secureScoreControlProfiles']) > 0 && is_a($this->_propDict['secureScoreControlProfiles'][0], 'SecureScoreControlProfile')) {
                return $this->_propDict['secureScoreControlProfiles'];
            }
            foreach ($this->_propDict['secureScoreControlProfiles'] as $singleValue) {
                $secureScoreControlProfiles []= new SecureScoreControlProfile($singleValue);
            }
            $this->_propDict['secureScoreControlProfiles'] = $secureScoreControlProfiles;
            return $this->_propDict['secureScoreControlProfiles'];
        }
        return null;
    }
    
    /** 
    * Sets the secureScoreControlProfiles
    *
    * @param SecureScoreControlProfile[] $val The secureScoreControlProfiles
    *
    * @return Security
    */
    public function setSecureScoreControlProfiles($val)
    {
        $this->_propDict["secureScoreControlProfiles"] = $val;
        return $this;
    }
    

     /** 
     * Gets the secureScores
     *
     * @return SecureScore[]|null The secureScores
     */
    public function getSecureScores()
    {
        if (array_key_exists('secureScores', $this->_propDict) && !is_null($this->_propDict['secureScores'])) {
            $secureScores = [];
            if (count($this->_propDict['secureScores']) > 0 && is_a($this->_propDict['secureScores'][0], 'SecureScore')) {
                return $this->_propDict['secureScores'];
            }
            foreach ($this->_propDict['secureScores'] as $singleValue) {
                $secureScores []= new SecureScore($singleValue);
            }
            $this->_propDict['secureScores'] = $secureScores;
            return $this->_propDict['secureScores'];
        }
        return null;
    }
    
    /** 
    * Sets the secureScores
    *
    * @param SecureScore[] $val The secureScores
    *
    * @return Security
    */
    public function setSecureScores($val)
    {
        $this->_propDict["secureScores"] = $val;
        return $this;
    }
    

     /** 
     * Gets the securityActions
     *
     * @return SecurityAction[]|null The securityActions
     */
    public function getSecurityActions()
    {
        if (array_key_exists('securityActions', $this->_propDict) && !is_null($this->_propDict['securityActions'])) {
            $securityActions = [];
            if (count($this->_propDict['securityActions']) > 0 && is_a($this->_propDict['securityActions'][0], 'SecurityAction')) {
                return $this->_propDict['securityActions'];
            }
            foreach ($this->_propDict['securityActions'] as $singleValue) {
                $securityActions []= new SecurityAction($singleValue);
            }
            $this->_propDict['securityActions'] = $securityActions;
            return $this->_propDict['securityActions'];
        }
        return null;
    }
    
    /** 
    * Sets the securityActions
    *
    * @param SecurityAction[] $val The securityActions
    *
    * @return Security
    */
    public function setSecurityActions($val)
    {
        $this->_propDict["securityActions"] = $val;
        return $this;
    }
    

     /** 
     * Gets the tiIndicators
     *
     * @return TiIndicator[]|null The tiIndicators
     */
    public function getTiIndicators()
    {
        if (array_key_exists('tiIndicators', $this->_propDict) && !is_null($this->_propDict['tiIndicators'])) {
            $tiIndicators = [];
            if (count($this->_propDict['tiIndicators']) > 0 && is_a($this->_propDict['tiIndicators'][0], 'TiIndicator')) {
                return $this->_propDict['tiIndicators'];
            }
            foreach ($this->_propDict['tiIndicators'] as $singleValue) {
                $tiIndicators []= new TiIndicator($singleValue);
            }
            $this->_propDict['tiIndicators'] = $tiIndicators;
            return $this->_propDict['tiIndicators'];
        }
        return null;
    }
    
    /** 
    * Sets the tiIndicators
    *
    * @param TiIndicator[] $val The tiIndicators
    *
    * @return Security
    */
    public function setTiIndicators($val)
    {
        $this->_propDict["tiIndicators"] = $val;
        return $this;
    }
    

     /** 
     * Gets the userSecurityProfiles
     *
     * @return UserSecurityProfile[]|null The userSecurityProfiles
     */
    public function getUserSecurityProfiles()
    {
        if (array_key_exists('userSecurityProfiles', $this->_propDict) && !is_null($this->_propDict['userSecurityProfiles'])) {
            $userSecurityProfiles = [];
            if (count($this->_propDict['userSecurityProfiles']) > 0 && is_a($this->_propDict['userSecurityProfiles'][0], 'UserSecurityProfile')) {
                return $this->_propDict['userSecurityProfiles'];
            }
            foreach ($this->_propDict['userSecurityProfiles'] as $singleValue) {
                $userSecurityProfiles []= new UserSecurityProfile($singleValue);
            }
            $this->_propDict['userSecurityProfiles'] = $userSecurityProfiles;
            return $this->_propDict['userSecurityProfiles'];
        }
        return null;
    }
    
    /** 
    * Sets the userSecurityProfiles
    *
    * @param UserSecurityProfile[] $val The userSecurityProfiles
    *
    * @return Security
    */
    public function setUserSecurityProfiles($val)
    {
        $this->_propDict["userSecurityProfiles"] = $val;
        return $this;
    }
    
}
