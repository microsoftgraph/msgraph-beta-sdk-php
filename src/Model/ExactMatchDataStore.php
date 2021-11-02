<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ExactMatchDataStore File
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
* ExactMatchDataStore class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ExactMatchDataStore extends ExactMatchDataStoreBase
{

     /** 
     * Gets the sessions
     *
     * @return ExactMatchSession[]|null The sessions
     */
    public function getSessions()
    {
        if (array_key_exists('sessions', $this->_propDict) && !is_null($this->_propDict['sessions'])) {
           $sessions = [];
           if (count($this->_propDict['sessions']) > 0 && is_a($this->_propDict['sessions'][0], 'ExactMatchSession')) {
              return $this->_propDict['sessions'];
           }
           foreach ($this->_propDict['sessions'] as $singleValue) {
              $sessions []= new ExactMatchSession($singleValue);
           }
           $this->_propDict['sessions'] = $sessions;
           return $this->_propDict['sessions'];
        }
        return null;
    }
    
    /** 
    * Sets the sessions
    *
    * @param ExactMatchSession[] $val The sessions
    *
    * @return ExactMatchDataStore
    */
    public function setSessions($val)
    {
        $this->_propDict["sessions"] = $val;
        return $this;
    }
    
}
