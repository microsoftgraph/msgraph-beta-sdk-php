<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Windows81CertificateProfileBase File
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
* Windows81CertificateProfileBase class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Windows81CertificateProfileBase extends WindowsCertificateProfileBase
{

     /** 
     * Gets the customSubjectAlternativeNames
    * Custom Subject Alternative Name Settings. This collection can contain a maximum of 500 elements.
     *
     * @return CustomSubjectAlternativeName[]|null The customSubjectAlternativeNames
     */
    public function getCustomSubjectAlternativeNames()
    {
        if (array_key_exists('customSubjectAlternativeNames', $this->_propDict) && !is_null($this->_propDict['customSubjectAlternativeNames'])) {
           $customSubjectAlternativeNames = [];
           if (count($this->_propDict['customSubjectAlternativeNames']) > 0 && is_a($this->_propDict['customSubjectAlternativeNames'][0], 'CustomSubjectAlternativeName')) {
              return $this->_propDict['customSubjectAlternativeNames'];
           }
           foreach ($this->_propDict['customSubjectAlternativeNames'] as $singleValue) {
              $customSubjectAlternativeNames []= new CustomSubjectAlternativeName($singleValue);
           }
           $this->_propDict['customSubjectAlternativeNames'] = $customSubjectAlternativeNames;
           return $this->_propDict['customSubjectAlternativeNames'];
        }
        return null;
    }
    
    /** 
    * Sets the customSubjectAlternativeNames
    * Custom Subject Alternative Name Settings. This collection can contain a maximum of 500 elements.
    *
    * @param CustomSubjectAlternativeName[] $val The customSubjectAlternativeNames
    *
    * @return Windows81CertificateProfileBase
    */
    public function setCustomSubjectAlternativeNames($val)
    {
        $this->_propDict["customSubjectAlternativeNames"] = $val;
        return $this;
    }
    

     /** 
     * Gets the extendedKeyUsages
    * Extended Key Usage (EKU) settings. This collection can contain a maximum of 500 elements.
     *
     * @return ExtendedKeyUsage[]|null The extendedKeyUsages
     */
    public function getExtendedKeyUsages()
    {
        if (array_key_exists('extendedKeyUsages', $this->_propDict) && !is_null($this->_propDict['extendedKeyUsages'])) {
           $extendedKeyUsages = [];
           if (count($this->_propDict['extendedKeyUsages']) > 0 && is_a($this->_propDict['extendedKeyUsages'][0], 'ExtendedKeyUsage')) {
              return $this->_propDict['extendedKeyUsages'];
           }
           foreach ($this->_propDict['extendedKeyUsages'] as $singleValue) {
              $extendedKeyUsages []= new ExtendedKeyUsage($singleValue);
           }
           $this->_propDict['extendedKeyUsages'] = $extendedKeyUsages;
           return $this->_propDict['extendedKeyUsages'];
        }
        return null;
    }
    
    /** 
    * Sets the extendedKeyUsages
    * Extended Key Usage (EKU) settings. This collection can contain a maximum of 500 elements.
    *
    * @param ExtendedKeyUsage[] $val The extendedKeyUsages
    *
    * @return Windows81CertificateProfileBase
    */
    public function setExtendedKeyUsages($val)
    {
        $this->_propDict["extendedKeyUsages"] = $val;
        return $this;
    }
    
}
