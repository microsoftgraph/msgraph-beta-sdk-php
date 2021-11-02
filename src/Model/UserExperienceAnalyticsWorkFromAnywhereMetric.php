<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* UserExperienceAnalyticsWorkFromAnywhereMetric File
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
* UserExperienceAnalyticsWorkFromAnywhereMetric class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class UserExperienceAnalyticsWorkFromAnywhereMetric extends Entity
{

     /** 
     * Gets the metricDevices
    * The work from anywhere metric devices.
     *
     * @return UserExperienceAnalyticsWorkFromAnywhereDevice[]|null The metricDevices
     */
    public function getMetricDevices()
    {
        if (array_key_exists('metricDevices', $this->_propDict) && !is_null($this->_propDict['metricDevices'])) {
           $metricDevices = [];
           if (count($this->_propDict['metricDevices']) > 0 && is_a($this->_propDict['metricDevices'][0], 'UserExperienceAnalyticsWorkFromAnywhereDevice')) {
              return $this->_propDict['metricDevices'];
           }
           foreach ($this->_propDict['metricDevices'] as $singleValue) {
              $metricDevices []= new UserExperienceAnalyticsWorkFromAnywhereDevice($singleValue);
           }
           $this->_propDict['metricDevices'] = $metricDevices;
           return $this->_propDict['metricDevices'];
        }
        return null;
    }
    
    /** 
    * Sets the metricDevices
    * The work from anywhere metric devices.
    *
    * @param UserExperienceAnalyticsWorkFromAnywhereDevice[] $val The metricDevices
    *
    * @return UserExperienceAnalyticsWorkFromAnywhereMetric
    */
    public function setMetricDevices($val)
    {
        $this->_propDict["metricDevices"] = $val;
        return $this;
    }
    
}
