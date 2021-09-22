<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SkypeForBusinessPeerToPeerActivityCounts File
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
* SkypeForBusinessPeerToPeerActivityCounts class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class SkypeForBusinessPeerToPeerActivityCounts extends Entity
{
    /**
    * Gets the appSharing
    *
    * @return int|null The appSharing
    */
    public function getAppSharing()
    {
        if (array_key_exists("appSharing", $this->_propDict)) {
            return $this->_propDict["appSharing"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the appSharing
    *
    * @param int $val The appSharing
    *
    * @return SkypeForBusinessPeerToPeerActivityCounts
    */
    public function setAppSharing($val)
    {
        $this->_propDict["appSharing"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the audio
    *
    * @return int|null The audio
    */
    public function getAudio()
    {
        if (array_key_exists("audio", $this->_propDict)) {
            return $this->_propDict["audio"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the audio
    *
    * @param int $val The audio
    *
    * @return SkypeForBusinessPeerToPeerActivityCounts
    */
    public function setAudio($val)
    {
        $this->_propDict["audio"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the fileTransfer
    *
    * @return int|null The fileTransfer
    */
    public function getFileTransfer()
    {
        if (array_key_exists("fileTransfer", $this->_propDict)) {
            return $this->_propDict["fileTransfer"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the fileTransfer
    *
    * @param int $val The fileTransfer
    *
    * @return SkypeForBusinessPeerToPeerActivityCounts
    */
    public function setFileTransfer($val)
    {
        $this->_propDict["fileTransfer"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the im
    *
    * @return int|null The im
    */
    public function getIm()
    {
        if (array_key_exists("im", $this->_propDict)) {
            return $this->_propDict["im"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the im
    *
    * @param int $val The im
    *
    * @return SkypeForBusinessPeerToPeerActivityCounts
    */
    public function setIm($val)
    {
        $this->_propDict["im"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the reportDate
    *
    * @return \DateTime|null The reportDate
    */
    public function getReportDate()
    {
        if (array_key_exists("reportDate", $this->_propDict) && !is_null($this->_propDict["reportDate"])) {
            if (is_a($this->_propDict["reportDate"], "\DateTime")) {
                return $this->_propDict["reportDate"];
            } else {
                $this->_propDict["reportDate"] = new \DateTime($this->_propDict["reportDate"]);
                return $this->_propDict["reportDate"];
            }
        }
        return null;
    }
    
    /**
    * Sets the reportDate
    *
    * @param \DateTime $val The reportDate
    *
    * @return SkypeForBusinessPeerToPeerActivityCounts
    */
    public function setReportDate($val)
    {
        $this->_propDict["reportDate"] = $val;
        return $this;
    }
    
    /**
    * Gets the reportPeriod
    *
    * @return string|null The reportPeriod
    */
    public function getReportPeriod()
    {
        if (array_key_exists("reportPeriod", $this->_propDict)) {
            return $this->_propDict["reportPeriod"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the reportPeriod
    *
    * @param string $val The reportPeriod
    *
    * @return SkypeForBusinessPeerToPeerActivityCounts
    */
    public function setReportPeriod($val)
    {
        $this->_propDict["reportPeriod"] = $val;
        return $this;
    }
    
    /**
    * Gets the reportRefreshDate
    *
    * @return \DateTime|null The reportRefreshDate
    */
    public function getReportRefreshDate()
    {
        if (array_key_exists("reportRefreshDate", $this->_propDict) && !is_null($this->_propDict["reportRefreshDate"])) {
            if (is_a($this->_propDict["reportRefreshDate"], "\DateTime")) {
                return $this->_propDict["reportRefreshDate"];
            } else {
                $this->_propDict["reportRefreshDate"] = new \DateTime($this->_propDict["reportRefreshDate"]);
                return $this->_propDict["reportRefreshDate"];
            }
        }
        return null;
    }
    
    /**
    * Sets the reportRefreshDate
    *
    * @param \DateTime $val The reportRefreshDate
    *
    * @return SkypeForBusinessPeerToPeerActivityCounts
    */
    public function setReportRefreshDate($val)
    {
        $this->_propDict["reportRefreshDate"] = $val;
        return $this;
    }
    
    /**
    * Gets the video
    *
    * @return int|null The video
    */
    public function getVideo()
    {
        if (array_key_exists("video", $this->_propDict)) {
            return $this->_propDict["video"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the video
    *
    * @param int $val The video
    *
    * @return SkypeForBusinessPeerToPeerActivityCounts
    */
    public function setVideo($val)
    {
        $this->_propDict["video"] = intval($val);
        return $this;
    }
    
}
