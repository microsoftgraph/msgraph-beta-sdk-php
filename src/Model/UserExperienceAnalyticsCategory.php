<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* UserExperienceAnalyticsCategory File
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
* UserExperienceAnalyticsCategory class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class UserExperienceAnalyticsCategory extends Entity
{

     /** 
     * Gets the insights
    * The insights for the user experience analytics category.
     *
     * @return UserExperienceAnalyticsInsight[]|null The insights
     */
    public function getInsights()
    {
        if (array_key_exists('insights', $this->_propDict) && !is_null($this->_propDict['insights'])) {
           $insights = [];
           if (count($this->_propDict['insights']) > 0 && is_a($this->_propDict['insights'][0], 'UserExperienceAnalyticsInsight')) {
              return $this->_propDict['insights'];
           }
           foreach ($this->_propDict['insights'] as $singleValue) {
              $insights []= new UserExperienceAnalyticsInsight($singleValue);
           }
           $this->_propDict['insights'] = $insights;
           return $this->_propDict['insights'];
        }
        return null;
    }
    
    /** 
    * Sets the insights
    * The insights for the user experience analytics category.
    *
    * @param UserExperienceAnalyticsInsight[] $val The insights
    *
    * @return UserExperienceAnalyticsCategory
    */
    public function setInsights($val)
    {
        $this->_propDict["insights"] = $val;
        return $this;
    }
    

     /** 
     * Gets the metricValues
    * The metric values for the user experience analytics category.
     *
     * @return UserExperienceAnalyticsMetric[]|null The metricValues
     */
    public function getMetricValues()
    {
        if (array_key_exists('metricValues', $this->_propDict) && !is_null($this->_propDict['metricValues'])) {
           $metricValues = [];
           if (count($this->_propDict['metricValues']) > 0 && is_a($this->_propDict['metricValues'][0], 'UserExperienceAnalyticsMetric')) {
              return $this->_propDict['metricValues'];
           }
           foreach ($this->_propDict['metricValues'] as $singleValue) {
              $metricValues []= new UserExperienceAnalyticsMetric($singleValue);
           }
           $this->_propDict['metricValues'] = $metricValues;
           return $this->_propDict['metricValues'];
        }
        return null;
    }
    
    /** 
    * Sets the metricValues
    * The metric values for the user experience analytics category.
    *
    * @param UserExperienceAnalyticsMetric[] $val The metricValues
    *
    * @return UserExperienceAnalyticsCategory
    */
    public function setMetricValues($val)
    {
        $this->_propDict["metricValues"] = $val;
        return $this;
    }
    
}
