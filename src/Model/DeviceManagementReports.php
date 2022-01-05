<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceManagementReports File
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
* DeviceManagementReports class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceManagementReports extends Entity
{

     /**
     * Gets the cachedReportConfigurations
    * Entity representing the configuration of a cached report
     *
     * @return DeviceManagementCachedReportConfiguration[]|null The cachedReportConfigurations
     */
    public function getCachedReportConfigurations()
    {
        if (array_key_exists('cachedReportConfigurations', $this->_propDict) && !is_null($this->_propDict['cachedReportConfigurations'])) {
            $cachedReportConfigurations = [];
            if (count($this->_propDict['cachedReportConfigurations']) > 0 && is_a($this->_propDict['cachedReportConfigurations'][0], 'DeviceManagementCachedReportConfiguration')) {
                return $this->_propDict['cachedReportConfigurations'];
            }
            foreach ($this->_propDict['cachedReportConfigurations'] as $singleValue) {
                $cachedReportConfigurations []= new DeviceManagementCachedReportConfiguration($singleValue);
            }
            $this->_propDict['cachedReportConfigurations'] = $cachedReportConfigurations;
            return $this->_propDict['cachedReportConfigurations'];
        }
        return null;
    }

    /**
    * Sets the cachedReportConfigurations
    * Entity representing the configuration of a cached report
    *
    * @param DeviceManagementCachedReportConfiguration[] $val The cachedReportConfigurations
    *
    * @return DeviceManagementReports
    */
    public function setCachedReportConfigurations($val)
    {
        $this->_propDict["cachedReportConfigurations"] = $val;
        return $this;
    }


     /**
     * Gets the exportJobs
    * Entity representing a job to export a report
     *
     * @return DeviceManagementExportJob[]|null The exportJobs
     */
    public function getExportJobs()
    {
        if (array_key_exists('exportJobs', $this->_propDict) && !is_null($this->_propDict['exportJobs'])) {
            $exportJobs = [];
            if (count($this->_propDict['exportJobs']) > 0 && is_a($this->_propDict['exportJobs'][0], 'DeviceManagementExportJob')) {
                return $this->_propDict['exportJobs'];
            }
            foreach ($this->_propDict['exportJobs'] as $singleValue) {
                $exportJobs []= new DeviceManagementExportJob($singleValue);
            }
            $this->_propDict['exportJobs'] = $exportJobs;
            return $this->_propDict['exportJobs'];
        }
        return null;
    }

    /**
    * Sets the exportJobs
    * Entity representing a job to export a report
    *
    * @param DeviceManagementExportJob[] $val The exportJobs
    *
    * @return DeviceManagementReports
    */
    public function setExportJobs($val)
    {
        $this->_propDict["exportJobs"] = $val;
        return $this;
    }

}
