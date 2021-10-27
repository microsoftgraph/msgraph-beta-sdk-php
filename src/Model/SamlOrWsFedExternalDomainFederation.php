<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SamlOrWsFedExternalDomainFederation File
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
* SamlOrWsFedExternalDomainFederation class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class SamlOrWsFedExternalDomainFederation extends SamlOrWsFedProvider
{

     /** 
     * Gets the domains
    * Collection of domain names of the external organizations that the tenant is federating with. Supports $filter (eq).
     *
     * @return ExternalDomainName[]|null The domains
     */
    public function getDomains()
    {
        if (array_key_exists('domains', $this->_propDict) && !is_null($this->_propDict['domains'])) {
            $domains = [];
            if (count($this->_propDict['domains']) > 0 && is_a($this->_propDict['domains'][0], 'ExternalDomainName')) {
                return $this->_propDict['domains'];
            }
            foreach ($this->_propDict['domains'] as $singleValue) {
                $domains []= new ExternalDomainName($singleValue);
            }
            $this->_propDict['domains'] = $domains;
            return $this->_propDict['domains'];
        }
        return null;
    }
    
    /** 
    * Sets the domains
    * Collection of domain names of the external organizations that the tenant is federating with. Supports $filter (eq).
    *
    * @param ExternalDomainName[] $val The domains
    *
    * @return SamlOrWsFedExternalDomainFederation
    */
    public function setDomains($val)
    {
        $this->_propDict["domains"] = $val;
        return $this;
    }
    
}
