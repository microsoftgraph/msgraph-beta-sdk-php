<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ManagedTenant File
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
* ManagedTenant class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ManagedTenant extends \Beta\Microsoft\Graph\Model\Entity
{

     /** 
     * Gets the aggregatedPolicyCompliances
    * Aggregate view of device compliance policies across managed tenants.
     *
     * @return AggregatedPolicyCompliance[]|null The aggregatedPolicyCompliances
     */
    public function getAggregatedPolicyCompliances()
    {
        if (array_key_exists('aggregatedPolicyCompliances', $this->_propDict) && !is_null($this->_propDict['aggregatedPolicyCompliances'])) {
            $aggregatedPolicyCompliances = [];
            if (count($this->_propDict['aggregatedPolicyCompliances']) > 0 && is_a($this->_propDict['aggregatedPolicyCompliances'][0], 'AggregatedPolicyCompliance')) {
                return $this->_propDict['aggregatedPolicyCompliances'];
            }
            foreach ($this->_propDict['aggregatedPolicyCompliances'] as $singleValue) {
                $aggregatedPolicyCompliances []= new AggregatedPolicyCompliance($singleValue);
            }
            $this->_propDict['aggregatedPolicyCompliances'] = $aggregatedPolicyCompliances;
            return $this->_propDict['aggregatedPolicyCompliances'];
        }
        return null;
    }
    
    /** 
    * Sets the aggregatedPolicyCompliances
    * Aggregate view of device compliance policies across managed tenants.
    *
    * @param AggregatedPolicyCompliance[] $val The aggregatedPolicyCompliances
    *
    * @return ManagedTenant
    */
    public function setAggregatedPolicyCompliances($val)
    {
        $this->_propDict["aggregatedPolicyCompliances"] = $val;
        return $this;
    }
    

     /** 
     * Gets the cloudPcConnections
    * The collection of cloud PC connections across managed tenants.
     *
     * @return CloudPcConnection[]|null The cloudPcConnections
     */
    public function getCloudPcConnections()
    {
        if (array_key_exists('cloudPcConnections', $this->_propDict) && !is_null($this->_propDict['cloudPcConnections'])) {
            $cloudPcConnections = [];
            if (count($this->_propDict['cloudPcConnections']) > 0 && is_a($this->_propDict['cloudPcConnections'][0], 'CloudPcConnection')) {
                return $this->_propDict['cloudPcConnections'];
            }
            foreach ($this->_propDict['cloudPcConnections'] as $singleValue) {
                $cloudPcConnections []= new CloudPcConnection($singleValue);
            }
            $this->_propDict['cloudPcConnections'] = $cloudPcConnections;
            return $this->_propDict['cloudPcConnections'];
        }
        return null;
    }
    
    /** 
    * Sets the cloudPcConnections
    * The collection of cloud PC connections across managed tenants.
    *
    * @param CloudPcConnection[] $val The cloudPcConnections
    *
    * @return ManagedTenant
    */
    public function setCloudPcConnections($val)
    {
        $this->_propDict["cloudPcConnections"] = $val;
        return $this;
    }
    

     /** 
     * Gets the cloudPcDevices
    * The collection of cloud PC devices across managed tenants.
     *
     * @return CloudPcDevice[]|null The cloudPcDevices
     */
    public function getCloudPcDevices()
    {
        if (array_key_exists('cloudPcDevices', $this->_propDict) && !is_null($this->_propDict['cloudPcDevices'])) {
            $cloudPcDevices = [];
            if (count($this->_propDict['cloudPcDevices']) > 0 && is_a($this->_propDict['cloudPcDevices'][0], 'CloudPcDevice')) {
                return $this->_propDict['cloudPcDevices'];
            }
            foreach ($this->_propDict['cloudPcDevices'] as $singleValue) {
                $cloudPcDevices []= new CloudPcDevice($singleValue);
            }
            $this->_propDict['cloudPcDevices'] = $cloudPcDevices;
            return $this->_propDict['cloudPcDevices'];
        }
        return null;
    }
    
    /** 
    * Sets the cloudPcDevices
    * The collection of cloud PC devices across managed tenants.
    *
    * @param CloudPcDevice[] $val The cloudPcDevices
    *
    * @return ManagedTenant
    */
    public function setCloudPcDevices($val)
    {
        $this->_propDict["cloudPcDevices"] = $val;
        return $this;
    }
    

     /** 
     * Gets the cloudPcsOverview
    * Overview of cloud PC information across managed tenants.
     *
     * @return CloudPcOverview[]|null The cloudPcsOverview
     */
    public function getCloudPcsOverview()
    {
        if (array_key_exists('cloudPcsOverview', $this->_propDict) && !is_null($this->_propDict['cloudPcsOverview'])) {
            $cloudPcsOverview = [];
            if (count($this->_propDict['cloudPcsOverview']) > 0 && is_a($this->_propDict['cloudPcsOverview'][0], 'CloudPcOverview')) {
                return $this->_propDict['cloudPcsOverview'];
            }
            foreach ($this->_propDict['cloudPcsOverview'] as $singleValue) {
                $cloudPcsOverview []= new CloudPcOverview($singleValue);
            }
            $this->_propDict['cloudPcsOverview'] = $cloudPcsOverview;
            return $this->_propDict['cloudPcsOverview'];
        }
        return null;
    }
    
    /** 
    * Sets the cloudPcsOverview
    * Overview of cloud PC information across managed tenants.
    *
    * @param CloudPcOverview[] $val The cloudPcsOverview
    *
    * @return ManagedTenant
    */
    public function setCloudPcsOverview($val)
    {
        $this->_propDict["cloudPcsOverview"] = $val;
        return $this;
    }
    

     /** 
     * Gets the conditionalAccessPolicyCoverages
    * Aggregate view of conditional access policy coverage across managed tenants.
     *
     * @return ConditionalAccessPolicyCoverage[]|null The conditionalAccessPolicyCoverages
     */
    public function getConditionalAccessPolicyCoverages()
    {
        if (array_key_exists('conditionalAccessPolicyCoverages', $this->_propDict) && !is_null($this->_propDict['conditionalAccessPolicyCoverages'])) {
            $conditionalAccessPolicyCoverages = [];
            if (count($this->_propDict['conditionalAccessPolicyCoverages']) > 0 && is_a($this->_propDict['conditionalAccessPolicyCoverages'][0], 'ConditionalAccessPolicyCoverage')) {
                return $this->_propDict['conditionalAccessPolicyCoverages'];
            }
            foreach ($this->_propDict['conditionalAccessPolicyCoverages'] as $singleValue) {
                $conditionalAccessPolicyCoverages []= new ConditionalAccessPolicyCoverage($singleValue);
            }
            $this->_propDict['conditionalAccessPolicyCoverages'] = $conditionalAccessPolicyCoverages;
            return $this->_propDict['conditionalAccessPolicyCoverages'];
        }
        return null;
    }
    
    /** 
    * Sets the conditionalAccessPolicyCoverages
    * Aggregate view of conditional access policy coverage across managed tenants.
    *
    * @param ConditionalAccessPolicyCoverage[] $val The conditionalAccessPolicyCoverages
    *
    * @return ManagedTenant
    */
    public function setConditionalAccessPolicyCoverages($val)
    {
        $this->_propDict["conditionalAccessPolicyCoverages"] = $val;
        return $this;
    }
    

     /** 
     * Gets the credentialUserRegistrationsSummaries
    * Summary information for user registration for multi-factor authentication and self service password reset across managed tenants.
     *
     * @return CredentialUserRegistrationsSummary[]|null The credentialUserRegistrationsSummaries
     */
    public function getCredentialUserRegistrationsSummaries()
    {
        if (array_key_exists('credentialUserRegistrationsSummaries', $this->_propDict) && !is_null($this->_propDict['credentialUserRegistrationsSummaries'])) {
            $credentialUserRegistrationsSummaries = [];
            if (count($this->_propDict['credentialUserRegistrationsSummaries']) > 0 && is_a($this->_propDict['credentialUserRegistrationsSummaries'][0], 'CredentialUserRegistrationsSummary')) {
                return $this->_propDict['credentialUserRegistrationsSummaries'];
            }
            foreach ($this->_propDict['credentialUserRegistrationsSummaries'] as $singleValue) {
                $credentialUserRegistrationsSummaries []= new CredentialUserRegistrationsSummary($singleValue);
            }
            $this->_propDict['credentialUserRegistrationsSummaries'] = $credentialUserRegistrationsSummaries;
            return $this->_propDict['credentialUserRegistrationsSummaries'];
        }
        return null;
    }
    
    /** 
    * Sets the credentialUserRegistrationsSummaries
    * Summary information for user registration for multi-factor authentication and self service password reset across managed tenants.
    *
    * @param CredentialUserRegistrationsSummary[] $val The credentialUserRegistrationsSummaries
    *
    * @return ManagedTenant
    */
    public function setCredentialUserRegistrationsSummaries($val)
    {
        $this->_propDict["credentialUserRegistrationsSummaries"] = $val;
        return $this;
    }
    

     /** 
     * Gets the deviceCompliancePolicySettingStateSummaries
    * Summary information for device compliance policy setting states across managed tenants.
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
    * Summary information for device compliance policy setting states across managed tenants.
    *
    * @param DeviceCompliancePolicySettingStateSummary[] $val The deviceCompliancePolicySettingStateSummaries
    *
    * @return ManagedTenant
    */
    public function setDeviceCompliancePolicySettingStateSummaries($val)
    {
        $this->_propDict["deviceCompliancePolicySettingStateSummaries"] = $val;
        return $this;
    }
    

     /** 
     * Gets the managedDeviceCompliances
    * The collection of compliance for managed devices across managed tenants.
     *
     * @return ManagedDeviceCompliance[]|null The managedDeviceCompliances
     */
    public function getManagedDeviceCompliances()
    {
        if (array_key_exists('managedDeviceCompliances', $this->_propDict) && !is_null($this->_propDict['managedDeviceCompliances'])) {
            $managedDeviceCompliances = [];
            if (count($this->_propDict['managedDeviceCompliances']) > 0 && is_a($this->_propDict['managedDeviceCompliances'][0], 'ManagedDeviceCompliance')) {
                return $this->_propDict['managedDeviceCompliances'];
            }
            foreach ($this->_propDict['managedDeviceCompliances'] as $singleValue) {
                $managedDeviceCompliances []= new ManagedDeviceCompliance($singleValue);
            }
            $this->_propDict['managedDeviceCompliances'] = $managedDeviceCompliances;
            return $this->_propDict['managedDeviceCompliances'];
        }
        return null;
    }
    
    /** 
    * Sets the managedDeviceCompliances
    * The collection of compliance for managed devices across managed tenants.
    *
    * @param ManagedDeviceCompliance[] $val The managedDeviceCompliances
    *
    * @return ManagedTenant
    */
    public function setManagedDeviceCompliances($val)
    {
        $this->_propDict["managedDeviceCompliances"] = $val;
        return $this;
    }
    

     /** 
     * Gets the managedDeviceComplianceTrends
    * Trend insights for device compliance across managed tenants.
     *
     * @return ManagedDeviceComplianceTrend[]|null The managedDeviceComplianceTrends
     */
    public function getManagedDeviceComplianceTrends()
    {
        if (array_key_exists('managedDeviceComplianceTrends', $this->_propDict) && !is_null($this->_propDict['managedDeviceComplianceTrends'])) {
            $managedDeviceComplianceTrends = [];
            if (count($this->_propDict['managedDeviceComplianceTrends']) > 0 && is_a($this->_propDict['managedDeviceComplianceTrends'][0], 'ManagedDeviceComplianceTrend')) {
                return $this->_propDict['managedDeviceComplianceTrends'];
            }
            foreach ($this->_propDict['managedDeviceComplianceTrends'] as $singleValue) {
                $managedDeviceComplianceTrends []= new ManagedDeviceComplianceTrend($singleValue);
            }
            $this->_propDict['managedDeviceComplianceTrends'] = $managedDeviceComplianceTrends;
            return $this->_propDict['managedDeviceComplianceTrends'];
        }
        return null;
    }
    
    /** 
    * Sets the managedDeviceComplianceTrends
    * Trend insights for device compliance across managed tenants.
    *
    * @param ManagedDeviceComplianceTrend[] $val The managedDeviceComplianceTrends
    *
    * @return ManagedTenant
    */
    public function setManagedDeviceComplianceTrends($val)
    {
        $this->_propDict["managedDeviceComplianceTrends"] = $val;
        return $this;
    }
    

     /** 
     * Gets the managementActions
    * The collection of baseline management actions across managed tenants.
     *
     * @return ManagementAction[]|null The managementActions
     */
    public function getManagementActions()
    {
        if (array_key_exists('managementActions', $this->_propDict) && !is_null($this->_propDict['managementActions'])) {
            $managementActions = [];
            if (count($this->_propDict['managementActions']) > 0 && is_a($this->_propDict['managementActions'][0], 'ManagementAction')) {
                return $this->_propDict['managementActions'];
            }
            foreach ($this->_propDict['managementActions'] as $singleValue) {
                $managementActions []= new ManagementAction($singleValue);
            }
            $this->_propDict['managementActions'] = $managementActions;
            return $this->_propDict['managementActions'];
        }
        return null;
    }
    
    /** 
    * Sets the managementActions
    * The collection of baseline management actions across managed tenants.
    *
    * @param ManagementAction[] $val The managementActions
    *
    * @return ManagedTenant
    */
    public function setManagementActions($val)
    {
        $this->_propDict["managementActions"] = $val;
        return $this;
    }
    

     /** 
     * Gets the managementActionTenantDeploymentStatuses
    * The tenant level status of management actions across managed tenants.
     *
     * @return ManagementActionTenantDeploymentStatus[]|null The managementActionTenantDeploymentStatuses
     */
    public function getManagementActionTenantDeploymentStatuses()
    {
        if (array_key_exists('managementActionTenantDeploymentStatuses', $this->_propDict) && !is_null($this->_propDict['managementActionTenantDeploymentStatuses'])) {
            $managementActionTenantDeploymentStatuses = [];
            if (count($this->_propDict['managementActionTenantDeploymentStatuses']) > 0 && is_a($this->_propDict['managementActionTenantDeploymentStatuses'][0], 'ManagementActionTenantDeploymentStatus')) {
                return $this->_propDict['managementActionTenantDeploymentStatuses'];
            }
            foreach ($this->_propDict['managementActionTenantDeploymentStatuses'] as $singleValue) {
                $managementActionTenantDeploymentStatuses []= new ManagementActionTenantDeploymentStatus($singleValue);
            }
            $this->_propDict['managementActionTenantDeploymentStatuses'] = $managementActionTenantDeploymentStatuses;
            return $this->_propDict['managementActionTenantDeploymentStatuses'];
        }
        return null;
    }
    
    /** 
    * Sets the managementActionTenantDeploymentStatuses
    * The tenant level status of management actions across managed tenants.
    *
    * @param ManagementActionTenantDeploymentStatus[] $val The managementActionTenantDeploymentStatuses
    *
    * @return ManagedTenant
    */
    public function setManagementActionTenantDeploymentStatuses($val)
    {
        $this->_propDict["managementActionTenantDeploymentStatuses"] = $val;
        return $this;
    }
    

     /** 
     * Gets the managementIntents
    * The collection of baseline management intents across managed tenants.
     *
     * @return ManagementIntent[]|null The managementIntents
     */
    public function getManagementIntents()
    {
        if (array_key_exists('managementIntents', $this->_propDict) && !is_null($this->_propDict['managementIntents'])) {
            $managementIntents = [];
            if (count($this->_propDict['managementIntents']) > 0 && is_a($this->_propDict['managementIntents'][0], 'ManagementIntent')) {
                return $this->_propDict['managementIntents'];
            }
            foreach ($this->_propDict['managementIntents'] as $singleValue) {
                $managementIntents []= new ManagementIntent($singleValue);
            }
            $this->_propDict['managementIntents'] = $managementIntents;
            return $this->_propDict['managementIntents'];
        }
        return null;
    }
    
    /** 
    * Sets the managementIntents
    * The collection of baseline management intents across managed tenants.
    *
    * @param ManagementIntent[] $val The managementIntents
    *
    * @return ManagedTenant
    */
    public function setManagementIntents($val)
    {
        $this->_propDict["managementIntents"] = $val;
        return $this;
    }
    

     /** 
     * Gets the managementTemplates
    * The collection of baseline management templates across managed tenants.
     *
     * @return ManagementTemplate[]|null The managementTemplates
     */
    public function getManagementTemplates()
    {
        if (array_key_exists('managementTemplates', $this->_propDict) && !is_null($this->_propDict['managementTemplates'])) {
            $managementTemplates = [];
            if (count($this->_propDict['managementTemplates']) > 0 && is_a($this->_propDict['managementTemplates'][0], 'ManagementTemplate')) {
                return $this->_propDict['managementTemplates'];
            }
            foreach ($this->_propDict['managementTemplates'] as $singleValue) {
                $managementTemplates []= new ManagementTemplate($singleValue);
            }
            $this->_propDict['managementTemplates'] = $managementTemplates;
            return $this->_propDict['managementTemplates'];
        }
        return null;
    }
    
    /** 
    * Sets the managementTemplates
    * The collection of baseline management templates across managed tenants.
    *
    * @param ManagementTemplate[] $val The managementTemplates
    *
    * @return ManagedTenant
    */
    public function setManagementTemplates($val)
    {
        $this->_propDict["managementTemplates"] = $val;
        return $this;
    }
    

     /** 
     * Gets the riskyUsers
    * The collection of users flagged for risk across managed tenants.
     *
     * @return RiskyUser[]|null The riskyUsers
     */
    public function getRiskyUsers()
    {
        if (array_key_exists('riskyUsers', $this->_propDict) && !is_null($this->_propDict['riskyUsers'])) {
            $riskyUsers = [];
            if (count($this->_propDict['riskyUsers']) > 0 && is_a($this->_propDict['riskyUsers'][0], 'RiskyUser')) {
                return $this->_propDict['riskyUsers'];
            }
            foreach ($this->_propDict['riskyUsers'] as $singleValue) {
                $riskyUsers []= new RiskyUser($singleValue);
            }
            $this->_propDict['riskyUsers'] = $riskyUsers;
            return $this->_propDict['riskyUsers'];
        }
        return null;
    }
    
    /** 
    * Sets the riskyUsers
    * The collection of users flagged for risk across managed tenants.
    *
    * @param RiskyUser[] $val The riskyUsers
    *
    * @return ManagedTenant
    */
    public function setRiskyUsers($val)
    {
        $this->_propDict["riskyUsers"] = $val;
        return $this;
    }
    

     /** 
     * Gets the tenantGroups
    * The collection of a logical grouping of managed tenants used by the multi-tenant management platform.
     *
     * @return TenantGroup[]|null The tenantGroups
     */
    public function getTenantGroups()
    {
        if (array_key_exists('tenantGroups', $this->_propDict) && !is_null($this->_propDict['tenantGroups'])) {
            $tenantGroups = [];
            if (count($this->_propDict['tenantGroups']) > 0 && is_a($this->_propDict['tenantGroups'][0], 'TenantGroup')) {
                return $this->_propDict['tenantGroups'];
            }
            foreach ($this->_propDict['tenantGroups'] as $singleValue) {
                $tenantGroups []= new TenantGroup($singleValue);
            }
            $this->_propDict['tenantGroups'] = $tenantGroups;
            return $this->_propDict['tenantGroups'];
        }
        return null;
    }
    
    /** 
    * Sets the tenantGroups
    * The collection of a logical grouping of managed tenants used by the multi-tenant management platform.
    *
    * @param TenantGroup[] $val The tenantGroups
    *
    * @return ManagedTenant
    */
    public function setTenantGroups($val)
    {
        $this->_propDict["tenantGroups"] = $val;
        return $this;
    }
    

     /** 
     * Gets the tenants
    * The collection of tenants associated with the managing entity.
     *
     * @return Tenant[]|null The tenants
     */
    public function getTenants()
    {
        if (array_key_exists('tenants', $this->_propDict) && !is_null($this->_propDict['tenants'])) {
            $tenants = [];
            if (count($this->_propDict['tenants']) > 0 && is_a($this->_propDict['tenants'][0], 'Tenant')) {
                return $this->_propDict['tenants'];
            }
            foreach ($this->_propDict['tenants'] as $singleValue) {
                $tenants []= new Tenant($singleValue);
            }
            $this->_propDict['tenants'] = $tenants;
            return $this->_propDict['tenants'];
        }
        return null;
    }
    
    /** 
    * Sets the tenants
    * The collection of tenants associated with the managing entity.
    *
    * @param Tenant[] $val The tenants
    *
    * @return ManagedTenant
    */
    public function setTenants($val)
    {
        $this->_propDict["tenants"] = $val;
        return $this;
    }
    

     /** 
     * Gets the tenantsCustomizedInformation
    * The collection of tenant level customized information across managed tenants.
     *
     * @return TenantCustomizedInformation[]|null The tenantsCustomizedInformation
     */
    public function getTenantsCustomizedInformation()
    {
        if (array_key_exists('tenantsCustomizedInformation', $this->_propDict) && !is_null($this->_propDict['tenantsCustomizedInformation'])) {
            $tenantsCustomizedInformation = [];
            if (count($this->_propDict['tenantsCustomizedInformation']) > 0 && is_a($this->_propDict['tenantsCustomizedInformation'][0], 'TenantCustomizedInformation')) {
                return $this->_propDict['tenantsCustomizedInformation'];
            }
            foreach ($this->_propDict['tenantsCustomizedInformation'] as $singleValue) {
                $tenantsCustomizedInformation []= new TenantCustomizedInformation($singleValue);
            }
            $this->_propDict['tenantsCustomizedInformation'] = $tenantsCustomizedInformation;
            return $this->_propDict['tenantsCustomizedInformation'];
        }
        return null;
    }
    
    /** 
    * Sets the tenantsCustomizedInformation
    * The collection of tenant level customized information across managed tenants.
    *
    * @param TenantCustomizedInformation[] $val The tenantsCustomizedInformation
    *
    * @return ManagedTenant
    */
    public function setTenantsCustomizedInformation($val)
    {
        $this->_propDict["tenantsCustomizedInformation"] = $val;
        return $this;
    }
    

     /** 
     * Gets the tenantsDetailedInformation
    * The collection tenant level detailed information across managed tenants.
     *
     * @return TenantDetailedInformation[]|null The tenantsDetailedInformation
     */
    public function getTenantsDetailedInformation()
    {
        if (array_key_exists('tenantsDetailedInformation', $this->_propDict) && !is_null($this->_propDict['tenantsDetailedInformation'])) {
            $tenantsDetailedInformation = [];
            if (count($this->_propDict['tenantsDetailedInformation']) > 0 && is_a($this->_propDict['tenantsDetailedInformation'][0], 'TenantDetailedInformation')) {
                return $this->_propDict['tenantsDetailedInformation'];
            }
            foreach ($this->_propDict['tenantsDetailedInformation'] as $singleValue) {
                $tenantsDetailedInformation []= new TenantDetailedInformation($singleValue);
            }
            $this->_propDict['tenantsDetailedInformation'] = $tenantsDetailedInformation;
            return $this->_propDict['tenantsDetailedInformation'];
        }
        return null;
    }
    
    /** 
    * Sets the tenantsDetailedInformation
    * The collection tenant level detailed information across managed tenants.
    *
    * @param TenantDetailedInformation[] $val The tenantsDetailedInformation
    *
    * @return ManagedTenant
    */
    public function setTenantsDetailedInformation($val)
    {
        $this->_propDict["tenantsDetailedInformation"] = $val;
        return $this;
    }
    

     /** 
     * Gets the tenantTags
    * The collection of tenant tags across managed tenants.
     *
     * @return TenantTag[]|null The tenantTags
     */
    public function getTenantTags()
    {
        if (array_key_exists('tenantTags', $this->_propDict) && !is_null($this->_propDict['tenantTags'])) {
            $tenantTags = [];
            if (count($this->_propDict['tenantTags']) > 0 && is_a($this->_propDict['tenantTags'][0], 'TenantTag')) {
                return $this->_propDict['tenantTags'];
            }
            foreach ($this->_propDict['tenantTags'] as $singleValue) {
                $tenantTags []= new TenantTag($singleValue);
            }
            $this->_propDict['tenantTags'] = $tenantTags;
            return $this->_propDict['tenantTags'];
        }
        return null;
    }
    
    /** 
    * Sets the tenantTags
    * The collection of tenant tags across managed tenants.
    *
    * @param TenantTag[] $val The tenantTags
    *
    * @return ManagedTenant
    */
    public function setTenantTags($val)
    {
        $this->_propDict["tenantTags"] = $val;
        return $this;
    }
    

     /** 
     * Gets the windowsDeviceMalwareStates
    * The state of malware for Windows devices, registered with Microsoft Endpoint Manager, across managed tenants.
     *
     * @return WindowsDeviceMalwareState[]|null The windowsDeviceMalwareStates
     */
    public function getWindowsDeviceMalwareStates()
    {
        if (array_key_exists('windowsDeviceMalwareStates', $this->_propDict) && !is_null($this->_propDict['windowsDeviceMalwareStates'])) {
            $windowsDeviceMalwareStates = [];
            if (count($this->_propDict['windowsDeviceMalwareStates']) > 0 && is_a($this->_propDict['windowsDeviceMalwareStates'][0], 'WindowsDeviceMalwareState')) {
                return $this->_propDict['windowsDeviceMalwareStates'];
            }
            foreach ($this->_propDict['windowsDeviceMalwareStates'] as $singleValue) {
                $windowsDeviceMalwareStates []= new WindowsDeviceMalwareState($singleValue);
            }
            $this->_propDict['windowsDeviceMalwareStates'] = $windowsDeviceMalwareStates;
            return $this->_propDict['windowsDeviceMalwareStates'];
        }
        return null;
    }
    
    /** 
    * Sets the windowsDeviceMalwareStates
    * The state of malware for Windows devices, registered with Microsoft Endpoint Manager, across managed tenants.
    *
    * @param WindowsDeviceMalwareState[] $val The windowsDeviceMalwareStates
    *
    * @return ManagedTenant
    */
    public function setWindowsDeviceMalwareStates($val)
    {
        $this->_propDict["windowsDeviceMalwareStates"] = $val;
        return $this;
    }
    

     /** 
     * Gets the windowsProtectionStates
    * The protection state for Windows devices, registered with Microsoft Endpoint Manager, across managed tenants.
     *
     * @return WindowsProtectionState[]|null The windowsProtectionStates
     */
    public function getWindowsProtectionStates()
    {
        if (array_key_exists('windowsProtectionStates', $this->_propDict) && !is_null($this->_propDict['windowsProtectionStates'])) {
            $windowsProtectionStates = [];
            if (count($this->_propDict['windowsProtectionStates']) > 0 && is_a($this->_propDict['windowsProtectionStates'][0], 'WindowsProtectionState')) {
                return $this->_propDict['windowsProtectionStates'];
            }
            foreach ($this->_propDict['windowsProtectionStates'] as $singleValue) {
                $windowsProtectionStates []= new WindowsProtectionState($singleValue);
            }
            $this->_propDict['windowsProtectionStates'] = $windowsProtectionStates;
            return $this->_propDict['windowsProtectionStates'];
        }
        return null;
    }
    
    /** 
    * Sets the windowsProtectionStates
    * The protection state for Windows devices, registered with Microsoft Endpoint Manager, across managed tenants.
    *
    * @param WindowsProtectionState[] $val The windowsProtectionStates
    *
    * @return ManagedTenant
    */
    public function setWindowsProtectionStates($val)
    {
        $this->_propDict["windowsProtectionStates"] = $val;
        return $this;
    }
    
}
