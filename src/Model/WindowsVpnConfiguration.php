<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WindowsVpnConfiguration File
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
* WindowsVpnConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class WindowsVpnConfiguration extends DeviceConfiguration
{
    /**
    * Gets the connectionName
    * Connection name displayed to the user.
    *
    * @return string|null The connectionName
    */
    public function getConnectionName()
    {
        if (array_key_exists("connectionName", $this->_propDict)) {
            return $this->_propDict["connectionName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the connectionName
    * Connection name displayed to the user.
    *
    * @param string $val The connectionName
    *
    * @return WindowsVpnConfiguration
    */
    public function setConnectionName($val)
    {
        $this->_propDict["connectionName"] = $val;
        return $this;
    }
    
    /**
    * Gets the customXml
    * Custom XML commands that configures the VPN connection. (UTF8 encoded byte array)
    *
    * @return \GuzzleHttp\Psr7\Stream|null The customXml
    */
    public function getCustomXml()
    {
        if (array_key_exists("customXml", $this->_propDict) && !is_null($this->_propDict["customXml"])) {
            if (is_a($this->_propDict["customXml"], "\GuzzleHttp\Psr7\Stream")) {
                return $this->_propDict["customXml"];
            } else {
                $this->_propDict["customXml"] = \GuzzleHttp\Psr7\Utils::streamFor($this->_propDict["customXml"]);
                return $this->_propDict["customXml"];
            }
        }
        return null;
    }
    
    /**
    * Sets the customXml
    * Custom XML commands that configures the VPN connection. (UTF8 encoded byte array)
    *
    * @param \GuzzleHttp\Psr7\Stream $val The customXml
    *
    * @return WindowsVpnConfiguration
    */
    public function setCustomXml($val)
    {
        $this->_propDict["customXml"] = $val;
        return $this;
    }
    

     /** 
     * Gets the servers
    * List of VPN Servers on the network. Make sure end users can access these network locations. This collection can contain a maximum of 500 elements.
     *
     * @return VpnServer[]|null The servers
     */
    public function getServers()
    {
        if (array_key_exists('servers', $this->_propDict) && !is_null($this->_propDict['servers'])) {
            $servers = [];
            if (count($this->_propDict['servers']) > 0 && is_a($this->_propDict['servers'][0], 'VpnServer')) {
                return $this->_propDict['servers'];
            }
            foreach ($this->_propDict['servers'] as $singleValue) {
                $servers []= new VpnServer($singleValue);
            }
            $this->_propDict['servers'] = $servers;
            return $this->_propDict['servers'];
        }
        return null;
    }
    
    /** 
    * Sets the servers
    * List of VPN Servers on the network. Make sure end users can access these network locations. This collection can contain a maximum of 500 elements.
    *
    * @param VpnServer[] $val The servers
    *
    * @return WindowsVpnConfiguration
    */
    public function setServers($val)
    {
        $this->_propDict["servers"] = $val;
        return $this;
    }
    
}
