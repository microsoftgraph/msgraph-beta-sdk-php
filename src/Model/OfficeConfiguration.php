<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* OfficeConfiguration File
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
* OfficeConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class OfficeConfiguration implements \JsonSerializable
{
    /**
    * The array of properties available
    * to the model
    *
    * @var array $_propDict
    */
    protected $_propDict;

    /**
    * Construct a new OfficeConfiguration
    *
    * @param array $propDict A list of properties to set
    */
    function __construct($propDict = array())
    {
        if (!is_array($propDict)) {
           $propDict = array();
        }
        $this->_propDict = $propDict;
    }

    /**
    * Gets the property dictionary of the OfficeConfiguration
    *
    * @return array The list of properties
    */
    public function getProperties()
    {
        return $this->_propDict;
    }


     /**
     * Gets the tenantCheckinStatuses
    * List of office Client check-in status.
     *
     * @return OfficeClientCheckinStatus[]|null The tenantCheckinStatuses
     */
    public function getTenantCheckinStatuses()
    {
        if (array_key_exists('tenantCheckinStatuses', $this->_propDict) && !is_null($this->_propDict['tenantCheckinStatuses'])) {
            $tenantCheckinStatuses = [];
            if (count($this->_propDict['tenantCheckinStatuses']) > 0 && is_a($this->_propDict['tenantCheckinStatuses'][0], 'OfficeClientCheckinStatus')) {
                return $this->_propDict['tenantCheckinStatuses'];
            }
            foreach ($this->_propDict['tenantCheckinStatuses'] as $singleValue) {
                $tenantCheckinStatuses []= new OfficeClientCheckinStatus($singleValue);
            }
            $this->_propDict['tenantCheckinStatuses'] = $tenantCheckinStatuses;
            return $this->_propDict['tenantCheckinStatuses'];
        }
        return null;
    }

    /**
    * Sets the tenantCheckinStatuses
    * List of office Client check-in status.
    *
    * @param OfficeClientCheckinStatus[] $val The tenantCheckinStatuses
    *
    * @return OfficeConfiguration
    */
    public function setTenantCheckinStatuses($val)
    {
        $this->_propDict["tenantCheckinStatuses"] = $val;
        return $this;
    }

    /**
    * Gets the tenantUserCheckinSummary
    * Entity that describes tenant check-in statues
    *
    * @return OfficeUserCheckinSummary|null The tenantUserCheckinSummary
    */
    public function getTenantUserCheckinSummary()
    {
        if (array_key_exists("tenantUserCheckinSummary", $this->_propDict) && !is_null($this->_propDict["tenantUserCheckinSummary"])) {
            if (is_a($this->_propDict["tenantUserCheckinSummary"], "\Beta\Microsoft\Graph\Model\OfficeUserCheckinSummary")) {
                return $this->_propDict["tenantUserCheckinSummary"];
            } else {
                $this->_propDict["tenantUserCheckinSummary"] = new OfficeUserCheckinSummary($this->_propDict["tenantUserCheckinSummary"]);
                return $this->_propDict["tenantUserCheckinSummary"];
            }
        }
        return null;
    }

    /**
    * Sets the tenantUserCheckinSummary
    * Entity that describes tenant check-in statues
    *
    * @param OfficeUserCheckinSummary $val The tenantUserCheckinSummary
    *
    * @return OfficeConfiguration
    */
    public function setTenantUserCheckinSummary($val)
    {
        $this->_propDict["tenantUserCheckinSummary"] = $val;
        return $this;
    }


     /**
     * Gets the clientConfigurations
    * List of office Client configuration.
     *
     * @return OfficeClientConfiguration[]|null The clientConfigurations
     */
    public function getClientConfigurations()
    {
        if (array_key_exists('clientConfigurations', $this->_propDict) && !is_null($this->_propDict['clientConfigurations'])) {
            $clientConfigurations = [];
            if (count($this->_propDict['clientConfigurations']) > 0 && is_a($this->_propDict['clientConfigurations'][0], 'OfficeClientConfiguration')) {
                return $this->_propDict['clientConfigurations'];
            }
            foreach ($this->_propDict['clientConfigurations'] as $singleValue) {
                $clientConfigurations []= new OfficeClientConfiguration($singleValue);
            }
            $this->_propDict['clientConfigurations'] = $clientConfigurations;
            return $this->_propDict['clientConfigurations'];
        }
        return null;
    }

    /**
    * Sets the clientConfigurations
    * List of office Client configuration.
    *
    * @param OfficeClientConfiguration[] $val The clientConfigurations
    *
    * @return OfficeConfiguration
    */
    public function setClientConfigurations($val)
    {
        $this->_propDict["clientConfigurations"] = $val;
        return $this;
    }

    /**
    * Gets the ODataType
    *
    * @return string|null The ODataType
    */
    public function getODataType()
    {
        if (array_key_exists('@odata.type', $this->_propDict)) {
            return $this->_propDict["@odata.type"];
        }
        return null;
    }

    /**
    * Sets the ODataType
    *
    * @param string $val The ODataType
    *
    * @return OfficeConfiguration
    */
    public function setODataType($val)
    {
        $this->_propDict["@odata.type"] = $val;
        return $this;
    }

    /**
    * Serializes the object by property array
    * Manually serialize DateTime into RFC3339 format
    *
    * @return array The list of properties
    */
    public function jsonSerialize()
    {
        $serializableProperties = $this->getProperties();
        foreach ($serializableProperties as $property => $val) {
            if (is_array($val) && !empty($val)) {
                $serializableProperties[$property] = array_map(function ($element) {
                    return $this->serializeUniqueTypes($element);
                }, $val);
                continue;
            }
            $serializableProperties[$property] = $this->serializeUniqueTypes($val);
        }
        return $serializableProperties;
    }

    /**
    * Returns serialized value of \DateTime, \Microsoft\Graph\Core\Enum & \Microsoft\Graph\Entity types
    *
    * @return mixed
    **/
    private function serializeUniqueTypes($val)
    {
        if (is_a($val, '\DateTime')) {
            return $val->format(\DateTimeInterface::RFC3339);
        } else if (is_a($val, '\Microsoft\Graph\Core\Enum')) {
            return $val->value();
        } else if (is_a($val, "\Entity")) {
            return $val->jsonSerialize();
        } else {
            return $val;
        }
    }
}
