<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Authentication File
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
* Authentication class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Authentication extends Entity
{

     /** 
     * Gets the emailMethods
     *
     * @return EmailAuthenticationMethod[]|null The emailMethods
     */
    public function getEmailMethods()
    {
        if (array_key_exists('emailMethods', $this->_propDict) && !is_null($this->_propDict['emailMethods'])) {
           $emailMethods = [];
           if (count($this->_propDict['emailMethods']) > 0 && is_a($this->_propDict['emailMethods'][0], 'EmailAuthenticationMethod')) {
              return $this->_propDict['emailMethods'];
           }
           foreach ($this->_propDict['emailMethods'] as $singleValue) {
              $emailMethods []= new EmailAuthenticationMethod($singleValue);
           }
           $this->_propDict['emailMethods'] = $emailMethods;
           return $this->_propDict['emailMethods'];
        }
        return null;
    }
    
    /** 
    * Sets the emailMethods
    *
    * @param EmailAuthenticationMethod[] $val The emailMethods
    *
    * @return Authentication
    */
    public function setEmailMethods($val)
    {
        $this->_propDict["emailMethods"] = $val;
        return $this;
    }
    

     /** 
     * Gets the fido2Methods
     *
     * @return Fido2AuthenticationMethod[]|null The fido2Methods
     */
    public function getFido2Methods()
    {
        if (array_key_exists('fido2Methods', $this->_propDict) && !is_null($this->_propDict['fido2Methods'])) {
           $fido2Methods = [];
           if (count($this->_propDict['fido2Methods']) > 0 && is_a($this->_propDict['fido2Methods'][0], 'Fido2AuthenticationMethod')) {
              return $this->_propDict['fido2Methods'];
           }
           foreach ($this->_propDict['fido2Methods'] as $singleValue) {
              $fido2Methods []= new Fido2AuthenticationMethod($singleValue);
           }
           $this->_propDict['fido2Methods'] = $fido2Methods;
           return $this->_propDict['fido2Methods'];
        }
        return null;
    }
    
    /** 
    * Sets the fido2Methods
    *
    * @param Fido2AuthenticationMethod[] $val The fido2Methods
    *
    * @return Authentication
    */
    public function setFido2Methods($val)
    {
        $this->_propDict["fido2Methods"] = $val;
        return $this;
    }
    

     /** 
     * Gets the methods
     *
     * @return AuthenticationMethod[]|null The methods
     */
    public function getMethods()
    {
        if (array_key_exists('methods', $this->_propDict) && !is_null($this->_propDict['methods'])) {
           $methods = [];
           if (count($this->_propDict['methods']) > 0 && is_a($this->_propDict['methods'][0], 'AuthenticationMethod')) {
              return $this->_propDict['methods'];
           }
           foreach ($this->_propDict['methods'] as $singleValue) {
              $methods []= new AuthenticationMethod($singleValue);
           }
           $this->_propDict['methods'] = $methods;
           return $this->_propDict['methods'];
        }
        return null;
    }
    
    /** 
    * Sets the methods
    *
    * @param AuthenticationMethod[] $val The methods
    *
    * @return Authentication
    */
    public function setMethods($val)
    {
        $this->_propDict["methods"] = $val;
        return $this;
    }
    

     /** 
     * Gets the microsoftAuthenticatorMethods
     *
     * @return MicrosoftAuthenticatorAuthenticationMethod[]|null The microsoftAuthenticatorMethods
     */
    public function getMicrosoftAuthenticatorMethods()
    {
        if (array_key_exists('microsoftAuthenticatorMethods', $this->_propDict) && !is_null($this->_propDict['microsoftAuthenticatorMethods'])) {
           $microsoftAuthenticatorMethods = [];
           if (count($this->_propDict['microsoftAuthenticatorMethods']) > 0 && is_a($this->_propDict['microsoftAuthenticatorMethods'][0], 'MicrosoftAuthenticatorAuthenticationMethod')) {
              return $this->_propDict['microsoftAuthenticatorMethods'];
           }
           foreach ($this->_propDict['microsoftAuthenticatorMethods'] as $singleValue) {
              $microsoftAuthenticatorMethods []= new MicrosoftAuthenticatorAuthenticationMethod($singleValue);
           }
           $this->_propDict['microsoftAuthenticatorMethods'] = $microsoftAuthenticatorMethods;
           return $this->_propDict['microsoftAuthenticatorMethods'];
        }
        return null;
    }
    
    /** 
    * Sets the microsoftAuthenticatorMethods
    *
    * @param MicrosoftAuthenticatorAuthenticationMethod[] $val The microsoftAuthenticatorMethods
    *
    * @return Authentication
    */
    public function setMicrosoftAuthenticatorMethods($val)
    {
        $this->_propDict["microsoftAuthenticatorMethods"] = $val;
        return $this;
    }
    

     /** 
     * Gets the operations
     *
     * @return LongRunningOperation[]|null The operations
     */
    public function getOperations()
    {
        if (array_key_exists('operations', $this->_propDict) && !is_null($this->_propDict['operations'])) {
           $operations = [];
           if (count($this->_propDict['operations']) > 0 && is_a($this->_propDict['operations'][0], 'LongRunningOperation')) {
              return $this->_propDict['operations'];
           }
           foreach ($this->_propDict['operations'] as $singleValue) {
              $operations []= new LongRunningOperation($singleValue);
           }
           $this->_propDict['operations'] = $operations;
           return $this->_propDict['operations'];
        }
        return null;
    }
    
    /** 
    * Sets the operations
    *
    * @param LongRunningOperation[] $val The operations
    *
    * @return Authentication
    */
    public function setOperations($val)
    {
        $this->_propDict["operations"] = $val;
        return $this;
    }
    

     /** 
     * Gets the passwordlessMicrosoftAuthenticatorMethods
     *
     * @return PasswordlessMicrosoftAuthenticatorAuthenticationMethod[]|null The passwordlessMicrosoftAuthenticatorMethods
     */
    public function getPasswordlessMicrosoftAuthenticatorMethods()
    {
        if (array_key_exists('passwordlessMicrosoftAuthenticatorMethods', $this->_propDict) && !is_null($this->_propDict['passwordlessMicrosoftAuthenticatorMethods'])) {
           $passwordlessMicrosoftAuthenticatorMethods = [];
           if (count($this->_propDict['passwordlessMicrosoftAuthenticatorMethods']) > 0 && is_a($this->_propDict['passwordlessMicrosoftAuthenticatorMethods'][0], 'PasswordlessMicrosoftAuthenticatorAuthenticationMethod')) {
              return $this->_propDict['passwordlessMicrosoftAuthenticatorMethods'];
           }
           foreach ($this->_propDict['passwordlessMicrosoftAuthenticatorMethods'] as $singleValue) {
              $passwordlessMicrosoftAuthenticatorMethods []= new PasswordlessMicrosoftAuthenticatorAuthenticationMethod($singleValue);
           }
           $this->_propDict['passwordlessMicrosoftAuthenticatorMethods'] = $passwordlessMicrosoftAuthenticatorMethods;
           return $this->_propDict['passwordlessMicrosoftAuthenticatorMethods'];
        }
        return null;
    }
    
    /** 
    * Sets the passwordlessMicrosoftAuthenticatorMethods
    *
    * @param PasswordlessMicrosoftAuthenticatorAuthenticationMethod[] $val The passwordlessMicrosoftAuthenticatorMethods
    *
    * @return Authentication
    */
    public function setPasswordlessMicrosoftAuthenticatorMethods($val)
    {
        $this->_propDict["passwordlessMicrosoftAuthenticatorMethods"] = $val;
        return $this;
    }
    

     /** 
     * Gets the passwordMethods
     *
     * @return PasswordAuthenticationMethod[]|null The passwordMethods
     */
    public function getPasswordMethods()
    {
        if (array_key_exists('passwordMethods', $this->_propDict) && !is_null($this->_propDict['passwordMethods'])) {
           $passwordMethods = [];
           if (count($this->_propDict['passwordMethods']) > 0 && is_a($this->_propDict['passwordMethods'][0], 'PasswordAuthenticationMethod')) {
              return $this->_propDict['passwordMethods'];
           }
           foreach ($this->_propDict['passwordMethods'] as $singleValue) {
              $passwordMethods []= new PasswordAuthenticationMethod($singleValue);
           }
           $this->_propDict['passwordMethods'] = $passwordMethods;
           return $this->_propDict['passwordMethods'];
        }
        return null;
    }
    
    /** 
    * Sets the passwordMethods
    *
    * @param PasswordAuthenticationMethod[] $val The passwordMethods
    *
    * @return Authentication
    */
    public function setPasswordMethods($val)
    {
        $this->_propDict["passwordMethods"] = $val;
        return $this;
    }
    

     /** 
     * Gets the phoneMethods
     *
     * @return PhoneAuthenticationMethod[]|null The phoneMethods
     */
    public function getPhoneMethods()
    {
        if (array_key_exists('phoneMethods', $this->_propDict) && !is_null($this->_propDict['phoneMethods'])) {
           $phoneMethods = [];
           if (count($this->_propDict['phoneMethods']) > 0 && is_a($this->_propDict['phoneMethods'][0], 'PhoneAuthenticationMethod')) {
              return $this->_propDict['phoneMethods'];
           }
           foreach ($this->_propDict['phoneMethods'] as $singleValue) {
              $phoneMethods []= new PhoneAuthenticationMethod($singleValue);
           }
           $this->_propDict['phoneMethods'] = $phoneMethods;
           return $this->_propDict['phoneMethods'];
        }
        return null;
    }
    
    /** 
    * Sets the phoneMethods
    *
    * @param PhoneAuthenticationMethod[] $val The phoneMethods
    *
    * @return Authentication
    */
    public function setPhoneMethods($val)
    {
        $this->_propDict["phoneMethods"] = $val;
        return $this;
    }
    

     /** 
     * Gets the softwareOathMethods
     *
     * @return SoftwareOathAuthenticationMethod[]|null The softwareOathMethods
     */
    public function getSoftwareOathMethods()
    {
        if (array_key_exists('softwareOathMethods', $this->_propDict) && !is_null($this->_propDict['softwareOathMethods'])) {
           $softwareOathMethods = [];
           if (count($this->_propDict['softwareOathMethods']) > 0 && is_a($this->_propDict['softwareOathMethods'][0], 'SoftwareOathAuthenticationMethod')) {
              return $this->_propDict['softwareOathMethods'];
           }
           foreach ($this->_propDict['softwareOathMethods'] as $singleValue) {
              $softwareOathMethods []= new SoftwareOathAuthenticationMethod($singleValue);
           }
           $this->_propDict['softwareOathMethods'] = $softwareOathMethods;
           return $this->_propDict['softwareOathMethods'];
        }
        return null;
    }
    
    /** 
    * Sets the softwareOathMethods
    *
    * @param SoftwareOathAuthenticationMethod[] $val The softwareOathMethods
    *
    * @return Authentication
    */
    public function setSoftwareOathMethods($val)
    {
        $this->_propDict["softwareOathMethods"] = $val;
        return $this;
    }
    

     /** 
     * Gets the temporaryAccessPassMethods
     *
     * @return TemporaryAccessPassAuthenticationMethod[]|null The temporaryAccessPassMethods
     */
    public function getTemporaryAccessPassMethods()
    {
        if (array_key_exists('temporaryAccessPassMethods', $this->_propDict) && !is_null($this->_propDict['temporaryAccessPassMethods'])) {
           $temporaryAccessPassMethods = [];
           if (count($this->_propDict['temporaryAccessPassMethods']) > 0 && is_a($this->_propDict['temporaryAccessPassMethods'][0], 'TemporaryAccessPassAuthenticationMethod')) {
              return $this->_propDict['temporaryAccessPassMethods'];
           }
           foreach ($this->_propDict['temporaryAccessPassMethods'] as $singleValue) {
              $temporaryAccessPassMethods []= new TemporaryAccessPassAuthenticationMethod($singleValue);
           }
           $this->_propDict['temporaryAccessPassMethods'] = $temporaryAccessPassMethods;
           return $this->_propDict['temporaryAccessPassMethods'];
        }
        return null;
    }
    
    /** 
    * Sets the temporaryAccessPassMethods
    *
    * @param TemporaryAccessPassAuthenticationMethod[] $val The temporaryAccessPassMethods
    *
    * @return Authentication
    */
    public function setTemporaryAccessPassMethods($val)
    {
        $this->_propDict["temporaryAccessPassMethods"] = $val;
        return $this;
    }
    

     /** 
     * Gets the windowsHelloForBusinessMethods
     *
     * @return WindowsHelloForBusinessAuthenticationMethod[]|null The windowsHelloForBusinessMethods
     */
    public function getWindowsHelloForBusinessMethods()
    {
        if (array_key_exists('windowsHelloForBusinessMethods', $this->_propDict) && !is_null($this->_propDict['windowsHelloForBusinessMethods'])) {
           $windowsHelloForBusinessMethods = [];
           if (count($this->_propDict['windowsHelloForBusinessMethods']) > 0 && is_a($this->_propDict['windowsHelloForBusinessMethods'][0], 'WindowsHelloForBusinessAuthenticationMethod')) {
              return $this->_propDict['windowsHelloForBusinessMethods'];
           }
           foreach ($this->_propDict['windowsHelloForBusinessMethods'] as $singleValue) {
              $windowsHelloForBusinessMethods []= new WindowsHelloForBusinessAuthenticationMethod($singleValue);
           }
           $this->_propDict['windowsHelloForBusinessMethods'] = $windowsHelloForBusinessMethods;
           return $this->_propDict['windowsHelloForBusinessMethods'];
        }
        return null;
    }
    
    /** 
    * Sets the windowsHelloForBusinessMethods
    *
    * @param WindowsHelloForBusinessAuthenticationMethod[] $val The windowsHelloForBusinessMethods
    *
    * @return Authentication
    */
    public function setWindowsHelloForBusinessMethods($val)
    {
        $this->_propDict["windowsHelloForBusinessMethods"] = $val;
        return $this;
    }
    
}
