<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WindowsPhone81AppXBundle File
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
* WindowsPhone81AppXBundle class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class WindowsPhone81AppXBundle extends WindowsPhone81AppX
{

     /** 
     * Gets the appXPackageInformationList
    * The list of AppX Package Information.
     *
     * @return WindowsPackageInformation[]|null The appXPackageInformationList
     */
    public function getAppXPackageInformationList()
    {
        if (array_key_exists('appXPackageInformationList', $this->_propDict) && !is_null($this->_propDict['appXPackageInformationList'])) {
           $appXPackageInformationList = [];
           if (count($this->_propDict['appXPackageInformationList']) > 0 && is_a($this->_propDict['appXPackageInformationList'][0], 'WindowsPackageInformation')) {
              return $this->_propDict['appXPackageInformationList'];
           }
           foreach ($this->_propDict['appXPackageInformationList'] as $singleValue) {
              $appXPackageInformationList []= new WindowsPackageInformation($singleValue);
           }
           $this->_propDict['appXPackageInformationList'] = $appXPackageInformationList;
           return $this->_propDict['appXPackageInformationList'];
        }
        return null;
    }
    
    /** 
    * Sets the appXPackageInformationList
    * The list of AppX Package Information.
    *
    * @param WindowsPackageInformation[] $val The appXPackageInformationList
    *
    * @return WindowsPhone81AppXBundle
    */
    public function setAppXPackageInformationList($val)
    {
        $this->_propDict["appXPackageInformationList"] = $val;
        return $this;
    }
    
}
