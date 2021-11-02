<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* UserExperienceAnalyticsRegressionSummary File
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
* UserExperienceAnalyticsRegressionSummary class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class UserExperienceAnalyticsRegressionSummary extends Entity
{

     /** 
     * Gets the manufacturerRegression
    * The metric values for the user experience analytics Manufacturer regression.
     *
     * @return UserExperienceAnalyticsMetric[]|null The manufacturerRegression
     */
    public function getManufacturerRegression()
    {
        if (array_key_exists('manufacturerRegression', $this->_propDict) && !is_null($this->_propDict['manufacturerRegression'])) {
           $manufacturerRegression = [];
           if (count($this->_propDict['manufacturerRegression']) > 0 && is_a($this->_propDict['manufacturerRegression'][0], 'UserExperienceAnalyticsMetric')) {
              return $this->_propDict['manufacturerRegression'];
           }
           foreach ($this->_propDict['manufacturerRegression'] as $singleValue) {
              $manufacturerRegression []= new UserExperienceAnalyticsMetric($singleValue);
           }
           $this->_propDict['manufacturerRegression'] = $manufacturerRegression;
           return $this->_propDict['manufacturerRegression'];
        }
        return null;
    }
    
    /** 
    * Sets the manufacturerRegression
    * The metric values for the user experience analytics Manufacturer regression.
    *
    * @param UserExperienceAnalyticsMetric[] $val The manufacturerRegression
    *
    * @return UserExperienceAnalyticsRegressionSummary
    */
    public function setManufacturerRegression($val)
    {
        $this->_propDict["manufacturerRegression"] = $val;
        return $this;
    }
    

     /** 
     * Gets the modelRegression
    * The metric values for the user experience analytics model regression.
     *
     * @return UserExperienceAnalyticsMetric[]|null The modelRegression
     */
    public function getModelRegression()
    {
        if (array_key_exists('modelRegression', $this->_propDict) && !is_null($this->_propDict['modelRegression'])) {
           $modelRegression = [];
           if (count($this->_propDict['modelRegression']) > 0 && is_a($this->_propDict['modelRegression'][0], 'UserExperienceAnalyticsMetric')) {
              return $this->_propDict['modelRegression'];
           }
           foreach ($this->_propDict['modelRegression'] as $singleValue) {
              $modelRegression []= new UserExperienceAnalyticsMetric($singleValue);
           }
           $this->_propDict['modelRegression'] = $modelRegression;
           return $this->_propDict['modelRegression'];
        }
        return null;
    }
    
    /** 
    * Sets the modelRegression
    * The metric values for the user experience analytics model regression.
    *
    * @param UserExperienceAnalyticsMetric[] $val The modelRegression
    *
    * @return UserExperienceAnalyticsRegressionSummary
    */
    public function setModelRegression($val)
    {
        $this->_propDict["modelRegression"] = $val;
        return $this;
    }
    

     /** 
     * Gets the operatingSystemRegression
    * The metric values for the user experience analytics operating system regression.
     *
     * @return UserExperienceAnalyticsMetric[]|null The operatingSystemRegression
     */
    public function getOperatingSystemRegression()
    {
        if (array_key_exists('operatingSystemRegression', $this->_propDict) && !is_null($this->_propDict['operatingSystemRegression'])) {
           $operatingSystemRegression = [];
           if (count($this->_propDict['operatingSystemRegression']) > 0 && is_a($this->_propDict['operatingSystemRegression'][0], 'UserExperienceAnalyticsMetric')) {
              return $this->_propDict['operatingSystemRegression'];
           }
           foreach ($this->_propDict['operatingSystemRegression'] as $singleValue) {
              $operatingSystemRegression []= new UserExperienceAnalyticsMetric($singleValue);
           }
           $this->_propDict['operatingSystemRegression'] = $operatingSystemRegression;
           return $this->_propDict['operatingSystemRegression'];
        }
        return null;
    }
    
    /** 
    * Sets the operatingSystemRegression
    * The metric values for the user experience analytics operating system regression.
    *
    * @param UserExperienceAnalyticsMetric[] $val The operatingSystemRegression
    *
    * @return UserExperienceAnalyticsRegressionSummary
    */
    public function setOperatingSystemRegression($val)
    {
        $this->_propDict["operatingSystemRegression"] = $val;
        return $this;
    }
    
}
