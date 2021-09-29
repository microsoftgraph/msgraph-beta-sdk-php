<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AndroidWorkProfileScepCertificateProfile File
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
* AndroidWorkProfileScepCertificateProfile class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AndroidWorkProfileScepCertificateProfile extends AndroidWorkProfileCertificateProfileBase
{
    /**
    * Gets the certificateStore
    * Target store certificate. Possible values are: user, machine.
    *
    * @return CertificateStore|null The certificateStore
    */
    public function getCertificateStore()
    {
        if (array_key_exists("certificateStore", $this->_propDict) && !is_null($this->_propDict["certificateStore"])) {
            if (is_a($this->_propDict["certificateStore"], "\Beta\Microsoft\Graph\Model\CertificateStore")) {
                return $this->_propDict["certificateStore"];
            } else {
                $this->_propDict["certificateStore"] = new CertificateStore($this->_propDict["certificateStore"]);
                return $this->_propDict["certificateStore"];
            }
        }
        return null;
    }
    
    /**
    * Sets the certificateStore
    * Target store certificate. Possible values are: user, machine.
    *
    * @param CertificateStore $val The certificateStore
    *
    * @return AndroidWorkProfileScepCertificateProfile
    */
    public function setCertificateStore($val)
    {
        $this->_propDict["certificateStore"] = $val;
        return $this;
    }
    

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
    * @return AndroidWorkProfileScepCertificateProfile
    */
    public function setCustomSubjectAlternativeNames($val)
    {
        $this->_propDict["customSubjectAlternativeNames"] = $val;
        return $this;
    }
    
    /**
    * Gets the hashAlgorithm
    * SCEP Hash Algorithm. Possible values are: sha1, sha2.
    *
    * @return HashAlgorithms|null The hashAlgorithm
    */
    public function getHashAlgorithm()
    {
        if (array_key_exists("hashAlgorithm", $this->_propDict) && !is_null($this->_propDict["hashAlgorithm"])) {
            if (is_a($this->_propDict["hashAlgorithm"], "\Beta\Microsoft\Graph\Model\HashAlgorithms")) {
                return $this->_propDict["hashAlgorithm"];
            } else {
                $this->_propDict["hashAlgorithm"] = new HashAlgorithms($this->_propDict["hashAlgorithm"]);
                return $this->_propDict["hashAlgorithm"];
            }
        }
        return null;
    }
    
    /**
    * Sets the hashAlgorithm
    * SCEP Hash Algorithm. Possible values are: sha1, sha2.
    *
    * @param HashAlgorithms $val The hashAlgorithm
    *
    * @return AndroidWorkProfileScepCertificateProfile
    */
    public function setHashAlgorithm($val)
    {
        $this->_propDict["hashAlgorithm"] = $val;
        return $this;
    }
    
    /**
    * Gets the keySize
    * SCEP Key Size. Possible values are: size1024, size2048, size4096.
    *
    * @return KeySize|null The keySize
    */
    public function getKeySize()
    {
        if (array_key_exists("keySize", $this->_propDict) && !is_null($this->_propDict["keySize"])) {
            if (is_a($this->_propDict["keySize"], "\Beta\Microsoft\Graph\Model\KeySize")) {
                return $this->_propDict["keySize"];
            } else {
                $this->_propDict["keySize"] = new KeySize($this->_propDict["keySize"]);
                return $this->_propDict["keySize"];
            }
        }
        return null;
    }
    
    /**
    * Sets the keySize
    * SCEP Key Size. Possible values are: size1024, size2048, size4096.
    *
    * @param KeySize $val The keySize
    *
    * @return AndroidWorkProfileScepCertificateProfile
    */
    public function setKeySize($val)
    {
        $this->_propDict["keySize"] = $val;
        return $this;
    }
    
    /**
    * Gets the keyUsage
    * SCEP Key Usage. Possible values are: keyEncipherment, digitalSignature.
    *
    * @return KeyUsages|null The keyUsage
    */
    public function getKeyUsage()
    {
        if (array_key_exists("keyUsage", $this->_propDict) && !is_null($this->_propDict["keyUsage"])) {
            if (is_a($this->_propDict["keyUsage"], "\Beta\Microsoft\Graph\Model\KeyUsages")) {
                return $this->_propDict["keyUsage"];
            } else {
                $this->_propDict["keyUsage"] = new KeyUsages($this->_propDict["keyUsage"]);
                return $this->_propDict["keyUsage"];
            }
        }
        return null;
    }
    
    /**
    * Sets the keyUsage
    * SCEP Key Usage. Possible values are: keyEncipherment, digitalSignature.
    *
    * @param KeyUsages $val The keyUsage
    *
    * @return AndroidWorkProfileScepCertificateProfile
    */
    public function setKeyUsage($val)
    {
        $this->_propDict["keyUsage"] = $val;
        return $this;
    }
    
    /**
    * Gets the scepServerUrls
    * SCEP Server Url(s)
    *
    * @return string|null The scepServerUrls
    */
    public function getScepServerUrls()
    {
        if (array_key_exists("scepServerUrls", $this->_propDict)) {
            return $this->_propDict["scepServerUrls"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the scepServerUrls
    * SCEP Server Url(s)
    *
    * @param string $val The scepServerUrls
    *
    * @return AndroidWorkProfileScepCertificateProfile
    */
    public function setScepServerUrls($val)
    {
        $this->_propDict["scepServerUrls"] = $val;
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
    * @return AndroidWorkProfileScepCertificateProfile
    */
    public function setSubjectAlternativeNameFormatString($val)
    {
        $this->_propDict["subjectAlternativeNameFormatString"] = $val;
        return $this;
    }
    
    /**
    * Gets the subjectNameFormatString
    * Custom format to use with SubjectNameFormat = Custom. Example: CN={{EmailAddress}},E={{EmailAddress}},OU=Enterprise Users,O=Contoso Corporation,L=Redmond,ST=WA,C=US
    *
    * @return string|null The subjectNameFormatString
    */
    public function getSubjectNameFormatString()
    {
        if (array_key_exists("subjectNameFormatString", $this->_propDict)) {
            return $this->_propDict["subjectNameFormatString"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the subjectNameFormatString
    * Custom format to use with SubjectNameFormat = Custom. Example: CN={{EmailAddress}},E={{EmailAddress}},OU=Enterprise Users,O=Contoso Corporation,L=Redmond,ST=WA,C=US
    *
    * @param string $val The subjectNameFormatString
    *
    * @return AndroidWorkProfileScepCertificateProfile
    */
    public function setSubjectNameFormatString($val)
    {
        $this->_propDict["subjectNameFormatString"] = $val;
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
    * @return AndroidWorkProfileScepCertificateProfile
    */
    public function setManagedDeviceCertificateStates($val)
    {
        $this->_propDict["managedDeviceCertificateStates"] = $val;
        return $this;
    }
    
}
