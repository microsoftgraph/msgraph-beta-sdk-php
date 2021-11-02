<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* External File
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
* External class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class External extends Entity
{

     /** 
     * Gets the connections
     *
     * @return ExternalConnection[]|null The connections
     */
    public function getConnections()
    {
        if (array_key_exists('connections', $this->_propDict) && !is_null($this->_propDict['connections'])) {
           $connections = [];
           if (count($this->_propDict['connections']) > 0 && is_a($this->_propDict['connections'][0], 'ExternalConnection')) {
              return $this->_propDict['connections'];
           }
           foreach ($this->_propDict['connections'] as $singleValue) {
              $connections []= new ExternalConnection($singleValue);
           }
           $this->_propDict['connections'] = $connections;
           return $this->_propDict['connections'];
        }
        return null;
    }
    
    /** 
    * Sets the connections
    *
    * @param ExternalConnection[] $val The connections
    *
    * @return External
    */
    public function setConnections($val)
    {
        $this->_propDict["connections"] = $val;
        return $this;
    }
    
}
