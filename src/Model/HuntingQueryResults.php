<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* HuntingQueryResults File
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
* HuntingQueryResults class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class HuntingQueryResults extends Entity
{

    /**
    * Gets the results
    *
    * @return HuntingRowResult[]|null The results
    */
    public function getResults()
    {
        if (array_key_exists("results", $this->_propDict) && !is_null($this->_propDict["results"])) {
       
            if (count($this->_propDict['results']) > 0 && is_a($this->_propDict['results'][0], 'HuntingRowResult')) {
                return $this->_propDict['results'];
            }
            $results = [];
            foreach ($this->_propDict['results'] as $singleValue) {
                $results []= new HuntingRowResult($singleValue);
            }
            $this->_propDict['results'] = $results;
            return $this->_propDict['results'];
            }
        return null;
    }

    /**
    * Sets the results
    *
    * @param HuntingRowResult[] $val The value to assign to the results
    *
    * @return HuntingQueryResults The HuntingQueryResults
    */
    public function setResults($val)
    {
        $this->_propDict["results"] = $val;
         return $this;
    }

    /**
    * Gets the schema
    *
    * @return SinglePropertySchema[]|null The schema
    */
    public function getSchema()
    {
        if (array_key_exists("schema", $this->_propDict) && !is_null($this->_propDict["schema"])) {
       
            if (count($this->_propDict['schema']) > 0 && is_a($this->_propDict['schema'][0], 'SinglePropertySchema')) {
                return $this->_propDict['schema'];
            }
            $schema = [];
            foreach ($this->_propDict['schema'] as $singleValue) {
                $schema []= new SinglePropertySchema($singleValue);
            }
            $this->_propDict['schema'] = $schema;
            return $this->_propDict['schema'];
            }
        return null;
    }

    /**
    * Sets the schema
    *
    * @param SinglePropertySchema[] $val The value to assign to the schema
    *
    * @return HuntingQueryResults The HuntingQueryResults
    */
    public function setSchema($val)
    {
        $this->_propDict["schema"] = $val;
         return $this;
    }
}
