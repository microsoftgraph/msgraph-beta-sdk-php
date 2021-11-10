<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Directory File
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
* Directory class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Directory extends Entity
{

     /**
     * Gets the administrativeUnits
    * Conceptual container for user and group directory objects.
     *
     * @return AdministrativeUnit[]|null The administrativeUnits
     */
    public function getAdministrativeUnits()
    {
        if (array_key_exists('administrativeUnits', $this->_propDict) && !is_null($this->_propDict['administrativeUnits'])) {
            $administrativeUnits = [];
            if (count($this->_propDict['administrativeUnits']) > 0 && is_a($this->_propDict['administrativeUnits'][0], 'AdministrativeUnit')) {
                return $this->_propDict['administrativeUnits'];
            }
            foreach ($this->_propDict['administrativeUnits'] as $singleValue) {
                $administrativeUnits []= new AdministrativeUnit($singleValue);
            }
            $this->_propDict['administrativeUnits'] = $administrativeUnits;
            return $this->_propDict['administrativeUnits'];
        }
        return null;
    }

    /**
    * Sets the administrativeUnits
    * Conceptual container for user and group directory objects.
    *
    * @param AdministrativeUnit[] $val The administrativeUnits
    *
    * @return Directory
    */
    public function setAdministrativeUnits($val)
    {
        $this->_propDict["administrativeUnits"] = $val;
        return $this;
    }


     /**
     * Gets the attributeSets
     *
     * @return AttributeSet[]|null The attributeSets
     */
    public function getAttributeSets()
    {
        if (array_key_exists('attributeSets', $this->_propDict) && !is_null($this->_propDict['attributeSets'])) {
            $attributeSets = [];
            if (count($this->_propDict['attributeSets']) > 0 && is_a($this->_propDict['attributeSets'][0], 'AttributeSet')) {
                return $this->_propDict['attributeSets'];
            }
            foreach ($this->_propDict['attributeSets'] as $singleValue) {
                $attributeSets []= new AttributeSet($singleValue);
            }
            $this->_propDict['attributeSets'] = $attributeSets;
            return $this->_propDict['attributeSets'];
        }
        return null;
    }

    /**
    * Sets the attributeSets
    *
    * @param AttributeSet[] $val The attributeSets
    *
    * @return Directory
    */
    public function setAttributeSets($val)
    {
        $this->_propDict["attributeSets"] = $val;
        return $this;
    }


     /**
     * Gets the customSecurityAttributeDefinitions
     *
     * @return CustomSecurityAttributeDefinition[]|null The customSecurityAttributeDefinitions
     */
    public function getCustomSecurityAttributeDefinitions()
    {
        if (array_key_exists('customSecurityAttributeDefinitions', $this->_propDict) && !is_null($this->_propDict['customSecurityAttributeDefinitions'])) {
            $customSecurityAttributeDefinitions = [];
            if (count($this->_propDict['customSecurityAttributeDefinitions']) > 0 && is_a($this->_propDict['customSecurityAttributeDefinitions'][0], 'CustomSecurityAttributeDefinition')) {
                return $this->_propDict['customSecurityAttributeDefinitions'];
            }
            foreach ($this->_propDict['customSecurityAttributeDefinitions'] as $singleValue) {
                $customSecurityAttributeDefinitions []= new CustomSecurityAttributeDefinition($singleValue);
            }
            $this->_propDict['customSecurityAttributeDefinitions'] = $customSecurityAttributeDefinitions;
            return $this->_propDict['customSecurityAttributeDefinitions'];
        }
        return null;
    }

    /**
    * Sets the customSecurityAttributeDefinitions
    *
    * @param CustomSecurityAttributeDefinition[] $val The customSecurityAttributeDefinitions
    *
    * @return Directory
    */
    public function setCustomSecurityAttributeDefinitions($val)
    {
        $this->_propDict["customSecurityAttributeDefinitions"] = $val;
        return $this;
    }


     /**
     * Gets the deletedItems
    * Recently deleted items. Read-only. Nullable.
     *
     * @return DirectoryObject[]|null The deletedItems
     */
    public function getDeletedItems()
    {
        if (array_key_exists('deletedItems', $this->_propDict) && !is_null($this->_propDict['deletedItems'])) {
            $deletedItems = [];
            if (count($this->_propDict['deletedItems']) > 0 && is_a($this->_propDict['deletedItems'][0], 'DirectoryObject')) {
                return $this->_propDict['deletedItems'];
            }
            foreach ($this->_propDict['deletedItems'] as $singleValue) {
                $deletedItems []= new DirectoryObject($singleValue);
            }
            $this->_propDict['deletedItems'] = $deletedItems;
            return $this->_propDict['deletedItems'];
        }
        return null;
    }

    /**
    * Sets the deletedItems
    * Recently deleted items. Read-only. Nullable.
    *
    * @param DirectoryObject[] $val The deletedItems
    *
    * @return Directory
    */
    public function setDeletedItems($val)
    {
        $this->_propDict["deletedItems"] = $val;
        return $this;
    }


     /**
     * Gets the federationConfigurations
    * Configure domain federation with organizations whose identity provider (IdP) supports either the SAML or WS-Fed protocol.
     *
     * @return IdentityProviderBase[]|null The federationConfigurations
     */
    public function getFederationConfigurations()
    {
        if (array_key_exists('federationConfigurations', $this->_propDict) && !is_null($this->_propDict['federationConfigurations'])) {
            $federationConfigurations = [];
            if (count($this->_propDict['federationConfigurations']) > 0 && is_a($this->_propDict['federationConfigurations'][0], 'IdentityProviderBase')) {
                return $this->_propDict['federationConfigurations'];
            }
            foreach ($this->_propDict['federationConfigurations'] as $singleValue) {
                $federationConfigurations []= new IdentityProviderBase($singleValue);
            }
            $this->_propDict['federationConfigurations'] = $federationConfigurations;
            return $this->_propDict['federationConfigurations'];
        }
        return null;
    }

    /**
    * Sets the federationConfigurations
    * Configure domain federation with organizations whose identity provider (IdP) supports either the SAML or WS-Fed protocol.
    *
    * @param IdentityProviderBase[] $val The federationConfigurations
    *
    * @return Directory
    */
    public function setFederationConfigurations($val)
    {
        $this->_propDict["federationConfigurations"] = $val;
        return $this;
    }


     /**
     * Gets the sharedEmailDomains
     *
     * @return SharedEmailDomain[]|null The sharedEmailDomains
     */
    public function getSharedEmailDomains()
    {
        if (array_key_exists('sharedEmailDomains', $this->_propDict) && !is_null($this->_propDict['sharedEmailDomains'])) {
            $sharedEmailDomains = [];
            if (count($this->_propDict['sharedEmailDomains']) > 0 && is_a($this->_propDict['sharedEmailDomains'][0], 'SharedEmailDomain')) {
                return $this->_propDict['sharedEmailDomains'];
            }
            foreach ($this->_propDict['sharedEmailDomains'] as $singleValue) {
                $sharedEmailDomains []= new SharedEmailDomain($singleValue);
            }
            $this->_propDict['sharedEmailDomains'] = $sharedEmailDomains;
            return $this->_propDict['sharedEmailDomains'];
        }
        return null;
    }

    /**
    * Sets the sharedEmailDomains
    *
    * @param SharedEmailDomain[] $val The sharedEmailDomains
    *
    * @return Directory
    */
    public function setSharedEmailDomains($val)
    {
        $this->_propDict["sharedEmailDomains"] = $val;
        return $this;
    }


     /**
     * Gets the featureRolloutPolicies
    * Nullable.
     *
     * @return FeatureRolloutPolicy[]|null The featureRolloutPolicies
     */
    public function getFeatureRolloutPolicies()
    {
        if (array_key_exists('featureRolloutPolicies', $this->_propDict) && !is_null($this->_propDict['featureRolloutPolicies'])) {
            $featureRolloutPolicies = [];
            if (count($this->_propDict['featureRolloutPolicies']) > 0 && is_a($this->_propDict['featureRolloutPolicies'][0], 'FeatureRolloutPolicy')) {
                return $this->_propDict['featureRolloutPolicies'];
            }
            foreach ($this->_propDict['featureRolloutPolicies'] as $singleValue) {
                $featureRolloutPolicies []= new FeatureRolloutPolicy($singleValue);
            }
            $this->_propDict['featureRolloutPolicies'] = $featureRolloutPolicies;
            return $this->_propDict['featureRolloutPolicies'];
        }
        return null;
    }

    /**
    * Sets the featureRolloutPolicies
    * Nullable.
    *
    * @param FeatureRolloutPolicy[] $val The featureRolloutPolicies
    *
    * @return Directory
    */
    public function setFeatureRolloutPolicies($val)
    {
        $this->_propDict["featureRolloutPolicies"] = $val;
        return $this;
    }

}
