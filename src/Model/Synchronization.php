<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Synchronization File
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
* Synchronization class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Synchronization extends Entity
{

     /** 
     * Gets the secrets
     *
     * @return SynchronizationSecretKeyStringValuePair[]|null The secrets
     */
    public function getSecrets()
    {
        if (array_key_exists('secrets', $this->_propDict) && !is_null($this->_propDict['secrets'])) {
           $secrets = [];
           if (count($this->_propDict['secrets']) > 0 && is_a($this->_propDict['secrets'][0], 'SynchronizationSecretKeyStringValuePair')) {
              return $this->_propDict['secrets'];
           }
           foreach ($this->_propDict['secrets'] as $singleValue) {
              $secrets []= new SynchronizationSecretKeyStringValuePair($singleValue);
           }
           $this->_propDict['secrets'] = $secrets;
           return $this->_propDict['secrets'];
        }
        return null;
    }
    
    /** 
    * Sets the secrets
    *
    * @param SynchronizationSecretKeyStringValuePair[] $val The secrets
    *
    * @return Synchronization
    */
    public function setSecrets($val)
    {
        $this->_propDict["secrets"] = $val;
        return $this;
    }
    

     /** 
     * Gets the jobs
     *
     * @return SynchronizationJob[]|null The jobs
     */
    public function getJobs()
    {
        if (array_key_exists('jobs', $this->_propDict) && !is_null($this->_propDict['jobs'])) {
           $jobs = [];
           if (count($this->_propDict['jobs']) > 0 && is_a($this->_propDict['jobs'][0], 'SynchronizationJob')) {
              return $this->_propDict['jobs'];
           }
           foreach ($this->_propDict['jobs'] as $singleValue) {
              $jobs []= new SynchronizationJob($singleValue);
           }
           $this->_propDict['jobs'] = $jobs;
           return $this->_propDict['jobs'];
        }
        return null;
    }
    
    /** 
    * Sets the jobs
    *
    * @param SynchronizationJob[] $val The jobs
    *
    * @return Synchronization
    */
    public function setJobs($val)
    {
        $this->_propDict["jobs"] = $val;
        return $this;
    }
    

     /** 
     * Gets the templates
     *
     * @return SynchronizationTemplate[]|null The templates
     */
    public function getTemplates()
    {
        if (array_key_exists('templates', $this->_propDict) && !is_null($this->_propDict['templates'])) {
           $templates = [];
           if (count($this->_propDict['templates']) > 0 && is_a($this->_propDict['templates'][0], 'SynchronizationTemplate')) {
              return $this->_propDict['templates'];
           }
           foreach ($this->_propDict['templates'] as $singleValue) {
              $templates []= new SynchronizationTemplate($singleValue);
           }
           $this->_propDict['templates'] = $templates;
           return $this->_propDict['templates'];
        }
        return null;
    }
    
    /** 
    * Sets the templates
    *
    * @param SynchronizationTemplate[] $val The templates
    *
    * @return Synchronization
    */
    public function setTemplates($val)
    {
        $this->_propDict["templates"] = $val;
        return $this;
    }
    
}
