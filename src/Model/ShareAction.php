<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ShareAction File
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
* ShareAction class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ShareAction extends Entity
{

    /**
    * Gets the recipients
    * The identities the item was shared with in this action.
    *
    * @return IdentitySet[]|null The recipients
    */
    public function getRecipients()
    {
        if (array_key_exists("recipients", $this->_propDict) && !is_null($this->_propDict["recipients"])) {
       
            if (count($this->_propDict['recipients']) > 0 && is_a($this->_propDict['recipients'][0], 'IdentitySet')) {
                return $this->_propDict['recipients'];
            }
            $recipients = [];
            foreach ($this->_propDict['recipients'] as $singleValue) {
                $recipients []= new IdentitySet($singleValue);
            }
            $this->_propDict['recipients'] = $recipients;
            return $this->_propDict['recipients'];
            }
        return null;
    }

    /**
    * Sets the recipients
    * The identities the item was shared with in this action.
    *
    * @param IdentitySet[] $val The value to assign to the recipients
    *
    * @return ShareAction The ShareAction
    */
    public function setRecipients($val)
    {
        $this->_propDict["recipients"] = $val;
         return $this;
    }
}
