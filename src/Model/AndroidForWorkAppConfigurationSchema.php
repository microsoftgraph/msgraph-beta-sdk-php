<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AndroidForWorkAppConfigurationSchema File
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
* AndroidForWorkAppConfigurationSchema class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AndroidForWorkAppConfigurationSchema extends Entity
{
    /**
    * Gets the exampleJson
    * UTF8 encoded byte array containing example JSON string conforming to this schema that demonstrates how to set the configuration for this app
    *
    * @return \GuzzleHttp\Psr7\Stream|null The exampleJson
    */
    public function getExampleJson()
    {
        if (array_key_exists("exampleJson", $this->_propDict) && !is_null($this->_propDict["exampleJson"])) {
            if (is_a($this->_propDict["exampleJson"], "\GuzzleHttp\Psr7\Stream")) {
                return $this->_propDict["exampleJson"];
            } else {
                $this->_propDict["exampleJson"] = \GuzzleHttp\Psr7\Utils::streamFor($this->_propDict["exampleJson"]);
                return $this->_propDict["exampleJson"];
            }
        }
        return null;
    }

    /**
    * Sets the exampleJson
    * UTF8 encoded byte array containing example JSON string conforming to this schema that demonstrates how to set the configuration for this app
    *
    * @param \GuzzleHttp\Psr7\Stream $val The exampleJson
    *
    * @return AndroidForWorkAppConfigurationSchema
    */
    public function setExampleJson($val)
    {
        $this->_propDict["exampleJson"] = $val;
        return $this;
    }


     /**
     * Gets the schemaItems
    * Collection of items each representing a named configuration option in the schema
     *
     * @return AndroidForWorkAppConfigurationSchemaItem[]|null The schemaItems
     */
    public function getSchemaItems()
    {
        if (array_key_exists('schemaItems', $this->_propDict) && !is_null($this->_propDict['schemaItems'])) {
            $schemaItems = [];
            if (count($this->_propDict['schemaItems']) > 0 && is_a($this->_propDict['schemaItems'][0], 'AndroidForWorkAppConfigurationSchemaItem')) {
                return $this->_propDict['schemaItems'];
            }
            foreach ($this->_propDict['schemaItems'] as $singleValue) {
                $schemaItems []= new AndroidForWorkAppConfigurationSchemaItem($singleValue);
            }
            $this->_propDict['schemaItems'] = $schemaItems;
            return $this->_propDict['schemaItems'];
        }
        return null;
    }

    /**
    * Sets the schemaItems
    * Collection of items each representing a named configuration option in the schema
    *
    * @param AndroidForWorkAppConfigurationSchemaItem[] $val The schemaItems
    *
    * @return AndroidForWorkAppConfigurationSchema
    */
    public function setSchemaItems($val)
    {
        $this->_propDict["schemaItems"] = $val;
        return $this;
    }

}
