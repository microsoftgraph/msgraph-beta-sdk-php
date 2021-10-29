<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DataClassificationService File
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
* DataClassificationService class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DataClassificationService extends Entity
{

     /** 
     * Gets the exactMatchDataStores
     *
     * @return ExactMatchDataStore[]|null The exactMatchDataStores
     */
    public function getExactMatchDataStores()
    {
        if (array_key_exists('exactMatchDataStores', $this->_propDict) && !is_null($this->_propDict['exactMatchDataStores'])) {
            $exactMatchDataStores = [];
            if (count($this->_propDict['exactMatchDataStores']) > 0 && is_a($this->_propDict['exactMatchDataStores'][0], 'ExactMatchDataStore')) {
                return $this->_propDict['exactMatchDataStores'];
            }
            foreach ($this->_propDict['exactMatchDataStores'] as $singleValue) {
                $exactMatchDataStores []= new ExactMatchDataStore($singleValue);
            }
            $this->_propDict['exactMatchDataStores'] = $exactMatchDataStores;
            return $this->_propDict['exactMatchDataStores'];
        }
        return null;
    }
    
    /** 
    * Sets the exactMatchDataStores
    *
    * @param ExactMatchDataStore[] $val The exactMatchDataStores
    *
    * @return DataClassificationService
    */
    public function setExactMatchDataStores($val)
    {
        $this->_propDict["exactMatchDataStores"] = $val;
        return $this;
    }
    

     /** 
     * Gets the classifyFileJobs
     *
     * @return JobResponseBase[]|null The classifyFileJobs
     */
    public function getClassifyFileJobs()
    {
        if (array_key_exists('classifyFileJobs', $this->_propDict) && !is_null($this->_propDict['classifyFileJobs'])) {
            $classifyFileJobs = [];
            if (count($this->_propDict['classifyFileJobs']) > 0 && is_a($this->_propDict['classifyFileJobs'][0], 'JobResponseBase')) {
                return $this->_propDict['classifyFileJobs'];
            }
            foreach ($this->_propDict['classifyFileJobs'] as $singleValue) {
                $classifyFileJobs []= new JobResponseBase($singleValue);
            }
            $this->_propDict['classifyFileJobs'] = $classifyFileJobs;
            return $this->_propDict['classifyFileJobs'];
        }
        return null;
    }
    
    /** 
    * Sets the classifyFileJobs
    *
    * @param JobResponseBase[] $val The classifyFileJobs
    *
    * @return DataClassificationService
    */
    public function setClassifyFileJobs($val)
    {
        $this->_propDict["classifyFileJobs"] = $val;
        return $this;
    }
    

     /** 
     * Gets the classifyTextJobs
     *
     * @return JobResponseBase[]|null The classifyTextJobs
     */
    public function getClassifyTextJobs()
    {
        if (array_key_exists('classifyTextJobs', $this->_propDict) && !is_null($this->_propDict['classifyTextJobs'])) {
            $classifyTextJobs = [];
            if (count($this->_propDict['classifyTextJobs']) > 0 && is_a($this->_propDict['classifyTextJobs'][0], 'JobResponseBase')) {
                return $this->_propDict['classifyTextJobs'];
            }
            foreach ($this->_propDict['classifyTextJobs'] as $singleValue) {
                $classifyTextJobs []= new JobResponseBase($singleValue);
            }
            $this->_propDict['classifyTextJobs'] = $classifyTextJobs;
            return $this->_propDict['classifyTextJobs'];
        }
        return null;
    }
    
    /** 
    * Sets the classifyTextJobs
    *
    * @param JobResponseBase[] $val The classifyTextJobs
    *
    * @return DataClassificationService
    */
    public function setClassifyTextJobs($val)
    {
        $this->_propDict["classifyTextJobs"] = $val;
        return $this;
    }
    

     /** 
     * Gets the evaluateDlpPoliciesJobs
     *
     * @return JobResponseBase[]|null The evaluateDlpPoliciesJobs
     */
    public function getEvaluateDlpPoliciesJobs()
    {
        if (array_key_exists('evaluateDlpPoliciesJobs', $this->_propDict) && !is_null($this->_propDict['evaluateDlpPoliciesJobs'])) {
            $evaluateDlpPoliciesJobs = [];
            if (count($this->_propDict['evaluateDlpPoliciesJobs']) > 0 && is_a($this->_propDict['evaluateDlpPoliciesJobs'][0], 'JobResponseBase')) {
                return $this->_propDict['evaluateDlpPoliciesJobs'];
            }
            foreach ($this->_propDict['evaluateDlpPoliciesJobs'] as $singleValue) {
                $evaluateDlpPoliciesJobs []= new JobResponseBase($singleValue);
            }
            $this->_propDict['evaluateDlpPoliciesJobs'] = $evaluateDlpPoliciesJobs;
            return $this->_propDict['evaluateDlpPoliciesJobs'];
        }
        return null;
    }
    
    /** 
    * Sets the evaluateDlpPoliciesJobs
    *
    * @param JobResponseBase[] $val The evaluateDlpPoliciesJobs
    *
    * @return DataClassificationService
    */
    public function setEvaluateDlpPoliciesJobs($val)
    {
        $this->_propDict["evaluateDlpPoliciesJobs"] = $val;
        return $this;
    }
    

     /** 
     * Gets the evaluateLabelJobs
     *
     * @return JobResponseBase[]|null The evaluateLabelJobs
     */
    public function getEvaluateLabelJobs()
    {
        if (array_key_exists('evaluateLabelJobs', $this->_propDict) && !is_null($this->_propDict['evaluateLabelJobs'])) {
            $evaluateLabelJobs = [];
            if (count($this->_propDict['evaluateLabelJobs']) > 0 && is_a($this->_propDict['evaluateLabelJobs'][0], 'JobResponseBase')) {
                return $this->_propDict['evaluateLabelJobs'];
            }
            foreach ($this->_propDict['evaluateLabelJobs'] as $singleValue) {
                $evaluateLabelJobs []= new JobResponseBase($singleValue);
            }
            $this->_propDict['evaluateLabelJobs'] = $evaluateLabelJobs;
            return $this->_propDict['evaluateLabelJobs'];
        }
        return null;
    }
    
    /** 
    * Sets the evaluateLabelJobs
    *
    * @param JobResponseBase[] $val The evaluateLabelJobs
    *
    * @return DataClassificationService
    */
    public function setEvaluateLabelJobs($val)
    {
        $this->_propDict["evaluateLabelJobs"] = $val;
        return $this;
    }
    

     /** 
     * Gets the jobs
     *
     * @return JobResponseBase[]|null The jobs
     */
    public function getJobs()
    {
        if (array_key_exists('jobs', $this->_propDict) && !is_null($this->_propDict['jobs'])) {
            $jobs = [];
            if (count($this->_propDict['jobs']) > 0 && is_a($this->_propDict['jobs'][0], 'JobResponseBase')) {
                return $this->_propDict['jobs'];
            }
            foreach ($this->_propDict['jobs'] as $singleValue) {
                $jobs []= new JobResponseBase($singleValue);
            }
            $this->_propDict['jobs'] = $jobs;
            return $this->_propDict['jobs'];
        }
        return null;
    }
    
    /** 
    * Sets the jobs
    *
    * @param JobResponseBase[] $val The jobs
    *
    * @return DataClassificationService
    */
    public function setJobs($val)
    {
        $this->_propDict["jobs"] = $val;
        return $this;
    }
    

     /** 
     * Gets the sensitiveTypes
     *
     * @return SensitiveType[]|null The sensitiveTypes
     */
    public function getSensitiveTypes()
    {
        if (array_key_exists('sensitiveTypes', $this->_propDict) && !is_null($this->_propDict['sensitiveTypes'])) {
            $sensitiveTypes = [];
            if (count($this->_propDict['sensitiveTypes']) > 0 && is_a($this->_propDict['sensitiveTypes'][0], 'SensitiveType')) {
                return $this->_propDict['sensitiveTypes'];
            }
            foreach ($this->_propDict['sensitiveTypes'] as $singleValue) {
                $sensitiveTypes []= new SensitiveType($singleValue);
            }
            $this->_propDict['sensitiveTypes'] = $sensitiveTypes;
            return $this->_propDict['sensitiveTypes'];
        }
        return null;
    }
    
    /** 
    * Sets the sensitiveTypes
    *
    * @param SensitiveType[] $val The sensitiveTypes
    *
    * @return DataClassificationService
    */
    public function setSensitiveTypes($val)
    {
        $this->_propDict["sensitiveTypes"] = $val;
        return $this;
    }
    

     /** 
     * Gets the sensitivityLabels
     *
     * @return SensitivityLabel[]|null The sensitivityLabels
     */
    public function getSensitivityLabels()
    {
        if (array_key_exists('sensitivityLabels', $this->_propDict) && !is_null($this->_propDict['sensitivityLabels'])) {
            $sensitivityLabels = [];
            if (count($this->_propDict['sensitivityLabels']) > 0 && is_a($this->_propDict['sensitivityLabels'][0], 'SensitivityLabel')) {
                return $this->_propDict['sensitivityLabels'];
            }
            foreach ($this->_propDict['sensitivityLabels'] as $singleValue) {
                $sensitivityLabels []= new SensitivityLabel($singleValue);
            }
            $this->_propDict['sensitivityLabels'] = $sensitivityLabels;
            return $this->_propDict['sensitivityLabels'];
        }
        return null;
    }
    
    /** 
    * Sets the sensitivityLabels
    *
    * @param SensitivityLabel[] $val The sensitivityLabels
    *
    * @return DataClassificationService
    */
    public function setSensitivityLabels($val)
    {
        $this->_propDict["sensitivityLabels"] = $val;
        return $this;
    }
    

     /** 
     * Gets the exactMatchUploadAgents
     *
     * @return ExactMatchUploadAgent[]|null The exactMatchUploadAgents
     */
    public function getExactMatchUploadAgents()
    {
        if (array_key_exists('exactMatchUploadAgents', $this->_propDict) && !is_null($this->_propDict['exactMatchUploadAgents'])) {
            $exactMatchUploadAgents = [];
            if (count($this->_propDict['exactMatchUploadAgents']) > 0 && is_a($this->_propDict['exactMatchUploadAgents'][0], 'ExactMatchUploadAgent')) {
                return $this->_propDict['exactMatchUploadAgents'];
            }
            foreach ($this->_propDict['exactMatchUploadAgents'] as $singleValue) {
                $exactMatchUploadAgents []= new ExactMatchUploadAgent($singleValue);
            }
            $this->_propDict['exactMatchUploadAgents'] = $exactMatchUploadAgents;
            return $this->_propDict['exactMatchUploadAgents'];
        }
        return null;
    }
    
    /** 
    * Sets the exactMatchUploadAgents
    *
    * @param ExactMatchUploadAgent[] $val The exactMatchUploadAgents
    *
    * @return DataClassificationService
    */
    public function setExactMatchUploadAgents($val)
    {
        $this->_propDict["exactMatchUploadAgents"] = $val;
        return $this;
    }
    
}
