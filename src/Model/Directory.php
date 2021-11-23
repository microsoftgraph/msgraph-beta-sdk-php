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
     * Gets the impactedResources
     *
     * @return RecommendationResource[]|null The impactedResources
     */
    public function getImpactedResources()
    {
        if (array_key_exists('impactedResources', $this->_propDict) && !is_null($this->_propDict['impactedResources'])) {
            $impactedResources = [];
            if (count($this->_propDict['impactedResources']) > 0 && is_a($this->_propDict['impactedResources'][0], 'RecommendationResource')) {
                return $this->_propDict['impactedResources'];
            }
            foreach ($this->_propDict['impactedResources'] as $singleValue) {
                $impactedResources []= new RecommendationResource($singleValue);
            }
            $this->_propDict['impactedResources'] = $impactedResources;
            return $this->_propDict['impactedResources'];
        }
        return null;
    }

    /**
    * Sets the impactedResources
    *
    * @param RecommendationResource[] $val The impactedResources
    *
    * @return Directory
    */
    public function setImpactedResources($val)
    {
        $this->_propDict["impactedResources"] = $val;
        return $this;
    }


     /**
     * Gets the recommendations
     *
     * @return Recommendation[]|null The recommendations
     */
    public function getRecommendations()
    {
        if (array_key_exists('recommendations', $this->_propDict) && !is_null($this->_propDict['recommendations'])) {
            $recommendations = [];
            if (count($this->_propDict['recommendations']) > 0 && is_a($this->_propDict['recommendations'][0], 'Recommendation')) {
                return $this->_propDict['recommendations'];
            }
            foreach ($this->_propDict['recommendations'] as $singleValue) {
                $recommendations []= new Recommendation($singleValue);
            }
            $this->_propDict['recommendations'] = $recommendations;
            return $this->_propDict['recommendations'];
        }
        return null;
    }

    /**
    * Sets the recommendations
    *
    * @param Recommendation[] $val The recommendations
    *
    * @return Directory
    */
    public function setRecommendations($val)
    {
        $this->_propDict["recommendations"] = $val;
        return $this;
    }


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
    * Group of related custom security attribute definitions.
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
    * Group of related custom security attribute definitions.
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
    * Schema of a custom security attributes (key-value pairs).
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
    * Schema of a custom security attributes (key-value pairs).
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
     * Gets the inboundSharedUserProfiles
     *
     * @return InboundSharedUserProfile[]|null The inboundSharedUserProfiles
     */
    public function getInboundSharedUserProfiles()
    {
        if (array_key_exists('inboundSharedUserProfiles', $this->_propDict) && !is_null($this->_propDict['inboundSharedUserProfiles'])) {
            $inboundSharedUserProfiles = [];
            if (count($this->_propDict['inboundSharedUserProfiles']) > 0 && is_a($this->_propDict['inboundSharedUserProfiles'][0], 'InboundSharedUserProfile')) {
                return $this->_propDict['inboundSharedUserProfiles'];
            }
            foreach ($this->_propDict['inboundSharedUserProfiles'] as $singleValue) {
                $inboundSharedUserProfiles []= new InboundSharedUserProfile($singleValue);
            }
            $this->_propDict['inboundSharedUserProfiles'] = $inboundSharedUserProfiles;
            return $this->_propDict['inboundSharedUserProfiles'];
        }
        return null;
    }

    /**
    * Sets the inboundSharedUserProfiles
    *
    * @param InboundSharedUserProfile[] $val The inboundSharedUserProfiles
    *
    * @return Directory
    */
    public function setInboundSharedUserProfiles($val)
    {
        $this->_propDict["inboundSharedUserProfiles"] = $val;
        return $this;
    }


     /**
     * Gets the outboundSharedUserProfiles
     *
     * @return OutboundSharedUserProfile[]|null The outboundSharedUserProfiles
     */
    public function getOutboundSharedUserProfiles()
    {
        if (array_key_exists('outboundSharedUserProfiles', $this->_propDict) && !is_null($this->_propDict['outboundSharedUserProfiles'])) {
            $outboundSharedUserProfiles = [];
            if (count($this->_propDict['outboundSharedUserProfiles']) > 0 && is_a($this->_propDict['outboundSharedUserProfiles'][0], 'OutboundSharedUserProfile')) {
                return $this->_propDict['outboundSharedUserProfiles'];
            }
            foreach ($this->_propDict['outboundSharedUserProfiles'] as $singleValue) {
                $outboundSharedUserProfiles []= new OutboundSharedUserProfile($singleValue);
            }
            $this->_propDict['outboundSharedUserProfiles'] = $outboundSharedUserProfiles;
            return $this->_propDict['outboundSharedUserProfiles'];
        }
        return null;
    }

    /**
    * Sets the outboundSharedUserProfiles
    *
    * @param OutboundSharedUserProfile[] $val The outboundSharedUserProfiles
    *
    * @return Directory
    */
    public function setOutboundSharedUserProfiles($val)
    {
        $this->_propDict["outboundSharedUserProfiles"] = $val;
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
