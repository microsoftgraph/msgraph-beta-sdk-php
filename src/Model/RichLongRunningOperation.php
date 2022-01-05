<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* RichLongRunningOperation File
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
* RichLongRunningOperation class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class RichLongRunningOperation extends LongRunningOperation
{
    /**
    * Gets the error
    *
    * @return PublicError|null The error
    */
    public function getError()
    {
        if (array_key_exists("error", $this->_propDict) && !is_null($this->_propDict["error"])) {
            if (is_a($this->_propDict["error"], "\Beta\Microsoft\Graph\Model\PublicError")) {
                return $this->_propDict["error"];
            } else {
                $this->_propDict["error"] = new PublicError($this->_propDict["error"]);
                return $this->_propDict["error"];
            }
        }
        return null;
    }

    /**
    * Sets the error
    *
    * @param PublicError $val The error
    *
    * @return RichLongRunningOperation
    */
    public function setError($val)
    {
        $this->_propDict["error"] = $val;
        return $this;
    }

    /**
    * Gets the percentageComplete
    *
    * @return int|null The percentageComplete
    */
    public function getPercentageComplete()
    {
        if (array_key_exists("percentageComplete", $this->_propDict)) {
            return $this->_propDict["percentageComplete"];
        } else {
            return null;
        }
    }

    /**
    * Sets the percentageComplete
    *
    * @param int $val The percentageComplete
    *
    * @return RichLongRunningOperation
    */
    public function setPercentageComplete($val)
    {
        $this->_propDict["percentageComplete"] = intval($val);
        return $this;
    }

    /**
    * Gets the resourceId
    *
    * @return string|null The resourceId
    */
    public function getResourceId()
    {
        if (array_key_exists("resourceId", $this->_propDict)) {
            return $this->_propDict["resourceId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the resourceId
    *
    * @param string $val The resourceId
    *
    * @return RichLongRunningOperation
    */
    public function setResourceId($val)
    {
        $this->_propDict["resourceId"] = $val;
        return $this;
    }

    /**
    * Gets the type
    *
    * @return string|null The type
    */
    public function getType()
    {
        if (array_key_exists("type", $this->_propDict)) {
            return $this->_propDict["type"];
        } else {
            return null;
        }
    }

    /**
    * Sets the type
    *
    * @param string $val The type
    *
    * @return RichLongRunningOperation
    */
    public function setType($val)
    {
        $this->_propDict["type"] = $val;
        return $this;
    }

}
