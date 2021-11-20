<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* CommsApplication File
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
* CommsApplication class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class CommsApplication implements \JsonSerializable
{
    /**
    * The array of properties available
    * to the model
    *
    * @var array $_propDict
    */
    protected $_propDict;

    /**
    * Construct a new CommsApplication
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
    * Gets the property dictionary of the CommsApplication
    *
    * @return array The list of properties
    */
    public function getProperties()
    {
        return $this->_propDict;
    }


     /**
     * Gets the calls
     *
     * @return Call[]|null The calls
     */
    public function getCalls()
    {
        if (array_key_exists('calls', $this->_propDict) && !is_null($this->_propDict['calls'])) {
            $calls = [];
            if (count($this->_propDict['calls']) > 0 && is_a($this->_propDict['calls'][0], 'Call')) {
                return $this->_propDict['calls'];
            }
            foreach ($this->_propDict['calls'] as $singleValue) {
                $calls []= new Call($singleValue);
            }
            $this->_propDict['calls'] = $calls;
            return $this->_propDict['calls'];
        }
        return null;
    }

    /**
    * Sets the calls
    *
    * @param Call[] $val The calls
    *
    * @return CommsApplication
    */
    public function setCalls($val)
    {
        $this->_propDict["calls"] = $val;
        return $this;
    }


     /**
     * Gets the onlineMeetings
     *
     * @return OnlineMeeting[]|null The onlineMeetings
     */
    public function getOnlineMeetings()
    {
        if (array_key_exists('onlineMeetings', $this->_propDict) && !is_null($this->_propDict['onlineMeetings'])) {
            $onlineMeetings = [];
            if (count($this->_propDict['onlineMeetings']) > 0 && is_a($this->_propDict['onlineMeetings'][0], 'OnlineMeeting')) {
                return $this->_propDict['onlineMeetings'];
            }
            foreach ($this->_propDict['onlineMeetings'] as $singleValue) {
                $onlineMeetings []= new OnlineMeeting($singleValue);
            }
            $this->_propDict['onlineMeetings'] = $onlineMeetings;
            return $this->_propDict['onlineMeetings'];
        }
        return null;
    }

    /**
    * Sets the onlineMeetings
    *
    * @param OnlineMeeting[] $val The onlineMeetings
    *
    * @return CommsApplication
    */
    public function setOnlineMeetings($val)
    {
        $this->_propDict["onlineMeetings"] = $val;
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
    * @return CommsApplication
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
