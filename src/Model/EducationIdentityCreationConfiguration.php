<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* EducationIdentityCreationConfiguration File
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
* EducationIdentityCreationConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class EducationIdentityCreationConfiguration extends EducationIdentitySynchronizationConfiguration
{
    /**
    * Set the @odata.type since this type is immediately descended from an abstract
    * type that is referenced as the type in an entity.
    * @param array $propDict The property dictionary
    */
    public function __construct($propDict = array())
    {
        parent::__construct($propDict);
        $this->setODataType("#microsoft.graph.educationIdentityCreationConfiguration");
    }


    /**
    * Gets the userDomains
    *
    * @return EducationIdentityDomain[]|null The userDomains
    */
    public function getUserDomains()
    {
        if (array_key_exists("userDomains", $this->_propDict) && !is_null($this->_propDict["userDomains"])) {
       
            if (count($this->_propDict['userDomains']) > 0 && is_a($this->_propDict['userDomains'][0], 'EducationIdentityDomain')) {
                return $this->_propDict['userDomains'];
            }
            $userDomains = [];
            foreach ($this->_propDict['userDomains'] as $singleValue) {
                $userDomains []= new EducationIdentityDomain($singleValue);
            }
            $this->_propDict['userDomains'] = $userDomains;
            return $this->_propDict['userDomains'];
            }
        return null;
    }

    /**
    * Sets the userDomains
    *
    * @param EducationIdentityDomain[] $val The value to assign to the userDomains
    *
    * @return EducationIdentityCreationConfiguration The EducationIdentityCreationConfiguration
    */
    public function setUserDomains($val)
    {
        $this->_propDict["userDomains"] = $val;
         return $this;
    }
}
