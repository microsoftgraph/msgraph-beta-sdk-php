<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Updates File
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
* Updates class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Updates extends \Beta\Microsoft\Graph\Model\Entity
{
    /**
    * Gets the catalog
    * Catalog of content that can be approved for deployment by the deployment service. Read-only.
    *
    * @return Catalog|null The catalog
    */
    public function getCatalog()
    {
        if (array_key_exists("catalog", $this->_propDict) && !is_null($this->_propDict["catalog"])) {
            if (is_a($this->_propDict["catalog"], "\Beta\Microsoft\Graph\WindowsUpdates\Model\Catalog")) {
                return $this->_propDict["catalog"];
            } else {
                $this->_propDict["catalog"] = new Catalog($this->_propDict["catalog"]);
                return $this->_propDict["catalog"];
            }
        }
        return null;
    }
    
    /**
    * Sets the catalog
    * Catalog of content that can be approved for deployment by the deployment service. Read-only.
    *
    * @param Catalog $val The catalog
    *
    * @return Updates
    */
    public function setCatalog($val)
    {
        $this->_propDict["catalog"] = $val;
        return $this;
    }
    

     /** 
     * Gets the deployments
    * Deployments created using the deployment service. Read-only.
     *
     * @return Deployment[]|null The deployments
     */
    public function getDeployments()
    {
        if (array_key_exists('deployments', $this->_propDict) && !is_null($this->_propDict['deployments'])) {
            $deployments = [];
            if (count($this->_propDict['deployments']) > 0 && is_a($this->_propDict['deployments'][0], 'Deployment')) {
                return $this->_propDict['deployments'];
            }
            foreach ($this->_propDict['deployments'] as $singleValue) {
                $deployments []= new Deployment($singleValue);
            }
            $this->_propDict['deployments'] = $deployments;
            return $this->_propDict['deployments'];
        }
        return null;
    }
    
    /** 
    * Sets the deployments
    * Deployments created using the deployment service. Read-only.
    *
    * @param Deployment[] $val The deployments
    *
    * @return Updates
    */
    public function setDeployments($val)
    {
        $this->_propDict["deployments"] = $val;
        return $this;
    }
    

     /** 
     * Gets the updatableAssets
    * Assets registered with the deployment service that can receive updates. Read-only.
     *
     * @return UpdatableAsset[]|null The updatableAssets
     */
    public function getUpdatableAssets()
    {
        if (array_key_exists('updatableAssets', $this->_propDict) && !is_null($this->_propDict['updatableAssets'])) {
            $updatableAssets = [];
            if (count($this->_propDict['updatableAssets']) > 0 && is_a($this->_propDict['updatableAssets'][0], 'UpdatableAsset')) {
                return $this->_propDict['updatableAssets'];
            }
            foreach ($this->_propDict['updatableAssets'] as $singleValue) {
                $updatableAssets []= new UpdatableAsset($singleValue);
            }
            $this->_propDict['updatableAssets'] = $updatableAssets;
            return $this->_propDict['updatableAssets'];
        }
        return null;
    }
    
    /** 
    * Sets the updatableAssets
    * Assets registered with the deployment service that can receive updates. Read-only.
    *
    * @param UpdatableAsset[] $val The updatableAssets
    *
    * @return Updates
    */
    public function setUpdatableAssets($val)
    {
        $this->_propDict["updatableAssets"] = $val;
        return $this;
    }
    
}
