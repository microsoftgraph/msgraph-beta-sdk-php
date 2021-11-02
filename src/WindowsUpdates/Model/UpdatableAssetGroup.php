<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* UpdatableAssetGroup File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\WindowsUpdates\Model;

/**
* UpdatableAssetGroup class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class UpdatableAssetGroup extends UpdatableAsset
{

     /** 
     * Gets the members
    * Members of the group. Read-only.
     *
     * @return UpdatableAsset[]|null The members
     */
    public function getMembers()
    {
        if (array_key_exists('members', $this->_propDict) && !is_null($this->_propDict['members'])) {
           $members = [];
           if (count($this->_propDict['members']) > 0 && is_a($this->_propDict['members'][0], 'UpdatableAsset')) {
              return $this->_propDict['members'];
           }
           foreach ($this->_propDict['members'] as $singleValue) {
              $members []= new UpdatableAsset($singleValue);
           }
           $this->_propDict['members'] = $members;
           return $this->_propDict['members'];
        }
        return null;
    }
    
    /** 
    * Sets the members
    * Members of the group. Read-only.
    *
    * @param UpdatableAsset[] $val The members
    *
    * @return UpdatableAssetGroup
    */
    public function setMembers($val)
    {
        $this->_propDict["members"] = $val;
        return $this;
    }
    
}
