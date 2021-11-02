<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* OnPremisesPublishingProfile File
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
* OnPremisesPublishingProfile class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class OnPremisesPublishingProfile extends Entity
{
    /**
    * Gets the hybridAgentUpdaterConfiguration
    * Represents a hybridAgentUpdaterConfiguration object.
    *
    * @return HybridAgentUpdaterConfiguration|null The hybridAgentUpdaterConfiguration
    */
    public function getHybridAgentUpdaterConfiguration()
    {
        if (array_key_exists("hybridAgentUpdaterConfiguration", $this->_propDict) && !is_null($this->_propDict["hybridAgentUpdaterConfiguration"])) {
            if (is_a($this->_propDict["hybridAgentUpdaterConfiguration"], "\Beta\Microsoft\Graph\Model\HybridAgentUpdaterConfiguration")) {
                return $this->_propDict["hybridAgentUpdaterConfiguration"];
            } else {
                $this->_propDict["hybridAgentUpdaterConfiguration"] = new HybridAgentUpdaterConfiguration($this->_propDict["hybridAgentUpdaterConfiguration"]);
                return $this->_propDict["hybridAgentUpdaterConfiguration"];
            }
        }
        return null;
    }
    
    /**
    * Sets the hybridAgentUpdaterConfiguration
    * Represents a hybridAgentUpdaterConfiguration object.
    *
    * @param HybridAgentUpdaterConfiguration $val The hybridAgentUpdaterConfiguration
    *
    * @return OnPremisesPublishingProfile
    */
    public function setHybridAgentUpdaterConfiguration($val)
    {
        $this->_propDict["hybridAgentUpdaterConfiguration"] = $val;
        return $this;
    }
    
    /**
    * Gets the isEnabled
    * Represents if Azure AD Application Proxy is enabled for the tenant.
    *
    * @return bool|null The isEnabled
    */
    public function getIsEnabled()
    {
        if (array_key_exists("isEnabled", $this->_propDict)) {
            return $this->_propDict["isEnabled"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isEnabled
    * Represents if Azure AD Application Proxy is enabled for the tenant.
    *
    * @param bool $val The isEnabled
    *
    * @return OnPremisesPublishingProfile
    */
    public function setIsEnabled($val)
    {
        $this->_propDict["isEnabled"] = boolval($val);
        return $this;
    }
    

     /** 
     * Gets the agentGroups
    * List of existing onPremisesAgentGroup objects. Read-only. Nullable.
     *
     * @return OnPremisesAgentGroup[]|null The agentGroups
     */
    public function getAgentGroups()
    {
        if (array_key_exists('agentGroups', $this->_propDict) && !is_null($this->_propDict['agentGroups'])) {
           $agentGroups = [];
           if (count($this->_propDict['agentGroups']) > 0 && is_a($this->_propDict['agentGroups'][0], 'OnPremisesAgentGroup')) {
              return $this->_propDict['agentGroups'];
           }
           foreach ($this->_propDict['agentGroups'] as $singleValue) {
              $agentGroups []= new OnPremisesAgentGroup($singleValue);
           }
           $this->_propDict['agentGroups'] = $agentGroups;
           return $this->_propDict['agentGroups'];
        }
        return null;
    }
    
    /** 
    * Sets the agentGroups
    * List of existing onPremisesAgentGroup objects. Read-only. Nullable.
    *
    * @param OnPremisesAgentGroup[] $val The agentGroups
    *
    * @return OnPremisesPublishingProfile
    */
    public function setAgentGroups($val)
    {
        $this->_propDict["agentGroups"] = $val;
        return $this;
    }
    

     /** 
     * Gets the agents
    * List of existing onPremisesAgent objects. Read-only. Nullable.
     *
     * @return OnPremisesAgent[]|null The agents
     */
    public function getAgents()
    {
        if (array_key_exists('agents', $this->_propDict) && !is_null($this->_propDict['agents'])) {
           $agents = [];
           if (count($this->_propDict['agents']) > 0 && is_a($this->_propDict['agents'][0], 'OnPremisesAgent')) {
              return $this->_propDict['agents'];
           }
           foreach ($this->_propDict['agents'] as $singleValue) {
              $agents []= new OnPremisesAgent($singleValue);
           }
           $this->_propDict['agents'] = $agents;
           return $this->_propDict['agents'];
        }
        return null;
    }
    
    /** 
    * Sets the agents
    * List of existing onPremisesAgent objects. Read-only. Nullable.
    *
    * @param OnPremisesAgent[] $val The agents
    *
    * @return OnPremisesPublishingProfile
    */
    public function setAgents($val)
    {
        $this->_propDict["agents"] = $val;
        return $this;
    }
    

     /** 
     * Gets the connectorGroups
    * List of existing connectorGroup objects for applications published through Application Proxy. Read-only. Nullable.
     *
     * @return ConnectorGroup[]|null The connectorGroups
     */
    public function getConnectorGroups()
    {
        if (array_key_exists('connectorGroups', $this->_propDict) && !is_null($this->_propDict['connectorGroups'])) {
           $connectorGroups = [];
           if (count($this->_propDict['connectorGroups']) > 0 && is_a($this->_propDict['connectorGroups'][0], 'ConnectorGroup')) {
              return $this->_propDict['connectorGroups'];
           }
           foreach ($this->_propDict['connectorGroups'] as $singleValue) {
              $connectorGroups []= new ConnectorGroup($singleValue);
           }
           $this->_propDict['connectorGroups'] = $connectorGroups;
           return $this->_propDict['connectorGroups'];
        }
        return null;
    }
    
    /** 
    * Sets the connectorGroups
    * List of existing connectorGroup objects for applications published through Application Proxy. Read-only. Nullable.
    *
    * @param ConnectorGroup[] $val The connectorGroups
    *
    * @return OnPremisesPublishingProfile
    */
    public function setConnectorGroups($val)
    {
        $this->_propDict["connectorGroups"] = $val;
        return $this;
    }
    

     /** 
     * Gets the connectors
    * List of existing connector objects for applications published through Application Proxy. Read-only. Nullable.
     *
     * @return Connector[]|null The connectors
     */
    public function getConnectors()
    {
        if (array_key_exists('connectors', $this->_propDict) && !is_null($this->_propDict['connectors'])) {
           $connectors = [];
           if (count($this->_propDict['connectors']) > 0 && is_a($this->_propDict['connectors'][0], 'Connector')) {
              return $this->_propDict['connectors'];
           }
           foreach ($this->_propDict['connectors'] as $singleValue) {
              $connectors []= new Connector($singleValue);
           }
           $this->_propDict['connectors'] = $connectors;
           return $this->_propDict['connectors'];
        }
        return null;
    }
    
    /** 
    * Sets the connectors
    * List of existing connector objects for applications published through Application Proxy. Read-only. Nullable.
    *
    * @param Connector[] $val The connectors
    *
    * @return OnPremisesPublishingProfile
    */
    public function setConnectors($val)
    {
        $this->_propDict["connectors"] = $val;
        return $this;
    }
    

     /** 
     * Gets the publishedResources
    * List of existing publishedResource objects. Read-only. Nullable.
     *
     * @return PublishedResource[]|null The publishedResources
     */
    public function getPublishedResources()
    {
        if (array_key_exists('publishedResources', $this->_propDict) && !is_null($this->_propDict['publishedResources'])) {
           $publishedResources = [];
           if (count($this->_propDict['publishedResources']) > 0 && is_a($this->_propDict['publishedResources'][0], 'PublishedResource')) {
              return $this->_propDict['publishedResources'];
           }
           foreach ($this->_propDict['publishedResources'] as $singleValue) {
              $publishedResources []= new PublishedResource($singleValue);
           }
           $this->_propDict['publishedResources'] = $publishedResources;
           return $this->_propDict['publishedResources'];
        }
        return null;
    }
    
    /** 
    * Sets the publishedResources
    * List of existing publishedResource objects. Read-only. Nullable.
    *
    * @param PublishedResource[] $val The publishedResources
    *
    * @return OnPremisesPublishingProfile
    */
    public function setPublishedResources($val)
    {
        $this->_propDict["publishedResources"] = $val;
        return $this;
    }
    
}
