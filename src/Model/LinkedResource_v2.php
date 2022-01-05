<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* LinkedResource_v2 File
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
* LinkedResource_v2 class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class LinkedResource_v2 extends Entity
{
    /**
    * Gets the applicationName
    * Field indicating the app name of the source that is sending the linkedResource.
    *
    * @return string|null The applicationName
    */
    public function getApplicationName()
    {
        if (array_key_exists("applicationName", $this->_propDict)) {
            return $this->_propDict["applicationName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the applicationName
    * Field indicating the app name of the source that is sending the linkedResource.
    *
    * @param string $val The applicationName
    *
    * @return LinkedResource_v2
    */
    public function setApplicationName($val)
    {
        $this->_propDict["applicationName"] = $val;
        return $this;
    }

    /**
    * Gets the displayName
    * Field indicating the title of the linkedResource.
    *
    * @return string|null The displayName
    */
    public function getDisplayName()
    {
        if (array_key_exists("displayName", $this->_propDict)) {
            return $this->_propDict["displayName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the displayName
    * Field indicating the title of the linkedResource.
    *
    * @param string $val The displayName
    *
    * @return LinkedResource_v2
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }

    /**
    * Gets the externalId
    * Id of the object that is associated with this task on the third-party/partner system.
    *
    * @return string|null The externalId
    */
    public function getExternalId()
    {
        if (array_key_exists("externalId", $this->_propDict)) {
            return $this->_propDict["externalId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the externalId
    * Id of the object that is associated with this task on the third-party/partner system.
    *
    * @param string $val The externalId
    *
    * @return LinkedResource_v2
    */
    public function setExternalId($val)
    {
        $this->_propDict["externalId"] = $val;
        return $this;
    }

    /**
    * Gets the webUrl
    * Deep link to the linkedResource.
    *
    * @return string|null The webUrl
    */
    public function getWebUrl()
    {
        if (array_key_exists("webUrl", $this->_propDict)) {
            return $this->_propDict["webUrl"];
        } else {
            return null;
        }
    }

    /**
    * Sets the webUrl
    * Deep link to the linkedResource.
    *
    * @param string $val The webUrl
    *
    * @return LinkedResource_v2
    */
    public function setWebUrl($val)
    {
        $this->_propDict["webUrl"] = $val;
        return $this;
    }

}
