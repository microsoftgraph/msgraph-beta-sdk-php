<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AndroidForWorkPkcsCertificateProfile File
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
* AndroidForWorkPkcsCertificateProfile class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AndroidForWorkPkcsCertificateProfile extends AndroidForWorkCertificateProfileBase
{
    /**
    * Gets the certificateTemplateName
    * PKCS Certificate Template Name
    *
    * @return string|null The certificateTemplateName
    */
    public function getCertificateTemplateName()
    {
        if (array_key_exists("certificateTemplateName", $this->_propDict)) {
            return $this->_propDict["certificateTemplateName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the certificateTemplateName
    * PKCS Certificate Template Name
    *
    * @param string $val The certificateTemplateName
    *
    * @return AndroidForWorkPkcsCertificateProfile
    */
    public function setCertificateTemplateName($val)
    {
        $this->_propDict["certificateTemplateName"] = $val;
        return $this;
    }
    
    /**
    * Gets the certificationAuthority
    * PKCS Certification Authority
    *
    * @return string|null The certificationAuthority
    */
    public function getCertificationAuthority()
    {
        if (array_key_exists("certificationAuthority", $this->_propDict)) {
            return $this->_propDict["certificationAuthority"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the certificationAuthority
    * PKCS Certification Authority
    *
    * @param string $val The certificationAuthority
    *
    * @return AndroidForWorkPkcsCertificateProfile
    */
    public function setCertificationAuthority($val)
    {
        $this->_propDict["certificationAuthority"] = $val;
        return $this;
    }
    
    /**
    * Gets the certificationAuthorityName
    * PKCS Certification Authority Name
    *
    * @return string|null The certificationAuthorityName
    */
    public function getCertificationAuthorityName()
    {
        if (array_key_exists("certificationAuthorityName", $this->_propDict)) {
            return $this->_propDict["certificationAuthorityName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the certificationAuthorityName
    * PKCS Certification Authority Name
    *
    * @param string $val The certificationAuthorityName
    *
    * @return AndroidForWorkPkcsCertificateProfile
    */
    public function setCertificationAuthorityName($val)
    {
        $this->_propDict["certificationAuthorityName"] = $val;
        return $this;
    }
    
    /**
    * Gets the subjectAlternativeNameFormatString
    * Custom String that defines the AAD Attribute.
    *
    * @return string|null The subjectAlternativeNameFormatString
    */
    public function getSubjectAlternativeNameFormatString()
    {
        if (array_key_exists("subjectAlternativeNameFormatString", $this->_propDict)) {
            return $this->_propDict["subjectAlternativeNameFormatString"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the subjectAlternativeNameFormatString
    * Custom String that defines the AAD Attribute.
    *
    * @param string $val The subjectAlternativeNameFormatString
    *
    * @return AndroidForWorkPkcsCertificateProfile
    */
    public function setSubjectAlternativeNameFormatString($val)
    {
        $this->_propDict["subjectAlternativeNameFormatString"] = $val;
        return $this;
    }
    

     /** 
     * Gets the managedDeviceCertificateStates
    * Certificate state for devices
     *
     * @return ManagedDeviceCertificateState[]|null The managedDeviceCertificateStates
     */
    public function getManagedDeviceCertificateStates()
    {
        if (array_key_exists('managedDeviceCertificateStates', $this->_propDict) && !is_null($this->_propDict['managedDeviceCertificateStates'])) {
            $managedDeviceCertificateStates = [];
            if (count($this->_propDict['managedDeviceCertificateStates']) > 0 && is_a($this->_propDict['managedDeviceCertificateStates'][0], 'ManagedDeviceCertificateState')) {
                return $this->_propDict['managedDeviceCertificateStates'];
            }
            foreach ($this->_propDict['managedDeviceCertificateStates'] as $singleValue) {
                $managedDeviceCertificateStates []= new ManagedDeviceCertificateState($singleValue);
            }
            $this->_propDict['managedDeviceCertificateStates'] = $managedDeviceCertificateStates;
            return $this->_propDict['managedDeviceCertificateStates'];
        }
        return null;
    }
    
    /** 
    * Sets the managedDeviceCertificateStates
    * Certificate state for devices
    *
    * @param ManagedDeviceCertificateState[] $val The managedDeviceCertificateStates
    *
    * @return AndroidForWorkPkcsCertificateProfile
    */
    public function setManagedDeviceCertificateStates($val)
    {
        $this->_propDict["managedDeviceCertificateStates"] = $val;
        return $this;
    }
    
}
