<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AuthenticationEventsPolicy File
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
* AuthenticationEventsPolicy class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AuthenticationEventsPolicy extends Entity
{

     /** 
     * Gets the onSignupStart
    * A list of applicable actions to be taken on sign-up.
     *
     * @return AuthenticationListener[]|null The onSignupStart
     */
    public function getOnSignupStart()
    {
        if (array_key_exists('onSignupStart', $this->_propDict) && !is_null($this->_propDict['onSignupStart'])) {
           $onSignupStart = [];
           if (count($this->_propDict['onSignupStart']) > 0 && is_a($this->_propDict['onSignupStart'][0], 'AuthenticationListener')) {
              return $this->_propDict['onSignupStart'];
           }
           foreach ($this->_propDict['onSignupStart'] as $singleValue) {
              $onSignupStart []= new AuthenticationListener($singleValue);
           }
           $this->_propDict['onSignupStart'] = $onSignupStart;
           return $this->_propDict['onSignupStart'];
        }
        return null;
    }
    
    /** 
    * Sets the onSignupStart
    * A list of applicable actions to be taken on sign-up.
    *
    * @param AuthenticationListener[] $val The onSignupStart
    *
    * @return AuthenticationEventsPolicy
    */
    public function setOnSignupStart($val)
    {
        $this->_propDict["onSignupStart"] = $val;
        return $this;
    }
    
}
